<section data-social-marquee
         class="bg-dark py-2 overflow-hidden">
    <?php $social = get_field("opt_social_pixel", "options") ?>
    <div class="swiper-wrapper">
        <?php foreach($social as $el): ?>
        <div class="swiper-slide">
            <a href="<?php echo $el["url"] ?>"
               class="flex items-center font-hydro text-white">
                <img src="<?php echo $el["icon"] ?>"
                     alt="Social Media"
                     class="h-10 mr-5">
                <span>
                    Obserwuj nas
                </span>
            </a>
        </div>
        <?php endforeach; ?>
        <?php foreach($social as $el): ?>
        <div class="swiper-slide">
            <a href="<?php echo $el["url"] ?>"
               class="flex items-center font-hydro text-white hover:text-rose transition-all">
                <img src="<?php echo $el["icon"] ?>"
                     alt="Social Media"
                     class="h-10 mr-5">
                <span>
                    Obserwuj nas
                </span>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</section>