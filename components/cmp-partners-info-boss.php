<?php $boss = wp_parse_args( $args, array() ) ?>

<div class="sticky top-10 left-0 w-full rounded-xl border-4 border-dark px-5 py-5"
     style="background: <?php echo $boss["color"] ?>">
    <img src="<?php echo wp_get_attachment_image_url(  $boss["zdjecie"], "medium" ) ?>"
         class="h-44 block mx-auto mb-5"
         alt="<?php echo $boss["name"]; ?>">

    <p class="text-xl font-sofia text-center"><?php echo $boss["name"] ?></p>
    <p class="text-center"><?php echo $boss["pos"] ?></p>
</div>