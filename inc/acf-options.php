<?php if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Motyw',
        'menu_title'    => 'Motyw',
        'menu_slug'     => 'theme-global',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'YouTube API',
        'menu_title'    => 'YouTube API',
        'parent_slug'   => 'theme-global',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Social Media',
        'menu_title'    => 'Social Media',
        'parent_slug'   => 'theme-global',
    ));
}