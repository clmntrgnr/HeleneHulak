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
			<div id="carouselExampleIndicators" class="carousel slide">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src=<?php echo get_field('image'); ?>>
						
					</div>
					<div class="carousel-item">
					<img src=<?php echo get_field('image2'); ?>>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
      </div>
			<div class="custom-details">
				<div class="attribute">
				  <span><?php echo get_field('year'); ?></span>
				</div>
        <div class="attribute">
				  <span><?php echo get_field('context'); ?></span>
				  <a><?php echo get_field('context_url'); ?></a>
				</div>
        <div class="attribute">
				  <span><?php echo get_field('technical_details'); ?></span>
				</div>
				<div class="entry-description">
        	<?php echo get_field('description'); ?>
      	</div>
      </div>
		</div><!-- .entry-content -->

	</article><!-- #post-## -->
