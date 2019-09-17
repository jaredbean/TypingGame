<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Keyboard Typing Game</title>
  <style></style>
</head>
<body>

<h1>Keyboard Typing Game</h1>

<form action="" method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username"><br>
  <label for="password">Password:</label>
  <input type="text" name="password" id="password"><br>
  <input type="submit" value="Submit">
</form>

<?php echo $_POST['username']; ?>

</body>
</html>

    
