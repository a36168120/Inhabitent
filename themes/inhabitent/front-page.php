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
                                    '/assets/images/product-type-icons/' .
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
            
             <!-- Journal -->
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
            </div><!-- End of Journal -->
            
            <!-- Adventures -->

            <h2>Latest Adventures</h2>

            <section class="adventure-grid">
                <div class="canoe">
                    <h3>Getting Back to Nature in a Canoe</h3>
                    <button type="button" class="adventure-buttons"><span>Read More</span></button>
                </div>

                <div class="beach">
                    <h3>A Night with Friends at the Beach</h3>
                    <button type="button" class="adventure-buttons"><span>Read More</span></button>
                </div>

                <div class="mountain">
                    <h3>Take in the Mountain View</h3>
                    <button type="button" class="adventure-buttons"><span>Read More</span></button>
                </div>
                
                <div class="sky">
                    <h3>Star-Gazing at the Night Sky</h3>
                    <button type="button" class="adventure-buttons"><span>Read More</span></button>
                </div>
            </section>

            </div><!-- Enf of Adventure -->
        </section><!-- End of fp-journal -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>