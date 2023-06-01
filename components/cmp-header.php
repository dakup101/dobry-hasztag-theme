<?php $args = wp_parse_args( $args, array("alt" => false) ) ?>

<header class="absolute top-10 left-0 w-full">
    <div class="container mx-auto flex justify-between items-center">
        <a href="<?php echo get_home_url() ?>"
           class=" shrink-0">
            <?php if ($args["alt"]) : ?>
            <img src="<?php echo IMG . "logo.png" ?>"
                 alt="#DOBRYHASZTAG"
                 class="h-full w-auto max-h-20 lg:max-h-28 xl:max-h-32">
            <?php else: ?>
            <img src="<?php echo IMG . "logo.png" ?>"
                 alt="#DOBRYHASZTAG"
                 class="h-full w-auto max-h-20 xl:max-h-24 2xl:max-h-32">
            <?php endif; ?>
        </a>
        <nav class="hidden xl:block">
            <ul class="flex list-none">
                <?php $menu = get_menu("primary"); 
                $menus_count = count($menu['menus']) - 1;
                $menus_key = 0;
                foreach($menu["menus"] as $el) : ?>
                <li class="<?php echo $menus_key < $menus_count ? 'mr-5 2xl:mr-8' : '' ?>">
                    <?php 
                    $active = !empty($el['active']) ? 'bg-yellow translate-x-1.5 translate-y-1.5 events-none' : '';
                    get_template_part( CMP, "btn", array(
                        'content' => $el['title'],
                        'url' => $el['url'],
                        'class' => 'text-base 2xl:text-lg' . ' ' . $active, 
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
                        'class' => 'rounded-full bg-white p-2 2xl:p-3',
                        'class_wrapper' => 'before:rounded-full'
                    )) ?>
                </li>
                <?php $social_key++; endforeach; ?>
            </ul>
        </nav>
    </div>
</header>