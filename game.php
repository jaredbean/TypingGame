<!DOCTYPE html>
<html>
    <head>
        <title>Typing Game</title>
        <link rel="stylesheet" href="styles.css">
            <?php
                // Get array.
                $serverName = "localhost";
                $username = "root";
                $password = "";
                $dbName = "typing_game";

                $conn = mysqli_connect($serverName, $username, $password, $dbName);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $query = "SELECT word FROM Word ORDER BY word DESC";
                
                $results = mysqli_query($conn, $query) or die(mysqli_error($conn));

                $array = array();
                while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
                    array_push($array, $row['word']);
                }

            ?>
        <script>
                var myArray = <?php echo json_encode($array) ?>; 
                function getDictionary(){
                    console.log(myArray);
                    return myArray;
                }
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
        <script src="game.js"></script>
    </head>
    <body>
        <h1>Typing Game</h1>
        <div>
            <span>Time:</span> <span id="gameTimer"></span>
        </div>
        <span class="wordGroup">
            <div class="timer"></div>
            <div class="lifebar" style="height:15px;width:20px;background-color:#33aa33"></div>
            <span class="word"></span>
        </span>
        <span class="wordGroup">
            <div class="timer"></div>
            <div class="lifebar" style="height:15px;width:20px;background-color:#33aa33"></div>
            <span class="word"></span>
        </span>
        <span class="wordGroup">
            <div class="timer"></div>
            <div class="lifebar" style="height:15px;width:20px;background-color:#33aa33"></div>
            <span class="word"></span>
        </span>
        <span class="wordGroup">
            <div class="timer"></div>
            <div class="lifebar" style="height:15px;width:20px;background-color:#33aa33"></div>
            <span class="word"></span>
        </span>
        <span class="wordGroup">
            <div class="timer"></div>
            <div class="lifebar" style="height:15px;width:20px;background-color:#33aa33"></div>
            <span class="word"></span>
        </span>
        <div>
            <input id="userWord" />
        </div>
    </body>
</html>