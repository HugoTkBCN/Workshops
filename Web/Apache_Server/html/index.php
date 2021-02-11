<?php
session_start();
$errorMsg = "";
$validUser = $_SESSION["login"] === true;
if (isset($_POST["sub"])) {
  $validUser = $_POST["username"] == "admin" && $_POST["password"] == "password";
  if (!$validUser)
    $errorMsg = "Invalid username or password.";
  else
    $_SESSION["login"] = true;
}
if ($validUser) {
  header("Location: /home.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container">
      <form name="input" action="" method="post">
        <h1>Sign in</h1>
        <input type="text" placeholder="Username" value="<?= $_POST["username"] ?>" id="username" name="username" />
        <input type="password" placeholder="Password" value="" id="password" name="password"/>
        <div class="error"><?= $errorMsg ?></div>
        <a href="#">Forgot your password?</a>
        <button name="sub">Sign In</button>
      </form>
    </div>
  </div>
  <footer>
    <p>
      Created by
      <a target="_blank" href="https://hugolachkar.com">Hugo Lachkar</a>
    </p>
  </footer>
</body>

</html>