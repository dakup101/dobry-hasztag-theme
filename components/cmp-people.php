<?php $people = new WP_Query(array(
    "post_type" => "people",
    "status" => "publish",
    "posts_per_page" => -1,
)); if ($people->have_posts()) : ?>

<section class="bg-cover bg-center py-20 relative overflow-hidden"
         style="background-image: url('<?php echo IMG . "checked-bg.jpg" ?>')">
    <div class="absolute w-96 h-full top-10 -left-10 bg-contain bg-top bg-no-repeat animate-cut-to-right"
         style="background-image: url('<?php echo IMG . "kciuk_02.png" ?>')"></div>
    <h2 class="flex flex-col items-center font-sofia">
        <span class="block text-8xl text-shadow">Dobrzy ludzie</span>
        <span class="block ml-52 text-6xl text-shadow-dark text-rose">#dobryhasztag</span>
    </h2>


    <div class="px-5 mt-20"
         data-people>
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
    </div>

</section>
<?php wp_reset_query(); wp_reset_postdata(); endif; ?>