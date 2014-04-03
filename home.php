<html>
<body>

<form action="upload_image.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php session_start();
if($_SESSION["login"] != 1){
	header("location:index.php");
}
	$con=mysqli_connect("localhost","root","arajaraj","picup");

	$id = (int) $_SESSION["user_id"];
	$result = mysqli_query($con,"SELECT * FROM picup_pictures WHERE user_id='$id'");
	while($row = mysqli_fetch_array($result)){
		echo "<img src=".$row['pic_loc']." height='250' width='250'>";
	}

?>


</body>
</html>

