<?php $args = wp_parse_args( $args, array(
    "key" => 0,
    "partner" => array(),
) );
$partner = $args["partner"] ?>

<article class="neo-before mb-1.5 mr-1.5">
    <div class="relative px-5 md:px-10 py-5 border-4 border-dark rounded-xl"
         style="background: <?php echo $partner["color"] ?>">
        <?php if ($partner["is_boss"]) : ?>
        <div class="grid grid-cols-12 gap-y-10 md:gap-10">
            <section
                     class="col-span-12 md:col-span-8 xl:col-span-9 <?php echo ($args["key"] == 0 || $args["key"] % 2 == 0) ? "order-first" : "order-first md:order-last" ?>">
                <?php endif; ?>

                <img src="<?php echo $partner["logo"] ?>"
                     class="h-10 md:h-20">

                <div class="mt-10">
                    <?php echo wpautop( $partner["opis"] ) ?>
                </div>

                <?php if ($partner["is_boss"]) : ?>
            </section>
            <aside
                   class="col-span-12 md:col-span-4 xl:col-span-3 <?php echo ($args["key"] == 0 || $args["key"] % 2 == 0) ? "order-last" : "order-last md:order-first" ?>">
                <?php get_template_part( CMP, "partners-info-boss", $partner["boss"] ) ?>
            </aside>
        </div>
        <?php endif; ?>
    </div>
</article>