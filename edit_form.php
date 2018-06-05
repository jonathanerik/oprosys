<!DOCTYPE html>
<?php session_start();
$itemcode = rand();
$id = $_SESSION['u_id'];
$username = $_SESSION['username'];
$formid = $_REQUEST['formid'];
$_SESSION['formid'] = $formid;
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
		height: 750px;
		border-style: solid 5px #333;
		background: #f2f2f2;
		margin: auto;
		padding: 10px;
		background: #344e35 ;

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
		color:  black;
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
		width: 300px;
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
		border: 2px solid black;
		margin: auto;
		width: 1200px;
		height: 650px;
		margin-top: 20px;
		padding: 10px;
		background:white;
		color: black;
	}
	.register table {
		margin: auto;
		border: 2px solid black;
		background: white;
	}
	.register th,td{
		width: 300px;
		height: 50px;
		text-align: center;
		border: 2px solid black;
	}
	.register input{
		width: 280px;
		text-align:center;
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
	.approved {
		border-radius: 5px;
		background-color: green;
		color: white;
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
		cursor: pointer;
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
				<button class = "submit" onclick = "location.href='approve.php?formid=<?php echo $formid; ?>;'" >◄ BACK </button>
			
			</div>
			<?php 
			include('dbconnect.inc');
		
			
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
			
			if ( $username == 'superior1')
			{
				include('dbconnect.inc');

			?>
		
				<table>
					<form action = "edit_form1.php" method = "POST">
						<tr>
							<td colspan = 2><h1>FORM</h1></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input readonly = "" type = "text" name = "username" value = "<?php echo $user?>"></td>
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
							<td><input type = "text" name = "comments" value = "<?php echo $comments?>"></td>
						</tr>
						<tr>
							<td colspan = 2><input class = "approved" type = "submit" name = "submit" value = "ACCEPT CHANGES"></td>
						</tr>
						
					</form>
				</table>
			<?php
			}
			elseif( $username == 'section1')
			{
				include('dbconnect.inc');
			?>
				<table>
					<form action = "edit_form1.php" method = "POST">
						<tr>
							<td colspan = 2><h1>FORM</h1></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input readonly = "" type = "text" name = "username" value = "<?php echo $user?>"></td>
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
							<td><input type = "text" name = "comments" value = "<?php echo $comments?>" readonly = ""></td>
						</tr>
						<tr>
							<td>Recommendations</td>
							<td><input type = "text" name = "recommendations" value = "<?php echo $recommendations?>"></td>
						</tr>
						<tr>
							<td colspan = 2><input class = "approved"  type = "submit" name = "submit" value = "ACCEPT CHANGES"></td>
						</tr>
						
					</form>
				</table>
			<?php 
			}?>
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