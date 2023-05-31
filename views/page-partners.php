<?php /* Template Name: Partnerzy */ 
get_header() ?>

<section class="container mx-auto px-5 lg:px-10 2xl:px-40 pt-48 lg:mt-10 bg-yellow-light lg:rounded-t-3xl">
    <div class="grid grid-cols-2 gap-20 items-center">
        <h1 class=" text-hero font-black leading-tight">
            <span class="text-shadow">Oni wspierają</span>
            <br>
            <span class="text-stroke-rose text-yellow-light">#dobryhasztag</span>
        </h1>
        <img src="<?php echo IMG . "partnerzy-reka.png" ?>"
             alt="Partnerzy">
    </div>
</section>

<section class="container mx-auto px-5 lg:px-10 2xl:px-40 pt-10 pb-20 bg-gradient-to-b from-yellow-light to-yellow">
    <?php get_template_part(CMP, "partners-info") ?>
</section>

<?php get_template_part( CMP, "share-us" ) ?>
<?php get_template_part( CMP, "partners" ) ?>

<?php get_footer() ?>