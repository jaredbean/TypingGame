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
if (isset($_POST['btnSignUp'])) {
    require_once 'db_connection.php';
    $query = "INSERT INTO authentication (username, salt, hashed_password) 
              VALUES ('{$_POST['username']}', '{$_POST['salt']}', '{$_POST['hashedPassword']}')";    
    mysqli_query($conn, $query) or die(msqli_error($conn));

    if (isset($_POST['username'])) {
        echo "<br><br> Posted to the server: <br><br>";
        echo "Username: {$_POST['username']} <br>"; 
        echo "Salt: {$_POST['salt']} <br>";
        echo "Hashed Password: {$_POST['hashedPassword']} <br>";
        echo "<br><br>INSERTED INTO DATABASE<br><br>";
    }    
}
?>

<form action="" method="post" id="formLogin">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label>
  <input type="text" id="password" name="password"><br>
  <input type="hidden" value="" id="salt" name="salt">
  <input type="hidden" value="" id="hashedPassword" name="hashedPassword">
  <input type="submit" value="Create Account" id="btnSignUp" name="btnSignUp" onclick="hashNewPassword()">
</form>

</body>
</html>
