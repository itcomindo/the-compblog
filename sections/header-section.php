<?php

/**
 * Header Section
 */

defined('ABSPATH') or die('No script kiddies please!');

?>

<header id="header" class="section <?php echo esc_html(carbon_get_theme_option('header_style')); ?>">
    <div class="container h100">
        <div id="header-wr" class="h100">
            <!-- header left -->
            <div id="header-left" class="h100">
                <h2 class="head smaller">
                    <a href="/" title="<?php get_bloginfo('name'); ?>">
                        PT. Wordpress Compro Blog Theme
                    </a>
                </h2>
            </div>


            <!-- header right -->
            <div id="header-right" class="h100">
                <nav id="header-menu">
                    <?php
                    get_template_part('components/company-box-component');
                    ?>
                    <ul class="list-no-style horizonal-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/">About</a></li>
                        <li><a href="/">Blog</a></li>
                        <li><a href="/">Contact</a></li>
                    </ul>
                </nav>
                <div class="header-menu-trigger cursor-pointer"><i class="fas fa-bars"></i></div>
            </div>
        </div>
    </div>
</header>