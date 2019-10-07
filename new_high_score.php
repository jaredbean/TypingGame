<?php
    require_once 'db_connection.php';
    header('Content-type: application/json');

    $result = array();
    if (!isset($_POST['username'])) { $result['error'] = 'No username found'; }

    if (!isset($_POST['score'])) { $result['error'] = 'No score found'; }

    if (!isset($_POST['error'])) {
        // Code to add a new score to the high scores table

        $result['success'] = 'success';
    }

    echo json_encode($result);

?>