<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<section class="footer-info">
					<div class="footer-flex-container"> 
						<div class="contact-info">
							<h3>CONTACT INFO</h3>
							<i class="far fa-envelope"><span> info@inhabitent.com</span></i>
							<br>
							<i class="fa fa-phone"><span> 778-456-7891</span></i>
						</div>
						<div class="business-hours">
							<h3>BUSINESS HOURS</h3>
							<p>Monday-Friday: 9am to 5pm</p>
							<p>Saturday: 10am to 2pm</p>
							<p>Sunday: Closed</p>
						</div>
						<div class="footer-logo">
						<a href="">
							<img src="<?php echo get_template_directory_uri(); ?>/assest/images/logos/inhabitent-logo-text.svg" alt="">
						</a>
						</div>
					</div>

					<div class="copyright-info">
					<p>COPYRIGHT © 2019 INHABITENT</p>
					<!-- <a href="<?php echo esc_url('https://wordpress.org/'); ?>"><?php printf(esc_html('Proudly powered by %s'), 'WordPress');?></a> -->
					</div><!-- .site-info -->

				</section>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer();?>

	</body>
</html>
