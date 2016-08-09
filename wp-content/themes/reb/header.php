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

        

	</header><!-- .site-header -->
	<div id="content" class="site-content">
