<?php /* Template Name: Profilaktyka */ 
get_header() ?>

<section class="container mx-auto px-40 pt-48 pb-10 mt-10 bg-yellow-light rounded-t-3xl">
    <h1 class="flex flex-col items-center font-sofia mt-10">
        <span class="block text-8xl text-shadow"><?php echo get_the_title() ?></span>
    </h1>
    <div class="grid grid-cols-4 mt-20 gap-10">
        <div class="col-span-3 order-last">
            <div class="grid gap-y-10">
                <?php get_template_part( CMP, "preventions" ) ?>
            </div>
        </div>
        <aside class="order-first">
            <?php get_template_part( CMP, "tel-numbers" ) ?>
        </aside>

    </div>
</section>

<section class="container mx-auto px-20 pt-10 pb-10 bg-gradient-to-b from-yellow-light to-yellow">
    <?php get_template_part( CMP, "articles" ) ?>
</section>

<?php get_template_part( CMP, "social-marquee" ) ?>
<?php get_template_part( CMP, "people" ) ?>
<?php get_template_part( CMP, "share-us" ) ?>
<?php get_template_part( CMP, "partners" ) ?>

<?php get_footer() ?>