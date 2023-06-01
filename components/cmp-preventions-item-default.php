<?php $args = wp_parse_args( $args, array() ); ?>

<article class="neo-before mb-1.5 mr-1.5">
    <div class="relative bg-white border-4 border-dark rounded-xl px-5 xl:px-10  py-5">
        <?php if (!empty($args["title"])) : ?>
        <h2 class="text-4xl font-sofia text-shadow-rose-md">
            <?php echo $args["title"]; ?>
        </h2>
        <?php endif; ?>

        <div class="<?php echo empty($args["title"]) ? "" : "mt-5" ?>">
            <?php echo wpautop( $args["content"]) ?>
        </div>
    </div>
</article>