var colors = generateRandomColors(6);
var pickedColor;
var isHard = false;
var round = 0;
var score = 0;
var sec = 0;
var interval;

var squares = $(".square");
var message = $("#message");
var colorDisplay = $("#colorDisplay");
var h1 = $("h1");
var btnPlay = $("#btnPlay");
var easyButton = $("#easy");
var hardButton = $("#hard");
var playBar = $("#play-bar");
var menuBar = $("#menu-bar");

var rightSound = new Audio("src/sound/right-sound.mp3");
var wrongSound = new Audio("src/sound/wrong-sound.mp3");

easyButton.addClass("selected");

$(document).ready(function () {
  squares.each(animateDiv);
});

function pad(val) {
  return val > 9 ? val : "0" + val;
}

function makeNewPosition() {
  var h = $(window).height() - 50;
  var w = $(window).width() - 50;

  var nh = Math.floor(Math.random() * h);
  var nw = Math.floor(Math.random() * w);

  return [nh, nw];
}

function animateDiv() {
  var el = $(this);
  var newq = makeNewPosition();
  var oldq = $(el).offset();
  var speed = calcSpeed([oldq.top, oldq.left], newq);

  $(el).animate({ top: newq[0], left: newq[1] }, speed, function () {
    animateDiv.apply(this);
  });
}

function calcSpeed(prev, next) {
  var x = Math.abs(prev[1] - next[1]);
  var y = Math.abs(prev[0] - next[0]);

  var greatest = x > y ? x : y;
  if (isHard) {
    var speedModifier = 0.2;
  } else {
    var speedModifier = 0.1;
  }

  var speed = Math.ceil(greatest / speedModifier);

  return speed;
}

function startGame() {
  $("#scoreCounter").html(0);
  $("#roundCounter").html(1);

  sec = 0;
  score = 0;
  round = 0;

  showSquares();
  newColors();
  message.html("");

  addEventListenersToSquares();
  toggleBars();

  interval = setInterval(function () {
    $("#seconds").html(pad(++sec % 60));
    $("#minutes").html(pad(parseInt(sec / 60, 10)));
  }, 1000);
}

function newColors() {
  showSquares();

  if (isHard) {
    colors = generateRandomColors(6);
  } else {
    colors = generateRandomColors(3);
  }

  for (var i = 0; i < colors.length; i++) {
    $(squares[i]).css("background-color", colors[i]);
  }
  pickedColor = $(squares[randomNumber(0, colors.length - 1)]).css(
    "background-color"
  );
  colorDisplay.html(pickedColor);
}

function addEventListenersToSquares() {
  for (var i = 0; i < squares.length; i++) {
    $(squares[i])
      .off("click")
      .click(function () {
        var clickedColor = this.style.backgroundColor;

        if (
          clickedColor.replace(/\s/g, "") === pickedColor.replace(/\s/g, "")
        ) {
          rightSound.play();
          message.html("Correct!");
          round++;
          score += 30;
          $("#scoreCounter").html(score);
          $("#roundCounter").html(round + 1);

          changeSquareColors(pickedColor);
          h1.css("background-color", pickedColor);

          if (round == 3) {
            endGame();
          } else {
            newColors();
          }
        } else {
          wrongSound.play();
          $(this).addClass("d-none");
          score -= 5;
          $("#clickCounter").html(score);
          message.html("Try again!");
        }
      });
  }
}

function toggleBars() {
  $(playBar).toggleClass("d-none");
  $(menuBar).toggleClass("d-none");
}

function hideSquares() {
  for (var i = 0; i < 6; i++) {
    $(squares[i]).addClass("d-none");
  }
}

function showSquares() {
  for (var i = 0; i < 6; i++) {
    $(squares[i]).removeClass("d-none");
  }
}

function endGame() {
  var name = $("#nameInput").val();

  toggleBars();
  hideSquares();

  $.ajax({
    url: "backend/newScore.php",
    type: "POST",
    data: {
      name: name,
      score: score - sec,
    },
    success: function (data) {
      Swal.fire({
        title: "You finished, " + name,
        text: data + "\n" + "Your score: " + (score - sec),
        icon: "success",
        confirmButtonText: "Cool",
      });

      score = 0;
      sec = 0;
      round = 0;
      clearInterval(interval);
    },
  });
}

function changeSquareColors(color) {
  for (var i = 0; i < colors.length; i++) {
    $(squares[i]).css("background-color", color);
  }
}

function makeRandomColor() {
  var c = "";
  c += "(";
  c +=
    randomNumber(0, 255) +
    ", " +
    randomNumber(0, 255) +
    ", " +
    randomNumber(0, 255);
  c += ")";
  return "rgb" + c;
}

function generateRandomColors(num) {
  var colors = [];
  for (var i = 0; i < num; i++) {
    colors.push(makeRandomColor());
  }
  return colors;
}

btnPlay.click(function () {
  h1.css("background-color", "steelblue");
  startGame();
});

easyButton.click(function () {
  if (isHard) {
    isHard = false;
    // $(squares[3]).css("background-color", "#232323");
    // $(squares[4]).css("background-color", "#232323");
    // $(squares[5]).css("background-color", "#232323");

    this.classList.toggle("selected");
    hardButton.toggleClass("selected");
  }
});

hardButton.click(function () {
  if (!isHard) {
    isHard = true;
    easyButton.toggleClass("selected");
    this.classList.toggle("selected");
  }
});

function randomNumber(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
