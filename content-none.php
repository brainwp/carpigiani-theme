<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package carpigiani-theme
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Nada Encontrado!', 'carpigiani-theme' ); ?></h1>

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'carpigiani-theme' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<!-- <p><?php //_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'carpigiani-theme' ); ?></p> -->
			<p><?php _e( 'Pedimos desculpa, mas não achamos nenhum resultado com sua busca. Se preferir tente novavente', 'carpigiani-theme' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'carpigiani-theme' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
	</header><!-- .page-header -->
</section><!-- .no-results -->
