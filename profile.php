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
		position: absolute;
		left: 590px;
		top: 108px
	}
	
	.SubTitle{
		position: absolute;
		font-size: 20px;
		font-family: 'open_sans_condensedlight';
		left: 670px;
		top: 155px
	}
	.logo{
		position: absolute;
		left: 668px;
		top: 10px;
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
		margin-bottom: 20px;
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
		width: 700px;
		font-family: 'orbitronlight';
		}
		.button {
		 padding: 30px 50px;
		 width: 200px;
		 font-size: 15px;
		 text-align: center;
		 cursor: pointer;
		 outline: none;
		 color: #fff;
		 background-color: 	#4b781e	;
		 border: none;
		 border-radius: 15px;
		 font-size: 10pt;
		 font-family: 'orbitronlight';
		}
		.button:hover {
			background-color: #c7e8bf;
			}
		.button:active {
		  background-color: #05EDFF;
		  box-shadow: 0 5px #666;
		  transform: translateY(4px);
		}
		.button a{
			text-decoration: none;
			color:white;
		}
		.input-type{
			width: 30px;
			font-size: 16pt;
			text-align: center;
		}
		.rightsidebar{
		float: right;
		width: 300px;
		height: 350px;
		text-align: center;
		margin-right: 50px;
		padding: 20px;
		}
		.rightsidebar h2{
			margin-top: 10px;
		}
		.leftsidebar{
		float: left;
		width: 920px;
		height: 350px;
		text-align: center;
		background-color: #D3D3D3;
		}
		.leftsidebar table{
		margin: auto;
		text-align:center;
		width: 50px;
		}
		.leftsidebar tr{
		margin: auto;
		}
		.leftsidebar td{
		margin: auto;
		}	
		.active{
		background-color: black;
		}
		.active a{
			color: white;
		}
</style> 
<?php
	session_start();

	$username = $_SESSION['username'];
	
?>
<body>
	
	<div class="main-body">
	
		<nav class = "nav"> 
				<?php	
				
					if ($_SESSION['position'] == 'user')
					{
						header("Location: status.php");
					} 
					elseif ($_SESSION['position'] == 'approver')
					{
						include 'dbconnect.inc';
						$query = "SELECT * FROM approvers WHERE username = '$username'";
						$results = mysql_query($query);
						while ( $record = mysql_fetch_assoc ($results) )
						{
							$_SESSION['role'] = $record['position'];
						}
						header("Location: approve.php");
					}
					elseif ($_SESSION['position'] == 'admin')
					{
						header("Location: admin.php");
					}
				?>

		</nav>
		<center><hr width = "1000px" style = "margin-bottom: 100px;"></center>
		
		<div class = "left">
			<center>
				
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