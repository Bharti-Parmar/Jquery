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
  li{
    list-style: none;
  }
  </style>

</head>
<body>

<div class="container">
  <h2>Jquery select all example</h2>

  <ul>
    <li><input id="selectAll" type="checkbox"><label for="selectAll">Select All</label></li>
    <li><input id="group-1" name="group-1" type="checkbox"><label for="group-1">Women</label></li>
    <li><input id="group-2" name="group-2" type="checkbox"><label for="group-2">Men</label></li>
    <li><input id="group-3" name="group-3" type="checkbox"><label for="group-3">Child</label></li>
    <li><input id="group-4" name="group-4" type="checkbox"><label for="group-4">Spouse</label></li>
  </ul>

</div>


<script>

$("#selectAll").click(function(){
  $("input[type=checkbox]").prop("checked",$(this).prop("checked"));
});

$("input[type=checkbox]").click(function(){
  if(!$(this).prop("checked")){
    $("#selectAll").prop("checked",false);
  }
});

</script>

</body>
</html>
