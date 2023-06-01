<div class="grid grid-cols-3 gap-y-8 lg:gap-16">
    <?php get_template_part( CMP, "btn", array(
        'content' => "Chcę zgłosić szkołę do udziału w akcji",
        'type' => "button",
        'class' => 'w-full',
        'class_wrapper' => 'w-full mb-1.5 mr-1.5 col-span-3 xl:col-span-1',
        'dataset' => array(
            "data-contact-trigger" => "school"
        )
    )) ?>

    <?php get_template_part( CMP, "btn", array(
        'content' => "Chcę dołączyć do udziału w akcji",
        'type' => "button",
        'class' => 'w-full',
        'class_wrapper' => 'w-full mb-1.5 mr-1.5 col-span-3 xl:col-span-1',
        'dataset' => array(
            "data-contact-trigger" => "join"
        )
    )) ?>

    <?php get_template_part( CMP, "btn", array(
        'content' => "Chcę wesprzeć akcję",
        'type' => "button",
        'class' => 'w-full',
        'class_wrapper' => 'w-full mb-1.5 mr-1.5 col-span-3 xl:col-span-1',
        'dataset' => array(
            "data-contact-trigger" => "help"
        )
    )) ?>

</div>

<?php get_template_part( CMP, "contact-dialog", array(
    "shortcode" => '[contact-form-7 id="1652" title="Formularz 1"]',
    "title" => "Zgłoś szkołę",
    "form" => "school",
) ) ?>

<?php get_template_part( CMP, "contact-dialog", array(
    "shortcode" => '[contact-form-7 id="1652" title="Formularz 1"]',
    "title" => "Dołącz",
    "form" => "join",
) ) ?>

<?php get_template_part( CMP, "contact-dialog", array(
    "shortcode" => '[contact-form-7 id="1652" title="Formularz 1"]',
    "title" => "Wesprzyj",
    "form" => "help",
) ) ?>