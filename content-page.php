<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package carpigiani-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-page' ); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'carpigiani-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
