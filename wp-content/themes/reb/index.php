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

get_header();

$slides = get_posts( array(
    'posts_per_page' => -1,
    'offset'         => 0,
    'post_status'    => 'published',
    'post_type'      => 'slider'
));

?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for($i=0;$i<count($slides);$i++): ?>
            <?php if($i=0): ?>
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <?php else: ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?= $i ?>"></li>
            <?php endif; ?>
        <?php endfor; ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php foreach ($slides as $slide): ?>
        <div class="item active">
            <img src="<?= get_the_post_thumbnail_url($slide->ID,'slider_size'); ?>" alt="">
            <div class="carousel-caption">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1><?= $slide->post_title; ?></h1>
                        <p><?= $slide->post_content; ?></p>
                        <a  class="btn btn-primary" href=" <?= get_permalink(get_field('lien_du_poste',$slide->ID)->ID); ?>">En savoir plus</a>
                    </div>
                </div>

            </div>
        </div>

        <?php endforeach; ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container-fluid no-margin no-padding">
    <div class="index-block col-sm-12 col-md-6 no-padding no-margin">
        <img src="<?php echo get_template_directory_uri(); ?>/img/1*-nCsLWHAHmwJebVp8hKS0Q.jpeg" alt="">
        <h1>Artistes</h1>
        <a class="btn btn-primary" href="<?= get_post_type_archive_link( 'band' ); ?>">En savoir plus</a>
        
    </div>
    <div class="index-block col-sm-12 col-md-6 no-padding no-margin">
        <img src="<?php echo get_template_directory_uri(); ?>/img/spotify-yim-049.png" alt="">
        <div class="block-content">
            <h1>Concerts</h1>
            <a class="btn btn-primary" href="<?= get_post_type_archive_link( 'concert' ); ?>">En savoir plus</a>
        </div>
    </div>
</div>

<div id="media" class="container-fluid">
    <div class="col-md-6">

    </div>
</div>

<section id="prochaine-dates" class="container-fluid">
    <div class="container">
        <h1>Prochaine dates</h1>
        <div class="col-sm-12 col-md-6">
            <div class="date">
                <h4><strong>GROUPE</strong> - Date/Heure</h4>
                <p>lieu</p>
            </div>
            <div class="date">
                <h4><strong>GROUPE</strong> - Date/Heure</h4>
                <p>lieu</p>
            </div>
            <div class="date">
                <h4><strong>GROUPE</strong> - Date/Heure</h4>
                <p>lieu</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="date">
                <h4><strong>GROUPE</strong> - Date/Heure</h4>
                <p>lieu</p>
            </div>
            <div class="date">
                <h4><strong>GROUPE</strong> - Date/Heure</h4>
                <p>lieu</p>
            </div>
            <div class="date">
                <h4><strong>GROUPE</strong> - Date/Heure</h4>
                <p>lieu</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
