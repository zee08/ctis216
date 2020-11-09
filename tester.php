<!DOCTYPE html>
<html>
<head>
	<title>Centre officer</title>
<style>
	.text{
		color: green;
		font-size: 20px;
		  display: inline-block;
  border: 1px solid black;
  box-sizing: border-box;
	}
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
input[type=text], input[type=password], #position {
	text-align: center;
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid green;
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
		<a href="regCentre.php">Register centre</a>
			<ul>
			<li><a href="updatecen.php">centre update</a></li>
			</ul>
		<a href="testkit.php">Test kit</a>
			<ul>
			<li><a href="updatekit.php">kit update</a></li>
			</ul>
		<a href="tester.php"  class="active">Tester</a>
		<a href="index.php">Logout</a>
	</div>
	<h2 style="text-align: center"> Register centre officer</h2>
	
	<div class="column">
	<div class="container">
	<form action="tester.php" method="post">
		<p> Please fill in details to register new centre officer</p>
		<hr>
	
		<label for="name"><b>Username</b></label><br>
		<input type="text" placeholder="Enter username" name="username" id="uname"
		required><br>
	
		<label for="password"><b>password</b></label><br>
		<input type="password" placeholder="Enter password" name="password" id="pass"
		required><br>

		<label for="name"><b>Name</b></label><br>
		<input type="text" placeholder="Enter name" name="name" id="name"
		required><br>

		<label for="position"><b>Position</b></label><br>
		<select id="position" name="position">
			<option value="null">Null</option>
  			<option value="manager">Manager</option>
  			<option value="tester">Tester</option>
  	
		</select><br>
		<hr>
	 
		<button type="submit" class="registerbtn">Register</button>
		
		</form>
		<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$name = filter_input(INPUT_POST, 'name');
$position = filter_input(INPUT_POST, 'position');




if(!empty($username)){
	if(!empty($password)){
		$host = "localhost";
		$dbusername ="root";
		$dbpassword = "";
		$dbname = "ctis";
		
	

	
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if(mysqli_connect_error()){
			die('connect error( '.mysqli_connect_errno().')' .mysqli_connect_error());
		}
		else{
			$sql = "INSERT INTO tester(username, password, name, position) values ('$username', '$password', '$name', '$position')";
			if($conn->query($sql)){
				echo"<div class='text'>Centre officer recorded with position:'$position'</div>";
			} else
				echo"<script>alert('failed to record a new officer');</script>";
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