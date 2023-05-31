<?php 
$args = wp_parse_args( $args, array("id" => null, "key" => 0) );
$post_id = $args["id"];

$img = get_the_post_thumbnail_url( $post_id, "event-thumbnail" );
$has_img = !empty($img);
$has_gallery = !empty(get_field("gallery", $post_id));
?>

<?php if ($has_img) : ?>
<div class="grid grid-cols-3 gap-12">
    <?php endif; ?>

    <div
         class=" <?php echo $has_img ? "col-span-2" : "" ?> <?php  if ($has_img) echo ($args["key"] == 0 || $args["key"] % 2 == 0) ? "order-1" : "order-2" ?>">
        <div class="flex">
            <div class="flex-col font-sofia">
                <div class="text-rose">
                    <?php if (!empty(get_field("starts_at", $post_id))) : ?>
                    <span class="text-2xl">
                        <?php echo get_field("starts_at", $post_id) ?>
                        <?php if (!empty(get_field("starts_at", $post_id))) echo " - " . get_field("ends_at", $post_id) ?>
                    </span>
                    <?php endif; ?>
                </div>

                <h3 class="text-2xl">
                    <?php echo get_the_title($post_id) ?>
                </h3>

                <p class=" font-sans mt-5">
                    <?php echo get_the_excerpt($post_id) ?>
                </p>



                <?php if (!empty(get_field("location", $post_id))) : ?>
                <div class="mt-3 flex items-center">
                    <figure class="w-8 h-8 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24"
                             class="fill-dark w-full h-full">
                            <path
                                  d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z" />
                        </svg>
                    </figure>
                    <span class="text-lg">
                        <?php echo get_field("location", $post_id) ?>
                    </span>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php $event_content = get_the_content(null, null, $post_id);
    if (!empty($event_content)) : ?>

    <div class="<?php echo $has_img ? "col-span-3 order-3" : "mt-5" ?>">
        <?php echo wpautop( $event_content ) ?>
    </div>

    <?php endif; ?>

    <?php if ($has_img) : ?>
    <?php get_template_part( CMP, "schedule-item-img", array(
        "img" => $img,
        "has_img" => $has_img,
        "has_gallery" => $has_gallery,
        "key" => $args["key"],    
        "gallery" => get_field("gallery", $post_id)
    )) ?>
</div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>