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
                 
                <!-- product terms and icons -->
                <h2>Shop Stuff</h2>
                <?php 
                    $terms = get_terms( 
                        array( 
                            'taxonomy' => 'product-type', 
                            'hide_empty' => 0
                        )
                    );
                 ?>

                <ul class="product-terms">
                    <?php foreach( $terms as $term ): ?>
                        <li class="product-term">
                            <img src="<?php echo get_template_directory_uri() . 
                                        '/assest/images/product-type-icons/' .
                                         $term->slug . '.svg'
                                        ?>" />    
                            <p><?php echo $term->description; ?></p>
                            <p>
                                <a href="<?php echo get_term_link( $term ); ?>">
                                    <?php echo $term->name; ?> stuff
                                </a>
                            </p>
                        </li>
                    <?php endforeach; ?>
                </ul>
			
				<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3 ); $journal_posts = get_posts( $args ); ?> 
				
                <h2>Inhabitent Journal</h2>
                <div class="fp-journal-entries">
                    <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>    
                        <div class="journal-entry">
                        
                            <!-- Thumbnail -->
                            <?php if ( has_post_thumbnail() ) { ?>
                                <div class="fp-post-thumbnail">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </div>
                            <?php } ?>
                            <div class="fp-post-info">
                                <!-- Comments -->
                                <div class="fp-post-comment">
                                    <?php echo get_the_date(); ?> /
                                    <?php echo get_comments_number(); ?> Comments
                                </div>
                                    
                                <!-- Title -->
                                <div class="fp-post-title">
                                    <a href="<?php  echo get_the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                    <a class="read-more-btn" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div><!-- .fp-journal-entries -->
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>