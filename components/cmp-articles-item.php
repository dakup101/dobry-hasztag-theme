<article class="col-span-4 sm:col-span-2 lg:col-span-1">
    <div class="neo-before">
        <a href="<?php echo get_permalink(); ?>"
           class="block relative w-full h-screen max-h-64 overflow-hidden rounded-xl border-4 border-dark hover:border-rose hover:translate-x-1.5 hover:translate-y-1.5 transition-all">
            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), "medium" ); ?>"
                 alt="<?php echo get_the_title() ?>"
                 class="absolute top-0 left-0 w-full h-full object-cover object-center">
        </a>
    </div>
    <h3 class="text-xl font-bold mt-5 ">
        <a href="<?php echo get_permalink(); ?>"
           class="hover:text-rose">
            <?php echo get_the_title() ?>
        </a>
    </h3>
</article>