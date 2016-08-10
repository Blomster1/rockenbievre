<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>

<section id="bands-gallery" class="container-fluid no-padding">
    <div class="row">
        <div class="col-md-6 main-image col-sm-12 no-padding" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/LZuCfH0.jpg')">
        </div>
        <div class="col-md-6 col-sm-12 no-padding">
            <div class="row">
                <div class="col-md-6 no-padding secondary-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/1*-nCsLWHAHmwJebVp8hKS0Q.jpeg')">
                </div>
                <div class="col-md-6 no-padding secondary-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/spotify-yim-049.png')">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 no-padding secondary-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/spotify-yim-049.png')">
                </div>
                <div class="col-md-6 no-padding secondary-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/1*-nCsLWHAHmwJebVp8hKS0Q.jpeg')">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-3 no-padding secondary-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/1*-nCsLWHAHmwJebVp8hKS0Q.jpeg')">
            </div>
            <div class="col-md-3 no-padding secondary-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/spotify-yim-049.png')">
            </div>
            <div class="col-md-3 no-padding secondary-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/1*-nCsLWHAHmwJebVp8hKS0Q.jpeg')">
            </div>
            <div class="col-md-3 no-padding secondary-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/LZuCfH0.jpg')">
            </div>
    </div>
</section>

<?php get_footer(); ?>