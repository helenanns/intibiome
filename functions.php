<?php
global $theme_uri;
$theme_uri = get_template_directory_uri();

// Set Head Content
include('includes/functions/set-head-content.php');

//Acf Fields
include('includes/functions/acf.php');

// Post Types
include 'includes/functions/post-types.php';

// scripts
include 'includes/functions/scripts.php';

// Querys
include 'includes/functions/query.php';

// Utils
include 'includes/functions/utils.php';

// Menu
include 'includes/functions/menu.php';
