<?php $tels = get_field("opt_trust_phones", "options");
if (!empty($tels)) : ?>

<div class="grid grid-cols-3  gap-y-10 md:gap-10">
    <?php foreach($tels as $el) : ?>
    <div class="col-span-3 md:col-span-1 lg:col-span-3 neo-before mb-1.5 mr-1.5">
        <div class="relative h-full px-5 xl:px-10 py-5 border-4 border-dark rounded-xl"
             style="background: <?php echo $el["kolor_sekcji"] ?>">
            <h4 class="text-2xl font-gambado text-center">
                <span><?php echo $el["title"] ?></span>
                <br>
                <span class="text-lg"><?php echo $el["title_sm"] ?></span>
            </h4>
            <a href="tel:<?php echo $el["phone_formatted"] ?>"
               class="text-center font-gambado text-2xl sm:text-4xl md:text-2xl xl:text-4xl underline mt-5 block w-full hover:text-rose">
                <?php echo $el["phone"] ?>
            </a>
            <div class="flex justify-center">
                <?php get_template_part( CMP, "btn", array(
                        'content' => $el['btn_text'],
                        'url' => "tel:" . $el["phone_formatted"],
                        'class_wrapper' => "mt-5"
                    )) ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php endif; ?>