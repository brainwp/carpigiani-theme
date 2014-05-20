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
				the_post_thumbnail('medium');
				?>
				<!-- <<<<<<< HEAD -->
			</ul>
		</div>
		<!-- .entry-content -->
	</article>
	<!-- #post-## -->
</div><!-- .master-wrap -->
<!-- =======
		<h1 class="entry-title">Produtos<?php //the_title(); ?></h1>
		
	</article>#post-##
</div>.master-wrap
>>>>>>> master -->
