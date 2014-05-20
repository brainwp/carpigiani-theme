$(document).ready(function() {

	$('.wrapper-simple input[type=text]').css('background-color', '#008EC8');	
	$('.wrapper-simple input[type=submit]').toggle(function(){
	
		$('.wrapper-simple').animate({'width':'350px'})
		  $('.wrapper-simple input[type=text]').animate({'width': '250px'})
		  $('.wrapper-simple img').animate({'marginLeft': '2px'})
		  $(this).animate({'marginLeft':'22em'}).addClass('cancel');
		
		}, function() {
			
			$('.wrapper-simple').animate({'width':'60px'})
			$('.wrapper-simple input[type=text]').animate({'width': '1px'})
			$('.wrapper-simple img').animate({'marginLeft': '0'})
			//.end().find(this).animate({'marginLeft':'0'}).attr('value', '');
			$(this).animate({'marginLeft':'0'}).removeClass('cancel');
			
		}

	);

});