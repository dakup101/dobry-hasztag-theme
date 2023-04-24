<header class="container mx-auto">
    <div class="flex justify-between">
        <a href="<?php echo get_home_url() ?>">
            <img src="<?php echo IMG . "logo.png" ?>" alt="#DOBRYHASZTAG">
        </a>
        <nav>
            <ul>
                <?php $menu = get_menu("primary"); foreach($menu["menus"] as $key => $el) : ?>
                <li>
                    <?php get_template_part( CMP, "btn", array(
                        'content' => $el['title'],
                        'url' => $el['url'],
                        'class' => !empty($el['active']) ? 'bg-yellow translate-x-1.5 translate-y-1.5 events-none' : '', 
                    )) ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>