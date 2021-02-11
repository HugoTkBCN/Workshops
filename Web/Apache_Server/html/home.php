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
  <link rel="stylesheet" href="style.css">
  <title>home</title>
</head>

<body>
  <h1>Home</h1>
  <form name="disconect" action="" method="post">
    <button name="disc">Sign Out</button>
  </form>
</body>

</html>