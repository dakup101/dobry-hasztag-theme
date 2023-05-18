<?php
// Register Custom Post Type
function tiktok_post_post_type() {

	$labels = array(
		'name'                  => _x( 'Filmiki z Tiktoka', 'Post Type General Name', 'dobry-hasztag' ),
		'singular_name'         => _x( 'Filmik z TikToka', 'Post Type Singular Name', 'dobry-hasztag' ),
		'menu_name'             => __( 'TikTok', 'dobry-hasztag' ),
		'name_admin_bar'        => __( 'TikTok', 'dobry-hasztag' ),
		'archives'              => __( '', 'dobry-hasztag' ),
		'attributes'            => __( '', 'dobry-hasztag' ),
		'parent_item_colon'     => __( '', 'dobry-hasztag' ),
		'all_items'             => __( 'Wszystkie', 'dobry-hasztag' ),
		'add_new_item'          => __( 'Dodaj nowy', 'dobry-hasztag' ),
		'add_new'               => __( 'Dodaj Nowy', 'dobry-hasztag' ),
		'new_item'              => __( 'Nowy Filmik', 'dobry-hasztag' ),
		'edit_item'             => __( 'Edytuj', 'dobry-hasztag' ),
		'update_item'           => __( 'Zaktualizuj', 'dobry-hasztag' ),
		'view_item'             => __( 'Zobacz', 'dobry-hasztag' ),
		'view_items'            => __( 'Zobacz', 'dobry-hasztag' ),
		'search_items'          => __( 'Szukaj', 'dobry-hasztag' ),
		'not_found'             => __( 'Nie znaleziono', 'dobry-hasztag' ),
		'not_found_in_trash'    => __( 'Nie znaleziono', 'dobry-hasztag' ),
		'featured_image'        => __( 'Preview', 'dobry-hasztag' ),
		'set_featured_image'    => __( 'Ustaw Preview', 'dobry-hasztag' ),
		'remove_featured_image' => __( 'Usuń Preview', 'dobry-hasztag' ),
		'use_featured_image'    => __( 'Użyj jako Preview', 'dobry-hasztag' ),
		'insert_into_item'      => __( '', 'dobry-hasztag' ),
		'uploaded_to_this_item' => __( '', 'dobry-hasztag' ),
		'items_list'            => __( '', 'dobry-hasztag' ),
		'items_list_navigation' => __( '', 'dobry-hasztag' ),
		'filter_items_list'     => __( '', 'dobry-hasztag' ),
	);
	$args = array(
		'label'                 => __( 'Filmik z TikToka', 'dobry-hasztag' ),
		'description'           => __( 'Filmiki z TikToka', 'dobry-hasztag' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_icon'             => 'data:image/svg+xml;base64,' . base64_encode(file_get_contents(IMG . 'tt.svg')),
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'tiktok_post', $args );

}
add_action( 'init', 'tiktok_post_post_type', 0 );