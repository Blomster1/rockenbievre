<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$artistes = array();
for($i=1;$i<=5;$i++){
    if(empty(get_field('artiste_'.$i,$post->ID))){
        break;
    } else {
        $artistes[] = get_field('artiste_'.$i,$post->ID);
    }
}
get_header(); ?>

<section id="concert" class="container-flid no-padding">
    <section class="container">
        <h1><?= $post->post_title ?></h1>
    </section>
    <section>
        <div class="container">
            <h1>Artistes présents</h1>
        </div>

        <div class="section">
            <?php foreach ($artistes as $artiste): ?>
            <div class="col-md-12 artiste-present" style="background-image: url('<?= get_the_post_thumbnail_url($artiste->ID,'slider_size'); ?>')">
                <h1><?= $artiste->post_title ?></h1>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section>
        <div class="container">
            <p><?= $post->post_content ?></p>
        </div>
    </section>
    <section>
        <div class="container">
            <h1>Acces</h1>
        </div>
        <?= do_shortcode(get_field('map',$post->ID)) ?>
    </section>

</section>

<?php get_footer(); ?>
