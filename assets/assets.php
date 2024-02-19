<?php

/**
 * Assets
 */

defined('ABSPATH') or die('No script kiddies please!');


function mm_load_styles_and_scripts()
{
    $version = mm_theme_version();


    //load normalize.css from cdn
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1', 'all');

    //load fontawesome from cdn
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3', 'all');

    //load style.css from theme directory
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), $version, 'all');

    //load global.css
    // wp_enqueue_style('global', get_template_directory_uri() . '/assets/css/global.css', array('style'), $version, 'all');

    //load front-page.css from assets/css directory
    wp_enqueue_style('front-page-css', get_template_directory_uri() . '/assets/css/front-page.css', array('theme-style'), $version, 'all');

    /**
     * Load JavaScript
     */

    //dequeue wordpress jquery current version
    wp_deregister_script('jquery');

    //load jquery from cdn
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js', array(), '3.7.0', true);

    //load global.js from assets/js directory
    wp_enqueue_script('global-js', get_template_directory_uri() . '/assets/js/global.js', array('jquery'), $version, true);
}

add_action('wp_enqueue_scripts', 'mm_load_styles_and_scripts');



/**
 *  load admin css and scripts
 */
function load_admin_styles_and_scripts()
{
    $version = mm_theme_version();
    wp_enqueue_style('admin-css', get_template_directory_uri() . '/assets/css/admin.css', array(), $version, 'all');
    wp_enqueue_script('admin-js', get_template_directory_uri() . '/assets/js/admin.js', array('jquery'), $version, true);
}
add_action('admin_enqueue_scripts', 'load_admin_styles_and_scripts');
