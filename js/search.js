var doSearch = true;
		function searchq() {
			if (doSearch) {
			var searchTxt = $("input[name='search']").val();
			console.log("I am searching ",searchTxt);
			//eger daxil edilen textin uzunlugu 2 den choxdursa yalniz onda axtarish et
			if (searchTxt.length > 0) {
					
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

        if (e.keyCode == 38) {
            $(".input-group").blur();
            $("#output").focus();
            navigate('up');
            console.log("up is pressed");
              return false;
        }

        //hide search results on ESC
        if (e.keyCode == 27) {
            $("#results").hide();
            $("input[name='search']").blur();
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
			$("input[name='search']").focus();
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