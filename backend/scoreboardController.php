<?php
include 'connection.php';
include 'score.php';

$result = $conn->query('select * from scoreboard order by score DESC');

$scores = array();
while ($row = $result->fetch_assoc()) {
        $score = new Score($row['name'], $row['score']);
        array_push($scores, $score);
}

$conn->close();