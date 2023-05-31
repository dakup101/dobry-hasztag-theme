<?php /* Template Name: Kontakt */ 
get_header() ?>



<section class="container mx-auto px-5 lg:px-10 2xl:px-40 pt-32 2xl:pt-48 lg:mt-10 bg-yellow-light lg:rounded-t-3xl">
    <h1 class="flex flex-col items-center font-sofia mt-10">
        <span class="block text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl text-shadow">
            Skontaktuj się z nami
        </span>
    </h1>

    <div class="mt-20">
        <div class="opacity-0"
             data-simplebar></div>
        <?php get_template_part( CMP, "contact-buttons" ) ?>
    </div>

    <div class="mt-10">
        <?php get_template_part( CMP, "contact-descs" ) ?>
    </div>

</section>

<section class="container mx-auto px-5 lg:px-10 2xl:px-40 pt-10 pb-20 bg-gradient-to-b from-yellow-light to-yellow">
    <?php get_template_part(CMP, "partners-info") ?>
</section>

<?php get_template_part( CMP, "share-us" ) ?>
<?php get_template_part( CMP, "partners" ) ?>

<?php get_footer() ?>