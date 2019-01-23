<?php

/**
 * Jumbotron setup.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<div id="home-devocional">
    <!-- <div class="hidden-sx section parallax" style="background: url(<?php echo get_theme_mod('home_devotionals_image', get_bloginfo('template_url').'/img/showcase.jpg') ?>);
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;"
    > -->
    <div style="background-color: #EFEFEF;">
        <h3 class="text-center section-header"><?php echo get_theme_mod('home_devotionals_heading', 'YAY I build a theme'); ?></h3>
        <p class="text-center section-sub-header"><?php echo get_theme_mod('home_devotionals_sub_heading', 'YAY I build a theme'); ?></p>
        <div class="container text-center">
            <div class="top-pad">
            <!-- Sign up form -->
            <div id="header__contact-form">
              <?php echo do_shortcode( '[contact-form-7 id="2805" title="Suscribirse"]' ); ?>

            </div>
            </div>
        </div>
    </div>
</div>

 
