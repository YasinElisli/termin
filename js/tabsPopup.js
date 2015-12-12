$(document).ready(function(){
	$(document).on('click','.signup-tab',function(e){
		e.preventDefault();
	    $('#signup-taba').tab('show');
	});	
	
	$(document).on('click','.signin-tab',function(e){
	   	e.preventDefault();
	    $('#signin-taba').tab('show');
	});
	    	
	$(document).on('click','.forgetpass-tab',function(e){
	 	e.preventDefault();
	   	$('#forgetpass-taba').tab('show');
	});

	$("#signupli").click(function() {
		console.log("changing class");
		$(".login-tab ul li:first-child").removeClass("active");
		$(".login-tab ul li:nth-child(2)").addClass("active");

	});
});	

	console.log($("#signupli"));