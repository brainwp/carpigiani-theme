jQuery(function($) { 
	$('#foo5').carouFredSel({
		prev: '#prev-slider',
		next: '#next-slider',
		responsive: true,
		width: '100%',
		scroll: 1,
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
		scroll: 1,
		items: {
			width: 580,
			visible: {
				min: 1,
				max: 1
			}
		}
	});
});