<!DOCTYPE html>
<?php session_start();
$itemcode = rand();
$id = $_SESSION['u_id'];
$username = $_SESSION['username'];
include ('dbconnect.inc');
?>
<html>

 
<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
	<link href="local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet">
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
		height: 300px;
		border-style: solid 5px #333;
		background:  #344e35;
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
	margin: auto;

	
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
		background-color: black;
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
		color: black;
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
	.active{
		background-color: black;
		color: white;
	}
	.register {
		background-color: 	white;
		border: 2px solid black;
		margin: auto;
		width: 900px;
		height: 200px;
		margin-top: 20px;
		padding: 10px;
		color: black;
		text-align:center;
		padding:50px;
	}
	.register table {
		margin: auto;
	}
	.register td{
		width: 200px;
		height: 50px;
		text-align: center;
	}
	.left_logout{
		margin-top: -50px;
		width: 300px;
		float: right;
	}
	.logout{
		float: right;	
	}
	.user{
		color: white;
		float: left;
		}
	.submit {
		margin-top: 25px;
		font-weight: bold;
		font-family: 'orbitronlight';
	}
	.submit:hover {
		background-color: #344e35;
		font-weight: strong;
		color: white;
		cursor: pointer;
	}
	.badge1 {
   position:relative;
   width: 250px;
   font-size: 30pt;
   
}
	.badge1:hover {
   cursor:pointer;
   border-color: black;
}
.badge1[data-badge]:after {
   content:attr(data-badge);
   position:absolute;
   top:-10px;
   right:-10px;
   font-size:.7em;
   background:red;
   color:white;
   width:50px;height:50px;
   text-align:center;
   line-height:50px;
   border-radius:50%;
   box-shadow:0 0 1px #333;

}
</style>
<body>
	
	<div class="Header">	
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		<center > <div class="Title">ICTC ONLINE </div> </center>
		<center > <div class="SubTitle">De La Salle Lipa </div> </center>
	</div>




	<div class="main-body">
		<div style = "background-color">
		<nav class = "nav">
			<ul>
				<li><a href = "#">ONLINE PROCUREMENT SYSTEM</a></li>
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
		</div>
		
		
		
		<div class = "register">
			<?php
				if ( $username == 'superior1')
				{
					$query = "SELECT * FROM forms WHERE status = 'PENDING'";
					$result = mysql_query($query);
					$numrows = mysql_num_rows($result);
					?> <button class="badge1" data-badge="<?php echo $numrows; ?>" onclick = "location.href='profile.php'" >View of Forms </button>
			<?php
				}
				elseif ( $username == 'section1' )
				{
					$query = "SELECT * FROM superior WHERE status = 'APPROVED BY IMMEDIATE SUPERIOR'";
					$result = mysql_query($query);
					$numrows = mysql_num_rows($result);
					?> <button class="badge1" data-badge="<?php echo $numrows; ?>" onclick = "location.href='profile.php'" >View of Forms </button>
			<?php
				}
				elseif ( $username == 'director1')
				{
					$query = "SELECT * FROM section WHERE status = 'APPROVED BY ICTC SECTION'";
					$result = mysql_query($query);
					$numrows = mysql_num_rows($result);
					?> <button class="badge1" data-badge="<?php echo $numrows; ?>" onclick = "location.href='profile.php'" >View of Forms </button>
			<?php	
				}
				elseif ( $username == 'purchasing1' )
				{
					$query = "SELECT * FROM director WHERE status = 'APPROVED BY ICTC DIRECTOR'";
					$result = mysql_query($query);
					$numrows = mysql_num_rows($result);
					?> <button class="badge1" data-badge="<?php echo $numrows; ?>" onclick = "location.href='profile.php'" >View of Forms </button>
			<?php	
				}
			?>
			

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
<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toUTCString();
</script>
</html>