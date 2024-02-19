<?php

/**
 * Button Component
 */

defined('ABSPATH') or die('No script kiddies please!');


function mm_get_button()
{
    $button = array();

    $mobile = mm_get_website_options()['handphone-perusahaan'];
    $mobile = str_replace('-', '', $mobile);
    $mobile = '62' . substr($mobile, 1);

    //whatsapp button
    $button['whatsapp-button'] = '<a class="btn wa-bg borad-5" href="//wa.me/' . $mobile . '" title="chat" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat</a>';

    //call button
    $button['call-button'] = '<a class="btn call-bg borad-5" href="tel:' . mm_get_website_options()['telepon-kantor-perusahaan'] . '" title="call"><i class="fas fa-phone"></i> Call</a>';

    //email button
    $button['email-button'] = '<a class="btn email-bg borad-5" href="mailto:' . mm_get_website_options()['email-perusahaan'] . '" title="email"><i class="fas fa-envelope"></i> Email</a>';

    return $button;
}
