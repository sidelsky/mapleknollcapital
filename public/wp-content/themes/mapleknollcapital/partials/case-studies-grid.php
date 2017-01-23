<div class="furnature">

    <div class="lost-max-width">
        <div class="lost-max-width__content-inner">

            <article class="post">
                <?php
                    //$cta_header_copy = get_field('cta_header_copy');
                    //echo '<h2>' . $cta_header_copy . '</h2>';
                    echo '<h2>' . 'Our projects put our strategy into practice: using innovation and the ability to unlock complexity, along with proactive asset management, to deliver attractive risk-adjusted returns for Maple Knoll, our partners and our clients' . '</h2>';
                    the_content();
                     ?>
            </article>

            <ul id="portfolio-items" class="grid" data-panels>

                <!-- Get The Team content -->
                <?php

                    $args = array(
                      'post_type' => 'case-study',
                      'posts_per_page' => -1,
                      'orderby' => 'post_date',
                      'order' => 'DEC'
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>

                    <li id="portfolio-<?php the_ID(); ?>" class="<?php echo $output; ?>visible grid__item grid__item--alt panel <?php the_ID(); ?>" style="background-image: url('<?php the_post_thumbnail_url( ); ?>')">

                        <a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="entry-link" data-post-link>
                            <div class="grid__details">
                                <div class="grid__details-inner">
                                    <div class="grid__details-innercontainer">
                                        <?php
                                        echo '<h2 class="grid__title">' . get_the_title() . '<span class="grid__sub-title">' . get_field('location') . '</span>' . '</h2>';
                                        ?>
                                        <div class="grid__cta">MORE ABOUT — <?php echo get_the_title(); ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </li>
                <?php endwhile; ?>
            </ul>

        </div>
</div>

</div>
