<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>

		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />

		<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" rel="shortcut icon" />

		<?php wp_head(); ?>
	</head>


    <?php
    // Add class to body if it is the front page
    function add_class() {

        if( is_front_page() ) {
            return "is-front-page";
        } else {
            return "is-sub-page";
        }

    }

    $className = add_class();
    ?>

	<body <?php body_class($className); ?> id="top">


		<?php
			// Include SVG Sprite
			include('assets/build/svg-sprite.svg');

            // Mobile overlay menu
            include('partials/mobile-navigation.php');
		?>

		<div class="page-wrap" id="slide-1">

			<header class="page-header" data-page-header>
                <div class="page-header__inner">
                    <div class="page-header__inner-col page-header__inner-left">
                        <?php if (is_front_page()): ?>

							<!-- Home page gets a <h1> -->
                            <h1 class="page-header__logo">
                                <a href="<?php echo home_url(); ?>/" class="page-header__logo-link">
                                    <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/build/img/pngs/mkc_logo--white.png" alt="<?php bloginfo('name'); ?>" class="page-header__logo-image page-header__logo-image--white" /> -->
									<img src="<?php bloginfo('template_directory'); ?>/assets/build/img/pngs/mkc_logo.png" alt="<?php bloginfo('name'); ?>" class="page-header__logo-image page-header__logo-image--black" />
                                </a>
                            </h1>

                        <?php else: ?>

							<!-- Remove <h1> for sub pages -->
                            <div class="page-header__logo">
								<a href="<?php echo home_url(); ?>/" class="page-header__logo-link">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/build/img/pngs/mkc_logo.png" alt="<?php bloginfo('name'); ?>" class="page-header__logo-image" />
                                </a>
                            </div>

                        <?php endif; ?>
                    </div>
                    <div class="page-header__inner-col page-header__inner-right">

                        <!-- START: Mobile menu icon -->
                            <div class="c-hamburger c-hamburger--htx" data-hamburger-menu>
                                <span></span>
                            </div>
                        <!-- START: Mobile menu icon -->
                        <?php
                            // Primary navigation
                            wp_nav_menu( array(
                                'menu'            => 'Primary',
                                'container'       => 'nav',
                                'container_class' => 'primary-site-nav',
                                //'container_id'    => 'menuContainer',
                                //'menu_id'         => 'menu',
                                'theme_location'  => 'Primary Menu',
                                'menu_class'      => 'primary-site-nav__menu',
                                //'echo'            => true,
                                //'fallback_cb'     => 'wp_page_menu',
                                //'before'          => ,
                                //'after'           => ,
                                //'link_before'     => ,
                                //'link_after'      => ,
                                //'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                //'depth'           => 0,
                                //'walker'          =>
                            ));
                        ?>
                    </div>

                </div>
			</header>
