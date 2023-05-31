<?php /* Template Name: Strona Główna */ 
get_header() ?>

<section class="container mx-auto px-5 lg:px-10 2xl:px-40 pt-32 2xl:pt-48 lg:mt-10 bg-yellow-light lg:rounded-t-3xl">
    <div class="mt-10">
        <?php get_template_part( CMP, "hero" ) ?>
    </div>
</section>

<section class="container mx-auto px-5 lg:px-10 2xl:px-40 pt-10 bg-yellow-light">
    <?php get_template_part( CMP, "hero-after" ) ?>
</section>

<section class="container mx-auto px-5 lg:px-10 2xl:px-20 pt-10 pb-10 bg-gradient-to-b from-yellow-light to-yellow">
    <?php get_template_part( CMP, "updates" ) ?>

</section>

<?php get_template_part( CMP, "social-marquee" ) ?>
<?php get_template_part( CMP, "people" ) ?>

<section class="pt-10 pb-10 bg-cyan">
    <div class="container mx-auto px-5 lg:px-10 2xl:px-20">
        <?php get_template_part( CMP, "schedule" ) ?>
    </div>
</section>

<?php get_template_part( CMP, "share-us" ) ?>
<?php get_template_part( CMP, "partners" ) ?>



<!-- Social Dialog should be imported only 1 time if "updates" component present -->
<?php get_template_part( CMP, "social-dialog" ) ?>
<?php get_footer() ?>