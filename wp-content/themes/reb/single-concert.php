<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>

<section id="concert" class="container-flid no-padding">
    <?= do_shortcode(get_field('map',$post->ID)) ?>
</section>

<?php get_footer(); ?>
