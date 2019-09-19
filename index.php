<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Keyboard Typing Game</title>
  <style></style>
  <script type="text/javascript" src="login.js"></script>
</head>
<body>

<h1>Keyboard Typing Game</h1>

<form action="" method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username"><br>
  <label for="password">Password:</label>
  <input type="text" name="password" id="password"><br>
  <!-- <input type="submit" value="Submit"> -->
  <input type="button" value="Sign Up!" id="btnSignUp" name="btnSignUp" onclick="createUser()">
</form>

<?php echo $_POST['username']; ?>

<script>generateSalt()</script>

</body>
</html>

    
