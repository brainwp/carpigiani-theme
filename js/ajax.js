/* Carregamento dos produtos das categorias via Ajax */
$(document).ready(function(){

	$.ajaxSetup({cache:false});
	$(".trick").click(function(){
        var post_link = $(this).attr("rel");
        //$("#single-home-container").html("<div class='box'><span class='loader5'></span></div>");
        $("#cat-prod-container").html("<div class='box-loader'><span class='clock'></span></div>");
        $("#cat-prod-container").load(post_link);
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

});

