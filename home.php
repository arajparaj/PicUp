<?php session_start();
if($_SESSION["login"] != 1){
	header("location:index.php");
}
?>


<html>
<head>
<title>Home page</title>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1 style="margin-bottom:20;" align = "center">Home Page</h1>
		</div>
		<div id="sidebar">

			<form action="upload_image.php" method="post">
				<input type="file" name="file" id="file"><br>
				<input type="submit" name="submit" value="Submit">

			</form>
		<?php
		$con=mysqli_connect("localhost","root","arajaraj","picup");
		$result = mysqli_query($con,"SELECT * FROM picup_users");

		echo "<h3>Users<br></h3>";
		while($row = mysqli_fetch_array($result)){
			echo "<a href=public.php?id=".$row['id'].">".$row['username']."</a><br>";
		}

	?>
	<br><br><br><br>
	<a href="logout.php">logout</a>
</div>

<div id="content" style="width:1000px;float:left;">
	
	<?php session_start();
		if($_SESSION["login"] != 1){
		header("location:index.php");
	}
		$con=mysqli_connect("localhost","root","arajaraj","picup");

		$id = (int) $_SESSION["user_id"];
		$result = mysqli_query($con,"SELECT * FROM picup_pictures WHERE user_id='$id'");
		while($row = mysqli_fetch_array($result)){
			echo "<img src=".$row['pic_loc']." height='200' width='200'>";
		}

	?>

</div>

</div>













</body>
</html>

