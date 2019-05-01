<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package gridsby
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gridsby' ); ?></a>
    <header id="masthead" class="site-header" role="banner">
      <div class="grid navbar navbar-light navbar-expand-lg">
        <div class="site-branding">     	
          <?php if ( get_theme_mod( 'gridsby_logo' ) ) : ?>      
              <div class="site-logo">   
                <a class="navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                  <img 
                      src='<?php echo esc_url( get_theme_mod( 'gridsby_logo' ) ); ?>' 
                                
                  <?php if ( get_theme_mod( 'logo_size' ) ) : ?>
                                
                    width="<?php echo esc_attr( get_theme_mod( 'logo_size' ), __( '145', 'gridsby' )); ?>"
                                    
                  <?php endif; ?> 
                        
                     alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'
                    >
                </a>
              </div><!-- site-logo -->      
          <?php endif; ?>      
        </div><!-- site-branding -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="menu-container collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
          </div>
        </div>
        <?php if( get_theme_mod( 'active_social' ) == '') : ?>    	
          <div class="social-media collapse navbar-collapse" id="navbarNavAltMarkup">    
              <?php get_template_part( 'content', 'social' ); // Social Icons ?>     
          </div>
        <?php endif; ?>
      </div>
    </header>
	<section id="content" class="site-content">
