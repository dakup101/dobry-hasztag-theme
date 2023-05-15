<?php /* Template Name: Strona Główna */ 
get_header() ?>

<section class="container mx-auto px-40 pt-48 bg-yellow-light rounded-t-3xl">
    <?php get_template_part( CMP, "hero" ) ?>
</section>

<section class="container mx-auto px-40 pt-10 bg-yellow-light">
    <?php get_template_part( CMP, "hero-after" ) ?>
</section>

<section class="container mx-auto px-20 pt-10 pb-10 bg-gradient-to-b from-yellow-light to-yellow">
    <?php get_template_part( CMP, "updates" ) ?>
</section>

<?php get_template_part( CMP, "social-marquee" ) ?>

<!-- Social Dialog should be imported only 1 time -->
<?php get_template_part( CMP, "social-dialog" ) ?>

<?php get_footer() ?>