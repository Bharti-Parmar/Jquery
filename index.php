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
  .card-header {
    background-color: white;
  }
  .card-footer {
    background-color: white;
  }
  /* input[type="text"] {
    border: none;
  }
  textarea{
    border: none;
  } */
  .form-control {
    border: none;
  }
  </style>

</head>
<body>

<div class="container">
  <h2>Js notes card</h2>

  <div class="row">
    <div class="col-md-1">
      <a href="#" data-toggle="tooltip" title="Add Notes" id="add"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add</a>
      <a href="#" data-toggle="tooltip" title="Archive" id="notes">Notes</a>
      <a href="#" data-toggle="tooltip" title="Archive" id="archive">Archive</a>
    </div>
    <div class="col-md-11">
      <div class="row" id="note" style="display: block">
        <div class="col-md-4" >
          <div class="card mt-5">
            <div class="card-header">
              <div class="form-group">
                <input type="text" class="form-control" id="usr" placeholder="Title">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" placeholder="Write Your Note"></textarea>
              </div>
            </div>
            <div class="card-footer">
              <a href="#" data-toggle="tooltip" title="Archive"><i class="fa fa-archive ml-4" aria-hidden="true"></i></a>
              <a href="#" data-toggle="tooltip" title="Trash"><i class="fa fa-trash ml-4" aria-hidden="true"></i></a>
              <a href="#" data-toggle="tooltip" title="Check List"><i class="fa fa-check-square-o ml-4" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div><!-- row 1 -->
      <div class="row" id="archive_note" style="display: none">
        <h3> Archive </h3>
        <a href="#" data-toggle="tooltip" title="Add Notes" id="add_note"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add</a><br>
        <div class="col-md-4">
          <div class="card mt-5">
            <div class="card-header">
              <div class="form-group">
                <input type="text" class="form-control" id="usr" placeholder="Title">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" placeholder="Write Your Note"></textarea>
              </div>
            </div>
            <div class="card-footer">
              <a href="#" data-toggle="tooltip" title="Archive"><i class="fa fa-archive ml-4" aria-hidden="true"></i></a>
              <a href="#" data-toggle="tooltip" title="Trash"><i class="fa fa-trash ml-4" aria-hidden="true"></i></a>
              <a href="#" data-toggle="tooltip" title="Check List"><i class="fa fa-check-square-o ml-4" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div><!-- row 2 -->
    </div><!-- col-md-11 -->
  </div>

</div>


<script>
$("#add").click(function(){
  $("#note").append(' <div class="col-md-4"><div class="card mt-5"><div class="card-header"> <div class="form-group"><input type="text" class="form-control" id="usr" placeholder="Title"> </div></div><div class="card-body"> <div class="form-group"><textarea class="form-control" rows="5" id="comment" placeholder="Write Your Note"></textarea>    </div>  </div>  <div class="card-footer">    <a href="#" data-toggle="tooltip" title="Archive"><i class="fa fa-archive ml-4" aria hidden="true"></i></a><a href="#" data-toggle="tooltip" title="Trash"><i class="fa fa-trash ml-4" aria-hidden="true"></i></a> <a href="#" data-toggle="tooltip" title="Check List"><i class="fa fa-check-square-o ml-4" aria-hidden="true"></i></a> </div></div></div>');
});

$('#archive').click(function()){
  $("add").css("display","none");
  $("note").css("display","none");
  $("archive_note").css("display","block");
}

// function myFunction() {
//   document.getElementById("#add").style.display = "none";
//   document.getElementById("#note").style.display = "none";
//   document.getElementById("#archive_note").style.display = "block";
// }

// $(".hide-btn").click(function(){
//        $("#myDiv").css("display", "none");
//    });
//
//    // Set div display to block
//    $(".show-btn").click(function(){
//        $("#myDiv").css("display", "block");
//    });

$("#add_note").click(function(){
  $("#archive_note").append(' <div class="col-md-4"><div class="card mt-5"><div class="card-header"> <div class="form-group"><input type="text" class="form-control" id="usr" placeholder="Title"> </div></div><div class="card-body"> <div class="form-group"><textarea class="form-control" rows="5" id="comment" placeholder="Write Your Note"></textarea>    </div>  </div>  <div class="card-footer"> <a href="#" data-toggle="tooltip" title="Trash"><i class="fa fa-trash ml-4" aria-hidden="true"></i></a> <a href="#" data-toggle="tooltip" title="Check List"><i class="fa fa-check-square-o ml-4" aria-hidden="true"></i></a> </div></div></div>');
});
</script>

</body>
</html>
