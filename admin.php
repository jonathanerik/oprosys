<!DOCTYPE html>
<?php session_start();
$itemcode = rand();
@$id = $_SESSION['u_id'];
$username = $_SESSION['username'];

?>
<html>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
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
		height: 500px;
		border-style: solid 5px #333;
		background: #344e35;
		margin: auto;
		padding: 10px;
		color: white;

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
	color: black;
	font-family: 'orbitronlight';
	font-size: 12pt;
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
		background-color: white;
		color: black;
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
	.logout{
		float: right;	
	}
	.active{
		background-color: black;
		color: white;
	}
	.user{
		color: white;
		float: left;
		}
	.register {
		margin: auto;
		width: 1200px;
		height: 400px;
		margin-top: 20px;
		padding: 10px;
		overflow-y: scroll;
		background:white;
		color:black;
		
	}
	.register table {
		margin: auto;
		
		overflow-y: scroll;
		font-size:12pt;
	}
	.register th{
		width: 300px;
		height: 50px;
		text-align: center;
		border-top: 2px solid black;
		border-bottom: 2px solid black;
		font-size: 15.5pt;
		
	}
	.register td{
		width:300px;
		
	}
	.register tr{
		border-top: 1px solid black;
		text-align:center;
	}
	.left_logout{
		margin-top: -50px;
		width: 250px;
		float: right;
	}
	.details {
		border: none;
		background-color: gray;
	}
	.details a{
		font-weight: bold;
		font-size:10pt;
		font-family: 'orbitronlight';
		text-align:center;
		color: white;
	}
	.details a:hover{
		background-color: black;
		font-weight: strong;
		color: white;
		text-decoration: none;
	}
	.details:hover {
		background-color: black;
		font-weight: strong;
		color: white;
	}
	.reject {
		border: none;
		background-color: red;
		font-size:10pt;
	}
	.reject a{
		font-weight: bold;
		font-family: 'orbitronlight';
		text-align:center;
		color: white;
	}
	.reject a:hover{
		background-color: black;
		font-weight: strong;
		color: white;
		text-decoration: none;
	}
	.reject:hover {
		background-color: black;
		font-weight: strong;
		color: white;
	}
</style>
<body>
	
	<div class="Header">	
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		<center > <div class="Title">ICTC ONLINE </div> </center>
		<center > <div class="SubTitle">De La Salle Lipa </div> </center>
	</div>




	<div class="main-body">
		<nav class = "nav">
			<script type = "text/javascript">
				function printlayer(layer)
				{
					var generator = window.open(",'name,");
					var layetext = document.getElementById(layer);
					generator.document.write(layetext.innerHTML.replace("Print Me"));
					
					generator.document.close();
					generator.print();
					generator.close();
				}
			</script>
			<ul>
				<li>
					<a href = "" id = "print" onclick = "javascript:printlayer('div-id-name')">Generate Report</a>
				</li>
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
		<div class = "register" id = "div-id-name">
			
			
			<table>
			
				<th>Date Requested</th>
				<th>Username</th>
				<th>Item Name</th>
				<th>Status</th>
				<th colspan = 2 style = "width: 150px;"></th>
				<?php
					include('dbconnect.inc');
					
					$view = "SELECT * FROM forms ORDER BY date_requested DESC";
					$result = mysql_query($view);
					$numrows = mysql_num_rows($result);
					if ( $numrows == 0)
					{
						echo '<tr><td colspan = 4><h1><center> THERE ARE NO REQUESTS</center></h1></td></tr>';
					}
					else
					{
						while ( $record = mysql_fetch_assoc($result))
						{

							echo '<tr>';
				
								echo '<td>'.$record['date_requested'].'</td>';
								echo '<td>'.$record['username'].'</td>';
								echo '<td>'.$record['item_name'].'</td>';
								echo '<td>'.$record['status'].'</td>';
								echo "<td><button type = 'button' class = 'details' ><a href =\"view_form.php?formid={$record['formid']}\">VIEW DETAILS</a></button></td><td>";
							echo '</td></tr>';
						}
					}
					
				
				
				?>
				
				
			</table>
			
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


}
</script>
</html>