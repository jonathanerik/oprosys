<?php
//$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, null, NULL, NULL);
// mysqli_real_connect($con, "oprosys-mysqldbserver.mysql.database.azure.com", "akashil@oprosys-mysqldbserver", "P@ssw0rd", "oprosys","3306");

	$hostname='oprosys-mysqldbserver.mysql.database.azure.com';
	$user='akashil@oprosys-mysqldbserver';
	$password='P@ssw0rd';
	$conn=mysql_connect($hostname, $user, $password) 
		or die ('Error connnecting to mysql');mysql_select_db('oprosys');

 ?>

