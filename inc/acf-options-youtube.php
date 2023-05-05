<?php

// Set / Update cron job on youtube acf page update
function acf_options_youtube_upd( $post_id ) {
    if ( $post_id == 'acf-options-youtube-api' ) {
        acf_options_youtube_cron();
    }
}

add_action( 'acf/save_post', 'acf_options_youtube_cron', 10, 1 );
// add_action( "init", "acf_options_youtube_cron");

// YouTube Api Cron Job
function acf_options_youtube_cron(){
        $cron_span = get_field("youtube_api_timeout", "options");
        $timestamp = time() + $cron_span * HOUR_IN_SECONDS;

        if ( ! wp_next_scheduled( 'youtube_fetch_vids_cron' ) ) {
            wp_schedule_event( $timestamp, 'two_hours', 'youtube_fetch_vids_cron' );
        } else {
            wp_clear_scheduled_hook( 'youtube_fetch_vids_cron' );
            wp_schedule_event( $timestamp, 'two_hours', 'youtube_fetch_vids_cron');
        }
}

add_action( 'youtube_fetch_vids_cron', 'update_youtube_posts' );

// This function deletes youtube posts with acf field "is_imported" and loads new posts with videos data
function update_youtube_posts(){    
    $vids = fetchYouTubeVids();

    // Exit if no vids fetched
    if (empty($vids)) return;

    $youtube_posts = new WP_Query(array(
        "post_type" => "youtube_post",
        "status" => "publish", 
        "posts_per_page" => -1
    ));

    $imported = array();
    
    // Check if there're imported posts
    if ($youtube_posts->have_posts()){
        while ($youtube_posts->have_posts()){
            $youtube_posts->the_post();
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

    // youtube_post_log_api($vids);

    foreach($vids as $vid){
        $yt_post_id = youtube_post_make($vid["title"]); 
        if ($yt_post_id){
            youtube_post_fill($yt_post_id, $vid);
        }
    }

}

function youtube_post_log_api($api_response){
// Get the current date and time
    $current_time = current_time('timestamp');
    $date = date('Y-m-d', $current_time);
    $time = date('H-i-s', $current_time);

    // Construct the filename
    $filename = "youtube_post_log_{$time}_{$date}.txt";

    // Create the full path to the file
    $file_path = ABSPATH . $filename;

    file_put_contents($file_path, implode("\n", $api_response));
}

// Creates youtube_post post and returns id on success
function youtube_post_make($title){
    // Set up the post data
    $post_data = array(
        'post_type' => 'youtube_post',
        'post_title' => $title,
        'post_status' => 'publish'
    );

    // Insert the post into the database
    return wp_insert_post( $post_data );
}

// Fill YouTube Post ACf Fields
function youtube_post_fill($post_id, $data){
    update_field("is_imported", true, $post_id);
    update_field("id", $data["id"], $post_id);
    update_field("preview", $data["thumbnail"], $post_id);

    $date_str = $data["publishDate"];
    $date = new DateTime($date_str);
    $month = get_month_in_pl($date);
    $date_formatted = $date->format('j ') . $month . $date->format(' Y');
    

    update_field("data_publikacji", $date_formatted , $post_id);
    update_field("channel_link", $data["channelLink"], $post_id);
    update_field("channel_title", $data["channelTitle"], $post_id);
}

// Get an Ojbect with needed YouTube Videos info
function fetchYouTubeVids() {
    $ytEndpoint = get_field("youtube_api_endpoint", "options");
    $ytChannelID = get_field("youtube_api_channel", "options");
    $maxResults = get_field("youtube_api_vids", "options");
    $googleApiKey = get_field("youtube_api_key", "options");
    
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => "{$ytEndpoint}?channelId={$ytChannelID}&part=snippet,id&order=date&maxResults={$maxResults}&key={$googleApiKey}",
        CURLOPT_SSL_VERIFYPEER => false
    ));
    
    $response = curl_exec($curl);
    curl_close($curl);
    
    $data = json_decode($response);

    $videos = array();
    foreach ($data->items as $item) {
        $video = array(
            "id" => $item->id->videoId,
            "title" => $item->snippet->title,
            "thumbnail" => str_replace("mqdefault", "maxresdefault", $item->snippet->thumbnails->medium->url),
            "publishDate" => $item->snippet->publishedAt,
            "channelLink" => "https://www.youtube.com/channel/{$item->snippet->channelId}",
            "channelTitle" => $item->snippet->channelTitle,
        );
        array_push($videos, $video);
    }

    return $videos;
}