<?php
function schedule_return_days(){

    $days = array();

    $today = new DateTime('today midnight');
    $timestamp = $today->getTimestamp();

    $events = new WP_Query(array(
        "post_type" => "schedule",
        "posts_per_page" => -1,
        "status" => "publish",
        'meta_query' => array(
            array(
                'key' => 'date',
                'value' => date("Y-m-d H:i:s", $timestamp),
                'compare' => '>=',
                'type' => 'DATE'
            )
        ),
        'meta_key' => 'date',
        'orderby' => 'meta_value',
        'order' => 'ASC'  
    ));
    
    if (!$events->have_posts()) return $days;

    while ($events->have_posts()){
        $events->the_post();
        $event_day = get_field("date");

        if (empty($event_day)) continue;
        if (in_array($event_day, $days)) continue;

        array_push($days, $event_day);
    }

    return $days;
}