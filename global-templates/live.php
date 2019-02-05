<?php

/**
 * Live setup.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<div id="home-live">
    <div class="hidden-sx section parallax" style="background: url('http://guillermo-jimenez.local/wp-content/uploads/2018/11/background-dad.jpg');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;"
    >
        <div class="container text-light">
            <div class="col-md-6 px-0 text-light py-5">
                <h1 class="section-header font-italic">Watch Guillermo Jimenez Live</h1>
                <p class="lead my-3">Pastor Guillermo Jimenez is the founder and lead pastor of ACFC based in Las Vegas, NV. ACFC Church broadcasts live every weekend and on demand throughout the week on live.aguilascfc.org</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Join us Sundays at 9:30AM, 11:45AM, 2:00PM, 6:30PM EST</a></p>
                <a href="<?php echo get_theme_mod('home_podcast_button_url', '#'); ?>">
                    <button type="button" class="btn btn-primary"><?php echo get_theme_mod('home_podcast_button_text', 'Watch now'); ?></button>
                </a>
            </div>
        </div>
</div>
</div>