<?php

function custom_js()
{
	global $theme_uri;
	$post_type = get_post_type();

	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		$mainJS = "{$theme_uri}/assets/js/main.js";
		wp_register_script('main', $mainJS, [], array());
		wp_enqueue_script('main');
	}

	if (is_page_template('template-homepage.php')) {
        $homeJS = '/assets/js/home.js';
        wp_register_script('home', $theme_uri . $homeJS, array());
        wp_enqueue_script('home');
    }
}
add_action('wp_footer', 'custom_js');


function custom_css()
{
	global $theme_uri;
	$post_type = get_post_type();

	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		$mainCSS = "{$theme_uri}/assets/css/main.css";
		wp_register_style('main-css', $mainCSS, [], null);
		wp_enqueue_style('main-css');
	}

	if (is_page_template('template-homepage.php')) {
        $home = '/assets/css/home.css';
        wp_register_style('home-css', $theme_uri . $home, [], '1.0.0');
        wp_enqueue_style('home-css');
    }
}
add_action('wp_enqueue_scripts', 'custom_css');
