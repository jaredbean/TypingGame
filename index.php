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
  // if (isset($_POST['username'])) {
  //   // Database credentials
  //   $hostname = "sql201.epizy.com";
  //   $username = "epiz_24388369";
  //   $password = "weberstudent1";
  //   $db_name = "epiz_24388369_cs3750_names";

  //   // Create connection
  //   $conn = mysqli_connect($hostname, $username, $password, $db_name);

  //   // Check connection
  //   if (!$conn) {
  //       die("Connection to database failed: " . mysqli_connect_error());
  //   } else {
  //       echo "Connected to database successfully";
  //   }
  //   $user = $_POST['username'];
  //   $query = "SELECT salt FROM authentication WHERE username = '$user'";

  //   $results = mysqli_query($conn, $query) or die(mysqli_error($conn));
  //   $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
  //   $salt = $row['salt'];
  //   echo "<br>Salt: $salt";

  //   // if (isset($_POST['username'])) {
  //   //     echo "<br><br> Posted to the server: <br><br>";
  //   //     echo "Username: {$_POST['username']} <br>"; 
  //   //     echo "Salt: {$_POST['salt']} <br>";
  //   //     echo "Hashed Password: {$_POST['hashedPassword']} <br>";
  //   //}  
  // }
?>

<h1>Keyboard Typing Game</h1>

<form action="verify_password.php" method="post" id="formLogin">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br>
  <input type="submit" value="Login" id="btnLogin" name="btnLogin">
</form>

<p><a href="new_user.php">Sign up</a> for an account</p>

<?php // Debugging
// if (isset($_POST['username'])) {
//   echo "<br><br> Posted to the server: <br><br>";
//   echo "Username: {$_POST['username']} <br>"; 
//   echo "Salt: {$_POST['salt']} <br>";
//   echo "Hashed Password: {$_POST['hashedPassword']} <br>";
// }
?>

</body>
</html>

    
