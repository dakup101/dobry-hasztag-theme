<?php $args = wp_parse_args( $args, array("date" => null));
$date = $args["date"]; ?>


<?php if (!empty($date)) : ?>

<?php $events = new WP_Query(array(
    "post_type" => "schedule",
    "posts_per_page" => -1,
    "status" => "publish",  
    'meta_query' => array(
        array(
            'key' => 'date',
            'value' => $date,
            'compare' => '=',
            'type' => 'DATE'
        )
    ),
    'meta_key' => 'date',
    'orderby' => 'meta_value',
    'order' => 'ASC'  
)); if ($events->have_posts()) : ?>

<div class="grid grid-cols-1 gap-10 mt-10 animate__animated animate__fadeIn">

    <?php while($events->have_posts()){
    $events->the_post();
    get_template_part( CMP, "schedule-item", array("key" => $events->current_post) );
    } ?>

</div>


<?php wp_reset_query(); wp_reset_postdata();  else: ?>

<div class="text-center">
    Brak wydarzeń
</div>

<?php wp_reset_query(); wp_reset_postdata(); endif;  ?>

<?php endif; ?>