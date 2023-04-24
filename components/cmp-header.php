<header class="container mx-auto">
    <div class="flex justify-between">
        <a href="<?php echo get_home_url() ?>">
            <img src="<?php echo IMG . "logo.png" ?>"
                 alt="#DOBRYHASZTAG">
        </a>
        <nav>
            <ul class="flex list-none">
                <?php $menu = get_menu("primary"); 
                $menus_count = count($menu['menus']) - 1;
                $menus_key = 0;
                foreach($menu["menus"] as $el) : ?>
                <li class="<?php echo $menus_key < $menus_count ? 'mr-7' : '' ?>">
                    <?php get_template_part( CMP, "btn", array(
                        'content' => $el['title'],
                        'url' => $el['url'],
                        'class' => !empty($el['active']) ? 'bg-yellow translate-x-1.5 translate-y-1.5 events-none' : '', 
                    )) ?>
                </li>
                <?php $menus_key++; endforeach; ?>
            </ul>
        </nav>
    </div>
</header>