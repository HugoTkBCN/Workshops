<?php
session_start();
$validUser = $_SESSION["login"] === true;
if (isset($_POST["disc"])) {
  $_SESSION["login"] = false;
  header("Location: index.php");
}
if (!$validUser) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>home</title>
</head>

<body>
  <h1>Home</h1>
  <form name="disconect" action="" method="post">
    <input type="submit" value="Disconnect" name="disc" />
  </form>
</body>

</html>