
<!DOCTYPE html>
<html>
<head>
	<title>centre detail</title>
<style>
	.header-image{
	width: 250px;
	height: 200px;
	margin-left: 500px;

}
.container{padding: 30px;}
.head1{
display: inline-block;
border: 2px solid black;
width: 100%;
font-family: times new roman;
font-size: 25px;
text-align: left;
background: black;
color: white; 
margin-top: -9px;
}
.column{margin-left: 200px;
padding: 1px 16px;
height: 1000px;
}
table{
	border: collapse;
	width:50%;
	color: black;
	font-family: time new roman;
	font-size: 18px;
	text-align: left;
	margin: auto;
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
			<li><a href="updatekit.php"  class="active">kit update</a></li>
			</ul>
		<a href="tester.php">Tester</a>
		<a href="index.php">Logout</a>
	</div>
	<h2 style="text-align: center"> Test kit details</h2>
	<div class="column">
	<div class="container">
	<table>
		<tr>
			
			<th>kit id</th>
			<th>Test name</th>
			<th>Stock</th>
			<th>centre id</th>

			<th colspan="2" align="centre">Modify</th>
		</tr>
<?php
		$conn = mysqli_connect("localhost", "root", "", "ctis");
		if($conn-> connect_error){
			die("connection failed: ". $conn-> connect_error);
		}
		
		$sql = "SELECT * from testkit";
		$result = $conn -> query($sql);


		if($result-> num_rows > 0){
			while($row = $result-> fetch_assoc()){
			
				echo"<tr>
				<td>".$row["kitID"]."</td>
				<td>".$row["testname"]."</td>
				<td>".$row["stock"]."</td>
				<td>".$row["cenID"]."</td>
				
				<td><a href='editkit.php?idnum=$row[kitID]&tname=$row[testname]
				&stock=$row[stock]&centreID=$row[cenID]'><input type='submit' value='Edit' id='editbtn'></td>
				</tr>";
		}
		
			echo"</table>";
		}
		
		else{
			echo"<script>alert('No test kit has been registered');</script>";
		}
		$conn-> close();

		
		
		
?>
			
	</table>
	</div>
	</div>
</body>
</html>