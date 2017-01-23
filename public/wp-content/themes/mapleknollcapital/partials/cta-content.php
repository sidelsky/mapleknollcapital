<div <?php if( get_the_post_thumbnail_url() ) : ?> style="background-image: url('<?php the_post_thumbnail_url(); ?>')" <?php endif; ?> class="cta cta--vh" data-cta>

    <div class="cta__column cta__column--full-width cta__column__inner">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php
                $cta_header_title = get_field('cta_header_title');

                if ( $cta_header_title ) {
                    echo '<h1 class="cta__title">' . '<span>' . get_the_title() . '</span> ' . $cta_header_title . '</h1>';
                } else {
                    the_title('<h1 class="cta__title">','</h1>');
                }
            ?>

        <?php endwhile; endif;?>


    </div>

    <div class="hero-image__shading"></div>

</div>
