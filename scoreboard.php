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
    <h1>
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

    <nav class="bar" style="margin: auto">
        <div class="nav nav-tabs bar score-bar" role="tablist">
            <a class="active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
                aria-selected="true">
                <button class="bar-item bar-button bar-button-switch" type="button">
                    EASY
                </button>
            </a>
            <a class="" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                aria-controls="nav-profile" aria-selected="false">
                <button class="bar-item bar-button bar-button-switch" type="button">
                    HARD
                </button>
            </a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div id="container">
                <table id="scoreboardTable" class="table table-striped table-condensed">
                    <thead>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Score</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($scores_easy as $s) {
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
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div id="container">
                <table id="scoreboardTable" class="table table-striped table-condensed">
                    <thead>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Score</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($scores_hard as $s) {
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
    </div>

    <img src="src/img/slika1.png" alt="slika1" id="slika1">
    <img src="src/img/slika2.png" alt="slika2" id="slika2">

    </div>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>