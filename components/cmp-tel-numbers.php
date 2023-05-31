<?php $tels = get_field("opt_trust_phones", "options");
if (!empty($tels)) : ?>

<div class="grid gap-y-10">
    <?php foreach($tels as $el) : ?>
    <div class="neo-before mb-1.5 mr-1.5">
        <div class="relative px-10 py-5 border-4 border-dark rounded-xl"
             style="background: <?php echo $el["kolor_sekcji"] ?>">
            <h4 class="text-2xl font-gambado text-center">
                <span><?php echo $el["title"] ?></span>
                <br>
                <span class="text-lg"><?php echo $el["title_sm"] ?></span>
            </h4>
            <a href="tel:<?php echo $el["phone_formatted"] ?>"
               class="text-center font-gambado text-4xl underline mt-5 block w-full hover:text-rose">
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