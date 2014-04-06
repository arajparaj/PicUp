<?php session_start();
if($_SESSION["login"]==1){
	header("location:home.php");
}
?>
<!DOCTYPE html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style/signup.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Sign up for PicUp</h1>
      <form method="post" action="useradd.php">
        <p><input type="text" name="username" placeholder="Enter a username"></p>
        <p>
          <input type="password" name="password" placeholder="Enter a password">
        </p>
        <p class="submit">
          <input type="submit" name="commit" value="Sign Up">
        </p>
      </form>
    </div>
  </section>
</body>
</html>
