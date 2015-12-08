<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
	<?php include 'link.php'; ?>
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<div class="container-fluid">
    <div class="row">
    	<?php include 'header.php'; ?>
    </div>
		<div class="row">
			<div class="main">

				<div class = "col-lg-6  col-lg-offset-3 input-group stylish-input-group">

					<input type="text" name="search" class="form-control" placeholder="Search" autocomplete="off" onkeyup="searchq()">
					<span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
				</div>

				<div id="output" class ="col-lg-6  col-lg-offset-3"
				 style="display:none;">

				</div>

			</div>



		</div>
	</div>

	<script type="text/javascript">
	var doSearch = true;
		function searchq() {
			if (doSearch) {
			var searchTxt = $("input[name='search']").val();
			console.log("I am searching ",searchTxt);
			$.post("search.php", {searchVal:searchTxt}, function (output) {
					$("#output").html(output);
					//shows output div with the result of instant search when starting to type in it
					$("#output").show();

					// Add data to let the hover know which index of li (order number) they have
					for(var i = 0; i < $("#output ul li").size(); i++) {
						$("#output ul li").eq(i).data("number", i);
						console.log("output li", i);
					}

					$("#output ul li").hover(
						function () {
							//getting the number which is the order number of li
							currentSelection = $(this).data("number");
							console.log("currentSelection with hover"+currentSelection);
							setSelected(currentSelection);
						}, function() {
							$("#output ul li").removeClass("search_hover");
							currentUrl = '';
							console.log(currentUrl);
						}
					);
			});
		}
	}


		//fades output div when clicked on body
		$("body").click(function() {
        	$("#output").hide();
        	doSearch = true;
    	});

    	$(document).keydown(function(e){
    		console.log(e.keyCode);
        //jump from search field to search results on keydown
        if (e.keyCode == 40) {
            $(".input-group").blur();
            $("#output").focus();
            navigate('down');
            console.log("down is pressed");
              return false;
        }

        //hide search results on ESC
        if (e.keyCode == 27) {
            $("#results").hide();
            $("#s").blur();
              return false;
        }

        //focus on search field on back arrow or backspace press
        if (e.keyCode == 37 || e.keyCode == 8) {
            $("").focus();
        }

    });

    var currentSelection = 0;
    var currentUrl = '';

 	function navigate(direction) {
 		console.log(direction);
		// Check if any of the menu items is selected
		if($("#output ul .search_hover").size() == 0) {
			console.log("We set it to -1");
			currentSelection = -1;
		}

		//JBP - focus back on search field if up arrow pressed on top search result
		if(direction == 'up' && currentSelection == 0) {
			$("#s").focus();
		}
		//

		if(direction == 'up' && currentSelection != -1) {
			if(currentSelection != 0) {
				currentSelection--;
			}
		} else if (direction == 'down') {
			console.log(currentSelection," vot");
			//if it's not the last one
			if(currentSelection != $("#output ul li").size() -1) {
				currentSelection++;

			}
			console.log(currentSelection," vot");
		}
		setSelected(currentSelection);
	}

	function setSelected(menuitem) {

		//JBP - get search result to place in search field on hover
		var value = $("#output ul li").eq(menuitem).html();
		console.log("value from "+ menuitem+" "+value);

		$(".form-control").val(value);
		//

		$("#output ul li").removeClass("search_hover");
		$("#output ul li").eq(menuitem).addClass("search_hover");
		doSearch = false;
		currentUrl = $("#output ul li").eq(menuitem).attr("href");
	}
	// 	$(document).keydown(function(e) {
	// 	switch(e.keyCode) {
	// 		// User pressed "up" arrow
	// 		case 38:
	// 			navigate('up');
	// 			break;
	// 		// User pressed "down" arrow
	// 		case 40:
	// 			navigate('down');
	// 			break;
	// 		// User pressed "enter"
	// 		case 13:
	// 			if(currentUrl != '') {
	// 				window.location = currentUrl;
	// 			}
	// 		break;
	// 	}
	// });

	// 	function navigate(direction) {

	// // Check if any of the menu items is selected
	// 			if($("#results ul li .search_hover").size() == 0) {
	// 				currentSelection = -1;
	// 			}

	// 			//JBP - focus back on search field if up arrow pressed on top search result
	// 			if(direction == 'up' && currentSelection == 0) {
	// 				$("#s").focus();
	// 			}
	// 			//

	// 			if(direction == 'up' && currentSelection != -1) {
	// 				if(currentSelection != 0) {
	// 					currentSelection--;
	// 				}
	// 			} else if (direction == 'down') {
	// 				if(currentSelection != $("#results ul li").size() -1) {
	// 					currentSelection++;
	// 				}
	// 			}
	// 			setSelected(currentSelection);
	// 	}

	// 	function setSelected(menuitem) {

	// //JBP - get search result to place in search field on hover
	// 		var title = $("#results ul li").eq(menuitem).attr('title');
	// 		$("#s").val(title);
	// 		//

	// 		$("#results ul li").removeClass("search_hover");
	// 		$("#results ul li").eq(menuitem).addClass("search_hover");
	// 		currentUrl = $("#results ul li").eq(menuitem).attr("href");
	// 	}
		//
	</script>
</body>
</html>
