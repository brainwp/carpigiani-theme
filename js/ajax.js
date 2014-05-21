/* Carregamento dos produtos das categorias via Ajax */
$(document).ready(function(){

	$.ajaxSetup({cache:false});
	$(".cat-hover").on('click',function(){
        var post_link = $(this).attr("rel");
		var slug = $(this).attr('data-class-slug');
		var id = $(this).attr('data-id');
        //alert(post_id);
        //$("#single-home-container").html("<div class='box'><span class='loader5'></span></div>");
        $("#cat-prod-container").html("<div class='box-loader'><span class='clock'></span></div>");
        $("#cat-prod-container").load(post_link);
		$('#produtos-row').removeClass('cat-soft cat-restaurante cat-chocolate-e-creme cat-artesanal');
		$('#produtos-row').addClass('cat-'+slug);
		$('.cat-hover').each(function(){
			$(this).removeClass('active');
		})
		$(this).addClass('active');
		return false;
    });

	/*$.ajax({
        url: "http://localhost/wp-content/themes/carpigiani-theme/single-home.php",
        type: "POST",
        data: data,
        cache: false,
        success: function (data) {

            jQuery('#my-holding-ctn').html(data);

        }
    })*/

    /*$.ajaxSetup({cache:false});
    $(".trick").click(function(){
        var post_id = $(this).attr("rel");
        alert(post_id);
        $("#single-home-container").html("loading...");
        $("#single-home-container").load(post_id);
        //$("#single-home-container").load("http://<?php echo $_SERVER[HTTP_HOST]; ?>/single-home/",{id:post_id});
        //$("#single-home-container").load("http://<?php bloginfo('template_uri') ?>/single-home/",{id:post_id});

    return false;
    });*/

/* START | Menu de Categorias */
/*$(function() {
    var $links = $('.nav-menu-toogle .active-toggle');
    $links.click(function(){
        $('.sub-category-hide').fadeOut(300);
        $('ul#child-' + $(this).data('category')).slideToggle('slow');
    });
});*/
/* END | Menu de Categorias */

});
