<html>
<header>
</header>
<body>

<h1>NG's admin page<br>TOP SECRET!</h1>

<a href = "index.php">Home Page</a><br>
<a href = "post.php">Denied Posts</a><br><br>

<h3><u> These posts are waiting your approval</u> </h3>

</body>

</html>

<?php

	require "connection.php";

	$query = "SELECT * FROM ADMIN WHERE STATUS = 0 ORDER BY ID DESC" ;
	
	$result = mysql_query($query);
	
	if($result){
	
	while($number = mysql_fetch_assoc($result)) {
		echo($number['Post'].'<br>');
		echo($number['Gender'].'<br>');
		echo($number['LOCATION'].'<br>');		
		echo($number['TIMESTAMP'].'<br>');
		
		$IDNUMBER = ($number['ID']);		
		
		
        echo ("<a href=\"approve.php?ID=".$IDNUMBER."\">Approve</a><br>");
        echo ("<a href=\"deny.php?ID=".$IDNUMBER."\">Deny</a><br>");
		echo ("     <hr noshade><br> ");
		
		} 
	}	
	else{
	echo(mysql_error());
	}

?>