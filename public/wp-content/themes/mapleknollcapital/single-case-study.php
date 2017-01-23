<?php

    // SINGLE : Case studies
    include("header.php");

?>
        <div class="single-case-study single-post post-<?php the_ID(); ?>">

            <?php if( !is_singular('case-study') ) : ?>
                <a href="#" class="close">
                    <svg class="icon close__icon">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-close"></use>
                    </svg>
                </a>
            <?php endif; ?>

            <div class="single-case-study__wrap">
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    echo '<h1 class="single-team__title">' . get_the_title() . '<span class="single-team__sub-title">' . get_field('location') . '</span>' . '</h1>';
                    ?>
                    <?php the_content();?>
                <?php endwhile;?>

                <!-- START: Images and details -->
                <div class="single-case-study__inner-content">

                    <div class="single-case-study__gallery">
                        <?php
                            $image = get_field('image');
                            if( !empty($image) ):
                        ?>

                        	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>

                    </div>

                    <div class="single-case-study__details">
                        <?php if( have_rows('details')): ?>
                				<ul>
                					<?php while( have_rows('details')): the_row();
                					    $detail = get_sub_field('detail');
                					?>
                					<li class="single-case-study__detail">
                                        <?php echo $detail; ?>
                					</li>
                				<?php endwhile; ?>
                			</ul>
                		<?php endif; ?>
                    </div>
                </div>
                <!-- END: Images and details -->

            </div>

        </div>

<!-- START: Case Studies grid layout -->
    <?php include('partials/case-studies-grid.php') ?>
<!-- END: Case Studies grid layout -->


<?php include("footer.php"); ?>
