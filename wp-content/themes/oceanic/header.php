<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package oceanic
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e( 'Skip to content', 'oceanic' ); ?></a>

<header id="masthead" class="site-header border-bottom<?php echo ( get_theme_mod( 'oceanic-header-layout', false ) == 'oceanic-header-layout-centered' ) ? ' oceanic-header-layout-centered' : ' oceanic-header-layout-standard'; ?>" role="banner">
    
    <?php if ( get_theme_mod( 'oceanic-header-layout', false ) == 'oceanic-header-layout-centered' ) : ?>
    
        <?php get_template_part( '/templates/header/header-layout-centered' ); ?>
        
    <?php else : ?>
        
        <?php get_template_part( '/templates/header/header-layout-standard' ); ?>
        
    <?php endif; ?>
    
</header><!-- #masthead -->

<script>
    var oceanicSliderTransitionSpeed = parseInt(<?php echo intval( get_theme_mod( 'oceanic-slider-transition-speed', 450 ) ); ?>);
</script>

<?php
if ( is_front_page() ) {
	if ( get_theme_mod( 'oceanic-slider-type', false ) != 'oceanic-no-slider' ) {
		get_template_part( '/templates/slider/homepage-slider' );
	} else if ( get_header_image() ) {
		get_template_part( '/templates/header-image/header-image' );
	}
}
?>

<div id="content" class="site-content site-container<?php echo ( ! is_active_sidebar( 'sidebar-1' ) ) ? ' content-no-sidebar' : ' content-has-sidebar'; ?>">
	<a name="site-content"></a>