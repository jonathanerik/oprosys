<?php
$con=mysqli_init(); 
mysqli_real_connect($con, "{oprosys.mysql.database.azure.com}", "{akashil@oprosys-mysqldbserver}", {P@ssw0rd}, {oprosys}, 3306);

mysql_select_db($con,"oprosys");

	if(!$con)
	{
		die("connection failed: ".mysqli_connect_error());
	}
	

 ?>

