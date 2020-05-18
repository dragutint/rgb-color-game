<?php
include 'connection.php';

$name = $_POST['name'];
$score = $_POST['score'];
$level = $_POST['level'];

$sql = "INSERT INTO scoreboard (name, score, level)
            VALUES ('$name', $score, $level)";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for playing our game!";
} else {
    echo "Something went wrong!";
}

$conn->close();