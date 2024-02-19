<?php

/**
 * Functions and definitions
 */

defined('ABSPATH') or die('No script kiddies please!');




function mm_theme_version()
{
    $theme = wp_get_theme();
    return $theme->get('Version');
}


/**
 *  Add theme support
 */
//title
add_theme_support('title-tag');

//post thumbnails
add_theme_support('post-thumbnails');

//menus
add_theme_support('menus');


add_action('after_setup_theme', 'load_cf_fields');
function load_cf_fields()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}














require_once get_template_directory() . '/assets/assets.php';
require_once get_template_directory() . '/options/options.php';
require_once get_template_directory() . '/plugins/plugins.php';
