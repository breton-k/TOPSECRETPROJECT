<?php

require "connection.php";

$ID = $_GET[ID];

mysql_query("
			DELETE FROM ADMIN
			WHERE ID = '$ID'
			")or die(mysql_error());

echo ('That post is gone forever ;( Goodbye post<br><br><a href = "post.php">Go back</a>');


?>