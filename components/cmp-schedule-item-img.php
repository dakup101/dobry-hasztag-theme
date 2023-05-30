<?php 
$args = wp_parse_args($args, array(
    "img" => null, 
    "has_img" => null,
    "has_gallery" => null,
    "key" => 0,
)); 

$img = $args["img"];
$has_img = $args["has_img"];
$has_gallery = $args["has_gallery"];
$gllery = $has_gallery ? $args["gallery"] : array();
?>

<figure
        class="neo-before mb-1.5 mr-1.5 <?php echo ($args["key"] == 0 || $args["key"] % 2 == 0) ? "order-last" : "order-first" ?>">
    <div class="relative h-full bg-rose border-4 border-dark rounded-xl overflow-hidden pt-10">
        <?php if ($has_gallery) : ?>
        <div data-schedule-item-gallery
             class="absolute w-full h-full top-0 left-0 z-10">
            <div class="flex border-b-4 border-dark">
                <div class="schedule-item-gallery-nav h-10 px-5 flex items-center shrink-0">

                </div>
                <figure class="h-10 w-full py-2.5 pr-5 flex flex-col justify-between">
                    <div class="h-0.5 w-full bg-dark rounded"></div>
                    <div class="h-0.5 w-full bg-dark rounded"></div>
                    <div class="h-0.5 border border-dark w-full bg-dark rounded"></div>
                </figure>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo $img ?>"
                         alt="<?php get_the_title() ?>"
                         class="object-cover w-full h-full object-center">
                </div>

                <?php foreach($gllery as $el) : ?>
                <div class="swiper-slide">
                    <?php $el_img = wp_get_attachment_image_src( $el["img"], 'event-thumbnail' )[0]; ?>
                    <img src="<?php echo $el_img ?>"
                         alt="<?php get_the_title() ?>"
                         class="object-cover w-full h-full object-center">
                </div>
                <?php endforeach; ?>
            </div>
            <div class="schedule-item-gallery-next">

            </div>
            <div class="schedule-item-gallery-prev">

            </div>
        </div>
        <?php else : ?>
        <img src="<?php echo $img; ?>"
             alt="<?php echo get_the_title(); ?>"
             class="absolute top-0 left-0 w-full h-full object-cover object-center">
        <?php endif; ?>
    </div>
</figure>