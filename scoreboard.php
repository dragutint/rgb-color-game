<?php
include 'backend/scoreboardController.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>RGB | SCOREBOARD</title>
    <?php include 'head-includes.php'; ?>
    <link rel="icon" href="src/img/icon.png">
</head>

<body>
    <h1 style="background-image:url('src/img/baner.jpg');">
        The Great
        <br />
        <span id="colorDisplay">SCOREBOARD</span>
        <br />
        RGB Color Game
    </h1>

    <div class="bar" id="menu-bar">
        <a href="index.php"><button class="bar-item bar-button" type="button">
                GAME
            </button>
        </a>
        <a href="score-rules.php"><button class="bar-item bar-button" type="button">
                SCORE RULES
            </button>
        </a>
    </div>

    <img src="src/img/slika1.png" alt="slika1" id="slika1">
    <img src="src/img/slika2.png" alt="slika2" id="slika2">

    <div id="container">
        <table id="scoreboardTable" class="table table-striped table-condensed">
            <thead>
                <th>Rank</th>
                <th>Name</th>
                <th>Score</th>
            </thead>
            <tbody>
                <?php
                foreach ($scores as $s) {
                ?>
                <tr>
                    <td><?php echo $s->getRank(); ?></td>
                    <td><?php echo $s->getName(); ?></td>
                    <td><?php echo $s->getScore(); ?></td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>