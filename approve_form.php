<!DOCTYPE html>
<?php session_start();
$itemcode = rand();
$id = $_SESSION['u_id'];
$username = $_SESSION['username'];

?>
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
		background:#344e35 ;
		margin: auto;
		padding: 10px;
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
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-family: 'orbitronlight';
		font-size: 12pt;
		
	}

	.nav a:hover {
		background-color:white;
		color: black;
	}
	.loginbox{
		border: 2px solid black;
		margin: auto;
		width: 1000px;
		height: 400px;
		margin-top: 20px;
		padding: 10px;
		background:white ;
		color: white;
	}
	.loginbox h1{
		margin-top: 100px;
		color:black;
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
	.button:hover {
		background-color: white;
		color: 	black;
		}
	.button:active {
	  background-color: #4b781e;
	  box-shadow: 0 5px #666;
	  transform: translateY(4px);
	}
	.button a{
		text-decoration: none;
		color:white;
		 margin: auto;
	}
	.input-type{
		width: 250px;
		font-size: 16pt;
	}
		.left_logout{
		margin-top: -50px;
		width: 250px;
		float: right;
	}
	.logout{
		float: right;	
	}
	.user{
		color: white;
		float: left;
		}
	.back{

		float: left;
	
	}
	.submit a{
		font-weight: bold;
		font-family: 'orbitronlight';
		text-align:center;
		color: black;
	}
	.submit a:hover{
		background-color: #344e35;
		font-weight: strong;
		color: white;
		text-decoration: none;
		
	}
	.submit:hover {
		background-color: #344e35;
		font-weight: strong;
		color: white;
		cursor: pointer;
	}
</style> 
<body>
	
	<div class="main-body">
	<nav class = "nav">
			<ul>
				<li><a href = "approve.php">PENDING FORMS</a></li>
				<li><a href = "approvedforms.php">APPROVED FORMS</a></li>
			</ul>
		</nav>
		<div class = "left_logout">
			<div class = "user">
				<h2>Hi&nbsp<?php echo $username ?>!</h2>
			</div>
			<div class = "logout">
					<center><button class = "button" onclick = "location.href='logout.php'" >Log Out</button></center>
			</div>
		</div>
			
		<div class = "loginbox">
			<div class = "back">
				<button class = "submit" onclick = "location.href='approve.php'" >◄ BACK </button></a>
			
			</div>
			<center>
				<?php
				
					
					$formid = $_REQUEST['formid'];
					
					if ($username == 'superior1')
					{
						include('dbconnect.inc');
						$update = "UPDATE forms  SET status = 'APPROVED BY IMMEDIATE SUPERIOR' WHERE formid = '$formid'";
						$result_update = mysql_query($update);
						if ( $result_update)
						{
							echo '<h1><center> FORM WAS APPROVED! </center></h1>';
						}
						
						$query = "SELECT * FROM forms WHERE formid = '$formid'";
						$results = mysql_query($query);
						while ($record = mysql_fetch_assoc($results))
						{
							$username = $record['username'];
							$requestorid = $record['requestor_id'];
							$status = $record['status'];
							$itemname = $record['item_name'];
						}
						
						$insert = "INSERT INTO superior (requestor_id,formid,username,itemname,status)
							VALUES ('$requestorid','$formid','$username','$itemname','$status')";
						$results_insert = mysql_query($insert);
					}
					elseif ($username == 'section1')
					{
						include('dbconnect.inc');
						$update = "UPDATE forms SET status = 'APPROVED BY ICTC SECTION' WHERE formid = '$formid'";
						$result_update = mysql_query($update);
						$update1 = "UPDATE superior SET status = 'APPROVED BY ICTC SECTION' WHERE formid = '$formid'";
						$result_update1 = mysql_query($update1);
						if ( $result_update)
						{
							echo '<h1><center> FORM WAS APPROVED! </center></h1>';
						}
						
						$query = "SELECT * FROM superior WHERE formid = '$formid'";
						$results = mysql_query($query);
						while ($row= mysql_fetch_assoc($results))
						{
							$superiorid = $row['superior_id'];
							$username = $row['username'];
							$requestorid = $row['requestor_id'];
							$status = $row['status'];
							$itemname = $row['itemname'];
						}
						
						$insert = "INSERT INTO section (superiorid,requestorid,formid,username,itemname,status)
							VALUES ('$superiorid','$requestorid','$formid','$username','$itemname','$status')";
						$results_insert = mysql_query($insert);
					}
					elseif ( $username == 'director1')
					{
						include('dbconnect.inc');
						$update = "UPDATE forms SET status = 'APPROVED BY ICTC DIRECTOR' WHERE formid = '$formid'";
						$result_update = mysql_query($update);
						$update2 = "UPDATE superior SET status = 'APPROVED BY ICTC DIRECTOR' WHERE formid = '$formid'";
						$result_update2 = mysql_query($update2);
						$update1 = "UPDATE section SET status = 'APPROVED BY ICTC DIRECTOR' WHERE formid = '$formid'";
						$result_update1 = mysql_query($update1);
						if ( $result_update)
						{
							echo '<h1><center> FORM WAS APPROVED! </center></h1>';
						}
						
						$query = "SELECT * FROM section WHERE formid = '$formid'";
						$results = mysql_query($query);
						while ($row= mysql_fetch_assoc($results))
						{
							$sectionid = $row['sectionid'];
							$superiorid = $row['superiorid'];
							$username = $row['username'];
							$requestorid = $row['requestorid'];
							$status = $row['status'];
							$itemname = $row['itemname'];
						}
						
						$insert = "INSERT INTO director (sectionid,superiorid,requestorid,formid,username,itemname,status)
							VALUES ('$sectionid','$superiorid','$requestorid','$formid','$username','$itemname','$status')";
						$results_insert = mysql_query($insert);
					}
					elseif ( $username == 'purchasing1')
					{
						include('dbconnect.inc');
						$update = "UPDATE forms SET status = 'APPROVED BY PURCHASING DEPT.' WHERE formid = '$formid'";
						$result_update = mysql_query($update);
						$update3 = "UPDATE superior SET status = 'APPROVED BY PURCHASING DEPT.' WHERE formid = '$formid'";
						$result_update3 = mysql_query($update3);
						$update2 = "UPDATE section SET status = 'APPROVED BY PURCHASING DEPT.' WHERE formid = '$formid'";
						$result_update2 = mysql_query($update2);
						$update1 = "UPDATE director SET status = 'APPROVED BY PURCHASING DEPT.' WHERE formid = '$formid'";
						$result_update1 = mysql_query($update1);
						if ( $result_update)
						{
							echo '<h1><center> FORM WAS APPROVED! </center></h1>';
						}
						
						$query = "SELECT * FROM director WHERE formid = '$formid'";
						$results = mysql_query($query);
						while ($row= mysql_fetch_assoc($results))
						{
							$directorid = $row['directorid'];
							$sectionid = $row['sectionid'];
							$superiorid = $row['superiorid'];
							$username = $row['username'];
							$requestorid = $row['requestorid'];
							$status = $row['status'];
							$itemname = $row['itemname'];
						}
						$insert = "INSERT INTO purchasing (directorid,sectionid,superiorid,requestorid,formid,username,itemname,status)
							VALUES ('$directorid','$sectionid','$superiorid','$requestorid','$formid','$username','$itemname','$status')";
						$results_insert = mysql_query($insert);
						
						$update_complete = "UPDATE forms SET status = 'COMPLETE' WHERE formid = '$formid'";
						$result_update = mysql_query($update_complete);
				
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