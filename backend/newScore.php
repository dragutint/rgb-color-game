<?php
    include 'connection.php';

    $name = $_POST['name'];
    $score = $_POST['score'];
    
    $sql = "INSERT INTO scoreboard (name, score)
            VALUES ('$name', $score)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Thank you for playing our game!";
    } else {
        echo "Something went wrong!";
    }
    
    $conn->close();
 ?>