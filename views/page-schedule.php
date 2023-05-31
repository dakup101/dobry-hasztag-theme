<?php /* Template Name: Kalendarz */ 
get_header("header-cyan") ?>

<section class="bg-cyan-dark mt-10">
    <div class="container mx-auto px-40 pt-48 pb-10 bg-cyan rounded-t-3xl">

        <h1 class="block text-8xl text-shadow-rose font-sofia mb-20 text-center">
            Harmonogram projektu
        </h1>

        <div class="grid grid-cols-5 gap-20">
            <div class="col-span-4 pr-32">
                <div data-month-skeleton
                     class="grid grid-cols-2 gap-10 animate__animated animate__fadeIn">
                    <?php for($i=0; $i<4; $i++) : ?>
                    <div class="neo-before mb-1.5 mr-1.5 before:bg-gray animate-pulse">
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
            <div class="relative">
                <img src="<?php echo IMG . "months_arrow.png" ?>"
                     alt=""
                     class="absolute -left-5 w-32 -translate-x-full top-0">
                <?php get_template_part( CMP, "schedule-months" ) ?>
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