<?php
add_action('init', 'ajax_schedule_content_init');

function ajax_schedule_content_init(){
    add_action( 'wp_ajax_nopriv_schedule_content', 'ajax_schedule_content' );
    add_action( 'wp_ajax_schedule_content', 'ajax_schedule_content' );
}

function ajax_schedule_content(){
    $date = $_POST["date"];
    echo ajax_schedule_content_content($date);
    wp_die();
}

function ajax_schedule_content_content($date){
    ob_start(); 
    get_template_part(CMP, "schedule-content", array("date" => $date));
    return ob_get_clean();
}