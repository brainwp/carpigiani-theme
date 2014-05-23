<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package carpigiani-theme
 */

get_header(); ?>

<style>
	.flex-container {
		max-width: 980px;
		margin: 0 auto;
		display: -webkit-flex;
		display: -moz-flex;
		display: -ms-flex;
		display: -o-flex;
    	display: flex;
    	flex-wrap: wrap; /* Quebra de linha */
    	/* -webkit-flex-flow: column;
    	flex-flow: column; */
	}
	.flex-container div img {
		background:#CCC;
    	margin:10px;
    	width:176px;
    	height:176px;

    	-webkit-flex:1 1 auto;
    	-moz-flex:1 1 auto;
    	-ms-flex:1 1 auto;
    	-o-flex:1 1 auto;
    	flex:1 1 auto;
	}
</style>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="content-page">
				<div class="wrap">

					<ul class="flex-container">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<div class="body-post-tax"><?php the_post_thumbnail( 'th-taxonomy' ); ?><a href=""><?php //the_title(); ?></a></div>
						
						<?php endwhile; else: ?>
						<p><?php _e('Desculpe, nenhum post encontrado com seus critérios.'); ?></p>
						<?php endif; ?>
					</ul><!-- .flex-container -->

				</div><!-- .wrap -->
			</section><!-- .content-page -->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
