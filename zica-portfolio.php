<?php
/*
Plugin Name: Zica Portfolio Posts
Plugin URI: http://www.oyothemes.com/
Description: Declares a plugin that will create a custom post type - Portfolio.
Version: 1.1
Author: OyoThemes
Author URI: http://www.oyothemes.com/
License: GPLv2
*/

add_action( 'init', 'zica_create_portfolio_post_type' );

function zica_create_portfolio_post_type() {
	register_post_type( 'portfolio',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Portfolio', 'zica'),
				'singular_name' => __('Portfolio', 'zica')
			),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_icon' => 'dashicons-portfolio',
			'supports' => array('title', 'editor', 'thumbnail', 'comments', 'revisions'),
			'rewrite' => array(
				'slug' => 'portfolio',
				'with_front' => false
			),
			'has_archive' => false,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'exclude_from_search' => true,
			'publicly_queryable' => true,
			'taxonomies' => array('category', 'post_tag')
		)
	);
}
?>