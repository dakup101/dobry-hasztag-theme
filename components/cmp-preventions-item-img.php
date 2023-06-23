<?php $args = wp_parse_args( $args, array() ); ?>

<article class="neo-before mb-1.5 mr-1.5">
    <div class="relative h-full bg-white border-4 border-dark rounded-xl px-5 xl:px-10 py-5">
        <div class="grid grid-cols-5 gap-10">
            <div
                 class="col-span-5 md:col-span-3 <?php echo $args["img_pos"] == "right" ? "order-first md:order-last" : "order-first" ?>">
                <?php if (!empty($args["title"])) : ?>
                <h2 class="text-4xl font-sofia text-shadow-rose-md">
                    <?php echo $args["title"]; ?>
                </h2>
                <?php endif; ?>

                <div class="<?php echo empty($args["title"]) ? "" : "mt-5" ?>">
                    <?php echo wpautop( $args["content"]) ?>
                </div>
            </div>
            <div
                 class="col-span-5 md:col-span-2 <?php echo $args["img_pos"] == "right" ? "order-last md:order-first" : "order-last" ?>">
                <figure class="relative bg-gray-light min-h-[200px] h-full">
                    <img src="<?php echo wp_get_attachment_image_url($args["img"], "medium");  ?>"
                         alt=""
                         class="absolute top-0 left-0 w-full h-full object-cover object-center rounded-xl border-4 border-dark">
                </figure>
            </div>
        </div>
    </div>
</article>