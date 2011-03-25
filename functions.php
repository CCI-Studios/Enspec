<?php

add_action('after_setup_theme', 'pro_motion_setup');

if (!function_exists('pro_motion_setup')) {
	function pro_motion_setup() {
		// add_theme_support...


		// add internationalization
		load_theme_textdomain('pro_motion_ads', TEMPLATEPATH.'/languages');
		$locale = get_locale();
		$locale_file = TEMPLATEPATH."/languages/$locale.php";
		if (is_readable($locale_file))
			require_once($locale_file);

		// add menu support
		register_nav_menus(array(
			'menu-1'	=> __('Menu 1'),
			'menu-2'	=> __('Menu 2')
		));
	}
}

function pro_motion_widgets_init() {
	// masthead
	register_sidebar(array(
		'name' 	=> __('Masthead Widget Area', 'pro_motion_ads'),
		'id'	=> 'masthead-widget-area',
		'description'	=> __('The widget blog that appears at the top of the page'),
		'before_widget'	=> '<li id="%1$s" class="widget-container %2#s">',
		'after_widget'	=> '</li>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	));
	register_sidebar(array(
		'name' 	=> __('Bottom Widget Area', 'pro_motion_ads'),
		'id'	=> 'bottom-widget-area',
		'description'	=> __('The widget blog that appears at the bottom of the page'),
		'before_widget'	=> '<li id="%1$s" class="widget-container %2#s">',
		'after_widget'	=> '</li>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	));
	register_sidebar(array(
		'name' 	=> __('Footer Widget Area', 'pro_motion_ads'),
		'id'	=> 'footer-widget-area',
		'description'	=> __('The widget blog that appears at the footer of the page'),
		'before_widget'	=> '<li id="%1$s" class="widget-container %2#s">',
		'after_widget'	=> '</li>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	));
}
add_action('widgets_init', 'pro_motion_widgets_init');

function add_first_and_last($output) {
  $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
  $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
  return $output;
}
add_filter('wp_nav_menu', 'add_first_and_last');
