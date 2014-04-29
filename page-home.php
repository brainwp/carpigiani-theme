<?php get_header(); ?>

<section class="slider-content-home">

	<div class="wrap">
		<div class="item">
			<div class="excerpt">
				<span class="btn">
			</div><!-- .btn -->		
		</div><!-- .excerpt -->
		<div class="image"></div><!-- .image -->
		</div><!-- .item -->
	</div><!-- .wrap -->

</section><!-- .slider-content-home -->

<section class="body-content-home">

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
		<span class="icon-fale">
			<a href="<?php echo $link_1; ?>"><?php echo $title_1; ?></a>
			<img src="<?php echo $icone_1; ?>" alt="<?php echo $title_1; ?>">
		</span>
		<span class="excerpt-fale"><a href="<?php echo $link_1; ?>"><?php echo $excerpt_1; ?></a></span>
	</div><!-- .box -->
	<div class="box">
		<span class="icon-fale">
			<a href="<?php echo $link_2; ?>"><?php echo $title_2; ?></a>
			<img src="<?php echo $icone_2; ?>" alt="<?php echo $title_2; ?>">
		</span>
		<span class="excerpt-fale"><a href="<?php echo $link_2; ?>"><?php echo $excerpt_2; ?></a></span>
	</div><!-- .box -->
	<div class="box">
		<span class="icon-fale">
			<a href="<?php echo $link_3; ?>"><?php echo $title_3; ?></a>
			<img src="<?php echo $icone_3; ?>" alt="<?php echo $title_3; ?>">
		</span>
		<span class="excerpt-fale"><a href="<?php echo $link_3; ?>"><?php echo $excerpt_3; ?></a></span>
	</div><!-- .box -->
	<div class="box">
		<span class="icon-fale">
			<a href="<?php echo $link_4; ?>"><?php echo $title_4; ?></a>
			<img src="<?php echo $icone_4; ?>" alt="<?php echo $title_4; ?>">
		</span>
		<span class="excerpt-fale"><a href="<?php echo $link_4; ?>"><?php echo $excerpt_4; ?></a></span>
	</div><!-- .box -->
</section><!-- .body-content-home -->

<?php get_footer(); ?>
