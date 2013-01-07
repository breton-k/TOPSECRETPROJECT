<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "root";
	$db = "ICU";
	
	mysql_connect($dbhost, $dbuser, $dbpass) or die ("DB NOT CONNECTED");
	mysql_select_db($db) or die("DB NOT SELECTED");
	
	
?>