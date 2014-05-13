<?php
/**
 * 
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package carpigiani-theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<section class="slider-content slider-content-produtos">
				<div class="entry-title-slider"><h1 class="entry-title">Produtos<?php //the_title(); ?></h1></div>

					<?php get_template_part( 'content', 'produtos' ); ?>

			</section><!-- #carousel .slider-content-single -->

			<section class="body-content body-content-produtos">
				<div class="wrap">

					<?php
						$args = array(
						'type'                     => '',
						'child_of'                 => 0,
						'parent'                   => '',
						'orderby'                  => 'ID',
						'order'                    => 'ASC',
						'hide_empty'               => 0,
						'hierarchical'             => 1,
						'exclude'                  => '1',
						'include'                  => '',
						'number'                   => '4',
						'taxonomy'                 => 'category',
						'pad_counts'               => false );

						$categories = get_categories( $args );

						foreach( $categories as $category ) :
						$cat_ID = $category->term_id; // Get ID the category.
						// Get the URL of this category
	    				$category_link = get_category_link( $cat_ID );
						// Get the Slug of this category
	    				$category_slug = get_category_link( $category->slug );
					?>

					<script >
$('.trick').on('click', function(){
$('.cat-hover').removeClass('grown');
$('.cat-hover').addClass('spot');
});

$('.cat-hover').on('click', function(){
$(this).removeClass('spot');
$(this).addClass('grown');
});
					</script>

						<div class="box" data-category="">
							<div class="cat-hover grown cat-hover-<?php echo $category->slug ?>">
								
								<a class="trick" rel="<?php echo esc_url( $category_link); ?>" href="<?php the_permalink();?>">
									<span class="cat-icon icon-<?php echo $category->slug ?>"></span>
									<span class="excerpt"><a rel="<?php echo esc_url( $category_link); ?>" href="<?php echo esc_url( $category_link ); ?>"><?php echo $category->name; ?></a></span>
								</a>

							</div>
							<?php	
								$child_args = array( 'child_of' => $cat_ID, 'hide_empty' => 0, );
								$child_categories = get_categories( $child_args );
							?>
						</div><!-- .box -->						

						<?php endforeach; ?>

				</div><!-- .wrap -->
			</section><!-- .body-content-produtos -->
			<!-- <section data-background="background-<?php //$post-ID(); ?>" class="cat-artesanal body-category-produtos"></section>
			<section data-background="background-<?php //$post-ID(); ?>" class="cat-restaurante body-category-produtos"></section>
			<section data-background="background-<?php //$post-ID(); ?>" class="cat-soft body-category-produtos"></section>
			<section data-background="background-<?php //$post-ID(); ?>" class="cat-chocolate body-category-produtos"></section>
			 -->
		<?php endwhile; // end of the loop. ?>
			
			<section id="cat-prod-container" class="cat-artesanal body-category-produtos"></section><!-- .body-category-produtos -->		
		

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
