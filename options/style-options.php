<?php

/**
 * Style Options
 */

defined('ABSPATH') or die('No script kiddies please!');

use Carbon_Fields\Field;

function mm_style_options_fields()
{
    return [
        Field::make('select', 'style_is', 'Pilih Style')
            ->add_options([
                's1' => 'Style 1',
                's2' => 'Style 2',
                's3' => 'Style 3',
            ])
            ->set_default_value('s1'),
    ];
}


function add_my_class_to_body($classes)
{
    $style_is = carbon_get_theme_option('style_is');
    $classes[] = $style_is;
    return $classes;
}
add_filter('body_class', 'add_my_class_to_body');


function mm_load_style()
{
    $style_is = carbon_get_theme_option('style_is');
    wp_enqueue_style('theme-style', get_template_directory_uri() . "/assets/css/{$style_is}/{$style_is}.css", array('style'), mm_theme_version(), 'all');
}

add_action('wp_enqueue_scripts', 'mm_load_style');
