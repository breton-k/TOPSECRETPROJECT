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
	</style>
	</head>
<body>
<center>
<img src="adminlogo.png">

<a href = "admin.php">Admin Page</a><br><br>

<?php
require "connection.php";

$query = "SELECT * FROM ADMIN WHERE STATUS = 1 ORDER BY ID DESC" ;

  $result = mysql_query($query);

if($result){

while($number = mysql_fetch_assoc($result)) {
echo($number['Post'].'<br>');
echo($number['LOCATION'].'<br>');	
echo($number['TIMESTAMP'].'<br>');
echo('<br>');

$IDNUMBER = ($number['ID']);	

echo ("<a href=\"delete.php?ID=".$IDNUMBER."\">Delete! </a><br>");
echo ("<a href=\"approve.php?ID=".$IDNUMBER."\"> Changed my mind, approve it!</a><br>");

echo('<br>');



}
}




?>
</center>
</body>
</html>