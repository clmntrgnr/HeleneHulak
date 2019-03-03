<?php
/**
Template Name: Fullwidth Page 
 *
 * @package gridsby
 */

get_header(); ?>

<div class="grid grid-pad">
	<div class="col-1-1 content-wrapper">
        <div id="primary" class="content-area">
            <main id="main" class="site-main HH-about" role="main">
    
                <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <div class="page-content">
                    <div class="entry-img">
                      <img src=<?php echo get_field('image'); ?>>
                    </div>
                    <div class="entry-description">
                      <?php echo get_field('description'); ?>
                      <div class="entry-contact">
                        <?php echo get_field('cv'); ?>
                    </div>
                    </div>
                  </div><!-- .entry-content -->
                </article><!-- #post-## -->
    
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
    
                <?php endwhile; // end of the loop. ?>
    
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
</div>
<?php get_footer(); ?>
