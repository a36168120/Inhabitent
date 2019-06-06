<?php
/**
 * The main template file.
 *
 * @package Inhabitent
 */
get_header(); ?>

<div class="single-product-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : ?>

                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                <article class="single-product" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <!-- Thumbnail -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="single-product-thumbnail">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Product title & content -->
                    <div class="single-product-info">
                        <header class="product-header">
                            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                        </header>

                        <div class="product-price"> <?php echo CFS()->get('price'); ?></div>

                        <div class="product-content">
                            <?php the_content(); ?>
                            <div class="price"> <?php echo CFS()->get('product_price'); ?></div>
                        </div>

                        <div class="product-icon">
                            <button type="button"><i class="fab fa-facebook-f"></i> Like</button>
					        <button type="button"><i class="fab fa-twitter"></i> Tweet</button>
					        <button type="button"><i class="fab fa-pinterest"> Pin</i></button>
                        </div>

                    </div>
                </article><!-- #post-## -->

                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- main-content -->
<?php get_footer(); ?>
