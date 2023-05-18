<?php
add_action('init', 'ajax_media_content_init');

function ajax_media_content_init(){
    add_action( 'wp_ajax_nopriv_media_content', 'ajax_media_content' );
    add_action( 'wp_ajax_media_content', 'ajax_media_content' );
}

function ajax_media_content(){
    $post_type = $_POST["post_type"];
    echo ajax_media_content_content($post_type);
    wp_die();
}

function ajax_media_content_content($post_type){
    switch($post_type){
        case "youtube_post": {
            ob_start(); 
            get_template_part( CMP, "media-yt-vids" );
            return ob_get_clean();
        }
        case "instagram_post": {
            ob_start(); 
            get_template_part( CMP, "media-ig-posts" );
            return ob_get_clean();
        }
    }
}