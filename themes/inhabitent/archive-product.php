<?php
/**
 * The template for displaying archive pages.
 */

get_header(); ?>

	<div id="primary" class="shop-page">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="shop-page-header">
				<h1>Shop Stuff</h1>
			    	<?php $terms = get_terms( 
						array(
						'taxonomy' => 'product-type', 
						'hide_empty' => 0 )	
						); 
					?>
				<ul class="shop-terms">
					<?php foreach($terms as $term): ?>
					<li class="shop-term">
                   		<p>
                     		<a href="<?php echo get_term_link( $term ); ?>">
                            		<?php echo $term->name; ?>
                     	 	</a>
                    	</p>
					</li>
					<?php endforeach; ?>
				</ul> 
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="shop-products">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="products">
							<div class="product-thumbnail">
								<?php if ( has_post_thumbnail() ) : ?>
									<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'large' ); ?>
								<?php endif; ?>
							</div>

							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
							
							<?php if ( 'post' === get_post_type() ) : ?>
								<div class="entry-meta">
									<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
								</div><!-- .entry-meta -->
							<?php endif; ?>
						</div>
					</article><!-- #post-## -->
				<?php endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>