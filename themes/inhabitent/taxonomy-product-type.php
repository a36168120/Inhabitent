<?php
/*
 * The template for displaying archive pages.
 */

get_header(); ?>
<div class="category-product-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="category-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header>

				<?php /* Start the Loop */ ?>

				<div class="category-product-grid">
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="category-product-grid-item">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<header class="category-product-thumbnail">
								<?php if ( has_post_thumbnail() ) : ?>
									<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'large' ); ?>
								<?php endif; ?>
							</header>

							<div class="category-product-info"> 
								<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
								<?php if ( 'post' === get_post_type() ) : ?>
								<?php endif; ?>
							</div>
						</article><!-- #post-## -->
					</div><!-- End of grid-item -->
					<?php endwhile; ?>
				</div><!-- End of grid -->

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>