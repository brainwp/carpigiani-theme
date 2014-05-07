<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package carpigiani-theme
 */
?>
<div class="master-wrap">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-produtos' ); ?>>
		<!-- <div class="entry-title-slider"><h1 class="entry-title">Produtos<?php //the_title(); ?></h1></div> -->
		<div class="entry-content">			
			
			<ul class="entry-image-slider">
					
			    <?php
			    $args = array( 'post_type' => 'attachment', 'numberposts' => 1, 'post_status' => null, 'post_parent' => null, 'orderby' => 'rand' );
			    $attachments = get_posts( $args );
			    if ( $attachments ) {
			        foreach ( $attachments as $attachment ) {
			            $image_attributes = wp_get_attachment_image_src( $attachment->ID, 'medium' );
			            //echo '<li><a class="thumb" href="';
			            echo '<a class="thumb" href="';
			            echo $image_attributes[0];
			            echo '">';
			            echo wp_get_attachment_image( $attachment->ID, 'slider-cat-produto' );
			            //echo '</a></li>';
			            echo '</a>'; ?>
			        <?php } ?>
	    		<?php } ?>

			</ul>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->		
</div><!-- .master-wrap -->