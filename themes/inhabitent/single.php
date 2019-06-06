<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent
 */

get_header(); ?>
<div class="single-journal-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class="single-journal-post">
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
			</div>

			<div class="product-icon">
                <button type="button"><i class="fab fa-facebook-f"></i> Like</button>
				<button type="button"><i class="fab fa-twitter"></i> Tweet</button>
				<button type="button"><i class="fab fa-pinterest"> Pin</i></button>
            </div>

			<div class="product-comment">
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="page-sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
