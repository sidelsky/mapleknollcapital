			<footer class="page-footer" role="contentinfo">

				<div class="page-footer__column">
					<div class="page-footer__copyright">
						<?php /*
							<h5><?php bloginfo('name'); ?></h5><br>
	                        20-24 Old Street<br>
							London, EC1V 9AB<br>
	                        <h5>T:</h5> +44 20 3892 9360
						*/ ?>
                        &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
					</div>
				</div>

				<div class="page-footer__column">
					<div class="page-footer__copyright">
						<?php /*
							<h5>Contact:</h5> <a href="/contact"><?php bloginfo('name'); ?></a><br>
	                        &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
						*/ ?>
					</div>
				</div>

			</footer>


		</div> <!-- page-wrap END -->

        <?php
            if ( is_page(6) ) { // Contact us
                $google_map_key = 'AIzaSyCpnncmLMkUAamOFs8nesJd4UGOrZYklrk';
                echo '<script src="https://maps.googleapis.com/maps/api/js?key=' . $google_map_key . '"></script>';
            }
    	?>

		<?php wp_footer(); ?>

		<?php
			//echo get_num_queries() . ' Queries '; timer_stop(1) . 'Seconds';
		?>

	</body>
</html>
