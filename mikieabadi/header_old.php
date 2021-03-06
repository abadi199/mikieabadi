<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package mikieabadi
 * @since mikieabadi 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200|Oswald:300|Open+Sans' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site <?php echo get_the_title();?>">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
		</hgroup>

		<nav id="site-navigation" class="navigation-main" role="navigation" data-spy="affix" data-offset-top="200">
			<h1 class="menu-toggle"><a id="menu-toggle">Menu</a></h1>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-container' ) ); ?>
		</nav><!-- .site-navigation -->
	</header><!-- #masthead -->

<script type="text/javascript">
jQuery(function() {

	var offsetFn = function() {
		return jQuery('.site-header').height() - jQuery('#site-navigation').height(); 
	};

	jQuery('#site-navigation').affix({offset: {top: offsetFn}});
});	
</script>

	<div class="main-container">
		<div id="main" class="site-main">
