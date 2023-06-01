<?php /* Template Name: Blog | Wpis */ 
get_header() ?>

<section class="container mx-auto px-5 lg:px-10 2xl:px-40 pt-32 2xl:pt-48 pb-10 mt-10 bg-yellow-light lg:rounded-t-3xl">
    <article class="neo-before mb-1.5 mr-1.5 mt-10">
        <div class="relative bg-yellow-lighter border-4 border-dark rounded-xl px-5 md:px-10 py-5">
            <h1 class="text-4xl font-sofia text-shadow-md">
                <?php echo get_the_title() ?>
            </h1>
            <div class="mt-5">
                <?php echo wpautop(get_the_content()) ?>
            </div>
        </div>
    </article>
    <div class="grid gap-y-10 mt-10">
        <?php get_template_part( CMP, "preventions" ) ?>
    </div>
</section>

<section class="container mx-auto px-5 lg:px-10 2xl:px-20 pt-10 pb-10 bg-gradient-to-b from-yellow-light to-yellow">
    <?php get_template_part( CMP, "articles" ) ?>
</section>

<?php get_template_part( CMP, "social-marquee" ) ?>
<?php get_template_part( CMP, "people" ) ?>
<?php get_template_part( CMP, "share-us" ) ?>
<?php get_template_part( CMP, "partners" ) ?>

<?php get_footer() ?>