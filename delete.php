<?php
include("connection.php");
error_reporting(0);

$id=$_GET['idno'];
$query = "DElETE FROM regcentre WHERE ID = '$id'";

$data=mysqli_query($conn,$query);

if($data){
	echo"<script>alert('Record deleted successfully');</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/ctis/updatecen.php">
	<?php
	

}
else{
	echo"failed delete";
}
?>