<?php
/**
 * @package carpigiani-theme
 */
?>

		<section class="content-single">

				


			</section><!-- content-single -->

<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-single-produto' ); ?>>

	<div class="thumb">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="entry-content">
		<h1 class="entry-title"><?php the_title(); ?> <span><?php the_field( 'sub_titulo' ); ?></span></h1>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'carpigiani-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Editar esse Produto', 'carpigiani-theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
