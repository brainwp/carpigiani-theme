jQuery(function($) {

	$.ajaxSetup({cache:false});
	$(".cat-hover").on('click',function(){
		$('.cat-hover').each(function(){
			$(this).removeClass('active');
		});
		var post_link = $(this).attr("rel");
		var slug = $(this).attr('data-class-slug');
		var id = $(this).attr('data-id');
		//alert(post_id);
		//$("#single-home-container").html("<div class='box'><span class='loader5'></span></div>");
		$("#foo7").html("<div class='box-loader'><span class='clock'></span></div>");
		$.get(post_link, function( data ) {
			$("#foo7").trigger('destroy');
			$('#foo7').html('');
			$("#ajax-container-hide").html(data);
			$('#foo7').carouFredSel({
				prev: '#prev-slider',
				next: '#next-slider',
				responsive: true,
				width: '100%',
				scroll: {
					items: 1,
					pauseOnHover: true
				},
				items: {
					width: 250,
					visible: {
						min: 1,
						max: 4
					}
				}
			});	
			$('#ajax-container-hide li').each(function(){
				var item = '<li class="item">'+$(this).html()+'</li>';
				$('#foo7').trigger( 'insertItem', [item, 1, false] );
			});
			$('#foo7').trigger('play');
		});
		$('#produtos-row').removeClass('cat-soft cat-restaurante cat-chocolate-e-creme cat-artesanal');
		$('#produtos-row').addClass('cat-'+slug);
		$('.cat-hover').each(function(){
			$(this).removeClass('active');
		});
		$('.cat-hover.active').removeClass('active');
		$(this).addClass('active');
	});
	$('#foo7').carouFredSel({
		prev: '#prev-slider',
		next: '#next-slider',
		responsive: true,
		width: '100%',
		scroll: {
			items: 1,
			pauseOnHover: true
		},
		items: {
			width: 250,
			visible: {
				min: 1,
				max: 4
			}
		}
	});
	$('#foo5').carouFredSel({
		prev: '#prev-slider',
		next: '#next-slider',
		responsive: true,
		width: '100%',
		scroll: {
			items: 1,
			pauseOnHover: true,
		},
		items: {
			width: 980,
			visible: {
				min: 1,
				max: 1
			}
		}
	});
	$('#foo4').carouFredSel({
		prev: '#prev-slider',
		next: '#next-slider',
		responsive: true,
		width: '100%',
		scroll: {
			items: 1,
			pauseOnHover: true,
		},
		items: {
			width: 580,
			visible: {
				min: 1,
				max: 1
			}
		}
	});
	$('#foo3').carouFredSel({
		prev: '#prev-outros',
		next: '#next-outros',
		responsive: true,
		width: '100%',
		scroll: {
			items: 1,
			pauseOnHover: true,
		},
		items: {
			width: 400,
			visible: {
				min: 1,
				max: 1
			}
		}
	});
	$('#foo2').carouFredSel({
		prev: '#prev-outros',
		next: '#next-outros',
		responsive: true,
		width: '100%',
		scroll: {
			items: 1,
			pauseOnHover: true,
		},
		items: {
			width: 400,
			visible: {
				min: 1,
				max: 1
			}
		}
	});
	// chat link suporte
	$('.i-suporte').on('click', function(){
		if( $(this).attr('data-clicked') != 'true' ){
			tidioChatApi.method('popUpOpen');
			$(this).attr('data-clicked','true');
		}
		else{
			tidioChatApi.method('popUpHide');
			$(this).attr('data-clicked','false');
		}
	});
});