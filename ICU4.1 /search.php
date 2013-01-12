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
<center>
	<img src="searchposts.png">
<br>
<form action = "./search.php" method "get">

Post:

<input type = text name = "post" />

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

<input type = "submit" value = "Search"/>

</form>

<hr />
<br />
<b>Warning</b>:  mysql_num_rows(): supplied argument is not a valid MySQL result resource in <b>/home/content/35/10202335/html/search.php</b> on line <b>84</b><br />
</center>
</body>

</html>