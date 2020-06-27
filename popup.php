<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome.min.css">

  <script src="jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>

  <style>
  .popup-overlay{
    visibility:hidden;
  }
  .popup-content{
    visibility:hidden;
  }
  .popup-overlay.active{
    visibility: visible;
  }
  .popup-content.active{
    visibility: visible;
  }
  .hide {
  display: none;
}

.myDIV:hover + .hide {
  display: block;
  color: red;
}
  </style>

</head>
<body>

<div class="container">
  <h2>Jquery pop-up example</h2>

  <div class="popup-overlay">
    <div class="popup-content">
      <h2> pop up </h2>
      <p> hello this is my popup example </p>
      <button type="submit" class="close">Close</button>
    </div>
  </div>
  <button class="open">Open</button>

  <h2 class="mt-5">Display an Element on Hover</h2>

<div class="myDIV bg-info">Hover over me.</div>
<div class="hide">I am shown when someone hovers over the div above.</div>

</div>


<script>

$(".open").on("click",function(){
  $(".popup, .popup-content").addClass(".popup-overlay");
});

$(".close, .popup").on("click",function(){
  $(".popup, .popup-content").removeClass(".popup-overlay");
});

</script>

</body>
</html>
