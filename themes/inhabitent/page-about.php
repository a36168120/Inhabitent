<?php
/**
* The main template file.
*/

get_header(); ?>
<div class="about-banner"></div>
<section class="page-wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="about-title">
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			</div>
			
			<?php endwhile; // End of the loop. ?>

			<section class="about-sections">
				<h2>Our Story</h2>
				<div>
					<p> 
						Inhabitent Camping Supply Co. has been Vancouver camping supply icon for more than two whole months! 
						Customers often comment on the bustle of activity they see in store…that’s where the magic happens every day.
					</p>
					<p>
						We want to bridge the gap between the comfort of city life and the lovely Instagram-worthiness of the great outdoors 
						that surround us. We sell gear that’s fun and functional. 
						So much fun, in fact, that you’ll want to pitch a tent inside your one-bedroom apartment so you can use it every day.
					</p>
				</div>

				<h2>Our Team</h2>
				<div>
					<p>
						Inhabitent Camping Supply Co.’s staff is made up of an amazing team of inspired retail associates. 
						We really know our stuff when it comes to travel hammocks and campfire cooking gadgets. 
						From a provincial park campground to the back-country, our staff knows what you need to outfit your outdoor outing.
					</p>
					<p>
						Our shop is nestled away in a lovely little corner of Vancouver. Pop in, say hi, and try out our tents!
					</p>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
</section>
<?php get_footer(); ?>

