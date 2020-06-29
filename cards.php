<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #444;
  color: white;
}

.fa {font-size:50px;}


.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}

.crd {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

.cad {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.btn {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.btn:hover {
  opacity: 0.7;
}

.flip-box1 {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner1 {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box1:hover .flip-box-inner1 {
  transform: rotateX(180deg);
}

.flip-box-front1, .flip-box-back1 {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back1 {
  background-color: dodgerblue;
  color: white;
  transform: rotateX(180deg);
}

#mydiv {
  position: absolute;
  z-index: 9;
  background-color: #f1f1f1;
  text-align: center;
  border: 1px solid #d3d3d3;
}

#mydivheader {
  padding: 10px;
  cursor: move;
  z-index: 10;
  background-color: #2196F3;
  color: #fff;
}
</style>
</head>
<body>

<h2>Responsive Section Counter</h2>
<p>Resize the browser window to see the effect.</p>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>11+</h3>
      <p>Partners</p>
    </div>
  </div>

  <div class="column">
    <div class="card cad">
      <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
      <h1>Tailored Jeans</h1>
      <p class="price">$19.99</p>
      <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
      <p class="btn"><button>Add to Cart</button></p>
    </div>

  </div>

  <div class="column">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
          <h3> flip card</h3>
        </div>
        <div class="flip-card-back">
          <h1>John Doe</h1>
          <p>Architect & Engineer</p>
          <p>We love that guy</p>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card crd">
      <img src="/w3images/team2.jpg" alt="John" style="width:100%">
      <h1>John Doe</h1>
      <p class="title">CEO & Founder, Example</p>
      <p>Harvard University</p>
      <div style="margin: 24px 0;">
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
      </div>
      <p><button>Contact</button></p>
    </div>
  </div>

  <div class="column">
    <div class="flip-box1">
      <div class="flip-box-inner1">
        <div class="flip-box-front1">
          <h2 class="bg-success">Front Side</h2>
        </div>
        <div class="flip-box-back1">
          <h2>Back Side</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div id="mydiv">
      <div id="mydivheader">Click here to move</div>
      <p>Move</p>
      <p>this</p>
      <p>DIV</p>
    </div>
  </div>


</div>

<script>
//Make the DIV element draggagle:
dragElement(document.getElementById("mydiv"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>

</body>
</html>
