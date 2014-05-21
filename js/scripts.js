jQuery(function($) { 
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
	$('#cat-prod-container').carouFredSel({
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
	// chat link suporte
	$('.i-suporte').on('click', function(){
		$('#tidio-chat-popup').css('display', 'block');
		$('#tidio-chat-container').css('display', 'block');
	});
});