<?php $btn = wp_parse_args( $args, array(
    "url" => "#",
    "content" => "Jestem przycisk",
    "type" => "link",
    "class" => null,
    "class_wrapper" => null,
    "rel" => null, 
) ) ?>


<div class="btn-wrapper <?php echo $btn["class_wrapper"] ? $btn["class_wrapper"] : "" ?>">
    <?php if ($btn["type"] == "link") : ?>

    <a href="<?php echo $btn["url"] ?>"
       rel="<?php echo $btn["rel"] ? $btn["rel"] : "" ?>"
       class="btn <?php echo $btn["class"] ? $btn["class"] : "" ?>">
        <?php echo $btn["content"]; ?>
    </a>

    <?php elseif ($btn["type"] == "button") : ?>

    <button class="btn <?php echo $btn["class"] ? $btn["class"] : "" ?>">
        <?php echo $btn["content"]; ?>
    </button>

    <?php endif; ?>
</div>