<?php

// Set / Update cron job on tiktok acf page update
function acf_options_tiktok_upd( $post_id ) {
    if ( $post_id == 'acf-options-tiktok-api' ) {
        acf_options_tiktok_cron();
    }
}

add_action( 'acf/save_post', 'acf_options_tiktok_cron', 10, 1 );
// add_action( "init", "acf_options_tiktok_cron");

// tiktok Api Cron Job
function acf_options_tiktok_cron(){
        $cron_span = get_field("tiktok_api_span", "options");
        $timestamp = time() + $cron_span * HOUR_IN_SECONDS;

        if ( ! wp_next_scheduled( 'tiktok_fetch_vids_cron' ) ) {
            wp_schedule_event( $timestamp, 'two_hours', 'tiktok_fetch_vids_cron' );
        } else {
            wp_clear_scheduled_hook( 'tiktok_fetch_vids_cron' );
            wp_schedule_event( $timestamp, 'two_hours', 'tiktok_fetch_vids_cron');
        }
}

add_action( 'tiktok_fetch_vids_cron', 'update_tiktok_posts' );

// This function deletes tiktok posts with acf field "is_imported" and loads new posts with videos data
function update_tiktok_posts(){    
    $vids = fetchtiktokVids();

    // Exit if no vids fetched
    if (empty($vids)) return;

    $tiktok_posts = new WP_Query(array(
        "post_type" => "tiktok_post",
        "status" => "publish", 
        "posts_per_page" => -1
    ));

    $imported = array();
    
    // Check if there're imported posts
    if ($tiktok_posts->have_posts()){
        while ($tiktok_posts->have_posts()){
            $tiktok_posts->the_post();
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

    // tiktok_post_log_api($vids);

    foreach($vids as $vid){
        $yt_post_id = tiktok_post_make($vid["title"]); 
        if ($yt_post_id){
            tiktok_post_fill($yt_post_id, $vid);
        }
    }

}

// Creates tiktok_post post and returns id on success
function tiktok_post_make($title){
    // Set up the post data
    $post_data = array(
        'post_type' => 'tiktok_post',
        'post_title' => $title,
        'post_status' => 'publish'
    );

    // Insert the post into the database
    return wp_insert_post( $post_data );
}

// Fill tiktok Post ACf Fields
function tiktok_post_fill($post_id, $data){
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

// Get an Ojbect with needed tiktok Videos info
function fetchtiktokVids() {
    // TikTok API endpoint
    $url = get_field("tiktok_api_endpoint", "options");

    // TikTok account username
    $username = get_field("tiktok_api_user", "options");
    $appId = get_field("tiktok_api_app_id", "options");
    $appSecrent = get_field("tiktok_api_secret", "options");
    $accessToken = getTikTokAccessToken($appId, $appSecrent);
    
    // TikTok API parameters
    $params = array(
        "count" => 10, // number of posts to retrieve
        "id" => $username, // username of the account to retrieve posts from
        "type" => 1, // type of account (1 for user accounts)
        "secUid" => "" , // security user id (can be left blank)
        "minCursor" => 0, // minimum cursor (can be left at 0)
        "maxCursor" => 0, // maximum cursor (can be left at 0)
        "sourceType" => 8, // source type (can be left at 8)
        "appId" => $appId, // your TikTok app id
        "appType" => "WEB", // your TikTok app type (1 for iOS, 2 for Android)
        "verifyFp" => "" // verification fingerprint (can be left blank)
    );

    // set up cURL request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url . "?" . http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "User-Agent: TikTok-API/15.6.2 (com.zhiliaoapp.musically; build:160630; iOS 14.4.2) AppleWebKit/537.36 (KHTML, like Gecko) Mobile/18K57 Safari/537.36 TtWebview/1626263401039349"
    ));

    // execute cURL request
    $response = curl_exec($ch);
    curl_close($ch);

    // decode response JSON into array
    $data = json_decode($response, true);

    // // iterate over posts and extract desired data
    // $posts = array();
    // foreach ($data['items'] as $item) {
    //     $video = array(
    //         "id" => $item['itemInfos']['id'],
    //         "title" => $item['itemInfos']['text'],
    //         "thumbnail" => $item['itemInfos']['covers'][0],
    //         "publishDate" => $item['itemInfos']['createTime'],
    //         "channelLink" => "https://www.tiktok.com/@" . $username,
    //         "channelTitle" => $username
    //     );
    //     $posts[] = $video;
    // }
    return $accessToken;
}

function getTikTokAccessToken($appId, $appSecret) {
    // Set the TikTok API endpoint for obtaining an access token
    $url = "https://open-api.tiktok.com/oauth/access_token/";
    
    // Set the parameters for the API request
    $params = array(
        "client_key" => $appId,
        "client_secret" => $appSecret,
        "grant_type" => "client_credential"
    );

    // Initialize a new cURL session
    $ch = curl_init();

    // Set the cURL options for the API request
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the API request and get the response
    $response = curl_exec($ch);
    curl_close($ch);

    // Parse the JSON response and extract the access token
    $responseData = json_decode($response, true);
    $accessToken = $responseData;

    // Return the access token
    return $response;
}