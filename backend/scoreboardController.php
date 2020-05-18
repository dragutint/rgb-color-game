<?php
include 'connection.php';
include 'score.php';

$result_easy = $conn->query('select * from scoreboard WHERE level = 0 order by score DESC');
$result_hard = $conn->query('select * from scoreboard WHERE level = 1 order by score DESC');

$scores_easy = array();
$i = 1;
while ($row = $result_easy->fetch_assoc()) {
        $score = new Score($row['name'], $row['score'], $row['level']);
        $score->setRank($i++);
        array_push($scores_easy, $score);
}

$scores_hard = array();
$i = 1;
while ($row = $result_hard->fetch_assoc()) {
        $score = new Score($row['name'], $row['score'], $row['level']);
        $score->setRank($i++);
        array_push($scores_hard, $score);
}

$conn->close();