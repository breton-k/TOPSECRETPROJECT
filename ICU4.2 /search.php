<html>

<head>
<head>
	<link href="/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type = "text/css">
	body
		{
		background-image:url('background.jpg');
		background-repeat:repeat;
		color:#ffffff;
	}
	</style>



</head>

<body>

<script src="/static/bootstrap/js/bootstrap.min.js"></script>

<center>
	<img src="searchposts.png">
<br>
<form action = "./search.php" method "get">

Post:

<input type = text name = "post" /> 
&nbsp;&nbsp;&nbsp;&nbsp;
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
		<option value = "Bus">Bus/Bus Stop</option>
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
&nbsp;&nbsp;&nbsp;&nbsp;

	Hair Color:
	<select name = "hair-color">
  		<option value = ""></option>
		<option value = "Brown">Brown</option>
		<option value = "Blonde">Blonde</option>
		<option value = "Black">Black</option>
		<option value = "Red">Red</option>
		<option value = "Blue">Blue</option>
		<option value = "Green">Green</option>
		<option value = "Purple">Purple</option>
		<option value = "Orange">Orange</option>
		<option value = "Blackwhite">Black & White</option>
		<option value = "Multicoloreddark">Multicolored Dark</option>
		<option value = "Multicoloredlight">Multicolored Light</option>
		<option value = "bald">Bald/Shaved Head</option>
	</select>
<br>
<br>
<input type = "submit" value = "Search"/>

</form>

<hr />
<?php

require "connection.php";

$POST = $_GET['post'];
$POSTSEARCH = explode(" ", $POST);

$LOCATIONSEARCH = $_GET['location'];

$query = "SELECT * FROM ADMIN WHERE ";

if($POST){

foreach ($POSTSEARCH as $each) {
$i++;
if($i==1){
$query .= "Post LIKE '%$each%' ";
}
else{
$query .= "OR Post LIKE '%$each%' ";
}

}
}

if($LOCATIONSEARCH){
if($POST){

$query .= "AND LOCATION LIKE '%$LOCATIONSEARCH%' ";

}
else{

$query .= "LOCATION LIKE '%$LOCATIONSEARCH%' ";

}


}


//echo($query);

if($POST or $LOCATIONSEARCH){

$query = mysql_query($query);

$numrows = mysql_num_rows($query);


if ($numrows > 0){

while ($row = mysql_fetch_assoc($query)){
$POST = $row['Post'];
$TIMESTAMP = $row['TIMESTAMP'];
$LOCATION = $row['LOCATION'];

echo ($POST ."<br>". $LOCATION ."<br>". $TIMESTAMP . "<br><br>");

}

}
else{

if($POST or $LOCATIONSEARCH){

echo "No results found";

}
}

}

?></center>
</body>

</html>