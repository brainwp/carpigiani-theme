<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package carpigiani-theme
 */
?>
<div class="master-wrap">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-produtos' ); ?>>

		<div class="entry-title-slider"><h1 class="entry-title">Produtos<?php //the_title(); ?></h1></div>

		<div class="entry-content">
			

			<?php 

				$args = array(
					'type'                     => 'category',
					'child_of'                 => 0,
					'parent'                   => '',
					'orderby'                  => 'name',
					'order'                    => 'ASC',
					'hide_empty'               => 1,
					'hierarchical'             => 1,
					'exclude'                  => '1',
					'include'                  => '',
					'number'                   => '1',
					'taxonomy'                 => 'category',
					'pad_counts'               => false 

				); 

			?>
			
			<ul class="entry-image-slider">

				<img src="<?php bloginfo( 'template_url' ); ?>/images/th-cat.jpg" alt="">

				<?php foreach (get_categories() as $cat) : ?>
				<li>
					<img src="<?php //echo z_taxonomy_image_url($cat->term_id); ?>" />
					<a href="<?php //echo get_category_link($cat->term_id); ?>"><?php //echo $cat->cat_name; ?></a>
				</li>
				<?php endforeach; ?>
			</ul>

		</div><!-- .entry-content -->
	</article><!-- #post-## -->
</div><!-- .master-wrap -->