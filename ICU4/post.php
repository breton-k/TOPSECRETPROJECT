<html>
<body>

<h1>DENIED POSTS</h1>

<a href = "admin.php">Admin Page</a><br><br>

</body>
</html>

<?php
require "connection.php";

$query = "SELECT * FROM ADMIN WHERE STATUS = 1 ORDER BY ID DESC" ;

	$result = mysql_query($query);
	
	if($result){
	
	while($number = mysql_fetch_assoc($result)) {
		echo($number['Post'].'<br>');
		echo($number['Gender'].'<br>');
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