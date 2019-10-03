<!DOCTYPE html>
<html>
    <head>
        <title>Typing Game</title>
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
        <span id="wordGroup1" class="wordGroup">
            <div id="timer1" class="timer"></div>
            <span class="word"></span>
        </span>
        <span id="wordGroup1" class="wordGroup">
            <div id="timer1" class="timer"></div>
            <span class="word"></span>
        </span>
        <span id="wordGroup1" class="wordGroup">
            <div id="timer1" class="timer"></div>
            <span class="word"></span>
        </span>
        <span id="wordGroup1" class="wordGroup">
            <div id="timer1" class="timer"></div>
            <span class="word"></span>
        </span>
        <span id="wordGroup1" class="wordGroup">
            <div id="timer1" class="timer"></div>
            <span class="word"></span>
        </span>
        <div>
            <input id="userWord" />
        </div>
    </body>
</html>