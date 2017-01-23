<?php

    // NOT USED !!!!!!
    $post = get_post($_POST['id']);

    global $post;
    $post_slug = $post->post_name;

    // Convert PHP variable into one that can be accessed in jQuery
    echo '<script>';
    echo 'var post_slug = ' . json_encode($post_slug) . ';';
    echo '</script>';

    // END NOT USED !!!!!!

?>
        <div class="single-team single-post post-<?php the_ID(); ?>" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">

            <a href="#" class="close">
                <svg class="icon close__icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-close"></use>
                </svg>
            </a>

        </div>

        <div class="single-team__content lost-max-width">
            <div class="lost-max-width__content-inner">
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    echo '<h1 class="single-team__title">' . get_the_title() . '<span class="single-team__sub-title">' . get_field('position') . '</span>' . '</h1>';
                    ?>
                    <?php the_content();?>
                <?php endwhile;?>
            </div>
        </div>
