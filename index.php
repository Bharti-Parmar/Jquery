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
  .inpt{
    margin-left: 20px;
    height: 25px;
    width: 80%;
    border: none;
    border-bottom: 1px solid #f3f3f3;
  }
  ul::-webkit-scrollbar {
    width: 5px;
    max-height: 200px !important;
    overflow-y: hidden;
  }

  ul::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  }

  ul::-webkit-scrollbar-thumb {
    background-color: darkgrey;
    outline: 1px solid slategrey;
  }
  ul{
    max-height: 225px !important;
    overflow-y: auto;
  }
  .popuptext::after{
    position: absolute;
    content: "";
    align: center;
  }
  .popup .show{
    visibilty: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
  }
  @-wbkit-keyframes fadeIn{
    from{
      opacity: 0;
    }
    to{
      opacity: 1;
    }
  }
  @keyframes fadeIn{
    from{
      opacity: 0;
    }
    to{
      opacity: 1;
    }
  }
  </style>

</head>
<body>

<div class="container">
  <h2>Js notes card</h2>

  <div class="row">
    <div class="col-md-12">
      <a href="#" data-toggle="tooltip" title="Add Notes" id="add" ><i class="fa fa-plus-circle" aria-hidden="true"></i>Add</a>
      <a href="#" data-toggle="tooltip" title="Archive" id="notes" class="ml-5">Notes</a>
      <a href="#" data-toggle="tooltip" title="Archive" id="archive" class="ml-5">Archive</a>
    </div>
    <div class="col-md-12">
      <div class="row" id="note" style="display: block">
        <div class="col-md-4" >
          <div class="card mt-5 popup popuptext" onclick="myFunction()">
            <!-- <div class="ch">
              <div class="form-group">
                <input type="text" class="form-control" id="usr" placeholder="Title">
              </div>
            </div><hr> -->
            <!-- <div class="cb"> -->
              <!-- <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" placeholder="Write Your Note"></textarea>
              </div> -->
              <!-- <div class="form-control">
                <ul id="list_item" class="list-unstyled">
                  <li><input type="checkbox" name="checkb"><input type="text" name="txt" class="inpt"></li><br>
                </ul>
              </div> -->
            <!-- </div> -->
            <!-- <span class="popuptext"> -->
              <div class="card-body">
                      <h3 class="card-title">
                        <button type="button" class="close float-right" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <input type="text" class="form-control" id="usr" placeholder="Title">
                      </h3><hr>
                      <p class="card-text mt-4">
                        <ul id="list_item" class="list-unstyled ml-3">
                          <li><input type="checkbox" name="checkb"><input type="text" name="txt" class="inpt"></li><br>
                        </ul>
                      </p>
                      <!-- <a href="#" class="btn btn-outline-light">Outline</a> -->
              </div>
              <div class="card-footer">
                <a href="#" data-toggle="tooltip" title="Archive"><i class="fa fa-archive ml-4" aria-hidden="true"></i></a>
                <a href="#" data-toggle="tooltip" title="Trash"><i class="fa fa-trash ml-4" aria-hidden="true"></i></a>
                <a href="#" data-toggle="tooltip" title="Check List"><i class="fa fa-check-square-o ml-4" aria-hidden="true"></i></a>
              </div>
            <!-- </span> -->
          </div>
        </div>
      </div><!-- row 1 -->
      <!-- <div class="row" id="archive_note" style="display: none">
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
              <div class="form-group" id="note_list">
                <textarea class="form-control" rows="5" id="comment" placeholder="Write Your Note"></textarea>
              </div>
              <div class="form-control" id="list_item" style="display:none;">
                <ul>
                  <li><input type="checkbox" name="checkb"></li>
                </ul>
              </div>
            </div>
            <div class="card-footer">
              <a href="#" data-toggle="tooltip" title="Archive"><i class="fa fa-archive ml-4" aria-hidden="true"></i></a>
              <a href="#" data-toggle="tooltip" title="Trash"><i class="fa fa-trash ml-4" aria-hidden="true"></i></a>
              <a href="#" data-toggle="tooltip" title="Check List" onclick="check()"><i class="fa fa-check-square-o ml-4" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div> -->
      <!-- row 2 -->
    </div><!-- col-md-11 -->
  </div>

</div>


<script>
$("#add").click(function(){
  $("#note").append(' <div class="col-md-4"><div class="card mt-5"><div class="card-header"> <div class="form-group"><input type="text" class="form-control" id="usr" placeholder="Title"> </div></div><div class="card-body"> <div class="form-group"><textarea class="form-control" rows="5" id="comment" placeholder="Write Your Note"></textarea>    </div>  </div>  <div class="card-footer">    <a href="#" data-toggle="tooltip" title="Archive"><i class="fa fa-archive ml-4" aria hidden="true"></i></a><a href="#" data-toggle="tooltip" title="Trash"><i class="fa fa-trash ml-4" aria-hidden="true"></i></a> <a href="#" data-toggle="tooltip" title="Check List"><i class="fa fa-check-square-o ml-4" aria-hidden="true"></i></a> </div></div></div>');
});


// $('#archive').click(function()){
//   $("add").css("display","none");
//   $("note").css("display","none");
//   $("archive_note").css("display","block");
// }

// function check(){
//   // $('#note_list').css("display","none");
//   // $('#list_item').css("display","block");
// }

$( "#list_item" ).keypress(function() {
  $('#list_item').append('<li><input type="checkbox" name="checkb"><input type="text" name="txt" class="inpt"></li><br>');
});

// $("ul").click(function(){
$("li").prop("checked",$(this).prop("checked"));
  if(!$(this).prop("checked")){
    $("fa-trash").click(function(){
      $("li").prop("checked",$(this).prop("checked")).remove();
    });
  }

$(".close").click(function(){
  $(".card").remove();
});


function myFunction(){
  var popup = document.getElementsById('popup');
  popup.classList.toggle("show");
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
