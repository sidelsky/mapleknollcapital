<?php
    // Next post
    $next = $_POST['next'];
    // Next post title
    $next_post_title = get_the_title($next);
    // Next thumb
    $next_post_thumb = wp_get_attachment_image_src( get_post_thumbnail_id($next), 'thumbnail');

    // Prev post
    $prev = $_POST['prev'];
    // Prev post title
    $prev_post_title = get_the_title($prev);
    // Prev thumb
    $prev_post_thumb = wp_get_attachment_image_src( get_post_thumbnail_id($prev), 'thumbnail');
 ?>


<ul class="prev-next-navigation">
    <li class="prev-next-navigation__prev">
        <a id="prev-post" data-id="<?php echo $prev; ?>" href="#">
            <img class="prev-next-navigation__image prev-next-navigation__image--prev" src="<?php echo $prev_post_thumb[0] ?>" alt="<?php echo $prev_post_title; ?>" />
            <svg class="icon prev-next-navigation__icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-prev" viewBox="0 0 32 32"></use>
            </svg>
            <span><strong>Previous</strong> <br><?php echo $prev_post_title; ?></span>
        </a>
    </li>

    <li class="prev-next-navigation__next">
        <a id="next-post" data-id="<?php echo $next; ?>" href="#"><span><strong>Next</strong><br><?php echo $next_post_title; ?></span>
            <svg class="icon prev-next-navigation__icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-next" viewBox="0 0 32 32"></use>
            </svg>
            <img class="prev-next-navigation__image prev-next-navigation__image--next" src="<?php echo $next_post_thumb[0] ?>" alt="<?php echo $next_post_title; ?>" />
        </a>
    </li>
</ul>
