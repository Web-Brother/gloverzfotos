<?php 

function learningWordPress_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/vendors/bootstrap/css/bootstrap.min.css');
}

add_action('wp_enqueue_scripts','learningWordPress_resources');

function js_files() {
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/vendors/bootstrap/js/bootstrap.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts','js_files');

// Navigation Menus

register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu')
));

// Get top ancestor

function get_top_ancestor_id() {

	global $post;

	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}

	return $post->ID;
}

// Does page have children?

function has_children() {

	global $post;

	$pages = get_pages('child_of=' . $post->ID);

	return count($pages);
}