<?php
/**
 * The main template file.
 *
 * @package Inhabitent
 */
get_header(); ?>

<div class="journal-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			
			<div class="journal-post">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content' ); ?>

				<?php endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="page-sidebar">
		<?php get_sidebar(); ?>
	</div>
	
</div>	
<?php get_footer(); ?>
