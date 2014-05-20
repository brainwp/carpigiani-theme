$(document).ready(function() {
	 
	$('#search').click(function() {
		$(this).animate({ width: '200px', backgroundColor: "olive" }, 400);
	}); 
	 
	$('#search').blur(function() {
		$(this).animate({ width: '100px', backgroundColor: "olive" }, 400);
	});
});