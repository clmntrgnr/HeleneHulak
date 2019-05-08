<?php
/**
Template Name: Left Sidebar
 *
 * @package gridsby
 */

get_header(); ?>

<div class="grid grid-pad">
<!-- <h1>Curriculum Vitae</h1> -->
<div class="entry-content">
    <h3><?php echo get_field('section'); ?></h3>
<?php 
// check if the repeater field has rows of data
    if( have_rows('item') ):
    // loop through the rows of data
    while ( have_rows('press_links') ) : the_row(); ?>
    <div>
        <span><?php the_sub_field('date'); ?></span>: 
        <span><?php the_sub_field('title'); ?></span>
        <span><?php the_sub_field('place'); ?></span>
        <span><?php the_sub_field('city'); ?></span>
        <span><?php the_sub_field('description'); ?></span>
    </div>
    <?php endwhile;
    else :
    // no rows found
    endif;

    ?>
</div>
</div>
<?php get_footer(); ?>
