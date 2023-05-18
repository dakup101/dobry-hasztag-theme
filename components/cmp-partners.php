<?php if (!empty(get_field("opt_partners", "options"))) : ?>

<section class="bg-dark py-20 relative overflow-hidden">

    <img src="<?php echo IMG . "partenrzy04_03.png" ?>"
         alt="Partnerzy"
         class="absolute h-1/5 -top-5 right-44">

    <img src="<?php echo IMG . "partnerzy03_18.png" ?>"
         alt="Partnerzy"
         class="absolute h-1/6 -bottom-5 left-60">

    <img src="<?php echo IMG . "partnerzy_jezyk.png" ?>"
         alt="Partnerzy"
         class="absolute h-2/3 bottom-10 left-20 opacity-80">

    <img src="<?php echo IMG . "partnerzy05_03.png" ?>"
         alt="Partnerzy"
         class="absolute h-1/4 top-20 right-10 opacity-80">


    <div class="container mx-auto relative">
        <h2 class="text-8xl text-white text-shadow-rose text-center font-sofia">
            Partnerzy akcji
        </h2>
    </div>
    <div class="mt-20 overflow-hidden relative pointer-events-none"
         data-partners-slider>
        <div class="swiper-wrapper items-center">
            <?php foreach(get_field("opt_partners", "options") as $partner) : ?>
            <div class="swiper-slide">
                <img src="<?php echo $partner["logo"] ?>"
                     alt="<?php echo $partner["title"] ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif; ?>