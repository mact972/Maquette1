$(document).ready(function(){

	 /*$("#cen").hover(function(){

	 	 $("#cen").fadeToggle();

	 });*/

	 $(".rec").hover(function(){

	 	var div = $(".anim");
	 	div.animate({width: '100%'}, "slow");
	 	
	 },

	 function(){

	 	var div = $(".anim");
	 	div.animate({width: '0%'}, "slow");



	 });
});