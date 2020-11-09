<?php
$sname = "localhost";
$username = "root";
$password = "";
$dbname = "ctis";

$conn = mysqli_connect($sname, $username, $password, $dbname);

if($conn){
	//echo"connected";
}
else{
	echo"connection failed".mysqli_connect_error();
}
?>
