<?php

/**
 * Topbar Section
 */

defined('ABSPATH') or die('No script kiddies please!');

if (carbon_get_theme_option('tb_enable')) {
    $tb_class = carbon_get_theme_option('tb_style');
    $tb_bg = carbon_get_theme_option('tb_bg');
}



?>

<div id="tb" class="section <?php echo esc_html($tb_class); ?>">
    <div class="container h100">
        <div id="tb-wr" class="h100">
            <div id="tb-left" class="h100"><?php echo mm_get_topbar_left(); ?></div>
            <div id="tb-right" class="h100"><?php echo mm_get_topbar_right(); ?></div>
        </div>
    </div>
</div>