<?php
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "{https://oprosys.azurewebsites.net}", "{akashil@oprosys-mysqldbserver}", {P@ssw0rd}, {oprosys}, 3306);
 ?>

