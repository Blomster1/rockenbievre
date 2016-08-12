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



$concerts = get_posts(array(
    'posts_per_page' => -1,
    'offset'         => 0,
    'post_status'    => 'published',
    'post_type'      => 'concert'
));
get_header(); ?>

<section id="concert-list" class="container">
    <h1>Les concerts à venir</h1>
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <?php foreach ($concerts as $concert):?>
        <div class="col-md-12">
            <?php $styles = wp_get_post_terms($concert->ID, 'style', array("fields" => "names"));?>
            <h2><a href="<?= get_permalink($concert->ID) ?>"><?= $concert->post_title ?></a></h2><p class="lieu"><?= get_field('lieu',$concert->ID) ?> - <strong><?= get_field('heure', $concert->ID) ?></strong></p>
            <p><?= $concert->post_excerpt ?></p>
            <?php if(!empty(get_field('prix', $concert->ID))): ?><p class="prix"><?= get_field('prix', $concert->ID) ?>€</p><?php else : ?><p class="prix">Gratuit</p><?php endif; ?>
            <?php foreach ($styles as $style):?>
                <div class="tag">#<?= $style ?></div>
            <?php endforeach; ?>
            <hr>
        </div>
    <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>