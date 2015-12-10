<!DOCTYPE html>
<html>
<head>
	<title>Bookmarks</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style type="text/css">
	
	.my_termin{
		margin-top: 10px;
		padding: 2px;
		padding-left: 10px;
		border-radius: 6px;
		box-shadow:0px 1px 7px rgba(50, 50, 50, 0.93);
	}
	.desct{
		margin-bottom: 0px !important;
		color: #404040;
	}
	#div1 {
    white-space: nowrap; 
    width: 70%; 
    overflow: hidden;
    text-overflow: clip;
    display: inline-block; 
}
.disp_in-block{
	display: inline-block;
}
.float_r{
	float: right;
}
.edit_button{
	width: 35px;
	height: 38px;
	border:0px;
	margin-top:5px;
	border-radius: 5px;
	margin-right: 3px;
	background: #2A60DE;
}
	.delete_glyphico{
		width: 35px;
		height: 38px;
		border:0px;
		border-radius: 5px;
		margin-right: 3px;
		margin-top: 8px;
		background: #ff4d4d;
	}
	.date{
		font-size: 14px;
		color: gray;
	}
	.date_time{
		color: lightgray;
		font-size: 12px;
	}
	.date_div{
		margin-right: 15px;
		margin-top: 
	}
	.glyphicon-trash,.edit_button{
		color: white;
	}
	</style>
</head>
<body>
<div class="col-xs-10 col-sm-10 col-md-6 col-lg-6 my_termin">
	<h3 class="disp_in-block">
		<a href="">Termin</a>
	</h3>
	<div class="disp_in-block float_r">
		<div>
			<button class="glyphicon glyphicon-pencil edit_button"></button>
		</div>
		<div>
			<button class="glyphicon glyphicon-trash delete_glyphico"></button>
		</div>
	</div>
	<div class="disp_in-block float_r date_div">
		<p class="disp_in-block date">Add date:&nbsp;</p>
		<p class="disp_in-block date_time">9-12-2015</p>
	</div>
	<strong><p class="desct">Desctription:&nbsp;</p></strong>
	<div id="div1">
		<p class="desct">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>
</div>
</body>
</html>