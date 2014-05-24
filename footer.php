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
				<span id="law"><i><?php echo of_get_option('perfil_law'); ?></i></span>

				<div class="social-icons">
					<a class="social" id="twitter" target="_blank" href="<?php echo of_get_option('perfil_twitter'); ?>"></a>
					<a class="social" id="instagram" target="_blank" href="<?php echo of_get_option('perfil_instagram'); ?>"></a>
					<a class="social" id="facebook" target="_blank" href="<?php echo of_get_option('perfil_facebook'); ?>"></a>
				</div><!-- .i-social -->

				<span class="i-suporte suporte-footer"><p>Suporte <br> Online</p></span>
				
			</div><!-- .site-info --></span>
		</div>
	</footer><!-- .full -->

</div><!-- #page -->

<!-- Script for Categories Menus -->
<?php wp_footer(); ?>

</body>
</html>
