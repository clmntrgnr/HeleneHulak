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
            <main id="main" class="site-main HH-about HH-project" role="main">
    
                <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <div class="page-content HH-content">
                    <div class="entry-img HH-images">
                      <img src=<?php echo get_field('image'); ?>>
                    </div>
                    <div class="entry-description HH-text">
                    <div>
                      <?php echo get_field('description'); ?>
                    </div>
                    <div class="attribute">
                      <?php echo get_field('email'); ?>
                    </div>
                    <div class="entry-description attribute">
                      <?php echo get_field('address'); ?>
                    </div>
                    <?php 
                    // check if the repeater field has rows of data
                      if( have_rows('press_links') ):
                        // loop through the rows of data
                        while ( have_rows('press_links') ) : the_row(); ?>
                        <div>
                          <span><?php the_sub_field('title'); ?></span>: 
                          <a href=<?php the_sub_field('url'); ?> target="_blank"><?php the_sub_field('url'); ?></a>
                        </div>
                        <?php endwhile;
                      else :
                        // no rows found
                      endif;

                      ?>
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
