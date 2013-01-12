<?php

require "connection.php";

$ID = $_GET[ID];


$result = mysql_query("SELECT Email FROM ADMIN WHERE ID = '$ID'") or die(mysql_error);
$number = mysql_fetch_assoc($result);
$EMAIL = $number['Email'];

?>
<html>
<head>
	<link href="/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type = "text/css">
	body
		{
		background-image:url('background.jpg');
		background-repeat:repeat;
		color:#0000000;
	}
	</style>
	</head>
<body>
	<center>
<form action="email.php" method="post">
<table border="0" style="background:#ececec" cellspacing="5">
<tr align="left"><td>See me again:(optional)</td><td><input type="text" size="30" name="See them again"></td></tr>
<tr align="left"><td valign="top">Reply</td><td><textarea name="Reply" rows="6" cols="30"></textarea></td></tr>
<input type = hidden name = "Your_Email" value = "<?php print $EMAIL ?>"/>
<tr align="left"><td>&nbsp;</td><td><input type="submit" value="Send"><font face="arial" size="1">&nbsp;&nbsp;</font></td></tr>
</table>
</form>
</center>
</body>

</html>