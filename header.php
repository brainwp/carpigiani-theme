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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<!-- Start | Especial style for images taxonomy -->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/css/style_common.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/css/style10.css" type="text/css" media="screen" />
<!-- End | Especial style for images taxonomy -->

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/rmm-css/responsivemobilemenu.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo( 'template_url' ) ?>/js/responsivemobilemenu.js"></script>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/> -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

		<section class="track-header">
			<div class="wrap">
				<!-- .START | Menu Responsive -->
				<div class="rmm">
		            <ul>
						<?php
							$defaults = array(
								'theme_location'  => '',
								'menu'            => '',
								'container'       => 'div',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);
							wp_nav_menu( $defaults );
						?>		                
		            </ul>
		        </div><!-- .rmm -->
				<!-- .END | Menu Responsive -->

				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div><!-- .logo -->

				<div class="site-branding">
					<!-- <nav id="site-navigation" class="main-navigation" role="navigation"> -->
					<nav id="" class="main-navigation" role="navigation">
						<!-- <button class="menu-toggle"><?php //_e( 'Primary Menu', 'carpigiani-theme' ); ?></button> -->
						<a class="skip-link screen-reader-text" href="#content">
							<?php _e( 'Skip to content', 'carpigiani-theme' ); ?>
						</a>

						<?php
							$defaults = array(
								'theme_location'  => '',
								'menu'            => '',
								'container'       => 'div',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);

							wp_nav_menu( $defaults );

						?>
						<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul><li class="item-menu">%3$s</li></ul>' ) ); ?>
					</nav>

				</div><!-- #site-navigation -->

				<form id="search-form" role="search" method="get" id="searchform" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<div class="body-search">
						<div class="wrapper-simple">
							<input type="text" placeholder="Pesquisa" name="s" id="s" value="<?php the_search_query(); ?>">
							<input type="submit" value="">
							<img class="searchBlue" src="<?php //bloginfo( 'template_url' ) ?>/images/i-searchBlue.png">
						</div>

					</div><!-- .body-search -->
				</form>

				<div class="infos-header">
					<span class="i-suporte suporte-header"><p>Suporte Online</p></span>
				</div><!-- .infos-header -->
			</div><!-- .wrap -->
		</section><!-- .track-header -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
