<html>
<header>
</header>
<body>

<h1>NG's admin page<br>TOP SECRET!</h1>

</body>

</html>



<?php

  require "connection.php";


	$query = "SELECT `Post` FROM ADMIN";
	
	$result = mysql_query($query);
	
	if($result){
	
	while($number = mysql_fetch_assoc($result)) {
		echo($number['Post'].'<br>');
		
		?>

		<html>
		<body>
		<form>
		<input type = "submit" value = "yes"/>
		<input type = "submit" value = "no"/>
		<br>
		
		</form>
		</body>
		</html>
		
		
		<?php
		
		} 
	}	
	else{
	echo(mysql_error());
	}

?>
