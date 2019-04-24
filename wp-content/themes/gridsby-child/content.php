<?php
/**
 * @package gridsby
 */
?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php echo get_field('title'); ?>
		<?php echo get_field('date'); ?>
		<?php echo get_field('place'); ?>
		<?php echo get_field('authors'); ?>
	</article><!-- #post-## -->
