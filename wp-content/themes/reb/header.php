<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Roboto:300,400,500,700,900" rel="stylesheet">
    <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<header class="site-header" role="banner">
        <nav>
            <div id="menu-logo">Rock en Bievre</div>
            <ul class="container">
                <div class="row">
                    <li class="col-sm-3 text-center"><a href="">Acceuil</a></li>
                    <li class="col-sm-3 text-center"><a href="">Artistes</a></li>
                    <li class="col-sm-3 text-center"><a href="">A propos</a></li>
                    <li class="col-sm-3 text-center"><a href="">Nous contacter</a></li>
                </div>
            </ul>
        </nav>

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
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item">
                    <img src="" alt="">
                    <div class="carousel-caption">
                       balbalbla
                    </div>
                </div>
                ...
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

	</header><!-- .site-header -->
	<div id="content" class="site-content">
