<?php 
    require_once("../../Golf/GolfFunctions.php");
?>
    <head>
        <title>Create Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://localhost/practice/PHP/assets/css/style.css">
    </head>
    
    <?php
include '../../Header.php'
?>
<body>
<div class="bg"></div>
<!--"id","fName", "lName","email","facility","phoneNo"-->
<div class="container">
    <h2>
    Create course
    </h2>
    <form method="post" action="#" name="myForm" onsubmit="return validateForm()">
        <div class = "form-group">
        <!--Id-->
        <label>Course ID:</label>
        <input type="text" class="form-control" name="golfID" placeholder="id">
        </div>

        <div class = "form-group">
        <!--First name-->
        <label>Course name:</label>
        <input type="text" class="form-control"  name="golfName" placeholder="fName"> <br>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</div>
</body>
<script>
function validateForm() {
  var x = document.forms["myForm"]["golfID"].value;
  var y = document.forms["myForm"]["golfName"].value;
  if (x == "") {
    alert("ID is required");
    return false;
  }
  if (y == "") {
    alert("Please provide the course name");
    return false;
  }
}
</script>
