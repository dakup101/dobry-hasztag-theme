<?php
// Register Custom Post Type
function people_post_type() {

	$labels = array(
		'name'                  => _x( 'Dobrzy ludzie', 'Post Type General Name', 'dobry-hasztag' ),
		'singular_name'         => _x( 'Dobry Człowiek', 'Post Type Singular Name', 'dobry-hasztag' ),
		'menu_name'             => __( 'Dobrzy Ludzie', 'dobry-hasztag' ),
		'name_admin_bar'        => __( 'Dobrzy Ludzie', 'dobry-hasztag' ),
		'archives'              => __( '', 'dobry-hasztag' ),
		'attributes'            => __( '', 'dobry-hasztag' ),
		'parent_item_colon'     => __( '', 'dobry-hasztag' ),
		'all_items'             => __( 'Wszystkie', 'dobry-hasztag' ),
		'add_new_item'          => __( 'Dodaj nowy', 'dobry-hasztag' ),
		'add_new'               => __( 'Dodaj Nowy', 'dobry-hasztag' ),
		'new_item'              => __( 'Nowy', 'dobry-hasztag' ),
		'edit_item'             => __( 'Edytuj', 'dobry-hasztag' ),
		'update_item'           => __( 'Zaktualizuj', 'dobry-hasztag' ),
		'view_item'             => __( 'Zobacz', 'dobry-hasztag' ),
		'view_items'            => __( 'Wyświelij', 'dobry-hasztag' ),
		'search_items'          => __( 'Szukaj', 'dobry-hasztag' ),
		'not_found'             => __( 'Nie znaleziono', 'dobry-hasztag' ),
		'not_found_in_trash'    => __( 'Nie znaleziono', 'dobry-hasztag' ),
		'featured_image'        => __( 'Obrazek', 'dobry-hasztag' ),
		'set_featured_image'    => __( 'Ustaw obrazek', 'dobry-hasztag' ),
		'remove_featured_image' => __( 'Usuń obrazek', 'dobry-hasztag' ),
		'use_featured_image'    => __( 'Użyj jako Obrazek', 'dobry-hasztag' ),
		'insert_into_item'      => __( '', 'dobry-hasztag' ),
		'uploaded_to_this_item' => __( '', 'dobry-hasztag' ),
		'items_list'            => __( '', 'dobry-hasztag' ),
		'items_list_navigation' => __( '', 'dobry-hasztag' ),
		'filter_items_list'     => __( '', 'dobry-hasztag' ),
	);
	$args = array(
		'label'                 => __( 'Dobry Człowiek', 'dobry-hasztag' ),
		'description'           => __( 'Dobrzy ludzie', 'dobry-hasztag' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'post',
	);
	register_post_type( 'people', $args );

}
add_action( 'init', 'people_post_type', 0 );