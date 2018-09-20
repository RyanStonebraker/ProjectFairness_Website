<?php
require_once(get_template_directory() . '/admin/customizer_helpers.php');
require_once(get_template_directory() . '/admin/social-media.php');
require_once(get_template_directory() . '/admin/featured-home.php');

function projectfairness_frontend_styles() {
	wp_enqueue_style('pf-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('pf-master-style', get_stylesheet_directory_uri() . '/css/master.css');
	wp_enqueue_style('fa5', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script('fix-header', get_stylesheet_directory_uri() . '/js/fix-header.js');
}
add_action('wp_enqueue_scripts', 'projectfairness_frontend_styles', 1);

remove_filter('the_content', 'wpautop');
add_theme_support( 'post-thumbnails' );

function register_top_menu() {
  register_nav_menu('top-menu', __('Top Navbar'));
}
add_action( 'init', 'register_top_menu' );

function pf_scholarship_winners($atts) {
	ob_start();
	query_posts('cat=4');
	while (have_posts()) {
		the_post();
		get_template_part('content', 'winner');
	}
	return ob_get_clean();
}
add_shortcode('scholarship-winners', 'pf_scholarship_winners');

function pf_team_members($atts) {
	ob_start();
	query_posts('cat=5');
	while (have_posts()) {
		the_post();
		get_template_part('content', 'team_member');
	}
	return ob_get_clean();
}
add_shortcode('team-members', 'pf_team_members');

function pf_member($atts) {
	$title = $atts['title'];
	return "<h5 class='team-title'>${title}</h5>";
}
add_shortcode('member', 'pf_member');
