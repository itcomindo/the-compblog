<?php

/**
 * Website Options
 */

defined('ABSPATH') or die('No script kiddies please!');

use Carbon_Fields\Field;

function mm_website_options()
{
    return [

        //nama perusahaan
        Field::make('text', 'nama_perusahaan', 'Nama Perusahaan')
            ->set_default_value('PT. Budi Haryono'),

        //deskripsi perusahaan max 160 karakter
        Field::make('textarea', 'deskripsi_perusahaan', 'Deskripsi Perusahaan')
            ->set_attribute('maxLength', 250)
            ->set_default_value('Perusahaan kami adalah perusahaan yang bergerak di bidang jasa pembuatan website, jasa IT, jasa digital marketing di Indonesia.')
            ->set_help_text('Deskripsi perusahaan max 250 karakter, kosongkan jika tidak diperlukan'),


        //alamat perusahaan
        Field::make('text', 'alamat_perusahaan', 'Alamat Perusahaan')
            ->set_default_value('Jl. Jend. Sudirman No. 123, Jakarta Pusat, DKI Jakarta, 10220'),

        //nomor telepon kantor
        Field::make('text', 'nomor_telepon_kantor', 'Nomor Telepon Kantor')
            ->set_help_text('kosongkan jika tidak diperlukan')
            ->set_default_value('021-1234567'),

        //nomor handphone kantor
        Field::make('text', 'nomor_handphone_perusahaan', 'Nomor Handphone')
            ->set_default_value('08123456789'),

        //email perusahaan
        Field::make('text', 'email_perusahaan', 'Email Perusahaan')
            ->set_default_value('mail.budiharyono@gmail.com'),

        //fax perusahaan
        Field::make('text', 'fax_perusahaan', 'Fax Perusahaan')
            ->set_help_text('kosongkan jika tidak diperlukan')
            ->set_default_value('021-1234567'),

        //jam kerja
        Field::make('text', 'jam_kerja_perusahaan', 'Jam Kerja')
            ->set_help_text('kosongkan jika tidak diperlukan')
            ->set_default_value('Senin - Jumat, 08:00 - 17:00'),

        //logo perusahaan besar
        Field::make('image', 'logo_perusahaan_big', 'Logo Perusahaan Besar')
            ->set_value_type('url')
            ->set_help_text('Upload logo perusahaan besar untuk desktop saran: 512x512 png tanpa background'),

        //logo perusahaan kecil
        Field::make('image', 'logo_perusahaan_small', 'Logo Perusahaan Kecil')
            ->set_value_type('url')
            ->set_help_text('Upload logo perusahaan kecil untuk mobile saran: 256x256 png tanpa background'),




        //textarea google map perusahaan
        Field::make('textarea', 'google_map_perusahaan', 'Google Map')
            ->set_default_value('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.073394073073!2d106.8232423147696!3d-6.175392995527073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5f3f3f3f3f3%3A0x2e69f5f3f3f3f3f3!2sGedung%20Sudirman%20Tower%20Condominium!5e0!3m2!1sid!2sid!4v1617220730733!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>')
            ->set_help_text('Masukkan kode iframe google map'),





        //sosmed
        Field::make('separator', 'sosmedsep', 'Social Media')
            ->set_classes('cbsep-pr'),

        Field::make('complex', 'sosmeds', 'Social Media')
            ->set_layout('tabbed-horizontal')
            ->add_fields([

                //platform sosmed
                Field::make('text', 'sosmed_platform', 'Nama Sosmed')
                    ->set_default_value('Facebook'),

                //link sosmed
                Field::make('text', 'sosmed_link', 'Link Sosmed')
                    ->set_default_value('https://www.facebook.com/joomblaster'),


                //text for icon sosmed
                Field::make('text', 'sosmed_icon', 'Icon Sosmed')
                    ->set_default_value('fab fa-facebook'),

            ])
            ->set_header_template('
                <% if (sosmed_platform) { %>
                    <%- sosmed_platform %>
                <% } else { %>
                    Service
                <% } %>
            '),


        //customer service
        Field::make('separator', 'cssep', 'Customer Service')
            ->set_classes('cbsep-pr'),

        Field::make('complex', 'customer_services', 'Customer Service')
            ->set_layout('tabbed-horizontal')
            ->add_fields([
                //nama cs
                Field::make('text', 'nama_cs', 'Nama Customer Service')
                    ->set_help_text('kosongkan jika tidak diperlukan')
                    ->set_default_value('Budi Haryono'),

                //nomor telepon cs
                Field::make('text', 'nomor_telepon_cs', 'Nomor Telepon Customer Service')
                    ->set_help_text('kosongkan jika tidak diperlukan')
                    ->set_default_value('08123456789'),

                //nomor whatsapp cs
                Field::make('text', 'nomor_whatsapp_cs', 'Nomor Whatsapp Customer Service')
                    ->set_help_text('kosongkan jika tidak diperlukan')
                    ->set_default_value('08123456789'),

                //email cs
                Field::make('text', 'email_cs', 'Email Customer Service')
                    ->set_help_text('kosongkan jika tidak diperlukan')
                    ->set_default_value('mail.cs1@gmail.com'),





            ])
            ->set_header_template('
                <% if (nama_cs) { %>
                    <%- nama_cs %>
                <% } else { %>
                    Service
                <% } %>
            '),





    ];
}
