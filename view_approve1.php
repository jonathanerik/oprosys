<!DOCTYPE html>
<?php session_start();
$itemcode = rand();
$id = $_SESSION['u_id'];
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
		height: 900px;
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
	margin: auto;
	color: black;
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
		border: 2px solid black;
		margin: auto;
		width: 1200px;
		height: 840px;
		margin-top: 20px;
		padding: 10px;
		color: white;		
		background:white ;
	}
	.register table {
		margin: auto;
		border: 2px solid black;
		width: 700px;
		background-color: white;
		color: black;
	}
	.register th,td{
		width: 300px;
		height: 50px;
		text-align: center;
		border: 2px solid black;
	}
	.register input{
		width: 270px;
		text-align:center;
	}
	.left_logout{
		margin-top: -50px;
		width: 300px;
		float: right;
	}
	.back{

		float: left;
	}
	.submit {
		border-radius: 5px;
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
	.approved {
		border-radius: 5px;
		background-color: green;
	}
	.approved a{
		font-weight: bold;
		font-family: 'orbitronlight';
		text-align:center;
		color: white;
	}
	.approved a:hover{
		background-color: black;
		font-weight: strong;
		color: white;
		text-decoration: none;
	}
	.approved:hover {
		background-color: black;
		font-weight: strong;
		color: white;
	}
	.reject {
		border-radius: 5px;
		background-color: red;
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
	.details {
		border-radius: 5px;
		background-color: gray;
		width: 100px;
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
</style>
<body>
	
	<div class="Header">	
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		<center > <div class="Title">ICTC ONLINE </div> </center>
		<center > <div class="SubTitle">De La Salle Lipa </div> </center>
	</div>




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
		<div class = "register">
			<div class = "back">
				<button class = "submit" onclick = "location.href='approve.php'" >◄ BACK </button></a>
			
			</div>
			<?php 
			include('dbconnect.inc');
			$formid = $_REQUEST['formid'];
			
			
			
			$view = "SELECT * FROM forms WHERE formid = '$formid'";
			$results_view = mysql_query($view);
			while ( $record = mysql_fetch_assoc($results_view))
			{
				$user = $record['username'];
				$date_needed = $record['date_needed'];
				$time = $record['time'];
				$item_name = $record['item_name'];
				$quantity = $record['quantity'];
				$price = $record['price'];
				$description = $record['description'];
				$status = $record['status'];
				$comments = $record['comments'];
				$recommendations = $record['recommendations'];
			}
			
			
			if ($username == 'superior1')
			{
				
			?>
				<table>
						<tr>
							<td colspan = 2><h1>FORM</h1></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input type = "text" name = "date_needed" value = "<?php echo $user?>" readonly = ""></td>
						</tr>
						<tr>
							<td> Date Needed </td>
							<td><input type = "date" name = "date_needed" value = "<?php echo $date_needed?>" readonly = ""></td>
						</tr>
						<tr>
							<td> Time </td>
							<td><input type = "time" name = "time" value = "<?php echo $time ?>" readonly = ""></td>
						</tr>
						<tr>
							<td>Item Name </td>
							<td>
								<select name = "itemname" readonly = "">
									<option value ="<?php echo $item_name?>"><?php echo $item_name?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td> Quantity </td>
							<td><input type = "number" name = "quantity" value = "<?php echo $quantity ?>"readonly = ""></td>
						</tr>
						<tr>
							<td>Price</td>
							<td>
								<select name = "price" required = "">
									<option value ="<?php echo $price?>"><?php echo $price ?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Description</td>
							<td><input type = "text" name = "description" value = "<?php echo $description?>" readonly = ""></td>
						</tr>
						<tr>
							<td>STATUS</td>
							<td><input type = "text" name = "status" value = "<?php echo $status?>" readonly = ""></td>
						</tr>
						<tr>
							<td>Comments</td>
							<td><textarea rows="3" cols="40" readonly = ""><?php echo $comments?></textarea></td>
						</tr>				
				</table>
			<?php
			}
			elseif ( $username == 'section1')
			{
			?>
				<table>
						<tr>
							<td colspan = 2><h1>FORM</h1></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input type = "text" name = "date_needed" value = "<?php echo $user?>" readonly = ""></td>
						</tr>
						<tr>
							<td> Date Needed </td>
							<td><input type = "date" name = "date_needed" value = "<?php echo $date_needed?>" readonly = ""></td>
						</tr>
						<tr>
							<td> Time </td>
							<td><input type = "time" name = "time" value = "<?php echo $time ?>" readonly = ""></td>
						</tr>
						<tr>
							<td>Item Name </td>
							<td>
								<select name = "itemname" readonly = "">
									<option value ="<?php echo $item_name?>"><?php echo $item_name?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td> Quantity </td>
							<td><input type = "number" name = "quantity" value = "<?php echo $quantity ?>"readonly = ""></td>
						</tr>
						<tr>
							<td>Price</td>
							<td>
								<select name = "price" required = "">
									<option value ="<?php echo $price?>"><?php echo $price ?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Description</td>
							<td><input type = "text" name = "description" value = "<?php echo $description?>" readonly = ""></td>
						</tr>
						<tr>
							<td>STATUS</td>
							<td><input type = "text" name = "status" value = "<?php echo $status?>" readonly = ""></td>
						</tr>
						<tr>
							<td>Comments</td>
							<td><textarea rows="3" cols="40" readonly = ""><?php echo $comments?></textarea></td>
						</tr>
						<tr>
							<td>Recommendations</td>
							<td><textarea rows="3" cols="40" readonly = ""><?php echo $recommendations?></textarea></td>
						</tr>
				</table>
			<?php
			}
			elseif ( $username == 'director1')
			{
			?>
		
				<table>
						<tr>
							<td colspan = 2><h1>FORM</h1></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input type = "text" name = "date_needed" value = "<?php echo $user?>" readonly = ""></td>
						</tr>
						<tr>
							<td> Date Needed </td>
							<td><input type = "date" name = "date_needed" value = "<?php echo $date_needed?>" readonly = ""></td>
						</tr>
						<tr>
							<td> Time </td>
							<td><input type = "time" name = "time" value = "<?php echo $time ?>" readonly = ""></td>
						</tr>
						<tr>
							<td>Item Name </td>
							<td>
								<select name = "itemname" readonly = "">
									<option value ="<?php echo $item_name?>"><?php echo $item_name?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td> Quantity </td>
							<td><input type = "number" name = "quantity" value = "<?php echo $quantity ?>"readonly = ""></td>
						</tr>
						<tr>
							<td>Price</td>
							<td>
								<select name = "price" required = "">
									<option value ="<?php echo $price?>"><?php echo $price ?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Description</td>
							<td><input type = "text" name = "description" value = "<?php echo $description?>" readonly = ""></td>
						</tr>
						<tr>
							<td>STATUS</td>
							<td><input type = "text" name = "status" value = "<?php echo $status?>" readonly = ""></td>
						</tr>
						<tr>
							<td>Comments</td>
							<td><textarea rows="3" cols="40" readonly = ""><?php echo $comments?></textarea></td>
						</tr>
						<tr>
							<td>Recommendations</td>
							<td><textarea rows="3" cols="40" readonly = ""><?php echo $recommendations?></textarea></td>
						</tr>
					</table>
			<?php
			}
			elseif ( $username == 'purchasing1' )
			{
			?><div id = "div-id-name">
				<table style = "margin:auto;">
					
						<tr>
							<td colspan = 2><h1>FORM</h1></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input style = "width: 250px;" type = "text" name = "date_needed" value = "<?php echo $user?>" readonly = ""></td>
						</tr>
						<tr>
							<td> Date Needed </td>
							<td><input style = "width: 250px;" type = "date" name = "date_needed" value = "<?php echo $date_needed?>" readonly = ""></td>
						</tr>
						<tr>
							<td> Time </td>
							<td><input style = "width: 250px;" type = "time" name = "time" value = "<?php echo $time ?>" readonly = ""></td>
						</tr>
						<tr>
							<td>Item Name </td>
							<td>
								<select name = "itemname" readonly = "">
									<option value ="<?php echo $item_name?>"><?php echo $item_name?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td> Quantity </td>
							<td><input style = "width: 250px;" type = "number" name = "quantity" value = "<?php echo $quantity ?>"readonly = ""></td>
						</tr>
						<tr>
							<td>Price</td>
							<td>
								<select style = "width: 250px;" name = "price" required = "">
									<option value ="<?php echo $price?>"><?php echo $price ?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Description</td>
							<td><input type = "text" name = "description" value = "<?php echo $description?>" readonly = ""></td>
						</tr>
						<tr>
							<td>STATUS</td>
							<td><input style = "width: 250px;" type = "text" name = "status" value = "<?php echo $status?>" readonly = ""></td>
						</tr>
						<tr>
							<td>Comments</td>
							<td><textarea rows="3" cols="40" readonly = ""><?php echo $comments?></textarea></td>
						</tr>
						<tr>
							<td>Recommendations</td>
							<td><textarea rows="3" cols="40" readonly = ""><?php echo $recommendations?></textarea></td>
						</tr>
						<tr>
							<td colspan = 2><a href = "" id = "print" onclick = "javascript:printlayer('div-id-name')">Generate Report</a></td>
						</tr>
						
				</table>
				</div>
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
			<?php
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
<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toUTCString();
</script>
</html>