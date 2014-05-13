<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package carpigiani-theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" type="image/x-icon">


<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

		<div class="wrap">

			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div><!-- .logo -->

			<div class="site-branding">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Primary Menu', 'carpigiani-theme' ); ?></button>
					<a class="skip-link screen-reader-text" href="#content">
						<?php _e( 'Skip to content', 'carpigiani-theme' ); ?>
					</a>			

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul><li class="item-menu">%3$s</li></ul>' ) ); ?>
				</nav>
			</div><!-- #site-navigation -->

			<div class="infos-header">
				<span id="i-search"></span><input type="text" name="campo" id="search" value="" style="width:100px;">
				<span class="i-suporte suporte-header"><p>Suporte Online</p></span>
			</div><!-- .infos-header -->

		</div><!-- .wrap -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
