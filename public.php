<?php session_start();
if($_SESSION["login"] != 1){
	header("location:index.php");
}
?>


<?php session_start();
		if($_SESSION["login"] != 1){
		header("location:index.php");
	}
		$con=mysqli_connect("localhost","root","arajaraj","picup");

		$id = $_GET['id'];
		$result = mysqli_query($con,"SELECT * FROM picup_pictures WHERE user_id='$id'");
		while($row = mysqli_fetch_array($result)){
			echo "<img src=".$row['pic_loc']." height='200' width='200'>";
		}

	?>