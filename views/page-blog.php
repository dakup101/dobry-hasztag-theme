<?php /* Template Name: Blog (Archiwua) */ 
get_header() ?>

<section
         class="container mx-auto px-5 lg:px-10 2xl:px-40 pt-32 2xl:pt-48 pb-10 mt-10 bg-gradient-to-b from-yellow-light to-yellow lg:rounded-t-3xl">
    <div class="mt-10">
        <h1 class="flex flex-col items-center font-sofia text-center">
            <span
                  class="block text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl text-shadow mb-10 md:mb-20">Najnowsze
                Informacje</span>
        </h1>
        <div class="grid grid-cols-12 gap-y-10 md:gap-10">
            <div class="col-span-12 xl:col-span-5 order-last">
                <?php get_template_part( CMP, "blog-items" ); ?>
            </div>
            <div class="col-span-12 xl:col-span-7 order-first grid gap-y-6 items-start">
                <?php get_template_part( CMP, "blog-featured" ); ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( CMP, "social-marquee" ) ?>
<?php get_template_part( CMP, "people" ) ?>
<?php get_template_part( CMP, "share-us" ) ?>
<?php get_template_part( CMP, "partners" ) ?>

<?php get_footer() ?>