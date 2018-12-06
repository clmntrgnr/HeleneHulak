<?php
/**
Template Name: Home Page
 *
 * @package gridsby
 */

get_header(); ?>

	<div class="container home-grid"> 
			<!-- Top Navigation -->
            
    <section class="grid3d horizontal" id="grid3d">
		<div class="grid-wrap">
	    	<div id="gallery-container" class="gridsby infinite-scroll"> 
				<?php include('page-home.html'); ?>		
			</div><!-- gallery-container -->
		</div><!-- /grid-wrap -->
	</section><!-- grid3d -->
    
	</div><!-- /container -->