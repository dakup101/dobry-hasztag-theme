<footer class="bg-yellow overflow-hidden">
    <section class="container mx-auto grid grid-cols-3">
        <div class="relative pt-40">
            <img src="<?php echo IMG . "stopka_reka.png" ?>"
                 alt="#dobryhasztag"
                 class="absolute h-40 -top-5 left-0 animate-cut-to-right">

            <h3 class="font-bold text-3xl">
                #dobryhasztag
            </h3>
            <span class="text-2xl font-bold">
                dla dzieci w kryzysie
            </span>
            <br>
            <a href="#"
               target="_blank"
               class="text-2xl font-bold underline">
                www.zrzutka.pl
            </a>

        </div>
        <div class="pt-10 flex flex-col items-center">
            <img src="<?php echo IMG . "logo.png" ?>"
                 alt="#DOBRYHASZTAG"
                 class="w-full max-w-xs">
            <nav class="mt-5">
                <ul class="flex list-none">
                    <?php $social = get_field("opt_social", "options"); 
                $social_count = count($social) - 1;
                $social_key = 0;
                foreach($social as $el) : ?>
                    <li class="<?php echo $social_key < $social_count ? 'mr-6' : '' ?>">
                        <?php get_template_part( CMP, "btn", array(
                        'content' => file_get_contents($el['icon']),
                        'url' => $el['url'],
                        'class' => 'rounded-full bg-yellow p-3',
                        'class_wrapper' => 'before:rounded-full'
                    )) ?>
                    </li>
                    <?php $social_key++; endforeach; ?>
                </ul>
            </nav>
        </div>
        <div class="pt-10 pl-20">
            <div class="grid grid-cols-2">
                <div>
                    <h3 class="text-2xl font-bold mb-1">Menu</h3>
                    <nav>
                        <ul class="flex flex-col list-none">
                            <?php $menu = get_menu("primary"); 
                $menus_count = count($menu['menus']) - 1;
                $menus_key = 0;
                foreach($menu["menus"] as $el) : ?>
                            <li class="mb-1 <?php echo $menus_key < $menus_count ? 'mr-8' : '' ?>">
                                <a href="<?php echo $el["url"] ?>"
                                   class="hover:text-rose">
                                    <?php echo $el["title"] ?>
                                </a>
                            </li>
                            <?php $menus_key++; endforeach; ?>
                        </ul>
                    </nav>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-1">Kontakt</h3>
                    <span class="uppercase">
                        ul. JÓZEFA MARCINKA 4<br>
                        30-443 KRAKÓW<br>
                        MAŁOPOLSKIE
                    </span>
                    <div class="mt-10">
                        <a href="mailto:kontakt@ttage.pl"
                           class="font-bold underline block w-fit mb-1">kontakt@ttage.pl</a>
                        <a href="tel:+48793793900"
                           class="font-bold underline bloc w-fit">+48 793 793 900</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( CMP, "footer-copyright" ) ?>

</footer>