<?php session_start();
if($_SESSION["login"]==1){
	header("location:home.php");
}
?>
<!DOCTYPE html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style/main.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login to PicUp</h1>
      <form method="post" action="verify.php">
        <p><input type="text" name="username" placeholder="Username"></p>
        <p>
          <input type="password" name="password" placeholder="Password">
        </p>
        <p class="submit">
          <input type="submit" name="commit" value="Login">
        </p>
      </form>
    </div>

    <div class="signup">
      <p><h2>Not a user ??<a href="signup.php">Click Here To Sign Up</a>.</h2></p>
    </div>
  </section>
</body>
</html>
