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

<?php
require_once 'db_connection.php';

  if (isset($_POST['username'])) {
    $query = "SELECT salt FROM authentication WHERE username = '{$_POST['username']}'";
    $results = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
    $salt = $row['salt'];
    echo "<br>Salt: $salt";
  }

  if (isset($_POST['hashedPassword'])) {
    echo "<br>PASSWORD: {$_POST['password']}";
    echo "<br>HASHED PASSWORD: {$_POST['hashedPassword']}";
    
    $query = "SELECT * FROM authentication WHERE username = '{$_POST['username']}'
        AND hashed_password = '{$_POST['hashedPassword']}'";
    $results = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if ($results->num_rows > 0) {
        echo "<br>Password match!";
    } else {
        echo "<br>Password doesn't match.";
    }
  }
?>

<form action="" method="post">
    <label for="password">Password:</label>
    <input type="text" id="password" name="password"><br>
    <input type="hidden" id="username" name="username" value="<?=$_POST['username']?>">
    <input type="hidden" id="salt" name="salt" value="<?=$salt?>">
    <input type="hidden" id="hashedPassword" name="hashedPassword" value="">
    <input type="submit" value="Login" onclick="hashExistingPassword()">
</form>

</body>
</html>