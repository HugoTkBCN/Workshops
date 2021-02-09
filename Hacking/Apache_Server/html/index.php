<?php
session_start();
$errorMsg = "";
if(isset($_POST["sub"])) {
  $validUser = $_POST["username"] == "admin" && $_POST["password"] == "password";
  if(!$validUser) $errorMsg = "Invalid username or password.";
}
if($validUser) {
   header("Location: /success.php"); die();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Login</title>
</head>
<body>
  <form name="input" action="" method="post">
    <label for="username">Username:</label><input type="text" value="<?= $_POST["username"] ?>" id="username" name="username" /><br />
    <label for="password">Password:</label><input type="password" value="" id="password" name="password" /><br />
    <div class="error"><?= $errorMsg ?></div><br />
    <input type="submit" value="Home" name="sub" /><br />
  </form>
</body>
</html>