<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Slider.
	 */

	$labels = array(
		"name" => __( "Slider", "transtics" ),
		"singular_name" => __( "Slider", "transtics" ),
	);

	$args = array(
		"label" => __( "Slider", "transtics" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "slider", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-slides",
		"supports" => array( "title" ),
	);

	register_post_type( "slider", $args );

	/**
	 * Post Type: Testimonial.
	 */

	$labels = array(
		"name" => __( "Testimonial", "transtics" ),
		"singular_name" => __( "Testimonial", "transtics" ),
	);

	$args = array(
		"label" => __( "Testimonial", "transtics" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "testimonial", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-testimonial",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "testimonial", $args );

	/**
	 * Post Type: Service.
	 */

	$labels = array(
		"name" => __( "Service", "transtics" ),
		"singular_name" => __( "Service", "transtics" ),
	);

	$args = array(
		"label" => __( "Service", "transtics" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "service", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-buddicons-topics",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "service", $args );

	/**
	 * Post Type: Team.
	 */

	$labels = array(
		"name" => __( "Team", "transtics" ),
		"singular_name" => __( "Team", "transtics" ),
	);

	$args = array(
		"label" => __( "Team", "transtics" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "team", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-businessperson",
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "team", $args );

	/**
	 * Post Type: Client.
	 */

	$labels = array(
		"name" => __( "Client", "transtics" ),
		"singular_name" => __( "Client", "transtics" ),
	);

	$args = array(
		"label" => __( "Client", "transtics" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "client", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-money",
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "client", $args );

	/**
	 * Post Type: Gallery.
	 */

	$labels = array(
		"name" => __( "Gallery", "transtics" ),
		"singular_name" => __( "Gallery", "transtics" ),
	);

	$args = array(
		"label" => __( "Gallery", "transtics" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "gallery", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "gallery", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );