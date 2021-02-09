<!DOCTYPE html>
<html>
<script>
var url_string = window.location.href
var url = new URL(url_string);
var username = url.searchParams.get("usrname");
var password = url.searchParams.get("psw");
if (username && password) {
if (username == "admin" && password == "123")
    alert("Success Bro");
else
    alert("Nope!");
}
</script>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Login</title>
</head>

<body>
  <div class="container">
    <form action="/">
      <label for="usrname">Username</label>
      <input type="text" id="usrname" name="usrname" required>

      <label for="psw">Password</label>
      <input type="password" id="psw" name="psw"  required>
      <input type="submit" value="Submit">
    </form>
  </div>
</body>

</html>