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

 	if ($(this).next().hasClass('edit_button')) {
 		$(this).next().show();
 	}
 	else if ($(this).parent().next().hasClass('edit_button'))
 		$(this).parent().next().show();
 }

var onMouseOut = function() {
 	$(this).css('background-color','#fff');

 	if ($(this).next().hasClass('edit_button')) {
 		$(this).next().hide();
 	}
 	else if ($(this).parent().next().hasClass('edit_button'))
 		$(this).parent().next().hide();
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
 				//transition effecti elave olunur ki, bashga renge boyananda
 				//transitionle boyansin
 				element.css('transition','background-color 2s');
 				//mueyyen vaxtan sonra rengi deyishir ki, zapros tex gedib chatsa
 				//yashil renge boyanmagi chatdirsi. Firefox ishlememe ehtimali var
 				setTimeout(
		 			function(){
		 				element.css('background-color','#fff');
		 				//mueeyyen vaxtan sonra transition legv ediriki,
		 				//hover edende transmission olmasin.
		 				setTimeout(
		 					function(){
		 						element.css('transition','none');
		 					},
		 				2000);
		 			},500
		 		);
 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				console.log(jqXHR, errorThrown);
 			}
 		});
 		//user fokusu buraxanda derhal yashil renge boyanir
 		element.css('background-color','#5cb85c');

 	}
 </script>
