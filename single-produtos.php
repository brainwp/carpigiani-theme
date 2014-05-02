<?php
/**
 * The Template for displaying all single posts.
 *
 * @package carpigiani-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<section class="slider-content-single">

			<div class="master-wrap">
				<div class="desc">
					<?php
						$terms = get_the_terms( $post->ID , 'tipos' );
						if ( $terms != null ){
							foreach( $terms as $term ) {
								echo "<h2 class=" . $term->name . ">" . $term->name . "</h2>";
								echo "<h1>" . get_the_title() . "</h1>";
								echo $term->description;
								unset( $term );
						} } ?>
				</div>

				<div id="carousel" class="wrap list_carousel responsive">

					<ul id="foo4">

					<?php
					    $slider_single = array(
					    	'post_type' => 'attachment',
					    	'numberposts' => -1,
					    	'post_status' => null,
					    	'post_parent' => $post->ID
					    	);
					    $attachments = get_posts( $slider_single );
					    if ( $attachments ) {
					        foreach ( $attachments as $attachment ) {
					            $image_attributes = wp_get_attachment_image_src( $attachment->ID, 'slider-home' ); ?>
							    <li class="item">        
							        <div class="image"><img src="<?php echo $image_attributes[0]; ?>" /></div><!-- .image -->
							    </li><!-- .item -->    
						<?php } ?>
					<?php } ?>

					</ul>
					
					<div class="clearfix"></div>

				</div>

			</div>

				<a id="prev-slider" class="prev" href="#"></a>
				<a id="next-slider" class="next" href="#"></a>

			</section><!-- #carousel .slider-content-single -->





			<?php get_template_part( 'content', 'single-produto' ); ?>

			<?php carpigiani_theme_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>