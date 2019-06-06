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
							<h3>Contact Info</h3>
							<p><i class="far fa-envelope"><a href="##"><span> info@inhabitent.com</span></a></i></p>
							<p><i class="fa fa-phone"><a href="##"><span> 778-456-7891</span></a></i></p>
								<i class="fab fa-facebook-square"></i>
								<i class="fab fa-twitter-square"></i>
								<i class="fab fa-google-plus-square"></i>
						</div>
						<div class="business-hours">
							<h3>Business Hours</h3>
							<p><span>Monday-Friday:</span> 9am to 5pm</p>
							<p><span>Saturday:</span> 10am to 2pm</p>
							<p><span>Sunday:</span> Closed</p>
						</div>
						<div class="footer-logo">
							<a href="">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg" alt="">
							</a>
						</div>
					</div>

					<div class="copyright-info">
					<p>copyright © 2019 inhabitent</p>
					</div><!-- .site-info -->

				</section>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer();?>

	</body>
</html>
