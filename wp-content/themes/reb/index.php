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

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php echo get_template_directory_uri(); ?>/img/LZuCfH0.jpg" alt="">
            <div class="carousel-caption">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1>Titre</h1>
                        <p>description</p>
                        <a  class="btn btn-primary" href="">En savoir plus</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="item">
            <img src="" alt="">
            <div class="carousel-caption">
                <h1>Titre</h1>
                <p>description</p>
                <a class="btn btn-primary" href="">En savoir plus</a>
            </div>
        </div>
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
			<a class="btn btn-primary" href="">En savoir plus</a>
			
		</div>
		<div class="index-block col-sm-12 col-md-6 no-padding no-margin">
			<img src="<?php echo get_template_directory_uri(); ?>/img/spotify-yim-049.png" alt="">
			<div class="block-content">
				<h1>Concerts</h1>
				<a class="btn btn-primary" href="">En savoir plus</a>
			</div>
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
