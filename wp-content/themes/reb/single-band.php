<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="banner" class="container-flid no-padding" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/1*-nCsLWHAHmwJebVp8hKS0Q.jpeg')">
    <div class="container">
        <div class="row">
            <h1>The Sound Troopers</h1>
            <p id="style"><i class="material-icons">audiotrack</i> Metal, rock progressif</p>
            <p id="location"><i class="material-icons">location_on</i>  Saint Eteinne de Saint Geoirs, France</p>

        </div>
        <div class="row">
            <a class="btn btn-primary" href="">Contacter</a><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt=""></a><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a>
        </div>
    </div>
</div>
<section id="description">
    <div class="container">
        <p class="text-center">On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche po</p>
    </div>
</section>

<section id="dates">
    <div class="container">
        <h1>Prochaines dates</h1>
        <div class="col-sm-12 col-md-6">
            <div class="date">
                <h4><strong>Date/Heure</strong></h4>
                <p>lieu</p>
            </div>
            <div class="date">
                <h4><strong>Date/Heure</strong></h4>
                <p>lieu</p>
            </div>
            <div class="date">
                <h4><strong>Date/Heure</strong></h4>
                <p>lieu</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
