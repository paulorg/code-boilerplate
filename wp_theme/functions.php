<?php
	require_once('inc/custom-types.php');
	require_once('inc/metaboxes.php');
	require_once('inc/filters.php');

	function theme_setup() {
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('html5');
		add_theme_support('post-thumbnails');
		add_post_type_support('page', 'excerpt');
		remove_action('wp_head', 'feed_links_extra', 3);
		remove_action('wp_head', 'feed_links', 2);
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'index_rel_link');
		remove_action('wp_head', 'parent_post_rel_link', 10, 0);
		remove_action('wp_head', 'start_post_rel_link', 10, 0);
		remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
		remove_action('wp_head', 'wp_generator');
	}
	add_action('after_setup_theme', 'theme_setup');

	function add_theme_scripts() {
		wp_enqueue_style('style', get_stylesheet_uri(), array(), 1.0);
		wp_enqueue_script('script-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array (), 1.0, true);
		wp_enqueue_script('script-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array (), 1.0, true);
		wp_enqueue_script('script-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js', array (), 1.0, true);
		wp_enqueue_script('script-city', get_template_directory_uri() . '/js/site.js', array (), 1.01, true);
	}
	add_action('wp_enqueue_scripts', 'add_theme_scripts');
