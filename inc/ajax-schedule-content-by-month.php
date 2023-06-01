<?php
add_action('init', 'ajax_schedule_content_by_month_init');

function ajax_schedule_content_by_month_init(){
    add_action( 'wp_ajax_nopriv_schedule_content_by_month', 'ajax_schedule_content_by_month' );
    add_action( 'wp_ajax_schedule_content_by_month', 'ajax_schedule_content_by_month' );
}

function ajax_schedule_content_by_month(){
    $firstDay = $_POST["firstDay"];
    $lastDay = $_POST["lastDay"];
    echo ajax_schedule_content_by_month_content($firstDay, $lastDay);
    wp_die();
}

function ajax_schedule_content_by_month_content($firstDay, $lastDay){
    
    $events = new WP_Query(array(
        'post_type' => 'schedule',
        'posts_per_page' => -1,
        'status' => 'publish',
        'meta_query' => array(
            array(
                'key' => 'date',
                'value' => array($firstDay, $lastDay),
                'compare' => 'BETWEEN',
                'type' => 'DATE'
            )
        ),
        'meta_key' => 'date',
        'orderby' => 'meta_value',
        'order' => 'ASC'
    ));

    $format = "Y-m-d H:i:s";
                    $date_obj = DateTime::createFromFormat($format, $firstDay . " 00:00:00");

    ob_start(); 

    ?>

<p class="text-center uppercase text-4xl mb-10 block w-full font-sofia text-shadow-rose-md">
    <?php echo  get_month_in_pl_by_number($date_obj->format("m")) . " " . $date_obj->format("Y") ?></p>

<div class="columns-1 xl:columns-2 gap-10">

    <?php
    
    $cur_day = null;

    if ($events->have_posts()) {
        while ($events->have_posts()){
            $events->the_post();


            $event_date = get_field("date");
            $event_date_obj = DateTime::createFromFormat($format, $event_date);

            if ($cur_day == $event_date_obj->format("d")) continue; 

            $cur_day = $event_date_obj->format("d");
            get_template_part( CMP, "schedule-item-alt" );
        }
    }
    else { ?>
    <div class="col-span-2">
        Brak wydarzeń w tym miesiącu.
    </div>
    <?php }

?>
    <div></div>
</div>
<?php
    return ob_get_clean();
}