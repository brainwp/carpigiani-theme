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
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon-artesanal.png" alt="<?php echo $title_1; ?>">
							<?php } ?>
							</a>			
						</span>
						<a class="title" href="<?php echo $link_1; ?>"><?php echo $title_1; ?></a>
						<span class="excerpt"><a href="<?php //echo $link_1; ?>"><?php //echo $excerpt_1; ?>Artesenal</a></span>
					</div><!-- .box -->
					<div class="box">
						<span class="icon">
							<a href="<?php echo $link_2; ?>">
							<?php if ( $icone_2 ) { ?>
								<img src="<?php echo $icone_2; ?>" alt="<?php echo $title_2; ?>">
							<?php } else { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon-restaurante.png" alt="<?php echo $title_2; ?>">
							<?php } ?>
							</a>
						</span>
						<a class="title" href="<?php echo $link_2; ?>"><?php echo $title_2; ?></a>
						<span class="excerpt"><a href="<?php //echo $link_2; ?>"><?php //echo $excerpt_2; ?>Restaurante</a></span>
					</div><!-- .box -->
					<div class="box">
						<span class="icon">
							<a href="<?php echo $link_3; ?>">
							<?php if ( $icone_3 ) { ?>
								<img src="<?php echo $icone_3; ?>" alt="<?php echo $title_3; ?>">
							<?php } else { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon-soft.png" alt="<?php echo $title_3; ?>">
							<?php } ?>
							</a>
						</span>
						<a class="title" href="<?php echo $link_3; ?>"><?php echo $title_3; ?></a>
						<span class="excerpt"><a href="<?php //echo $link_3; ?>"><?php //echo $excerpt_3; ?>Soft</a></span>
					</div><!-- .box -->
					<div class="box">
						<span class="icon">
							<a href="<?php echo $link_4; ?>">
							<?php if ( $icone_4 ) { ?>
								<img src="<?php echo $icone_4; ?>" alt="<?php echo $title_4; ?>">
							<?php } else { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon-chocolate.png" alt="<?php echo $title_4; ?>">
							<?php } ?>	
							</a>
						</span>
						<a class="title" href="<?php echo $link_4; ?>"><?php echo $title_4; ?></a>
						<span class="excerpt"><a href="<?php //echo $link_4; ?>"><?php //echo $excerpt_4; ?>Chocolate e Creme</a></span>
					</div><!-- .box -->

				</div><!-- .wrap -->
			</section><!-- .body-content-produtos -->

			<section class="body-category-produtos"></section><!-- .body-category-produtos -->

		<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
