<?php /* Template Name: O nas */ 
get_header() ?>

<section class="container mx-auto px-5 lg:px-10 2xl:px-40 pt-32 2xl:pt-48 lg:mt-10 bg-yellow-light lg:rounded-t-3xl">
    <div class="mt-10">
        <?php get_template_part( CMP, "hero" ) ?>
    </div>
</section>

<section class="container mx-auto px-5 lg:px-10 2xl:px-40 pt-10 bg-yellow-light">
    <?php get_template_part( CMP, "about" ) ?>
</section>

<section class="container mx-auto px-5 lg:px-10 2xl:px-40 pt-20 pb-20 bg-gradient-to-b from-yellow-light to-yellow">
    <?php get_template_part( CMP, "about-numbers" ) ?>
</section>

<section class="bg-cyan">
    <div class="container mx-auto px-5 lg:px-10 2xl:px-40 py-20">
        <?php get_template_part( CMP, "about-info" ) ?>
    </div>
</section>

<?php get_template_part( CMP, "social-marquee" ) ?>
<?php get_template_part( CMP, "people" ) ?>
<?php get_template_part( CMP, "share-us" ) ?>
<?php get_template_part( CMP, "partners" ) ?>



<!-- Social Dialog should be imported only 1 time if "updates" component present -->
<?php get_template_part( CMP, "social-dialog" ) ?>
<?php get_footer() ?>