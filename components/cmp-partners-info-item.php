<?php $args = wp_parse_args( $args, array(
    "key" => 0,
    "partner" => array(),
) );
$partner = $args["partner"] ?>

<article class="neo-before mb-1.5 mr-1.5">
    <div class="relative px-10 py-5 border-4 border-dark rounded-xl"
         style="background: <?php echo $partner["color"] ?>">
        <?php if ($partner["is_boss"]) : ?>
        <div class="grid grid-cols-4 gap-10">
            <section
                     class="col-span-3 <?php echo ($args["key"] == 0 || $args["key"] % 2 == 0) ? "order-first" : "order-last" ?>">
                <?php endif; ?>

                <img src="<?php echo $partner["logo"] ?>"
                     class=" h-20">

                <div class="mt-10">
                    <?php echo wpautop( $partner["opis"] ) ?>
                </div>

                <?php if ($partner["is_boss"]) : ?>
            </section>
            <aside class="<?php echo ($args["key"] == 0 || $args["key"] % 2 == 0) ? "order-last" : "order-first" ?>">
                <?php get_template_part( CMP, "partners-info-boss", $partner["boss"] ) ?>
            </aside>
        </div>
        <?php endif; ?>
    </div>
</article>