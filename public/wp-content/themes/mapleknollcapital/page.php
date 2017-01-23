<?php include("header.php"); ?>

<!-- START: Cta content -->
<?php include("partials/cta-content.php"); ?>
<!-- END: Cta content -->

<div class="furnature">
    <div class="lost-max-width">
        <div class="lost-max-width__content-inner">

    		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <article class="post">
                    <?php
                        $cta_header_copy = get_field('cta_header_copy');

                        echo '<h2>' . $cta_header_copy . '</h2>';
                         ?>
    			    <?php the_content(); ?>
                </article>

    		<?php endwhile; endif; ?>

        </div>
    </div>
</div>

<!-- START: Call to action -->
<?php include("partials/cta.php"); ?>
<!-- END: Call to action -->

<?php include("footer.php"); ?>
