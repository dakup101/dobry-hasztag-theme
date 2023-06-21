<footer class="bg-yellow overflow-hidden">
    <section class="container mx-auto grid grid-cols-6">
        <div class="text-center md:text-left col-span-6 sm:col-span-3 lg:col-span-2 order-2 lg:order-1 relative pt-40">
            <img src="<?php echo IMG . "stopka_reka.png" ?>"
                 alt="#dobryhasztag"
                 class="absolute h-40 top-0 lg:-top-5 left-10 md:left-0 animate-cut-to-right">

            <h3 class="font-bold text-3xl">
                Bądź częścią Wielkiej Wyprawy Maluchów
            </h3>
            <span class="text-2xl font-bold mt-2 block">
                 i razem z nami pomóż dzieciom, ofiarom wypadków drogowych!
            </span>
            <a href="https://zrzutka.pl/wielkawyprawamaluchow?fbclid=IwAR012OfzMbTD5YWzZjfUS1wJM6u2rTVME9XRZWaR8gZ4enVx31pHTAijVIQ"
               target="_blank"
               class="text-2xl font-bold underline">
                www.zrzutka.pl
            </a>
        </div>
        <div class="col-span-6 lg:col-span-2 order-1 lg:order-2 pt-10 flex flex-col items-center">
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
                        'class_wrapper' => 'before:rounded-full mb-1.5 mr-1.5'
                    )) ?>
                    </li>
                    <?php $social_key++; endforeach; ?>
                </ul>
            </nav>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 order-3 pt-10 lg:pl-20">
            <div class="grid grid-cols-2 gap-5 sm:gap-10">
                <div class="col-span-1 sm:col-span-1 ">
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
                <div class="col-span-1 sm:col-span-1 ">
                    <h3 class="text-2xl font-bold mb-1">Kontakt</h3>
                    <span class="uppercase">
                        ul. JÓZEFA MARCIKA 4<br>
                        30-443 KRAKÓW<br>
                        MAŁOPOLSKIE
                    </span>
                    <div class="mt-10">
                        <a href="mailto:kontakt@dobryhasztag.pl"
                           class="font-bold underline block w-fit mb-1">kontakt@dobryhasztag.pl</a>
                        <a href="tel:+48793793900"
                           class="font-bold underline bloc w-fit">+48 793 793 900</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( CMP, "footer-copyright" ) ?>

</footer>