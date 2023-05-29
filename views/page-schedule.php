<?php /* Template Name: Kalendarz */ 
get_header() ?>

<section class="bg-cyan-dark pt-10">
    <div class="container mx-auto px-40 pt-48 pb-10 bg-cyan rounded-t-3xl">
        <div class="grid grid-cols-5 gap-20">
            <div class="col-span-4">

            </div>
            <div>
                <?php get_template_part( CMP, "schedule-months" ) ?>
            </div>
        </div>
    </div>
</section>


<?php get_template_part( CMP, "social-marquee" ) ?>
<?php get_template_part( CMP, "people" ) ?>

<?php get_template_part( CMP, "share-us" ) ?>
<?php get_template_part( CMP, "partners" ) ?>



<!-- Social Dialog should be imported only 1 time -->
<?php get_template_part( CMP, "social-dialog" ) ?>
<?php get_footer() ?>