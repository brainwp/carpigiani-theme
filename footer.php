<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package carpigiani-theme
 */
?>

	</div><!-- #content -->

	<footer class="full">
		<div class="wrap">
			<div class="site-info">
				<span id="law"><i>Carpigiani do Brasil todos direitos reservados</i></span>

				<div class="social-icons">
					<a class="social" id="twitter" href=""></a>
					<a class="social" id="instagram" href=""></a>
					<a class="social" id="facebook" href=""></a>
				</div><!-- .i-social -->

				<span class="i-suporte suporte-footer"><p>Suporte <br> Online</p></span>
				
			</div><!-- .site-info --></span>
		</div>
	</footer><!-- .full -->

</div><!-- #page -->

<script >
	$('.trick').on('click', function(){
		$('.cat-hover').removeClass('mdiv-5');
		$('.cat-hover').addClass('mdiv');
	});

	$('.cat-hover').on('click', function(){
		$(this).removeClass('mdiv');
		$(this).addClass('mdiv-5');
	});

	$('.trick').on('click', function(){
		$('.cat-hover').removeClass('mdiv-6');
		$('.cat-hover').addClass('mdiv');
	});

	$('.cat-hover').on('click', function(){
		$(this).removeClass('mdiv ');
		$(this).addClass('mdiv-6');
	});

	$('.trick').on('click', function(){
		$('.cat-hover').removeClass('mdiv-7');
		$('.cat-hover').addClass('mdiv');
	});

	$('.cat-hover').on('click', function(){
		$(this).removeClass('mdiv ');
		$(this).addClass('mdiv-7');
	});

	$('.trick').on('click', function(){
		$('.cat-hover').removeClass('mdiv-8');
		$('.cat-hover').addClass('mdiv');
	});

	$('.cat-hover').on('click', function(){
		$(this).removeClass('mdiv ');
		$(this).addClass('mdiv-8');
	});
	
</script>

<?php wp_footer(); ?>

</body>
</html>
