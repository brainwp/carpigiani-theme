<?php
/**
 * @package carpigiani-theme
 */
?>

<section class="content-search content-results">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="wrap">

			<header class="entry-header page-header">
				<h1 class="entry-title page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

				<?php //if ( 'post' == get_post_type() ) : ?>
				<!-- <div class="entry-meta">
					<?php //carpigiani_theme_posted_on(); ?>
				</div> --><!-- .entry-meta -->
				<?php //endif; ?>
			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<?php else : ?>

			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'carpigiani-theme' ) ); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'carpigiani-theme' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<?php endif; ?>
			
			</header><!-- .entry-header -->

		</div>


		<footer class="entry-footer">
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'carpigiani-theme' ) );
					if ( $categories_list && carpigiani_theme_categorized_blog() ) :
				?>
				<!-- <span class="cat-links">
					<?php //printf( __( 'Posted in %1$s', 'carpigiani-theme' ), $categories_list ); ?>
				</span> -->
				<?php endif; // End if categories ?>

				<?php
					/* translators: used between list items, there is a space after the comma */
					$tags_list = get_the_tag_list( '', __( ', ', 'carpigiani-theme' ) );
					if ( $tags_list ) :
				?>
				<span class="tags-links">
					<?php printf( __( 'Tagged %1$s', 'carpigiani-theme' ), $tags_list ); ?>
				</span>
				<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>

			<?php //if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<!-- <span class="comments-link"><?php //comments_popup_link( __( 'Leave a comment', 'carpigiani-theme' ), __( '1 Comment', 'carpigiani-theme' ), __( '% Comments', 'carpigiani-theme' ) ); ?></span> -->
			<?php //endif; ?>

			<?php //edit_post_link( __( 'Edit', 'carpigiani-theme' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->

</section><!-- content-page content-search -->