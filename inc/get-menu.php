<?php
function get_menu($current_menu): array
{
    $menu_name = $current_menu; //menu slug
    $locations = get_nav_menu_locations();
    $menu_obj = wp_get_nav_menu_object($locations[$menu_name]);
    $array_menu = wp_get_nav_menu_items($menu_obj);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID']      =   $m->ID;
            $menu[$m->ID]['title']       =   $m->title;
            $menu[$m->ID]['url']         =   $m->url;
            $menu[$m->ID]['children']    =   array();
            $menu[$m->ID]['active'] = $_SERVER['REQUEST_URI'] == parse_url($m->url, PHP_URL_PATH);
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID']       =   $m->ID;
            $submenu[$m->ID]['title']    =   $m->title;
            $submenu[$m->ID]['url']  =   $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return array(
        'menus' => $menu,
        'submenus' => $submenu
    );
    return $current_menu;
}