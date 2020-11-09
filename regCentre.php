<!DOCTYPE html>
<html>
<head>
	<title>Centre register</title>
<style>
.header-image{
	width: 250px;
	height: 200px;
	margin-left: 500px;

}
.container{padding: 30px;}
.head1{
//display: inline-block;
border: 2px solid black;
width: 100%;
font-family: times new roman;
font-size: 25px;
text-align: left;
background: black;
color: white; 
margin-top: -9px;
}
form {border: 3px solid #f1f1f1;}
input[type=text] {
	text-align: center;
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  box-sizing: border-box;
}
.column{margin-left: 200px;
padding: 1px 16px;
height: 950px;
}
.registerbtn{
  width: auto;
  padding: 10px 30px;
  background-color: #f1f1f1;
  
}
.vmenu{
	margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: absolute;
  height: 100%;
  overflow: auto;
	}

.vmenu a{
	background-color: #eee;
	color: black;
	display: block;
	padding: 12px;
text-decoration: none;
}
.vmenu a:hover {
  background-color: #ccc;
}

.vmenu a.active {
  background-color: black;
  color: white;
}
</style>
</head>
<body>
<img class="header-image" src="covid-19.jpg">
<h1 class="head1">COVID TRACKING SYSTEM</h1>
	<div class="vmenu">
		<a href="regCentre.php" class="active">Register centre</a>
			<ul>
			<li><a href="updatecen.php">centre update</a></li>
			</ul>
		<a href="testkit.php">Test kit</a>
			<ul>
			<li><a href="updatekit.php">kit update</a></li>
			</ul>
		<a href="tester.php">Tester</a>
		<a href="index.php">Logout</a>
	</div>
	<h2 style="text-align: center"> Register centre</h2>
	
	<div class="column">
	<div class="container">
	<form action="regCentre.php" method="post">
		<p> Please fill in details to register new test centre</p>
		<hr>
	
		<label for="name"><b>Centre Name</b></label><br>
		<input type="text" placeholder="Enter name" name="centrename" id="cname"
		required><br>
	
		<label for="address"><b>Address</b></label><br>
		<input type="text" placeholder="Enter address" name="address" id="cadd"
		required><br>
	

		

	

	
	
		<hr>
	 
		<button type="submit" class="registerbtn">Register</button>
		
		</form>
		<?php
$centrename = filter_input(INPUT_POST, 'centrename');
$address = filter_input(INPUT_POST, 'address');




if(!empty($centrename)){
	if(!empty($address)){
		$host = "localhost";
		$dbusername ="root";
		$dbpassword = "";
		$dbname = "ctis";
		
	

	
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if(mysqli_connect_error()){
			die('connect error( '.mysqli_connect_errno().')' .mysqli_connect_error());
		}
		else{
			$sql = "INSERT INTO regcentre(centrename, address) values ('$centrename', '$address')";
			if($conn->query($sql)){
				echo'Centre id is generated ';
			} else
				echo"<script>alert('A centre by this name exists.');</script>";
			//''.$sql .'<br>'. $conn->error;
				
					
			$conn->close();
		}
	}else{
		echo'address should not be emp';
		die();	
		}}
?>
</div>
</div>

	
	
	
		
</body>  
</html>