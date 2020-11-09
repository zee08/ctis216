
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
height: 1000px;
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
			<li><a href="updatekit.php" >kit update</a></li>
			</ul>
		<a href="tester.php">Tester</a>
		<a href="index.php">Logout</a>
	</div>
	<h2 style="text-align: center"> Update Kit</h2>
	
	<div class="column">
	<div class="container">
	<form action="" method="post">
		<p> Please fill in details to update test centre</p>
		<hr>
		<label ><b>kit ID</b></label><br>
		<input type="text"placeholder="Enter new id" name="kitID"
		required><br>

	
		<label ><b>stock</b></label><br>
		<input type="text" placeholder="Enter stock" name="newstock" 
		required><br>
		</hr>
	 
		<button type="submit"name="update" class="registerbtn">Update</button>
		
		</form>


</div>
</div>

</body>  
</html>
<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection,'ctis');

		
if(isset($_POST['update'])){
	$kitID = $_POST['kitID'];


	$query="UPDATE testkit SET stock='$_POST[newstock]'+stock where kitID='$_POST[kitID]'";
	
	$query_run = mysqli_query($connection,$query);

	if($query_run || stock>0){

	echo'<script type="text/javascript">alert("data updated")</script>';
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/ctis/updatekit.php">
	<?php
}
else{
	echo'<script type="text/javascript">alert("data update failed")</script>';
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/ctis/updatekit.php">
	<?php
}
}




?>

		