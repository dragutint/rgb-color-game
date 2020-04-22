<?php
include 'backend/scoreboardController.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>RGB | SCOREBOARD</title>
    <?php include 'head-includes.php'; ?>
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
    </div>

    <div style="background-image: url('src/img/scoreboard-background.jpg');">
        <div id="container">
            <table id="scoreboardTable" class="table table-striped table-condensed">
                <thead>
                    <th>Name</th>
                    <th>Score</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($scores as $s) {
                    ?>
                    <tr>
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