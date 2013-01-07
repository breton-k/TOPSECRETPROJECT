<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtm11-transitional.dtd">

<html>

<head>
	<link href="/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type = "text/css">
	body
		{
		background-color:#000000;
		}
	</style>

</head>

<body>

<script src="/static/bootstrap/js/bootstrap.min.js"></script>

<div class="container-fluid">
<div class="row-fluid">
<div class="span2">
<!--Sidebar content-->
</div>
<div class="span10">





	<h1>ICU Hampy 2.0</h1>
	<img src="/static/images/logo.jpg">

	<form action = "create.php" method = "post">

	<textarea type = "text" name = "postinput" rows = "4" cols = "35">
	ICU Hampy...
	</textarea>

	<br>
	<br>

	Hair Color: <br>
		<img src="/static/images/Brown.jpg"> <input type = "radio" name = "hair" value = "brown"/> Brown 
		<img src="/static/images/blonde.jpg"> <input type = "radio" name = "hair" value = "blonde"/>Blonde 
		<img src="/static/images/black.jpg"> <input type = "radio" name = "hair" value = "black"/> Black 
		<img src="/static/images/red.jpg"> <input type = "radio" name = "hair" value = "red"/> Red
			<br>
		<img src="/static/images/blue.jpg"> <input type = "radio" name = "hair" value = "blue"/> Blue 
		<img src="/static/images/green.jpg"> <input type = "radio" name = "hair" value = "green"/> Green 
		<img src="/static/images/purple.jpg"> <input type = "radio" name = "hair" value = "purple"/> Purple
		<img src="/static/images/orange.jpg"> <input type = "radio" name = "hair" value = "orange"/> Orange 
			<br>
		<img src="/static/images/blackwhite.jpg"> <input type = "radio" name = "hair" value = "blackwhite"/> Black & White
		<img src="/static/images/multicoloreddark.jpg"> <input type = "radio" name = "hair" value = "multicoloreddark"/> Multicolored Dark
		<img src="/static/images/multicoloredlight.jpg"> <input type = "radio" name = "hair" value = "multicoloredlight"/> Multicolored Light
        <img src="/static/images/bald.jpg"> <input type = "radio" name = "hair" value = "bald"/> Bald/Shaved Head

	<br>
	<br>

	Location:
		<select name = "location">
			<option value = "APL">APL</option>
			<option value = "SAGA">SAGA</option>
			<option value = "Merrill">Merrill</option>
			<option value = "Dakin">Dakin</option>
			<option value = "Prescott">Prescott</option>
			<option value = "Enfield">Enfield</option>
			<option value = "Greenwich">Greenwich</option>
		</select>

	<br>
	<br>

	<button type="submit" class="btn btn-large btn-inverse">Submit</button>

	</form>

	<br><br>

	<a href= "admin.php">Go To Admin Page</a>

	<br><br>

	 </div>
	</div>
</div>
</body>

</html>

<?php

require "connection.php";

echo('<h1><u>POSTS</u></h1>');

$query = "SELECT * FROM ADMIN WHERE STATUS = 2 ORDER BY ID DESC" ;

	$result = mysql_query($query);
	
	if($result){
	
	while($number = mysql_fetch_assoc($result)) {
		echo($number['Post'].'<br>');
		echo($number['Gender'].'<br>');
		echo($number['LOCATION'].'<br>');		
		echo($number['TIMESTAMP'].'<br>');
		
		}
	}
?>