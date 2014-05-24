jQuery(function($) {

	$.ajaxSetup({cache:false});
	$(".cat-hover").on('click',function(){
		var post_link = $(this).attr("rel");
		var slug = $(this).attr('data-class-slug');
		var id = $(this).attr('data-id');
		//alert(post_id);
		//$("#single-home-container").html("<div class='box'><span class='loader5'></span></div>");
		$("#foo7").html(" ");
		$.get(post_link, function( data ) {
			$('#hide-ajax').html(data);
			$("#foo7").trigger("destroy");
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
			$('.item').each(function(){
				var content = $(this).html();
				var item = '<li class="item">' + content + '</li>';
				$('#foo7').trigger( 'insertItem', [item, 1, false] );
			});
		});
		$("#foo7").trigger("play", true);
		$('#produtos-row').removeClass('cat-soft cat-restaurante cat-chocolate-e-creme cat-artesanal');
		$('#produtos-row').addClass('cat-'+slug);
		$('.cat-hover').each(function(){
			$(this).removeClass('active');
		})
		$(this).addClass('active');
		return false;
	});
	$('#foo7').carouFredSel({
		prev: '#prev-slider',
		next: '#next-slider',
		responsive: true,
		width: '100%',
		scroll: {
			items: 1,
			pauseOnHover: true,
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
		$('#tidio-chat-popup').css('display', 'block');
		$('#tidio-chat-container').css('display', 'block');
	});
});