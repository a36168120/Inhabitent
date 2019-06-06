<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>
<section class="find-us-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
			
			
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
			
			
			<?php endwhile; // End of the loop. ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<div class="page-sidebar">
		<?php get_sidebar(); ?>
	</div>
</section>
<?php get_footer(); ?>
