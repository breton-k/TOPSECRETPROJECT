<?php

include "connection.php";

$TIME = time();
$ACTUAL_TIME = date('D M/d/Y @ g-i-A', $TIME);

$PINPUT = $_POST['postinput'];
$LOCATION = $_POST['location'];
$EMAIL = $_POST['email'];
$COLOR = $_POST['color'];

echo($COLOR);

mysql_query("INSERT INTO ADMIN (`ID`, `Post`, `TIMESTAMP`, `LOCATION`, `Email`)
VALUES ('', '$PINPUT', '$ACTUAL_TIME', '$LOCATION', '$EMAIL');") or die(mysql_error());

?>

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


<p>
Your post has been submitted and it is waiting for approval
</p>

<a href = "index.php">Go Back</a>
</center>
</body>
<html>