<?php

/**
 * Company Box Component
 */

defined('ABSPATH') or die('No script kiddies please!');

?>


<div class="compbox">

    <!-- nama perusahaan -->
    <span class="compbox-name head small color-accent-1 fw700">
        <?php echo esc_html(mm_get_website_options()['nama-perusahaan']); ?>
    </span>

    <!-- alamat -->
    <span class="compbox-address">
        <?php echo esc_html(mm_get_website_options()['alamat-perusahaan']); ?>
    </span>

    <!-- telepon -->
    <ul class="list-no-style horizontal-list">
        <li><?php echo esc_html(mm_get_website_options()['telepon-kantor-perusahaan']); ?></li>
        <li><?php echo esc_html(mm_get_website_options()['handphone-perusahaan']); ?></li>
    </ul>

    <!-- cta -->
    <ul class="list-no-style horizontal-list text-small compbox-cta">
        <li><?php echo mm_get_button()['whatsapp-button']; ?></li>
        <li><?php echo mm_get_button()['call-button']; ?></li>
        <li><?php echo mm_get_button()['email-button']; ?></li>
    </ul>




</div>