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

		</main><!-- #main -->
	</div><!-- #primary -->
</section>
<?php get_footer(); ?>

