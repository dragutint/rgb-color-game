<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>RGB | GAME</title>
    <?php include 'head-includes.php'; ?>
    <link rel="icon" href="src/img/icon.png">
</head>

<body>
    <h1 style="background-image:url('src/img/baner.jpg');">
        The Great
        <br />
        <span id="colorDisplay">RGB</span>
        <br />
        Color Game
    </h1>

    <div class="bar" id="menu-bar">
        <a href="instructions.php"><button class="bar-item bar-button" type="button" name="instructions"
                id="btnInstructions">
                INSTRUCTIONS
            </button>
        </a>
        <a href="scoreboard.php"><button class="bar-item bar-button" type="button" name="scoreboard" id="btnScoreboard">
                SCOREBOARD
            </button>
        </a>
        <span id="message"></span>
        <span class="bar-item"><i class="fa fa-user"></i></span>
        <input id="nameInput" class="form bar-item" type="text" placeholder="Type your name..." />
        <button type="button" name="easy" id="easy" class="bar-item bar-button">
            EASY
        </button>
        <button type="button" name="hard" id="hard" class="bar-item bar-button">
            HARD
        </button>
        <button class="bar-item bar-button" type="button" name="play" id="btnPlay">
            PLAY!
        </button>
    </div>

    <div class="bar d-none" id="play-bar">
        <span class="bar-item">
            <span id="minutes">00</span>:<span id="seconds">00</span>
        </span>
        <span class="bar-item" id="message"></span>

        <span class="bar-item">SCORE:</span>
        <span class="bar-item" id="scoreCounter"></span>
        <span class="bar-item">ROUND:</span>
        <span class="bar-item" id="roundCounter"></span>
    </div>

    <div id="container">
        <video controls width="650" height="500" loop autoplay id="intro">
            <source src="src/video/movie.mp4" type="video/mp4">
        </video>

        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>