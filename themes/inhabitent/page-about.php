<?php
/**
* The main template file.
*/

get_header(); ?>
<section class="page-wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
			
			<?php endwhile; // End of the loop. ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->
</section>
<?php get_footer(); ?>

