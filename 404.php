<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package carpigiani-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img-404.jpg" alt="">
				<header class="page-header">
					<h1 class="page-title"><?php _e( '<span>Erro!</span><br /> Página não encontrada.', 'carpigiani-theme' ); ?></h1>
				</header><!-- .page-header -->

				

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>