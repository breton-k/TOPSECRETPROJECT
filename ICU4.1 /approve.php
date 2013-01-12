<?php

require "connection.php";

$ID = $_GET[ID];

mysql_query("
UPDATE ADMIN
SET STATUS = 2
WHERE ID= '$ID'
") or die(mysql_error());	

echo ('Post Approved!<br><br><a href = "admin.php">Go back</a>');


?>