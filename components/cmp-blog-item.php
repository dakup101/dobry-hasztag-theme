<?php global $wp_query; ?>
<article
         class="<?php echo $wp_query->current_post < 4 ? "mb-5 pb-5 border-b border-dark border-opacity-10" : "" ?> flex-col sm:flex-row items-center">
    <a href="<?php echo get_the_permalink() ?>"
       class="block hover:shadow-cyan hover:shadow-lg w-20 h-20 overflow-hidden rounded shrink-0 mr-5 transition-all mb-3 md:mb-0">
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
        <?php
        $excerpt = get_the_excerpt();
        $excerpt_formatted = (mb_strlen($excerpt, 'UTF-8') > 70) 
        ? mb_substr($excerpt, 0, 70, 'UTF-8') . " <a href='".get_permalink()."' class='text-rose hover:text-cyan-dark' title='Czytaj więcej'>[...]</a>" 
        : $excerpt;
        ?>
        <p><?php echo $excerpt_formatted ?></p>
    </section>
</article>