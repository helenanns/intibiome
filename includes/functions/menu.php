<?php

// Register Menus
function register_menu()
{
	register_nav_menus([
		// Using array to specify more menus if needed
		'header-menu' => 'Header Menu', // Main Navigation
		'footer-menu' => 'Footer Menu', // Sidebar Navigation
	]);
}
add_action('init', 'register_menu');
