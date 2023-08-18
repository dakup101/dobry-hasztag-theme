<?php

// Set / Update cron job on instagram acf page update
function acf_options_instagram_upd( $post_id ) {
    if ( $post_id == 'acf-options-instagram-api' ) {
        acf_options_instagram_cron();
    }
}

add_action( 'acf/save_post', 'acf_options_instagram_cron', 10, 1 );
// add_action( "init", "acf_options_instagram_cron");

// instagram Api Cron Job
function acf_options_instagram_cron(){
        $cron_span = get_field("instagram_api_timeout", "options");
        $timestamp = time() + $cron_span * HOUR_IN_SECONDS;

        if ( ! wp_next_scheduled( 'instagram_fetch_vids_cron' ) ) {
            wp_schedule_event( $timestamp, 'two_hours', 'instagram_fetch_vids_cron' );
        } else {
            wp_clear_scheduled_hook( 'instagram_fetch_vids_cron' );
            wp_schedule_event( $timestamp, 'two_hours', 'instagram_fetch_vids_cron');
        }
}

add_action( 'instagram_fetch_vids_cron', 'update_instagram_posts' );

// This function deletes instagram posts with acf field "is_imported" and loads new posts with videos data
function update_instagram_posts(){    
    $vids = fetchinstagramVids();

    // Exit if no vids fetched
    if (empty($vids)) return;

    $instagram_posts = new WP_Query(array(
        "post_type" => "instagram_post",
        "status" => "publish", 
        "posts_per_page" => -1
    ));

    $imported = array();
    
    // Check if there're imported posts
    if ($instagram_posts->have_posts()){
        while ($instagram_posts->have_posts()){
            $instagram_posts->the_post();
            if (get_field("is_imported")) array_push($imported, get_the_ID());
        }
        wp_reset_postdata();
    }

    // Delete imported posts
    if (!empty($imported)){
        foreach($imported as $post_id){
            wp_delete_post($post_id, true);
        }
    }

    // instagram_post_log_api($vids);

    foreach($vids as $vid){
        $yt_post_id = instagram_post_make($vid["title"]); 
        if ($yt_post_id){
            instagram_post_fill($yt_post_id, $vid);
        }
    }

}

function instagram_post_log_api($api_response){
// Get the current date and time
    $current_time = current_time('timestamp');
    $date = date('Y-m-d', $current_time);
    $time = date('H-i-s', $current_time);

    // Construct the filename
    $filename = "instagram_post_log_{$time}_{$date}.txt";

    // Create the full path to the file
    $file_path = ABSPATH . $filename;

    file_put_contents($file_path, implode("\n", $api_response));
}

// Creates instagram_post post and returns id on success
function instagram_post_make($title){
    // Set up the post data
    $post_data = array(
        'post_type' => 'instagram_post',
        'post_title' => $title,
        'post_status' => 'publish'
    );

    // Insert the post into the database
    return wp_insert_post( $post_data );
}

// Fill instagram Post ACf Fields
function instagram_post_fill($post_id, $data){
    update_field("is_imported", true, $post_id);
    update_field("id", $data["id"], $post_id);
    update_field("preview", $data["thumbnail"], $post_id);
	    update_field("media_type", $data["mediaType"], $post_id);


    $date_str = $data["publishDate"];
    $date = new DateTime($date_str);
    $month = get_month_in_pl($date);
    $date_formatted = $date->format('j ') . $month . $date->format(' Y');
    

    update_field("data_publikacji", $date_formatted , $post_id);
    update_field("channel_link", $data["authorProfileLink"], $post_id);
    update_field("channel_title", $data["authorName"], $post_id);
}

// Get an Ojbect with needed instagram Videos info
function fetchInstagramVids() {
    $access_token = "IGQVJYZAUVhcDlBcVMyZAEhIMFVVaHVFVE1fZAmhjcmQ0azFOX0xiRE1wdHhqdkZArc1owMUdTaU1oVXBydDNLNVh1V3FGYmxienJvVXNzcFdfWDRTYUpYSTFQM1NpeTlQWlhlQUd1aEthdmsyWERUTVNRegZDZD";
    $how_much = get_field("instagram_api_amount", "options");
    $profile = get_field("instagram_api_profile", "options");
    $username = get_field("instagram_api_username", "options");
    
    $url = "https://graph.instagram.com/me/media?fields=id,media_type,media_url,permalink,timestamp&access_token={$access_token}";

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
        CURLOPT_SSL_VERIFYPEER => false
    ));

    $response = curl_exec($curl);

    return $response;

    curl_close($curl);

    $data = json_decode($response, true);
	
	return $response;
	
    $posts = array();
    $count = 0;
    foreach ($data['data'] as $photo) {
        
        $media_url = $photo['media_url'];
        $thumbnail_url = $media_url;

        $post = array(
            "id" => $photo['id'],
            "title" => "#" . $photo['id'],
            "thumbnail" => $thumbnail_url,
            "publishDate" => $photo['timestamp'],
            "authorProfileLink" => $profile,
            "authorName" => $username,
			"mediaType" => $photo["media_type"],
        );
		$count++;
        array_push($posts, $post);
        if ($count === $how_much) {
            break;
        }
    }

    return $posts;
}