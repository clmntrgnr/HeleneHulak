<?php
/**
 * @package gridsby
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
    	<header class="entry-header">
      <h1 class="entry-title">
        <span class="title"><?php echo get_field('title'); ?></span>
      </h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
      <div class="entry-img">
        <img src=<?php echo get_field('image'); ?>>
        <div class="entry-description">
        <?php echo get_field('description'); ?>
      </div>
      </div>
			<div class="custom-details">
				<div class="attribute">
				  <h6>Year</h6>
				  <span><?php echo get_field('year'); ?></span>
				</div>
        <div class="attribute">
				  <h6>Context</h6>
				  <span><?php echo get_field('context'); ?></span>
				  <a><?php echo get_field('context_url'); ?></a>
				</div>
        <div class="attribute">
				  <h6>Technical details</h6>
				  <span><?php echo get_field('technical_details'); ?></span>
				</div>
      </div>
		</div><!-- .entry-content -->

	</article><!-- #post-## -->
