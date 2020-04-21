var colors = generateRandomColors(6);
var pickedColor;
var isHard = false;

var squares = document.querySelectorAll(".square");
var message = $("#message");
var colorDisplay = $("#colorDisplay");
var h1 = $("h1");
var newColorsButton = $("#newColors");
var easyButton = $("#easy");
var hardButton = $("#hard");

easyButton.addClass("selected");

newColors();
$(document).ready(function () {
  $(".square").each(animateDiv);
});

function makeNewPosition() {
  // Get viewport dimensions (remove the dimension of the div)
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

function newColors() {
  if (isHard) {
    colors = generateRandomColors(6);
  } else {
    colors = generateRandomColors(3);
  }

  for (var i = 0; i < squares.length; i++) {
    squares[i].addEventListener("click", function () {
      var clickedColor = this.style.backgroundColor;

      if (clickedColor.replace(/\s/g, "") === pickedColor.replace(/\s/g, "")) {
        message.html("Correct!");
        changeSquareColors(pickedColor);
        h1.css("background-color", pickedColor);
        newColorsButton.text("PLAY AGAIN?");
      } else {
        this.style.background = "#232323";

        message.html("Try again!");
      }
    });
  }

  for (var i = 0; i < colors.length; i++) {
    squares[i].style.backgroundColor = colors[i];
  }
  pickedColor =
    squares[randomNumber(0, colors.length - 1)].style.backgroundColor;
  colorDisplay.html(pickedColor);
  message.html("");
}

function changeSquareColors(color) {
  for (var i = 0; i < colors.length; i++) {
    squares[i].style.backgroundColor = color;
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

newColorsButton.click(function () {
  h1.css("background-color", "steelblue");
  newColors();
  this.textContent = "NEW COLORS";
});

easyButton.click(function () {
  if (isHard) {
    isHard = false;
    newColors();
    squares[3].style.backgroundColor = squares[4].style.backgroundColor = squares[5].style.backgroundColor =
      "#232323";
    this.classList.toggle("selected");
    hardButton.toggleClass("selected");
  }
});

hardButton.click(function () {
  if (!isHard) {
    isHard = true;
    newColors();
    easyButton.toggleClass("selected");
    this.classList.toggle("selected");
  }
});

function randomNumber(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
