<?php
// Register the custom cron interval
function custom_cron_interval( $schedules ) {
    $schedules['two_hours'] = array(
        'interval' => 2 * HOUR_IN_SECONDS,
        'display' => __( 'Once every two hours' )
    );
    $schedules['four_hours'] = array(
        'interval' => 4 * HOUR_IN_SECONDS,
        'display' => __( 'Once every two hours' )
    );
    $schedules['six_hours'] = array(
        'interval' => 6 * HOUR_IN_SECONDS,
        'display' => __( 'Once every two hours' )
    );
    return $schedules;
}
add_filter( 'cron_schedules', 'custom_cron_interval' );