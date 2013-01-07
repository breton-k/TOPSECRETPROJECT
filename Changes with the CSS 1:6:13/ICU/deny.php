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