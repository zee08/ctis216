	<?php
		$connect = mysqli_connect("localhost", "root", "","ctis");
		$sql ="SELECT * FROM regcentre INNER JOIN testkit ON regcentre.id = testkit.cenID";
		$result = mysqli_query($connect,$sql);
		?>
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
input[type=text]{
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
table{
	border: collapse;
	width:50%;
	color: black;
	font-family: time new roman;
	font-size: 18px;
	text-align: left;
	margin: auto;
}
</style>
</head>
<body>
<img class="header-image" src="covid-19.jpg">
<h1 class="head1">COVID TRACKING SYSTEM</h1>
	<div class="vmenu">
		<a href="regCentre.php">Register centre</a>
			<ul>
			<li><a href="updatekit.php">centre update</a></li>
			</ul>
		<a href="testkit.php"  class="active">Test kit</a>
			<ul>
			<li><a href="updatekit.php" >kit update</a></li>
			</ul>
		<a href="tester.php">Tester</a>
		<a href="index.php">Logout</a>
	</div>
	<h2 style="text-align: center"> Details</h2>
	
	<div class="column">
	<div class="container">
	
		<hr>
	
		<table>
				<tr>
					<th>centre id</th>
					<th>Centre name</th>
					<th>address</th>
					<th>kit id</th>
					<th>testname</th>
					<th>stock</th>
					<?php
					if(mysqli_num_rows($result)){
					 while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["id"];?></td>  
                               <td><?php echo $row["centrename"]; ?></td>
                               <td><?php echo $row["address"]; ?></td>
                               <td><?php echo $row["kitID"]; ?></td>   
                               <td><?php echo $row["testname"]; ?></td>
                               <td><?php echo $row["stock"]; ?></td>
                           </tr>
				}
				</tr>
				<?php
			}
		}
		?>

		</table>
	
	
		
</div>
</div>

	
	
	
		
</body>  
</html>

