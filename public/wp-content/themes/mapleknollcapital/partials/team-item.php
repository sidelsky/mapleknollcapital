<?php
	if(!function_exists('wp_head')) {

        function getWPContent() {
			// Gets all the Wordpress goodies.
            //file_exists('../../../../wp-load.php')
            define('WP_USE_THEMES', false);
            $parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
            $wpLoad = require_once( $parse_uri[0] . 'wp-load.php' );

            if(file_exists($wpLoad)) {
    			include $wpLoad;
    		} else {
    			include $wpLoad;
    		}

        }

        getWPContent();

        // Current post ID
		$postId = $_POST['id'];

		//Query the database
        $args = array(
            'post_type' => 'team',
            'p' => $postId,
        );
        $loop = new WP_Query( $args );

	}

    if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
    $do_not_duplicate = $post->ID;
    ?>


    <!--BEGIN #magic-door-wrap-->
    <div id="magic-door-wrap">

        <div class="single-case-study single-post post-<?php the_ID(); ?>">

            <?php if( !is_singular('case-study') ) : ?>
                <a href="#" class="close">
                    <svg class="icon close__icon">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-close"></use>
                    </svg>
                </a>
            <?php endif; ?>

            <div class="single-case-study__wrap">
                <?php
                echo '<h1 class="single-team__title">' . get_the_title() . '<span class="single-team__sub-title">' . get_field('position') . '</span>' . '</h1>';
                ?>
                <?php// the_content(); //?>

                <!-- START: Images and details -->
                <div class="single-case-study__inner-content">

                    <div class="single-case-study__details--alt">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php the_content();?>
                    </div>
                </div>
                <!-- END: Images and details -->

            </div>

            <!-- BEGIN #portfolio-nav -->
                <?php include('prev-next-navigation.php'); ?>
            <!-- END #portfolio-nav -->

        </div>

    <!--END #magic-door-wrap-->
    </div>

    <?php endwhile; endif; ?>
