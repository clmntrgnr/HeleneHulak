<?php
/**
 * @package gridsby
 */
?>


	<span id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<b><?php echo get_field('date'); ?></b><br/>
		<?php echo get_field('title'); ?> —
		<?php echo get_field('place'); ?>
		<?php echo get_field('authors'); ?>
	</span><!-- #post-## -->
