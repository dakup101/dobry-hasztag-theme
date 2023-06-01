<?php 
$args = wp_parse_args( $args, array() ) ;

function randomFigureHeight(){
    $rand = rand(0,2);
    switch ($rand){
        case 0:
            return "max-h-48";
        case 1: 
            return "max-h-64";
        case 2: 
            return "max-h-80";
    }
}
?>

<div class="max-h-96 overflow-y-auto pr-14 the-gallery"
     data-simplebar>
    <div class="columns-1 md:columns-2 lg:columns-3 gap-7 relative">
        <?php foreach ($args["gallery"] as $el) : ?>
        <a href="<?php echo wp_get_attachment_image_url($el["img"], "full") ?>"
           class="neo-before mr-1.5 break-inside-avoid-column block h-screen relative mb-7 glightbox
           <?php echo randomFigureHeight(); ?>">
            <img src="<?php echo wp_get_attachment_image_url($el["img"], "medium");  ?>"
                 alt=""
                 class="absolute w-full h-full top-0 left-0 object-cover rounded-xl border-4 border-dark hover:translate-x-1.5 hover:translate-y-1.5 transition-all hover:border-rose">
        </a>
        <?php endforeach; ?>
    </div>
</div>