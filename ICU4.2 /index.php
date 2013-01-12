<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

<head>
	<link href="/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type = "text/css">
	body
		{
		background-image:url('background.jpg');
		background-repeat:repeat;
		color:#ffffff;
		}
	#hair-table {
		margin-left: 20px;
	}
	</style>

</head>

<body>

<script src="/static/bootstrap/js/bootstrap.min.js"></script>

<div class="container-fluid">
<div class="row-fluid">
<div class="span2">
</div>
<div class="span10">
<center>
	<img src="logo.png" class="img-polaroid">
	<br>
	<br>

	<form action = "create.php" method = "post">

	<textarea type = "text" name = "postinput" rows = "4" cols = "35">
	ICU Hampy...
	</textarea>

	<br>
	<br>

 <table id="hair-table" class="table table-condensed">
 	<colgroup>
              <col class="span3">
              <col class="span3">
              <col class="span3">
    </colgroup>
 	<thead>
 	<tbody>
	<tr>
		<th>Hair Color:</th>
	</tr>
	<tr>
		<td>
			<img src="brown.jpg" width="13" height="13"><input type = "radio" name = "hair" value = "brown"/> Brown 
		</td>
		<td>
			<img src="blonde.jpg" width="13" height="13"><input type = "radio" name = "hair" value = "blonde"/>Blonde 
		</td>
		<td>
			<img src="black.jpg" width="13" height="13"><input type = "radio" name = "hair" value = "black"/> Black 
		</td>
		<td>
			<img src="red.jpg" width="13" height="13"><input type = "radio" name = "hair" value = "red"/> Red
		</td>
	</tr>
	<tr>
		<td>
			<img src="blue.jpg" width="13" height="13"><input type = "radio" name = "hair" value = "blue"/> Blue 
		</td>
		<td>
			<img src="green.jpg" width="13" height="13"><input type = "radio" name = "hair" value = "green"/> Green 
		</td>
		<td>
			<img src="purple.jpg" width="13" height="13"><input type = "radio" name = "hair" value = "purple"/> Purple
		</td>
		<td>
			<img src="orange.jpg" width="13" height="13"><input type = "radio" name = "hair" value = "orange"/> Orange 
		</td>
	</tr>
	<tr>
		<td>
			<img src="blackwhite.jpg" width="13" height="13"><input type = "radio" name = "hair" value = "blackwhite"/> Black & White
		</td>
		<td>
			<img src="multicoloreddark.jpg" width="13" height="13"><input type = "radio" name = "hair" value = "multicoloreddark"/> Multicolored Dark
		</td>
		<td>
			<img src="multicoloredlight.jpg" width="13" height="13"><input type = "radio" name = "hair" value = "multicoloredlight"/> Multicolored Light
		</td>
		<td>
        	<img src="bald.jpg" width="13" height="13"><input type = "radio" name = "hair" value = "bald"/> Bald/Shaved Head
        </td>
    </tr>
        </tbody>
 </table>

	<br>
	<br>

	Location:
		<select name = "location">
  			<option value = ""></option>
			<option value = "General">General</option>
			<option value = "Arts Village">Arts Village</option>
			<option value = "Red Barn">Red Barn</option>
			<option value = "EDH">Emily Dickinson</option>
			<option value = "FPH">FPH</option>
			<option value = "Bridge">Bridge</option>
			<option value = "Library">Library</option>
			<option value = "Woods">Woods</option>
			<option value = "RCC">Select</option>
			<option value = "Airport Lounge">Airport Lounge</option>
			<option value = "SAGA">SAGA</option>
			<option value = "Merrill">Merrill</option>
			<option value = "Dakin">Dakin</option>
			<option value = "Prescott">Prescott</option>
			<option value = "Enfield">Enfield</option>
			<option value = "Greenwich">Greenwich</option>
		</select>

	<br>
	<br>

	Email: <input type = "text" name = "email"/>

	<button type="submit" class="btn btn-large btn-inverse">Submit</button>

	</form>

	<br><br>

	<a href= "admin.php">Go To Admin Page</a>
	<br>
    <a href = "search.php">Search Page</a>

	<br><br>

	 </div>
	</div>

<center>

<img src="postsindexlogo.png">

<?php

require "connection.php";

echo('<h1><u>POSTS</u></h1>');

$query = "SELECT * FROM ADMIN WHERE STATUS = 2 ORDER BY ID DESC" ;

$result = mysql_query($query);

if($result){

while($number = mysql_fetch_assoc($result)) {
echo($number['Post'].'<br>');
echo($number['LOCATION'].'<br>');	
echo($number['TIMESTAMP'].'<br>');

$IDNUMBER = $number['ID'];

if($number['Email']){

echo("<a href=\"reply.php?ID=".$IDNUMBER."\">Reply</a><br><br>");

}

echo("<hr></hr>");



}
}





?>
</center>
</div>
</body>
</html>