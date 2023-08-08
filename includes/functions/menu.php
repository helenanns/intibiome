<?php

// Register Menus
function register_menu()
{
	register_nav_menus([
		'header_menu_desktop' => 'Header menu desktop',
		'footer-menu' => 'Footer menu',
	]);
}
add_action('init', 'register_menu');



class Custom_Submenu_Walker extends Walker_Nav_Menu
{
	function start_lvl(&$output, $depth = 0, $args = null)
	{
		// Add a container div before the submenu starts
		$output .= '<div class="submenu-container"><ul class="sub-menu">';
	}

	function end_lvl(&$output, $depth = 0, $args = null)
	{
		// Close the container div after the submenu ends
		$output .= '</ul></div>';
	}
}
