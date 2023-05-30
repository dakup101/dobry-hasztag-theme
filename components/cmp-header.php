<header class="absolute top-10 left-0 w-full">
    <div class="container mx-auto flex justify-between items-center">
        <a href="<?php echo get_home_url() ?>">
            <img src="<?php echo IMG . "logo.png" ?>"
                 alt="#DOBRYHASZTAG"
                 class="w-full max-w-72">
        </a>
        <nav>
            <ul class="flex list-none">
                <?php $menu = get_menu("primary"); 
                $menus_count = count($menu['menus']) - 1;
                $menus_key = 0;
                foreach($menu["menus"] as $el) : ?>
                <li class="<?php echo $menus_key < $menus_count ? 'mr-8' : '' ?>">
                    <?php get_template_part( CMP, "btn", array(
                        'content' => $el['title'],
                        'url' => $el['url'],
                        'class' => !empty($el['active']) ? 'bg-yellow translate-x-1.5 translate-y-1.5 events-none' : '', 
                    )) ?>
                </li>
                <?php $menus_key++; endforeach; ?>
            </ul>
        </nav>
        <nav>
            <ul class="flex list-none">
                <?php $social = get_field("opt_social", "options"); 
                $social_count = count($social) - 1;
                $social_key = 0;
                foreach($social as $el) : ?>
                <li class="<?php echo $social_key < $social_count ? 'mr-4' : '' ?>">
                    <?php get_template_part( CMP, "btn", array(
                        'content' => file_get_contents($el['icon']),
                        'url' => $el['url'],
                        'class' => 'rounded-full bg-white p-3',
                        'class_wrapper' => 'before:rounded-full'
                    )) ?>
                </li>
                <?php $social_key++; endforeach; ?>
            </ul>
        </nav>
    </div>
</header>