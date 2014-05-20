$(document).ready(function() {

	$('.wrapper-simple input[type=text]').css('background-color', '#008EC8');
	$('.wrapper-simple input[type=submit]').toggle(function(){
	
	$('.wrapper-simple').animate({'width':'350px'})
	  .end().find('.wrapper-simple input[type=text]').animate({'width': '250px'})
	  .end().find('.wrapper-simple img').animate({'marginLeft': '2px'})
	  .end().find(this).animate({'marginLeft':'22em'}).addClass('cancel');
	
	}, function() {
		
		$('.wrapper-simple').animate({'width':'60px'})
		.end().find('.wrapper-simple input[type=text]').animate({'width': '1px'})
		.end().find('.wrapper-simple img').animate({'marginLeft': '0'})
		//.end().find(this).animate({'marginLeft':'0'}).attr('value', '');
		.end().find(this).animate({'marginLeft':'0'}).removeClass('cancel');
		
	});
	 
	/*$('#i-search').click(function() {
		$(this).animate({ width: '200px', backgroundColor: "olive" }, 400);
	}); 
	 
	$('#search').blur(function() {
		$(this).animate({ width: '100px', backgroundColor: "olive" }, 400);
	});*/

});