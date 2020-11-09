<?php
include('connection.php');

if(isset($_POST['submitkit'])){
	$kitID = $_POST['kitID'];
	$testname=$_POST['testname'];
	$stock=$_POST['stock'];
	$cenID=$_POST['cenID'];

	$query = "insert into testkit(kitID, testname, stock, cenID) values('$kitID', '$testname', '$stock', '$cenID')";
	$query_run = mysqli_query($connection,$query);
	if($query_run){
		echo "Test kit is added";
		header("location: testkit.php");


	}else{
		echo"failed";
		header("location: testkit.php");

	}
}

?>