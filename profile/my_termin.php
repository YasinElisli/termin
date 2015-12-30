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
 	$("a[contenteditable=true]").blur(changeDbValues);

 	$(".desct").blur(changeDbValues);
 })

 var changeDbValues = function(){
 		// alert($(this).text());
 		var modifiedTerm = $(this).text();

 		var idAndColumn = $(this).attr("id");
		console.log(modifiedTerm, idAndColumn);
 		$.ajax({
 			type:"POST",
 			url:"update.php",
 			data:'termin='+modifiedTerm+'&idAndColumn='+idAndColumn,
 			success: function(data) {
 				console.log(data);
 				// if (data == "Success")

 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				console.log(jqXHR, errorThrown);
 			}
 		});
 			
 	}
 </script>
