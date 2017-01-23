<?php
    /*
        Template name: Contact Template
    */

    include("header.php");
?>

<!-- START: Cta content -->
<?php include("partials/cta-content.php"); ?>
<!-- END: Cta content -->

<div class="furnature">

    <div class="lost-max-width">
        <div class="lost-max-width__content-inner">

                <!-- Get The Team content -->
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                <article class="post-container">


                    <div class="two_third">
                        <h2><?php bloginfo('name'); ?></h2>
                        <?php the_content(); ?>
                        <p>
                            <small>
                                <a href="https://www.google.co.uk/maps/place/Old+St,+London+EC1V+9AB/@51.5236514,-0.0995426,17z/data=!3m1!4b1!4m5!3m4!1s0x48761b5708b0f463:0x7046212de44ed3c4!8m2!3d51.5236157!4d-0.0972483" target="_blank">View larger map</a>
                            </small>
                        </p>
                        <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                    </div>

                    <div class="two_third">
                        <?php include('partials/placecard.php'); ?>
                        <div id="map_canvas" class="map"></div>
                    </div>
                </article>

                <?php endwhile; ?>

        </div>
    </div>

</div>

<?php include("footer.php"); ?>
