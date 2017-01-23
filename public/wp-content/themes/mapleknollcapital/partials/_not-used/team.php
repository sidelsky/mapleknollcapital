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

        <!--BEGIN .inner-->
        <div class="magic-inner single-team__wrap">

        <div class="single-team single-post post-<?php the_ID(); ?> <?php the_ID(); ?>" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
        </div>


            <!--BEGIN .hentry -->
            <div <?php post_class() ?> id="door">

                <a href="#" class="close">
                    <svg class="icon close__icon">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-close"></use>
                    </svg>
                </a>

                <!-- CONTENT START: -->
                <div class="single-team__content lost-max-width">
                    <div class="lost-max-width__content-inner">

                        <?php
                            $linkedin = get_field('linkedin');

                            if ($linkedin) :
                         ?>
                        <a href="<?php echo $linkedin; ?>" target="_blank" class="linkedin">
                             <svg class="icon linkedin__icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-linkedin" viewBox="0 0 32 32"></use>
                            </svg>
                        </a>

                        <?php endif; ?>

                        <?php
                        echo '<h1 class="single-team__title">' . get_the_title() . '<span class="single-team__sub-title">' . get_field('position') . '</span>' . '</h1>';
                        ?>
                        <?php the_content();?>

                    </div>

                </div>
                <!-- CONTENT END: -->

            <!--END .hentry-->
            </div>

            <!-- BEGIN #portfolio-nav -->
                <?php include('prev-next-navigation.php'); ?>
            <!-- END #portfolio-nav -->

        <!--END .inner-->
        </div>


    <!--END #magic-door-wrap-->
    </div>

    <?php endwhile; endif; ?>
