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
				<span id="img-404"></span>
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Erro! Página can&rsquo;t não encontrada.', 'carpigiani-theme' ); ?></h1>
				</header><!-- .page-header -->				
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>