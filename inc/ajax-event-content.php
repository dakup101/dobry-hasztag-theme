<?php
add_action('init', 'ajax_event_content_init');

function ajax_event_content_init(){
    add_action( 'wp_ajax_nopriv_event_content', 'ajax_event_content' );
    add_action( 'wp_ajax_event_content', 'ajax_event_content' );
}

function ajax_event_content(){
    $event_id = $_POST["eventId"];
    echo ajax_event_content_content($event_id);
    wp_die();
}

function ajax_event_content_content($event_id){
    ob_start();
    get_template_part( CMP, "schedule-dialog-content", array(
        "id" => $event_id
    ));
    return ob_get_clean();
}