<?php $btn = wp_parse_args( $args, array(
    "url" => "#",
    "text" => "Jestem przycisk",
    "type" => "link",
    "class" => null,
    "rel" => null,
) ) ?>

<?php if ($btn["type"] == "link") : ?>
<a href="<?php echo $btn["url"] ?>"
   rel="<?php echo $btn["rel"] ? $btn["rel"] : "" ?>"
   class="<?php echo $btn["class"] ? $btn["class"] : "" ?>">
    <?php echo $btn["text"]; ?>
</a>
<?php endif; ?>