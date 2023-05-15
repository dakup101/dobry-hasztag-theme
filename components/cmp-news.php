<div class="py-5">
    <h2 class="text-xl font-bold uppercase">Najnowsze informacje</h2>

    <?php $posts = new WP_Query( array(
        "post_type" => "post",
        "posts_per_page" => 5, 
        'orderby' => 'date',
        'order' => 'DESC',
    )); if ($posts->have_posts()) : ?>

    <div class="mt-10">
        <?php while($posts->have_posts()) : $posts->the_post(); ?>
        <article
                 class="<?php echo $posts->current_post < 4 ? "mb-5 pb-5 border-b border-dark border-opacity-10" : "" ?> flex items-center">
            <a href="<?php echo get_the_permalink() ?>"
               class="block hover:shadow-cyan hover:shadow-lg w-20 h-20 overflow-hidden rounded shrink-0 mr-5 transition-all">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), "thumbnail") ?>"
                     alt="<?php echo get_the_title() ?>"
                     class="w-full h-full object-cover object-center ">
            </a>
            <section>
                <h3 class="font-bold hover:text-rose transition-all">
                    <a href="<?php echo get_the_permalink() ?>">
                        <?php echo get_the_title() ?>
                    </a>
                </h3>
                <p><?php echo get_the_excerpt() ?></p>
            </section>
        </article>
        <?php endwhile; ?>
    </div>

    <?php endif; ?>

    <a href="#"
       class="text-xl underline text-rose font-bold font-archio block mt-10">Przeczytaj wszystkie wiadomości</a>

</div>