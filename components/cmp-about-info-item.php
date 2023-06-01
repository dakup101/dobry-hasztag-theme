<?php 
$args = wp_parse_args( $args, array(
    "key" => 0
));


$parsed = $args["parsed"];
$img = wp_get_attachment_image_url(  $parsed["img"], "event-thumbnail");
$has_img = !empty($img);
$has_gallery = !empty($parsed["gallery"]);
?>

<?php if ($has_img) : ?>
<div class="grid grid-cols-3 gap-12">
    <?php endif; ?>

    <article
             class="neo-before mb-1.5 mr-1.5 
            <?php echo $has_img ? "col-span-3 md:col-span-2" : "" ?> 
            <?php  if ($has_img) echo ($args["key"] == 0 || $args["key"] % 2 == 0) ? "order-first" : "order-first md:order-last" ?>">
        <section class="relative bg-yellow rounded-xl border-4 border-dark px-5 py-5">
            <div class="flex">
                <div class="flex-col font-sofia">
                    <h3 class="text-3xl lg:text-4xl xl:text-6xl text-shadow-rose-md">
                        <?php echo $parsed["title"] ?>
                    </h3>

                    <div class="font-sans mt-5">
                        <?php echo $parsed["content"] ?>
                    </div>
                </div>
            </div>

            <?php if ($args["key"] == 0 ) : ?>
            <figure class="relative sm:pl-40 overflow-hidden mt-10">
                <img src="<?php echo IMG . "stopka_reka-right.png" ?>"
                     alt="#dobryhasztag"
                     class="absolute w-40 top-5 -left-5 animate-cut-to-right hidden sm:block">

                <h3 class="font-bold text-xl md:text-3xl">
                    #dobryhasztag
                </h3>
                <span class="text-xl md:text-2xl font-bold mt-2 block">
                    dla dzieci w kryzysie
                </span>
                <a href="#"
                   target="_blank"
                   class="text-xl md:text-2xl font-bold underline">
                    www.zrzutka.pl
                </a>
            </figure>
            <?php endif; ?>
        </section>

    </article>

    <?php if ($has_img) : ?>
    <?php get_template_part( CMP, "schedule-item-img", array(
        "img" => $img,
        "has_img" => $has_img,
        "has_gallery" => $has_gallery,
        "key" => $args["key"],    
        "gallery" => $parsed["gallery"],
    )) ?>
</div>
<?php endif; ?>