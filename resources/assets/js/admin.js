//Clock

$(function(){
	setInterval(function(){
		var divUtc = $('#divUTC');
		var divLocal = $('#divLocal');  

		divLocal.text(moment().format('HH:mm'));        
	},1000);
});
// Flash Message


$('div.alert').not('.alert-important').delay(3000).fadeOut(450);

//admin sidebar toggle
$("#menu-toggle,#menu-toggle1").click(function(e) {

	e.preventDefault();
	$("#wrapper").toggleClass("toggled");
	$("tr td:first-child").toggleClass("padding-left");
	$("td span").toggleClass("padding-left5");
	console.log('test');
}); 
