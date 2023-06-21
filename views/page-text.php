<?php /* Template Name: Sam tekst */ 
get_header() ?>

<section
         class="container mx-auto px-5 lg:px-10 2xl:px-40 pt-32 2xl:pt-48 pb-10 lg:mt-10 bg-yellow-light lg:rounded-t-3xl">
    <article class="neo-before mb-1.5 mr-1.5 mt-10">
        <div class="relative bg-yellow-lighter border-4 border-dark rounded-xl px-5 md:px-10 py-5">
            <h1 class="text-4xl font-sofia text-shadow-md">
                <?php echo get_the_title() ?>
            </h1>
            <div class="mt-5 text-content">
                <?php echo wpautop(get_the_content()) ?>
            </div>
        </div>
    </article>
</section>

<?php get_template_part( CMP, "social-marquee" ) ?>

<?php get_footer() ?>