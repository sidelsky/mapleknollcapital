<!-- Check for image -->
<?php

if( get_the_post_thumbnail_url() ) :

    // data-0="background-position:0px -400px;"
    // data-500="background-position:0px -400px;"

    ?>


    <div class="hero-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"

    >

    <?php
    $hero_title = get_field('hero_title');
    if ($hero_title) : ?>
        <h2 class="hero-title"
        data-top="margin-bottom: 0px"
        data-top-bottom="margin-bottom: -200px"
        data-anchor-target="#top"
        ><?php echo $hero_title; ?></h2>
    <?php endif; ?>

        <div class="hero-image__shading"
        data-top="margin-bottom: 0px"
        data-top-bottom="margin-bottom: -300px"
        data-anchor-target="#top"
        ></div>
    </div>

<?php endif; ?>
