<?php /* Template Name: Blog (Archiwua) */ 
get_header() ?>

<section class="container mx-auto px-40 pt-48 pb-10 mt-10 bg-gradient-to-b from-yellow-light to-yellow rounded-t-3xl">
    <div class="mt-10">
        <h1 class="flex flex-col items-center font-sofia">
            <span class="block text-8xl text-shadow mb-20">Najnowsze Informacje</span>
        </h1>
        <div class="grid grid-cols-5 gap-10">
            <div class="col-span-2 order-last">
                <?php get_template_part( CMP, "blog-items" ); ?>
            </div>
            <div class="col-span-3 order-first">
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