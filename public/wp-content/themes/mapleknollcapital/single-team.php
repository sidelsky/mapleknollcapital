<?php

    // SINGLE : Team
    include("header.php");

?>
        <div class="single-team single-post post-<?php the_ID(); ?>" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">

            <?php if( !is_singular('team') ) : ?>
                <a href="#" class="close">
                    <svg class="icon close__icon">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-close"></use>
                    </svg>
                </a>
            <?php endif; ?>

        </div>

        <div class="single-team__content lost-max-width">
            <div class="lost-max-width__content-inner">
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    echo '<h1 class="single-team__title">' . get_the_title() . '<span class="single-team__sub-title">' . get_field('position') . '</span>' . '</h1>';
                    ?>
                    <?php the_content();?>
                <?php endwhile;?>


                <ul id="portfolio-items" class="enabled team-grid" data-panels>

                    <!-- Get The Team content -->
                    <?php

                        $args = array(
                          'post_type' => 'team',
                          'posts_per_page' => -1,
                          'orderby' => 'post_date',
                          'order' => 'DEC'
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();

                        if ( $post->ID == $do_not_duplicate ) continue;
                    ?>

                        <li id="portfolio-<?php the_ID(); ?>" class="<?php echo $output; ?>visible team-grid__item panel <?php the_ID(); ?>" style="background-image: url('<?php the_post_thumbnail_url( "large" ); ?>')">

                            <a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="entry-link" data-post-link>
                                <div class="team-grid__details">
                                    <div class="team-grid__details-inner">
                                        <div class="team-grid__details-innercontainer">
                                            <?php
                                            echo '<h2 class="team-grid__title">' . get_the_title() . '<span class="team-grid__sub-title">' . get_field('position') . '</span>' . '</h2>';
                                            ?>
                                            <div class="team-grid__cta">MORE ABOUT - <?php echo get_the_title(); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                    <?php endwhile; ?>
                </ul>

            </div>
        </div>





<?php include("footer.php"); ?>
