<?php $people = new WP_Query(array(
    "post_type" => "people",
    "status" => "publish",
    "posts_per_page" => -1,
)); if ($people->have_posts()) : ?>

<div class="swiper-wrapper">
    <div class="swiper-slide">

    </div>
    <?php while ($people->have_posts()): $people->the_post(); ?>
    <div class="swiper-slide">
        <?php get_template_part( CMP, "people-item" ) ?>
    </div>
    <?php endwhile; ?>
</div>
<div class="flex scrollbar w-full mx-auto max-w-5xl mt-10">
    <div class="scrollbar-prev">
        <?php echo file_get_contents(IMG . "bold-arrow-left.svg") ?>
    </div>
    <div class="swiper-scrollbar overflow-hidden"></div>
    <div class="scrollbar-next">
        <?php echo file_get_contents(IMG . "bold-arrow-right.svg") ?>

    </div>
</div>

<?php wp_reset_query(); wp_reset_postdata(); endif; ?>