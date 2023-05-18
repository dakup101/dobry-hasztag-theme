<?php
add_action('init', 'ajax_people_content_init');

function ajax_people_content_init(){
    add_action( 'wp_ajax_nopriv_people_content', 'ajax_people_content' );
    add_action( 'wp_ajax_people_content', 'ajax_people_content' );
}

function ajax_people_content(){
    echo ajax_people_content_content();
    wp_die();
}

function ajax_people_content_content(){
    ob_start(); 
    get_template_part(CMP, "people-content");
    return ob_get_clean();
}