<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$styles = get_the_terms($post->ID,'style');
$videos = get_field('video_1',$post->ID);
get_header(); ?>

<div id="banner" class="container-flid no-padding" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID,'slider_size'); ?>')">
    <div class="container">
        <div class="row">
            <h1><?= $post->post_title; ?></h1>
            <p id="style"><i class="material-icons">audiotrack</i>
                <?php foreach ($styles as $style): ?>
                    <?= $style->name ?>,
                <?php endforeach; ?></p>
            <p id="location"><i class="material-icons">location_on</i>  <?= get_field('adresse', $post->ID) ?></p>

        </div>
        <div class="row">
            <a class="btn btn-primary" href="">Contacter</a>
            <?php if(!empty(get_field('youtube', $post->ID))): ?>
                <a class="btn-social" href="<?= get_field('youtube', $post->ID) ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt=""></a>
            <?php endif; ?>
            <?php if(!empty(get_field('facebook',$post->ID))): ?>
                <a class="btn-social" href="<?= get_field('facebook',$post->ID) ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a>
            <?php endif; ?>
        </div>
    </div>
</div>
<section id="description">
    <div class="container">
        <p class="text-center"><?= $post->post_content ?></p>
    </div>
</section>

<?php if(!empty(get_field('tour_dates',$post->ID))): ?>
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
<?php endif; ?>

<?php if(!empty($videos)): ?>
    <div id="media" class="container-fluid no-padding text-center">
        <div id="player"></div>
    </div>
<?php endif; ?>


<script type="text/javascript">

    var video = "<?= substr($videos,-11) ?>";
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '390',
            width: '640',
            videoId: video,
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 6000);
            done = true;
        }
    }
    function stopVideo() {
        player.stopVideo();
    }



</script>

<?php get_footer(); ?>
