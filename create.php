<?php

require "connection.php";

$PINPUT = $_POST['postinput'];

mysql_query("INSERT INTO `ICU`.`ADMIN` (`ID`, `Post`) VALUES ('', '$PINPUT');") or die(mysql_error());


?>
