<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Keyboard Typing Game</title>
  <style></style>
  <script type="text/javascript" src="sha256.js"></script>
  <script type="text/javascript" src="login.js"></script>
</head>
<body>

<h1>Keyboard Typing Game</h1>

<form action="" method="post" id="formLogin">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label>
  <input type="text" id="password" name="password"><br>
  <input type="hidden" value="" id="salt" name="salt">
  <input type="hidden" value="" id="hashedPassword" name="hashedPassword">
  <input type="submit" value="Create Account" id="btnSignUp" name="btnSignUp" onclick="hashPassword()">
</form>

<?php // Debugging
if (isset($_POST['username'])) {
  echo "<br><br> Posted to the server: <br><br>";
  echo "Username: {$_POST['username']} <br>"; 
  echo "Salt: {$_POST['salt']} <br>";
  echo "Hashed Password: {$_POST['hashedPassword']} <br>";
}
?>

</body>
</html>

    
