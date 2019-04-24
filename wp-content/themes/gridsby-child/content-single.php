<?php
/**
 * @package gridsby
 */
?>

	<article class="HH-project" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
      <h1 class="entry-title">
        <span class="title"><?php echo get_field('title'); ?></span>
      </h1>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<div class="custom-details">
				<div class="attribute">
				  <span><?php echo get_field('year'); ?></span>
				</div>
        <div class="attribute">
				  <a href=<?php echo get_field('context_url'); ?> target="_blank"><?php echo get_field('context'); ?></a>
				</div>
        <div class="attribute">
				  <span><?php echo get_field('technical_details'); ?></span>
				</div>
				<div class="entry-description">
        	<?php echo get_field('description'); ?>
				</div>
				<?php
				// check if the repeater field has rows of data
				if( have_rows('images') ):
					// loop through the rows of data
						while ( have_rows('images') ) : the_row(); ?>
								<img src=<?php the_sub_field('image') ?> />
						<?php endwhile;
				endif;
			?>
			</div>
		</div><!-- .entry-content -->

	</article><!-- #post-## -->
