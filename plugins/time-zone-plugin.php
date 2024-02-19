<?php

/**
 * Time Zone Plugin
 */

defined('ABSPATH') or die('No script kiddies please!');


function mm_get_time_zone()
{
    $date = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
    // echo $date->format('Y-m-d H:i:s');

    //format d-m-Y
    $tz = array();

    $tz['date'] = $date->format('d-F-Y');


    $jam = $date->format('H');
    if ($jam >= 0 && $jam <= 11) {
        $tz['greeting'] = 'pagi';
    } elseif ($jam >= 12 && $jam <= 14) {
        $tz['greeting'] = 'siang';
    } elseif ($jam >= 15 && $jam <= 18) {
        $tz['greeting'] = 'sore';
    } elseif ($jam >= 19 && $jam <= 24) {
        $tz['greeting'] = 'malam';
    }


    return $tz;
}
