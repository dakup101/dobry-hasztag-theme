<?php $events = new WP_Query(array(
    "post_type" => "schedule",
    "posts_per_page" => -1,
    "status" => "publish",  
)); if ($events->have_posts()) : ?>

<div class="grid grid-cols-1 gap-10">

    <?php while($events->have_posts()){
    $events->the_post();
    get_template_part( CMP, "schedule-item" );
    } ?>

</div>


<?php wp_reset_query(); wp_reset_postdata();  else: ?>

<div class="text-center">
    Brak wydarzeń
</div>

<?php wp_reset_query(); wp_reset_postdata(); endif;  ?>