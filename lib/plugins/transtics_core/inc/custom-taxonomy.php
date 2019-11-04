<?php

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Service Categoires.
	 */

	$labels = array(
		"name" => __( "Service Categoires", "transtics" ),
		"singular_name" => __( "Service Category", "transtics" ),
	);

	$args = array(
		"label" => __( "Service Categoires", "transtics" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'service_category', 'with_front' => true,  'hierarchical' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "service_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		);
	register_taxonomy( "service_category", array( "service" ), $args );

	/**
	 * Taxonomy: Team Category.
	 */

	$labels = array(
		"name" => __( "Team Category", "transtics" ),
		"singular_name" => __( "Team Category", "transtics" ),
	);

	$args = array(
		"label" => __( "Team Category", "transtics" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'team_category', 'with_front' => true,  'hierarchical' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "team_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "team_category", array( "team" ), $args );

	/**
	 * Taxonomy: Gallery Category.
	 */

	$labels = array(
		"name" => __( "Gallery Category", "transtics" ),
		"singular_name" => __( "Gallery Category", "transtics" ),
	);

	$args = array(
		"label" => __( "Gallery Category", "transtics" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'gallery_category', 'with_front' => true,  'hierarchical' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "gallery_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		);
	register_taxonomy( "gallery_category", array( "gallery" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );