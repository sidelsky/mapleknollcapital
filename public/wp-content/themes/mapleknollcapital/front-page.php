<?php include("header.php"); ?>

<!-- START: Hero image -->
<?php include("partials/hero-image.php"); ?>
<!-- END: Hero image -->


<div class="furnature">

    <div class="lost-max-width">
        <div class="lost-max-width__content-inner">

            <?php /*
            $hero_title = get_field('hero_title');

            if ($hero_title) : ?>
                <h2 class="hero-title"><?php echo $hero_title; ?></h2>
            <?php endif; ?>
            */?>

            <!-- START: Page title -->

            <article class="post">
                <h2>
                    <?php the_excerpt(); ?>
                </h2>
            </article>
            <!-- END: Page title -->

            <!-- START: Page content -->
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <?php
                // Check for post content
                if( '' !== get_post()->post_content ) : ?>

                    <!-- START: Page content -->
                    <article class="post">
                        <?php the_content(); ?>
                    </article>
                    <!-- START: Page content -->

                <?php endif; ?>

            <?php endwhile; endif; ?>
        </div>
    </div>

</div>

<!-- START: Call to action -->
<?php include("partials/cta.php"); ?>
<!-- END: Call to action -->


<?php include("footer.php"); ?>
