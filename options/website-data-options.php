<?php

/**
 * Website Data
 */

defined('ABSPATH') or die('No script kiddies please!');

function mm_get_website_options()
{
    $wo = array();

    //nama perusahaan
    $wo['nama-perusahaan'] = carbon_get_theme_option('nama_perusahaan');

    //deskripsi perusahaan
    $wo['deskripsi-perusahaan'] = carbon_get_theme_option('deskripsi_perusahaan');

    //alamat perusahaan
    $wo['alamat-perusahaan'] = carbon_get_theme_option('alamat_perusahaan');

    //nomor telepon kantor perusahaan
    $wo['telepon-kantor-perusahaan'] = carbon_get_theme_option('nomor_telepon_perusahaan');

    //nomor handphone perusahaan
    $wo['handphone-perusahaan'] = carbon_get_theme_option('nomor_handphone_perusahaan');

    //email perusahaan
    $wo['email-perusahaan'] = carbon_get_theme_option('email_perusahaan');

    //fax perusahaan
    $wo['fax-perusahaan'] = carbon_get_theme_option('fax_perusahaan');

    //jam kerja perusahaan
    $wo['jam-kerja-perusahaan'] = carbon_get_theme_option('jam_kerja_perusahaan');

    //logo besar perusahaan
    $wo['logo-besar-perusahaan'] = carbon_get_theme_option('logo_perusahaan_big');

    //logo kecil perusahaan
    $wo['logo-kecil-perusahaan'] = carbon_get_theme_option('logo_perusahaan_small');

    //google map perusahaan
    $wo['google-map-perusahaan'] = carbon_get_theme_option('google_map_perusahaan');
}




function mm_get_sosmeds()
{
    $sosmed = carbon_get_theme_option('sosmeds');
    if ($sosmed) {
        return $sosmed;
    }
}


function mm_get_customer_services()
{
    $cs = carbon_get_theme_option('customer_services');
    if ($cs) {
        return $cs;
    }
}
