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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<span class="wear"></span>
		<div class="site-branding">
			<h1 class="site-title">
				<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<!-- <h2 class="site-description"><?php //bloginfo( 'description' ); ?></h2> -->
		</div>

		<!-- Menu Header -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'carpigiani-theme' ); ?></button>
			<a class="skip-link screen-reader-text" href="#content">
				<?php _e( 'Skip to content', 'carpigiani-theme' ); ?>
			</a>
		
			<!-- <li class="search-menu">
				<span class="i-search">Busca
					<input class="hide" type=”text”>
				</span>
			</li> -->
			<?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>

			<span class="i-suporte suporte-header"><p>Suporte<br /> Online</p></span>
		</nav> <!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
