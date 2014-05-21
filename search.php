<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package carpigiani-theme
 */

get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="content-page content-search">
			<div class="wrap">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><i><?php printf( __( 'Pesquisado por: %s', 'carpigiani-theme' ), '<span>' . get_search_query() . '</span>' ); ?></i></h1>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'search' ); ?>

					<?php endwhile; ?>

					<?php carpigiani_theme_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

			</div><!-- .wrap -->
		</section><!-- .content-page .content-search -->
	</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
