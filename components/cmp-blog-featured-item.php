<article class="grid grid-cols-3 items-center gap-5">
    <a href="<?php echo get_permalink() ?>"
       class="neo-before mb-1.5 mr-1.5 h-60 col-span-1">
        <img src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), "medium" ) ?>"
             alt="<?php echo get_the_title() ?>"
             class="absolute w-full h-full object-cover object-center border-4 rounded-xl border-dark hover:border-rose hover:translate-x-1.5 hover:translate-y-1.5 transition-all">
    </a>
    <section class="col-span-2">
        <h3 class="text-2xl font-sofia mb-5 hover:text-rose">
            <a href="<?php echo get_the_permalink() ?>">
                <?php echo get_the_title(  ) ?>
            </a>
        </h3>
        <p class="text-lg block mb-5">
            <?php echo get_the_excerpt() ?>
        </p>
    </section>
</article>