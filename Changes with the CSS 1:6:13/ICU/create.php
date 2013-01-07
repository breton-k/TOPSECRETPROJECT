<?php

include "connection.php";

$TIME = time();
$ACTUAL_TIME = date('D M/d/Y @ g-i-A', $TIME);

$PINPUT = $_POST['postinput'];
$GENDER = $_POST['sex'];
$LOCATION = $_POST['location'];

mysql_query("INSERT INTO `ICU`.`ADMIN` (`ID`, `Post`, `Gender`, `TIMESTAMP`, `LOCATION`) 
							 VALUES ('', '$PINPUT', '$GENDER', '$ACTUAL_TIME', '$LOCATION');") or die(mysql_error());

?>

<html>
<body>

<p>
Your post has been submitted and it is waiting for approval from NG
</p>

<a href = "index.php">Go Back</a>

</body>
<html>