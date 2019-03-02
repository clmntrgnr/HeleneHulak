<?php
/**
 * @package gridsby
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
    	<header class="entry-header">
			<?php the_title( '<h1 class="entry-title"><span class="title">', '</span></h1>' ); ?> 
		</header><!-- .entry-header -->

		<div class="entry-content">

            <?php echo get_field('title'); ?>

			<?php the_content(); ?>
			<!-- <div class="entry-meta"> -->
				<!-- <span class="meta-block"> <?php the_category(); ?></span> -->
				<!-- <span class="meta-block"> <?php the_tags(); ?></span> -->
			<!-- </div> -->
			<!-- .entry-meta -->
		</div><!-- .entry-content -->

	</article><!-- #post-## -->
