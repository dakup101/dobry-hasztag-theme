<?php 
$event_date = get_field("date");
?>


<div class="mb-10 break-inside-avoid-column">
    <div class="neo-before mb-1.5 mr-1.5 w-full"
         data-day-events>
        <div class="bg-white border-4 px-10 py-5 rounded-2xl relative">
            <?php 
                    $format = "Y-m-d H:i:s";
                    $date = get_field("date");
                    $date_obj = DateTime::createFromFormat($format, $event_date);
        ?>
            <p class="text-2xl font-sofia mb-5"><span
                      class="text-6xl text-rose"><?php echo $date_obj->format("d") ?>&nbsp</span>
                <span><?php echo get_days_in_pl_by_number($date_obj->format("N")) ?></span>
            </p>


            <?php $events = new WP_Query(array(
            "post_type" => "schedule",
            "posts_per_page" => -1,
            "status" => "publish",  
            'meta_query' => array(
                array(
                    'key' => 'date',
                    'value' => $event_date,
                    'compare' => '=',
                    'type' => 'DATE'
                )
            ),
            'meta_key' => 'date',
            'orderby' => 'meta_value',
            'order' => 'ASC'  
        )); if ($events->have_posts()) : ?>

            <?php while($events->have_posts()) : $events->the_post(); ?>

            <div class="mt-5">
                <p class="font-sans font-light">
                    <?php if (!empty(get_field("starts_at"))) : ?>
                    <span><?php echo get_field("starts_at") ?></span>
                    <?php endif; ?>

                    <?php if (!empty(get_field("ends_at"))) : ?>
                    <span> - <?php echo get_field("ends_at") ?></span>
                    <?php endif; ?>
                </p>
                <p class="font-sofia font-bold text-lg"><?php echo get_the_title(); ?></p>
                <button class="text-rose font-archio underline text-lg my-2"
                        data-eventId="<?php echo get_the_ID() ?>">Czytaj więcej</button>
                <img class=" max-h-3 h-full w-auto"
                     src="<?php echo IMG . "wave.png" ?>"
                     alt="">
            </div>

            <?php endwhile; ?>
            <?php wp_reset_query(); wp_reset_postdata();  else: ?>

            <div class="text-center">
                Brak wydarzeń
            </div>

            <?php wp_reset_query(); wp_reset_postdata(); endif;  ?>
        </div>
    </div>
</div>