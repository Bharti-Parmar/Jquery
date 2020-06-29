<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="font-awesome.min.css">

<script src="jquery.min.js"></script>
<script src="popper.min.js"></script>
<script src="bootstrap.min.js"></script>

<style>
body {
  padding: 25px;
  background-color: white;
  color: black;
  font-size: 25px;
}

.dark-mode {
  background-color: black;
  color: white;
}
.fa {
  font-size: 50px;
  cursor: pointer;
  user-select: none;
}

.fa:hover {<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  color: darkblue;
}
#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
}
</style>
</head>
<body>

<h2>Toggle Dark/Light Mode</h2>
<p>Click the button to toggle between dark and light mode for this page.</p>
<i onclick="myfunction(this)" class="fa fa-thumbs-up"></i><br>

<button onclick="myFunction()">Toggle dark mode</button>

<button onclick="myFunc()">Try it</button>

<div id="myDIV">
This is my DIV element.
</div>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}

function myfunction(x) {
  x.classList.toggle("fa-thumbs-down");
}

function myFunc() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  var x = document.getElementById("myDIV");
  if (x.innerHTML === "Hello") {
    x.style.background = "green";
    x.innerHTML = "Swapped text!";
  } else {
    x.innerHTML = "Hello";
  }

}
</script>

</body>
</html>
