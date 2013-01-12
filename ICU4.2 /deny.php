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

<?php

require "connection.php";

$ID = $_GET[ID];

mysql_query("
UPDATE ADMIN
SET STATUS = 1
WHERE ID= '$ID'
") or die(mysql_error());	

echo ('That post got Fuckin DENIED!<br><br><a href = "admin.php">Go back</a>');

?>

</body>
</html>