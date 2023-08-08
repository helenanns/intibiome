<?php
//Suporte para imagens destacadas
add_theme_support('post-thumbnails');

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}
add_filter('show_admin_bar', 'remove_admin_bar');