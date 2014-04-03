<?php session_start();

if($_SESSION["login"] != 1){
	header("location:index.php");
}


function generateRandomString($length = 10) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

$con=mysqli_connect("localhost","root","arajaraj","picup");

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    $random = generateRandomString();
    move_uploaded_file($_FILES["file"]["tmp_name"],"./upload/" .$random.$_FILES["file"]["name"]);
    echo "Stored in: " . "upload/" .$random. $_FILES["file"]["name"];
    $stri = "upload/".$random. $_FILES["file"]["name"];
    
    $id = (int) $_SESSION["user_id"];

    $sql = "INSERT INTO picup_pictures (pic_loc, user_id, shared) VALUES ('$stri','$id',0);";

    mysqli_query($con,$sql);
    }
  }
else
  {
  echo "Invalid file";
  }
  header('Refresh: 1;home.php');
?>