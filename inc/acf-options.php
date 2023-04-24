<?php if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Globalne elementy',
        'menu_title'    => 'Globalne elementy',
        'menu_slug'     => 'theme-global',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Social Media',
        'menu_title'    => 'Social Media',
        'parent_slug'   => 'theme-global',
    ));
}