<div class="grid grid-cols-3 gap-y-8 lg:gap-16">
    <div class="neo-before mb-1.5 mr-1.5 col-span-3 xl:col-span-1">
        <div class="relative bg-cyan-lighter rounded-xl border-4 border-dark px-5 md:px-10 py-5">
            <h2 class="font-sofia text-4xl mb-5">
                #dobryhasztag<br>w Twojej szkole
            </h2>

            <div class="mb-10">
                <p>Pellentesque vel rhoncus sapien. Integer placerat non risus eget iaculis. Vestibulum risus velit,
                    cursus sed enim vel, tempus fermentum velit. Maecenas consectetur felis nisl, vel porta odio
                    sagittis id. Quisque neque ex, condimentum in ante id, ultricies posuere eros.</p>
            </div>

            <?php get_template_part( CMP, "btn", array(
                'content' => "Zgłoś do udziału",
                'type' => "button",
                'class' => 'w-full',
                'class_wrapper' => 'w-full mb-1.5 mr-1.5',
                'dataset' => array(
                    "data-contact-trigger" => "school"
                )
            )) ?>
        </div>
    </div>

    <div class="neo-before mb-1.5 mr-1.5 col-span-3 xl:col-span-1">
        <div class="relative bg-rose-lighter rounded-xl border-4 border-dark px-5 md:px-10 py-5">
            <h2 class="font-sofia text-4xl mb-5">
                Jak mogę Wam<br>pomóc?
            </h2>

            <div class="mb-10">
                <p>Pellentesque vel rhoncus sapien. Integer placerat non risus eget iaculis. Vestibulum risus velit,
                    cursus sed enim vel, tempus fermentum velit. Maecenas consectetur felis nisl, vel porta odio
                    sagittis id. Quisque neque ex, condimentum in ante id, ultricies posuere eros.</p>
            </div>

            <?php get_template_part( CMP, "btn", array(
                'content' => "Dołącz do nas",
                'type' => "button",
                'class' => 'w-full',
                'class_wrapper' => 'w-full mb-1.5 mr-1.5',
                'dataset' => array(
                    "data-contact-trigger" => "join"
                )
            )) ?>
        </div>
    </div>

    <div class="neo-before mb-1.5 mr-1.5 col-span-3 xl:col-span-1">
        <div class="relative bg-yellow-lighter rounded-xl border-4 border-dark px-5 md:px-10 py-5">
            <h2 class="font-sofia text-4xl mb-5">
                Podoba mi się<br>Wasza akcja
            </h2>

            <div class="mb-10">
                <p>Pellentesque vel rhoncus sapien. Integer placerat non risus eget iaculis. Vestibulum risus velit,
                    cursus sed enim vel, tempus fermentum velit. Maecenas consectetur felis nisl, vel porta odio
                    sagittis id. Quisque neque ex, condimentum in ante id, ultricies posuere eros.</p>
            </div>

            <?php get_template_part( CMP, "btn", array(
                'content' => "Wesprzyj nas",
                'type' => "button",
                'class' => 'w-full',
                'class_wrapper' => 'w-full mb-1.5 mr-1.5',
                'dataset' => array(
                    "data-contact-trigger" => "help"
                )
            )) ?>
        </div>
    </div>
</div>