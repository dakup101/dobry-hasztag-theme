<div class="fixed top-0 left-0 w-full h-screen bg-dark bg-opacity-50 z-50 opacity-0 pointer-events-none transition-all"
     data-mobile-nav-wrap>
    <div class="h-full px-5 py-10 bg-yellow w-72 shadow-xl -translate-x-full transition-all"
         data-mobile-nav>
        <div class="flex justify-between items-center mb-5">
            <span class="uppercase font-bold font-archio text-lg">Menu</span>
            <?php get_template_part( CMP, "btn", array(
                        'content' => file_get_contents(IMG . "cross.svg"),
                        'type' => 'button',
                        'class' => 'rounded-full p-3 bg-cyan mobile-nav-btn',
                        'class_wrapper' => 'before:rounded-full',
                        'dataset' => array(
                            'data-mobile-nav-close' => ''
                        )
                    )) ?>
        </div>

        <nav>
            <ul class="flex flex-col list-none">

                <?php $menu = get_menu("primary"); 
                $menus_count = count($menu['menus']) - 1;
                $menus_key = 0;
                foreach($menu["menus"] as $el) : ?>
                <li class="<?php echo $menus_key < $menus_count ? 'mb-5' : '' ?>">
                    <?php 
                    $active = !empty($el['active']) ? 'bg-yellow translate-x-1.5 translate-y-1.5 events-none' : '';
                    get_template_part( CMP, "btn", array(
                        'content' => $el['title'],
                        'url' => $el['url'],
                        'class' => 'text-base w-full text-center' . ' ' . $active, 
                        'class_wrapper' => "w-full mb-1.5 mr-1.5"
                    )) ?>
                </li>
                <?php $menus_key++; endforeach; ?>
            </ul>
        </nav>

    </div>
</div>