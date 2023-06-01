<?php /* Template Name: Kalendarz */ 
get_header("cyan") ?>

<section class="bg-cyan-dark lg:mt-10">
    <div class="container mx-auto px-5 lg:px-10 2xl:px-16 pt-32 2xl:pt-48 pb-10 bg-cyan lg:rounded-t-3xl">

        <h1
            class="block text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl text-shadow-rose font-sofia mb-10 md:mb-20 text-center">
            Harmonogram projektu
        </h1>

        <div class="grid grid-cols-12 gap-y-10 md:gap-y-0">
            <div
                 class="col-span-12 order-2 md:order-1 md:col-span-8 lg:col-span-8 xl:col-span-9 2xl:col-span-10 md:pr-24 2xl:pr-24">
                <div data-month-skeleton
                     class="grid grid-cols-2 gap-10 animate__animated animate__fadeIn">
                    <?php for($i=0; $i<4; $i++) : ?>
                    <div class="col-span-2 xl:col-span-1 neo-before mb-1.5 mr-1.5 before:bg-gray animate-pulse">
                        <div class="px-10 py-5 relative bg-gray-light rounded-xl overflow-hidden border-4 border-gray">
                            <div class="h-10 w-3/4 bg-gray"></div>
                            <div class="mt-5">
                                <div class="h-5 mb-3 bg-gray"></div>
                                <div class="h-5 mb-5 bg-gray"></div>
                                <div class="h-5 bg-gray w-1/2"></div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                <div data-month-content
                     class="animate__animated animate__fadeIn"></div>
            </div>
            <div
                 class="col-span-12 order-1 md:order-2 md:col-span-4 lg:col-span-4 xl:col-span-3 2xl:col-span-2 relative">
                <div class="sticky top-10 left-0">
                    <img src="<?php echo IMG . "months_arrow.png" ?>"
                         alt=""
                         class="absolute hidden md:block -left-32 w-32 -translate-x-full -top-5 animate-cut-to-right">
                    <?php get_template_part( CMP, "schedule-months" ) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( CMP, "schedule-dialog" ) ?>

<?php get_template_part( CMP, "social-marquee" ) ?>
<?php get_template_part( CMP, "people" ) ?>
<?php get_template_part( CMP, "share-us" ) ?>
<?php get_template_part( CMP, "partners" ) ?>

<?php get_footer() ?>