<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package gridsby
 */
?>

	</section><!-- #content --> 

	<footer id="colophon" class="site-footer" role="contentinfo">
		
        <div class="site-info"> 
        
        <?php if( get_theme_mod( 'active_footer_social' ) == '') : ?> 
        	 
                       
        	<?php get_template_part( 'content', 'social' ); // Social Icons ?>
          
			 
		<?php endif; ?>
			
        
		<?php if ( get_theme_mod( 'gridsby_footer_phone' ) ) : ?> 
        	<h3 class="phone"><?php echo esc_html( get_theme_mod( 'gridsby_footer_phone' )); ?></h3>
        <?php endif; ?>
        
        <?php if ( get_theme_mod( 'gridsby_footer_contact' ) ) : ?>
        	<h3 class="email"><?php echo esc_html( get_theme_mod( 'gridsby_footer_contact' )); ?></h3> 
        <?php endif; ?> 
        </div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
