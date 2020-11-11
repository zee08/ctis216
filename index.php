


<!DOCTYPE html>
<html>
<head>
	<title>Manager login</title>
	
<style>
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
}
form {border: 3px solid #f1f1f1;}
input[type=text], input[type=password] {
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
.resetbtn{
  width: auto;
  padding: 10px 30px;
  background-color: #f1f1f1;
  
}
.submitbtn{
width: auto;
 padding: 10px 30px;
background-color: #f1f1f1;} 
</style>
</head>
<body style="background-color:#f1f1f1">

<h1 class="head1">COVID TRACKING SYSTEM</h1>
<h2 style="text-align: center"> Login for centre manager</h2>
<div class="column">
<div class="container" >
	<form action="index.php" method="POST">
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="username" required>
	<br>
	
	<label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required>
	

  
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <input type="reset" value="reset" class="resetbtn" style="margin-left: 26%">
    <button type="submit" class="submitbtn" name="submit_btn">Login</button>
	</form>
	<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');




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
      $sql = "select * from login where username = '$username' and password = '$password'";
        $result = $conn->query($sql);
      if($result->num_rows > 0){
        echo "Login is successful";
        header("Location: regCentre.php");
      } else
        echo"<script>alert('invalid login');</script>";
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
