<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="container">
		<section>
			<div class="col-md-3">
				<div id="side-nav">
					<ul>
						<li><a href="<?= get_permalink(18) ?>">A propos</a></li>
						<li><a href="<?= get_permalink(25) ?>">Nous contacter</a></li>
						<li><a href="">Mentions légales</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-7 col-xs-12">
				<h1><?= $post->post_title ?></h1>
				<?= do_shortcode("[contact-form-7 id=\"19\" title=\"Contact\"]") ?>
			</div>
		</section>


		

	</div>

<?php get_footer(); ?>
