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

		<div class="entry-content HH-content">

			<div class="HH-images">
					<?php
						$i = 0;
						// check if the repeater field has rows of data
						if( have_rows('images') ):
							// loop through the rows of data
								while ( have_rows('images') ) : $i++; the_row(); ?>
										<section class="HH-image">
											<div data-toggle="modal" data-target="#myModal<?php echo $i;?>">
												<img src=<?php the_sub_field('image') ?> />												
											</div>
										</section>
										<!-- Modal -->
										<div class="modal fade" id="myModal<?php echo $i;?>" role="dialog">
											<div class="modal-dialog">
												<!-- Modal content-->
												<div class="modal-content">
													<img class="HH-image-full" src=<?php the_sub_field('image') ?> />												
												</div>
											</div>
										</div>
								<?php endwhile;
						endif;
					?>
					<div class="HH-video">
						<?php echo the_field('oembed'); ?>
						<div class="embed-container">
							<?php the_field('oembed'); ?>
						</div>
					</div>
			</div>

			<div class="HH-text">
				<div>
					<?php echo get_field('year'); ?>
				</div>
				<div class="attribute">
					<?php echo get_field('technical_details'); ?>
				</div>
				<div class="entry-description attribute">
					<?php echo get_field('description'); ?>
				</div>
				<div class="attribute">
					<a href=<?php echo get_field('context_url'); ?> target="_blank"><?php echo get_field('context'); ?></a>
				</div>
			</div>
		</div><!-- .entry-content -->

	</article><!-- #post-## -->
