$("#wrapper").hide();

$(function(){
  	$("#intro").fadeIn(3000, function(){
  	console.log("ready!");
	});

	$('#btn-goto').click(function(e) { //button clicked
		console.log("button clicked!");
		e.preventDefault();

   		$('#intro').fadeOut(5000, function(){ 
   			
   		$('#wrapper').fadeIn(5000);
  		});
	});
});
