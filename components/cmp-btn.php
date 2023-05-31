<?php $btn = wp_parse_args( $args, array(
    "url" => "#",
    "content" => "Jestem przycisk",
    "type" => "link",
    "class" => null,
    "class_wrapper" => null,
    "rel" => null, 
    "dataset" => array()
)); 

$dataset = null;

if (!empty($btn["dataset"])) {
    $dataset = "";
    
    foreach($btn["dataset"] as $set=>$value) {
        $dataset .=  $set . '="' . $value . '" ';
    }
}
?>


<div class="btn-wrapper <?php echo $btn["class_wrapper"] ? $btn["class_wrapper"] : "" ?>">
    <?php if ($btn["type"] == "link") : ?>

    <a href="<?php echo $btn["url"] ?>"
       rel="<?php echo $btn["rel"] ? $btn["rel"] : "" ?>"
       class="btn <?php echo $btn["class"] ? $btn["class"] : "" ?>">
        <?php echo $btn["content"]; ?>
    </a>

    <?php elseif ($btn["type"] == "button") : ?>




    <button class="btn <?php echo $btn["class"] ? $btn["class"] : "" ?>"
            <?php echo !empty($dataset) ? $dataset : "" ?>>
        <?php echo $btn["content"]; ?>
    </button>

    <?php endif; ?>
</div>