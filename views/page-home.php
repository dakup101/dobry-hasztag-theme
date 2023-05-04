<?php /* Template Name: Strona Główna */ 
get_header() ?>
<section class="container mx-auto px-40 pt-48 bg-yellow-light rounded-t-3xl">
    <?php get_template_part( CMP, "hero" ) ?>
</section>
<section class="container mx-auto px-40 pt-20 bg-yellow-light">
    <?php get_template_part( CMP, "hero-after" ) ?>
</section>
<section class="container mx-auto px-20 pt-20 bg-yellow-light">
    <?php get_template_part( CMP, "updates" ) ?>
</section>
<?php get_footer() ?>