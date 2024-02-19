<?php

/**
 * Topbar Options
 */

defined('ABSPATH') or die('No script kiddies please!');

use Carbon_Fields\Field;

function mm_topbar_options()
{
    return [
        Field::make('separator', 'tbsep', 'Topbar Options')
            ->set_classes('cbsep-pr'),


        //checkbox enable topbar
        Field::make('checkbox', 'tb_enable', 'Enable Topbar')
            ->set_option_value('yes')
            ->set_default_value(true)
            ->set_help_text('Enable or disable the topbar'),

        Field::make('select', 'tb_style', 'Tobar Style')
            ->add_options([
                'tbs1' => 'Style 1',
                'tbs2' => 'Style 2',
                'tbs3' => 'Style 3',
            ])
            ->set_default_value('text'),



        //left topbar
        Field::make('separator', 'tbleftsep', 'Topbar Left')
            ->set_classes('cbsep-ch'),

        //options
        Field::make('select', 'tbl_content', 'Tobar Content')
            ->add_options([
                'text' => 'Text',
                'date' => 'Date'
            ])
            ->set_default_value('text'),

        //if text
        Field::make('text', 'tbl_text', 'Text')
            ->set_default_value('Selamat datang di website kami')
            ->set_conditional_logic([
                [
                    'field' => 'tbl_content',
                    'value' => 'text'
                ]
            ]),



        //right topbar
        Field::make('separator', 'tbrightsep', 'Topbar Right')
            ->set_classes('cbsep-ch'),

        //options
        Field::make('select', 'tbr_content', 'Tobar Content')
            ->add_options([
                'text' => 'Text',
                'search-form' => 'Search Form',
            ])
            ->set_default_value('search-form'),

        //if text
        Field::make('text', 'tbr_text', 'Text')
            ->set_default_value('Selamat datang di website kami')
            ->set_conditional_logic([
                [
                    'field' => 'tbr_content',
                    'value' => 'text'
                ]
            ]),

    ];
}


function tb_enable()
{
    $tb_enable = carbon_get_theme_option('tb_enable');
    return $tb_enable;
}



function mm_get_topbar_left()
{
    $tbl_content = carbon_get_theme_option('tbl_content');
    if ($tbl_content == 'text') {
        if (carbon_get_theme_option('tbl_text')) {
            $tbl_content = carbon_get_theme_option('tbl_text');
            return $tbl_content;
        } else {
            $tbl_content = 'Selamat datang di website kami';
            return $tbl_content;
        }
    } else {
        $tbl_content = mm_get_time_zone()['date'];
        return $tbl_content;
    }
}




function mm_get_topbar_right()
{
    $tbr_content = carbon_get_theme_option('tbr_content');
    if ($tbr_content == 'text') {
        if (carbon_get_theme_option('tbr_text')) {
            $tbr_content = carbon_get_theme_option('tbr_text');
            return $tbr_content;
        } else {
            $tbr_content = 'Kami Siap Melayani Anda';
            return $tbr_content;
        }
    } else {
        $tbr_content = '<form id="search-form" method="get" action="' . esc_url(home_url(' / ')) . '"><input type="text" class="search-field" name="s" placeholder="Search" value="' . get_search_query() . '"><input class="btn" type="submit" value="Search"></form>';
        return $tbr_content;
    }
}



function mm_load_topbar_style()
{
    $style_is = carbon_get_theme_option('style_is');
    $tb_style = carbon_get_theme_option('tb_style');
    wp_enqueue_style('tb-style', get_template_directory_uri() . "/assets/css/{$style_is}/{$tb_style}.css", array('style'), mm_theme_version(), 'all');
}

add_action('wp_enqueue_scripts', 'mm_load_topbar_style');
