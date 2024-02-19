<?php

/**
 * Header Options
 */

defined('ABSPATH') or die('No script kiddies please!');


use Carbon_Fields\Field;

function mm_header_options()
{
    return [
        //select header style (heads1, heads2, heads3)
        Field::make('select', 'header_style', 'Header Style')
            ->add_options([
                'header1' => 'Style 1',
                'header2' => 'Style 2',
                'header3' => 'Style 3',
            ])
            ->set_default_value('heads1'),
    ];
}



function mm_load_header_style()
{
    $style_is = carbon_get_theme_option('style_is');
    $header_style = carbon_get_theme_option('header_style');
    wp_enqueue_style('header-style', get_template_directory_uri() . "/assets/css/{$style_is}/{$header_style}.css", array('style'), mm_theme_version(), 'all');
}

add_action('wp_enqueue_scripts', 'mm_load_header_style');
