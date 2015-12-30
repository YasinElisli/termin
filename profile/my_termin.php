
<link rel="stylesheet" type="text/css" href="css/profile.css">
<?php


if (isset($_SESSION['username'])) {
	myTermin();
}
else {
	header("Location:index.php");
}
 ?>

 <script type="text/javascript">
 $(document).ready(function() {
 	//adding callbacks specifying what to do when the change is done
 	$("a[contenteditable=true]").blur(changeDbValues).hover(onMouseOver, onMouseOut);
 	$(".desct").blur(changeDbValues).hover(onMouseOver, onMouseOut);

	// $("a[contenteditable=true]").hover(onMouseOver, onMouseOut);
 })

 var onMouseOver = function() {
 	$(this).css('background-color','#ffffd3');
 }

var onMouseOut = function() {
 	$(this).css('background-color','#fff');
 }

 var changeDbValues = function(){
 		// alert($(this).text());
 		var modifiedTerm = $(this).text();
 		var idAndColumn = $(this).attr("id");
 		// $(this).animate({left:'250px'}, "slow");
 		var element = $(this);
		console.log(modifiedTerm, idAndColumn);
 		$.ajax({
 			type:"POST",
 			url:"update.php",
 			data:'termin='+modifiedTerm+'&idAndColumn='+idAndColumn,
 			success: function(data) {
 				console.log(data);
 				console.log(element);

 				
 				// element.css('transition','background-color 3s');
 				// element.css('background-color','#5cb85c');
 				// element.css('background-color','#fff');
 				// $(this).animate({"left":"50px"}, 1000);
 				// if (data == "Success")

 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				console.log(jqXHR, errorThrown);
 			}
 		});
 		element.css('background-color','#5cb85c');

 		
 		setTimeout(
 			function(){
 				element.css('transition','background-color 2s');
 				element.css('background-color','#fff');
 			},500);

 		element.css('transition','');
 	}
 </script>
