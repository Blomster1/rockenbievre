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
$artisteEnAvantContainer = get_posts( array(
    'posts_per_page' => 1,
    'offset'         => 0,
    'post_status'    => 'published',
    'post_type'      => 'artiste_en_avant'
));
$artisteEnAvant = get_field('artiste',$artisteEnAvantContainer[0]->ID);
$bands = get_posts( array(
    'posts_per_page' => 5,
    'offset'         => 0,
    'post_status'    => 'published',
    'post_type'      => 'band'
));
get_header(); ?>

<section id="bands-gallery" class="container-fluid no-padding">
    <div class="row">
        <div class="col-md-6 main-image col-sm-12 no-padding" style="background-image: url('<?= get_the_post_thumbnail_url($artisteEnAvant->ID,'slider_size'); ?>')">
            <div class="col-md-12 text-center">
                <h2><?= $artisteEnAvant->post_title ?></h2>
                <a class="btn btn-primary" href="<?= get_permalink($artisteEnAvant->ID) ?>">Voir l'artiste</a>
            </div>

        </div>
        <div class="col-md-6 col-sm-12 no-padding">
            <div class="row">
                <?php foreach ($bands as $band): ?>
                    <?php if($band != $artisteEnAvant): ?>
                        <div class="col-md-6 no-padding secondary-image" style="background-image: url('<?= get_the_post_thumbnail_url($band->ID,'slider_size') ?>')">
                            <div class="col-md-12 text-center">
                                <h2><?= $band->post_title ?></h2>
                                <a class="btn btn-primary" href="<?= get_permalink($band->ID) ?>">Voir l'artiste</a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>