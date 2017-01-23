<?php if( have_rows('cta_content')) : while( have_rows('cta_content')) : the_row();

		$cta_image = get_sub_field('cta_image');
        $url = $cta_image['url'];
	?>

        <ul <?php if( $cta_image ) : ?>style="background-image: url('<?php echo $url; ?>')"<?php endif; ?> class="cta cta--flex-row" data-panels>

            <?php if( have_rows('cta')) : while( have_rows('cta')) : the_row();

                    $cta_title = get_sub_field('cta_title');
                    $cta_description = get_sub_field('cta_description');
                    $cta_link = get_sub_field('cta_link');
            ?>

            <li class="cta__column cta__column--arrow panel">

                <a href="<?php echo $cta_link; ?>">

                    <div class="cta__column__inner">

                        <!-- Title -->
                        <h4 class="cta__title"><?php echo $cta_title; ?></h4>

                        <?php
                        // If has description
                        if ($cta_description) : ?>
                            <!-- Description -->
                            <?php echo $cta_description; ?>
                            <!-- Link -->
                            <div class="cta__link">Find out more</div>
                        <?php endif; ?>

                    </div>

                </a>

            </li>

            <?php endwhile; endif; ?>

        </ul>

<?php endwhile; endif; ?>
