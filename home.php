<!DOCTYPE html>
<link rel="stylesheet" href="custom.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
<link href="local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet">
<html>
<head>

<div class="Header">	
	<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
	<center > <div class="Title">ICTC ONLINE </div> </center>
	<center > <div class="SubTitle">De La Salle Lipa </div> </center>
</div>
</head>
<style>
body{
		background: #344e35 ;
		font-family: 'open_sans_condensedlight';
		font-size: 20px;

	}
	.ServiceTitle{
		width: 1290px;
		height: 30px;
		background-color: #151815;
		color: white
	}
	
	.Header{
		width: 100%;
		height: 190px;
		background: #151815;
		color: white;
		top: 90px; 
		margin-bottom: 20px;
	}
	
	.Title{
		font-family: 'orbitronlight';
		font-size: 200%;
		margin: auto;
	}
	
	.SubTitle{
		font-size: 20px;
		font-family: 'open_sans_condensedlight';
		margin: auto;
	}
	.logo{
		margin: auto;
	}
	
	.main-body{
		width: 1300px;
		height: 500px;
		border-style: solid 5px #333;
		background: #f2f2f2;
		margin: auto;
	}
	
	footer{
		width: 100%;
		height: 320px;
		background-color: #21282E; 
		border-style: solid;
		border-width: 2px;
		border-color: #444;
		color: white;
		font-family: 'open_sans_condensedlight', sans-serif;
	}
	
	.footer-info{
		margin-left: 50px;
		margin-top: 0px;
		font-size: 80%;
	}
	.nav{
	width: 500px;
	height: 50px;
	
	margin:auto;
	}		
	.nav ul {
	list-style-type: none;
	margin: auto;
	padding: 0;
	overflow: hidden;
	
	}
	.nav li {
		float: left;
	}

	.nav a {
		display: block;
		color: black;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	.nav a:hover {
		background-color: #111;
		color: white;
	}
	.loginbox{
	margin:auto;
	margin-top: 20px;
	width: 700px;
	font-family: 'orbitronlight';
	}
	.button {
	 width: 100px;
	 height: 50px;
	 text-align: center;
	 cursor: pointer;
	 outline: none;
	 color: #fff;
	 background-color: 	#344e35	;
	 border: none;
	 border-radius: 15px;
	 font-size: 10pt;
	 font-family: 'orbitronlight';
	 margin: auto;
	}
	.button a {
		color: black;;
		text-decoration: none;
	}
	.button:hover{
		background-color: black;
		color: white;
		cursor: pointer;
	}
	.button a:hover{
		background-color: black;
		color: white;
		cursor: pointer;
	}
	.button a{
		text-decoration: none;
		color: black;
	}
	.input-type{
		width: 250px;
		font-size: 16pt;
	}
	.paragraph {
	width: 1000px;
	margin:auto;
	}
	
</style> 
<?php
	session_start();
	ob_start();
	include('dbconnect.inc');
	$username=$_POST['uname'];
	$password=$_POST['password'];
	$query1="SELECT * FROM requestors WHERE username = '$username' AND pass = '$password'";
	$query2="SELECT * FROM admins WHERE username ='$username' AND pass ='$password'";
	$query3="SELECT * FROM approvers WHERE username ='$username' AND pass ='$password'";

	$result1= mysql_query($query1);
	$result2= mysql_query($query2);
	$result3= mysql_query($query3);
	
	$count1= mysql_num_rows($result1);
	$count2= mysql_num_rows($result2);
	$count3= mysql_num_rows($result3);

?>
<body>
	
	<div class="main-body">
	
		<nav class = "nav"> 
			
		</nav>
		
		
		<div class = "loginbox">
			<center>
				<?php
					if ($count1 == 1)
					{
						$_SESSION['username'] = $username;
						$position='user';
						$_SESSION['position']=$position;
						while($row=mysql_fetch_assoc($result1))
						{
							$_SESSION['u_id']=$row['requestor_id'];
						}
						header("location: https://oprosys.azurewebsites.net/status.php");
					}
					elseif($count2 == 1)
					{
						$_SESSION['username'] = $username;
						$position='admin';
						$_SESSION['position']=$position;
						while($row=mysql_fetch_assoc($result3))
						{
							$_SESSION['u_id']=$row['admin_id'];
						}
						header("Location: profile.php");
					}
					elseif($count3 == 1)
					{
						$_SESSION['username'] = $username;
						$position='approver';
						$_SESSION['position']=$position;
						while($row=mysql_fetch_assoc($result3))
						{
							$_SESSION['u_id']=$row['approver_id'];
						}
						header("Location: profile.php");
					}
					else
					{
						echo "<h2>Invalid user/password</h2>";
						echo '<a href="home.html"><button class = "button">Login</button></a>';
					}
				?>
			
			</center>
		</div>
		
		
		
		
	</div>

	




<br/>
<footer>
	
	<div class="footer-info">
		<br>
	<center>
	<div class="footer-img">
	<img src="images/footer-img1.png">
	<img src="images/footer-img2.png">
	</div>

	<br>
	De La Salle Lipa; ICTC<br>
	1962 JP Laurel National Highway<br>
	Mataas Na Lupa, Lipa City 4217<br>
	Tel. No. 63.43.756-5555<br>
	Telefax: 756-3117<br>
	© Copyright 2018
	<br>
	</center>
	</div>
		

</footer>

</body>
</html>