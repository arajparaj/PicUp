<?php session_start();
if($_SESSION["login"]==1){
	header("location:home.php");
	}

$con=mysqli_connect("localhost","root","arajaraj","picup");

// Check connection

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$name=$_POST[username];
$password=$_POST[password];

$result =mysqli_query($con,"INSERT INTO picup_users (username,password) VALUES ('$name', '$password')");
$result1 = mysqli_query($con,"SELECT * FROM picup_users WHERE username = '$name' AND password= '$password'");

while($row = mysqli_fetch_array($result1))
  	$user = $row['id'];


mysqli_close($con);
if ($result == true) {
	$_SESSION["login"]= 1;
	$_SESSION["user_id"] = (int) $user;
	header('Refresh: 2;home.php');
}

?>
<html>
<head>
	<title></title>
</head>
<body>
<h1> REGISTERING USER</h1>
</body>
</html>