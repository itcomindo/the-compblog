<?php

/**
 * Theme Options
 */

defined('ABSPATH') or die('No script kiddies please!');

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'mm_global_theme_options');
function mm_global_theme_options()
{
    $fields_container = Container::make('theme_options', __('Theme Options'))
        ->add_fields(array(
            ...mm_style_options_fields(),
        ));


    // topbar Options
    Container::make('theme_options', 'Website')
        ->set_page_parent($fields_container)
        ->add_fields([
            ...mm_website_options(),
        ]);



    // topbar Options
    Container::make('theme_options', 'Topbar')
        ->set_page_parent($fields_container)
        ->add_fields([
            ...mm_topbar_options(),
        ]);











    //field end above this line
}
