<?php session_start();
$con=mysqli_connect("localhost","root","arajaraj","picup");


// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$name=$_POST[username];
$password=$_POST[password];

$result = mysqli_query($con,"SELECT * FROM picup_users WHERE username = '$name' AND password= '$password'");

$count=0;
while($row = mysqli_fetch_array($result))
  {
  	$count = $count+1;
  	$user = $row['id'];
  }

if($count==1){
	$_SESSION["login"]= 1;
	$_SESSION["user_id"] = (int) $user;
	header("location:home.php");
}
else{
	header("location:error.php");	
}

mysqli_free_result($result);
mysqli_close($con);
?>
