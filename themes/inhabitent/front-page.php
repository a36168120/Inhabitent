<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="fp-journal">
                <div class="hero-banner"></div>
                
	
				<!-- RIGHT HERE --> 
			
				<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3 ); $journal_posts = get_posts( $args ); ?> 
				<!-- returns an array of posts -->
				
                <div class="fp-journal-entries">
                    <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>    
                        <div class="journal-entry">
                        
                            <!-- Post thumbnail -->
                            <?php if ( has_post_thumbnail() ) { ?>
                                <div class="thumbnail-wrapper">
                                    <?php the_post_thumbnail( 'medium' ); ?>
                                </div>
                                <?php } ?>
                                
                                <div class="fp-post-meta">
                                    <?php echo get_the_date(); ?> /
                                    <?php echo get_comments_number(); ?> Comments
                                </div>
                                
                                <!-- Post title -->
                                <a href="<?php  echo get_the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                <a class="read-more-btn" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
                                
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div><!-- .fp-journal-entries -->
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>