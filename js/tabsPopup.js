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
		$(".login-tab ul li:nth-child(3)").removeClass("active");
		$("#home").removeClass("active");
		$("#forget_password").removeClass("active");
		$("#profile").addClass("active");

	});

	$("#signinli").click(function() {
		
		console.log("changing class");
		$(".login-tab ul li:first-child").addClass("active");
		$(".login-tab ul li:nth-child(2)").removeClass("active");
		$(".login-tab ul li:nth-child(3)").removeClass("active");
		$("#home").addClass("active");
		$("#forget_password").removeClass("active");
		$("#profile").removeClass("active");

	});
	
	$(".close").click(function() {
		console.log("changing class");
		$(".login-tab ul li:first-child").addClass("active");
		$(".login-tab ul li:nth-child(2)").removeClass("active");
		$(".login-tab ul li:nth-child(3)").removeClass("active");
		$("#home").addClass("active");
	});
});
