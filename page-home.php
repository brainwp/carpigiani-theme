<?php

/* Template Name: Home */

get_header(); ?>

<section class="slider-content-home">

		<div id="carousel" class="wrap list_carousel responsive">
			<ul id="foo5">

			<?php $slider_query = new WP_Query('post_type=produtos&posts_per_page=4');
    			while ($slider_query->have_posts()) : $slider_query->the_post(); ?>
				<li class="item">
					<div class="excerpt">
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="btn">
							Veja <?php the_title(); ?> &gt;&gt;
						</a><!-- .btn -->		
					</div><!-- .excerpt -->
					<?php $img = get_post_meta( get_the_ID(), 'image_slider_home', true ); ?>
					<div class="image">
						<?php if($img !== false && !empty($img)): ?>
						   <?php $img = wp_get_attachment_image_src( $img, 'image_slider_home', false ); ?>
						   <img src="<?php echo $img[0]; ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
						<?php endif; ?>
					</div><!-- .image -->
				</li><!-- .item -->
			<?php endwhile;  wp_reset_query(); ?>

			</ul>
			
			<div class="clearfix"></div>

		</div>

			<a id="prev-slider" class="prev" href="#"></a>
			<a id="next-slider" class="next" href="#"></a>

</section><!-- #carousel .slider-content-home -->

<section class="body-content-home">
<div class="wrap">
	<?php
		// Bloco 1
		$icone_1 = of_get_option('icon_feature_upload_um');
		$title_1 = of_get_option('title_feature_um');
		$excerpt_1 = of_get_option('resumo_feature_um');
		$link_1 = of_get_option('link_box_um');

		// Bloco 2
		$icone_2 = of_get_option('icon_feature_upload_dois');
		$title_2 = of_get_option('title_feature_dois');
		$excerpt_2 = of_get_option('resumo_feature_dois');
		$link_2 = of_get_option('link_box_dois');

		// Bloco 3
		$icone_3 = of_get_option('icon_feature_upload_tres');
		$title_3 = of_get_option('title_feature_tres');
		$excerpt_3 = of_get_option('resumo_feature_tres');
		$link_3 = of_get_option('link_box_tres');

		// Bloco 4
		$icone_4 = of_get_option('icon_feature_upload_quatro');
		$title_4 = of_get_option('title_feature_quatro');
		$excerpt_4 = of_get_option('resumo_feature_quatro');
		$link_4 = of_get_option('link_box_quatro');
	?>
		<div class="box">
			<span class="icon">
				<a href="<?php echo $link_1; ?>">
				<?php if ( $icone_1 ) { ?>
					<img src="<?php echo $icone_1; ?>" alt="<?php echo $title_1; ?>">
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-gelato.png" alt="<?php echo $title_1; ?>">
				<?php } ?>
				</a>			
			</span>
			<a class="title" href="<?php echo $link_1; ?>"><?php echo $title_1; ?></a>
			<span class="excerpt"><a href="<?php echo $link_1; ?>"><?php echo $excerpt_1; ?></a></span>
		</div><!-- .box -->
		<div class="box">
			<span class="icon">
				<a href="<?php echo $link_2; ?>">
				<?php if ( $icone_2 ) { ?>
					<img src="<?php echo $icone_2; ?>" alt="<?php echo $title_2; ?>">
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-distribuidores.png" alt="<?php echo $title_2; ?>">
				<?php } ?>
				</a>
			</span>
			<a class="title" href="<?php echo $link_2; ?>"><?php echo $title_2; ?></a>
			<span class="excerpt"><a href="<?php echo $link_2; ?>"><?php echo $excerpt_2; ?></a></span>
		</div><!-- .box -->
		<div class="box">
			<span class="icon">
				<a href="<?php echo $link_3; ?>">
				<?php if ( $icone_3 ) { ?>
					<img src="<?php echo $icone_3; ?>" alt="<?php echo $title_3; ?>">
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-eventos.png" alt="<?php echo $title_3; ?>">
				<?php } ?>
				</a>
			</span>
			<a class="title" href="<?php echo $link_3; ?>"><?php echo $title_3; ?></a>
			<span class="excerpt"><a href="<?php echo $link_3; ?>"><?php echo $excerpt_3; ?></a></span>
		</div><!-- .box -->
		<div class="box">
			<span class="icon">
				<a href="<?php echo $link_4; ?>">
				<?php if ( $icone_4 ) { ?>
					<img src="<?php echo $icone_4; ?>" alt="<?php echo $title_4; ?>">
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-fale.png" alt="<?php echo $title_4; ?>">
				<?php } ?>	
				</a>
			</span>
			<a class="title" href="<?php echo $link_4; ?>"><?php echo $title_4; ?></a>
			<span class="excerpt"><a href="<?php echo $link_4; ?>"><?php echo $excerpt_4; ?></a></span>
		</div><!-- .box -->

	</div><!-- .wrap -->
</section><!-- .body-content-home -->

<?php get_footer(); ?>
