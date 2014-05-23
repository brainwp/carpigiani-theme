<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 23/05/14
 * Time: 16:04
 */
function initAjaxProdutos() {
	if ( isset( $_GET['p-type'] ) ) {
		$type = $_GET['p-type'];
		$produtos = new WP_Query( array(
			'post_type'      => 'produtos',
			'order'          => 'ASC',
			'tipos'          => 'soft',
			'posts_per_page' => '8'
		) );
		if ( $type == 'soft' ) {
			$produtos = new WP_Query( array(
				'post_type'      => 'produtos',
				'order'          => 'ASC',
				'tipos'          => 'soft',
				'posts_per_page' => '8'
			) );
		}

		if ( $type == 'restaurante' ) {
			$produtos = new WP_Query( array(
				'post_type'      => 'produtos',
				'order'          => 'ASC',
				'tipos'          => 'restaurante',
				'posts_per_page' => '8'
			) );
		}

		if ( $type == 'chocolate-e-creme' ) {
			$produtos = new WP_Query( array(
				'post_type'      => 'produtos',
				'order'          => 'ASC',
				'tipos'          => 'chocolate-e-creme',
				'posts_per_page' => '8'
			) );
		}
		if ( $type == 'artesanal' ) {
			$produtos = new WP_Query( array(
				'post_type'      => 'produtos',
				'order'          => 'ASC',
				'tipos'          => 'artesanal',
				'posts_per_page' => '8'
			) );
		}
		?>

		<?php while ( $produtos->have_posts() ) : $produtos->the_post(); ?>

			<li class="item">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'slider-archive-produto' ); ?>
				</a>
				<a class="permalink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li><!-- .item -->

		<?php endwhile; // end of the loop. ?>

		<div class="clearfix"></div>

		<div class="clearfix"></div>
	<?php
	die();
	}
}
add_action( 'init', 'initAjaxProdutos', 1 );
?>