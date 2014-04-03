<?php session_start();
if($_SESSION["login"]==1){
	
	header("location:home.php");
}
?>


<div align="middle">
	<h1>Welcome to PicUp!!!</h1>

<form action="verify.php" method="post">
    User Name:<br>
    <input type="text" name="username"><br><br>
    Password:<br>
    <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Login">
</form>
	
	<p>
		Not a user? <a href="signup.php"> Sign up now </a>
	</p>

</div>