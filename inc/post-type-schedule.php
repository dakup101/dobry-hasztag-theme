<?php
// Register Custom Post Type
function schedule_post_type() {

	$labels = array(
		'name'                  => _x( 'Wydarzenia', 'Post Type General Name', 'dobry-hasztag' ),
		'singular_name'         => _x( 'Wydarzenie', 'Post Type Singular Name', 'dobry-hasztag' ),
		'menu_name'             => __( 'Harmonogram', 'dobry-hasztag' ),
		'name_admin_bar'        => __( 'Harmonogram', 'dobry-hasztag' ),
		'archives'              => __( 'Harmonogram', 'dobry-hasztag' ),
		'attributes'            => __( '', 'dobry-hasztag' ),
		'parent_item_colon'     => __( '', 'dobry-hasztag' ),
		'all_items'             => __( 'Wszystkie', 'dobry-hasztag' ),
		'add_new_item'          => __( 'Dodaj nowe', 'dobry-hasztag' ),
		'add_new'               => __( 'Dodaj nowe', 'dobry-hasztag' ),
		'new_item'              => __( 'Nowe wydarzenie', 'dobry-hasztag' ),
		'edit_item'             => __( 'Edytuj', 'dobry-hasztag' ),
		'update_item'           => __( 'Zaktualizuj', 'dobry-hasztag' ),
		'view_item'             => __( 'Zobacz', 'dobry-hasztag' ),
		'view_items'            => __( 'Zobacz', 'dobry-hasztag' ),
		'search_items'          => __( 'Szukaj', 'dobry-hasztag' ),
		'not_found'             => __( 'Nie znaleziono', 'dobry-hasztag' ),
		'not_found_in_trash'    => __( 'Nie znaleziono', 'dobry-hasztag' ),
		'featured_image'        => __( 'Obrazek', 'dobry-hasztag' ),
		'set_featured_image'    => __( 'Ustaw obrazek', 'dobry-hasztag' ),
		'remove_featured_image' => __( 'Usuń obrazek', 'dobry-hasztag' ),
		'use_featured_image'    => __( 'Użyj jako obrazek', 'dobry-hasztag' ),
		'insert_into_item'      => __( '', 'dobry-hasztag' ),
		'uploaded_to_this_item' => __( '', 'dobry-hasztag' ),
		'items_list'            => __( '', 'dobry-hasztag' ),
		'items_list_navigation' => __( '', 'dobry-hasztag' ),
		'filter_items_list'     => __( '', 'dobry-hasztag' ),
	);
	$rewrite = array(
		'slug'                  => 'wydarzenie',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Wydarzenie', 'dobry-hasztag' ),
		'description'           => __( 'Harmonogram', 'dobry-hasztag' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'excerpt' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'harmonogram',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'schedule', $args );

}
add_action( 'init', 'schedule_post_type', 0 );