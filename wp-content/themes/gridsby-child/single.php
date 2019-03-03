<?php
/**
 * The template for displaying all single posts.
 *
 * @package gridsby
 */

/**
 * @todo(@laetitia) Remove this function from this file
 */
if ( ! function_exists( 'gridsby_the_post_navigationPrevious' ) ) :
  function gridsby_the_post_navigationPrevious() { 
    $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );

    if ( ! $previous ) {
      return;
    }
    ?>
    <nav role="navigation">
      <?php
        previous_post_link( '%link', '<div class="nav-previous"><i class="fa fa-angle-left"></i><div class="navigation-title">%title</div></div>' );
      ?>
    </nav><!-- .navigation -->
    <?php
  }
endif;
/**
 * @todo(@laetitia) Remove this function from this file
 */
if ( ! function_exists( 'gridsby_the_post_navigationNext' ) ) :
  function gridsby_the_post_navigationNext() { 
    $next     = get_adjacent_post( false, '', false );

    if ( ! $next ) {
      return;
    }
    ?>
    <nav role="navigation">
        <?php
          next_post_link( '%link', '<div class="nav-next"><i class="fa fa-angle-right"></i><div class="navigation-title">%title</div></div>' );
        ?>
    </nav><!-- .navigation -->
    <?php
  }
endif;

get_header(); ?>

<div class="grid grid-pad">
	
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div class="col-9-12 content-wrapper">
    <?php else: ?>
    	<div class="col-1-1 content-wrapper"> 
    <?php endif; ?> 
    
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
    
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="HH-article">
                <div class="HH-navigation previous"><?php gridsby_the_post_navigationPrevious(); ?></div>
                <div class="HH-content"><?php get_template_part( 'content', 'single' ); ?></div>
                <div class="HH-navigation next"><?php gridsby_the_post_navigationNext(); ?></div>
              </div>

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

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?> 
    	<?php get_sidebar(); ?>
	<?php endif; ?>  

</div>
<?php get_footer(); ?>