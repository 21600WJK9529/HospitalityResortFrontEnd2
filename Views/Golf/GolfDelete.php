<?php 
    require_once("../../Golf/GolfFunctions.php");
?>
<head>
        <title>Delete Page</title>
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
    Delete course details
    </h2>
    <form method="post" action="#">
        <div class = "form-group">
        <!--Id-->
        <label>Course ID:</label>
        <input type="text" class="form-control" name="id" placeholder="id">
        </div>

        <button type="submit"class="btn btn-primary">Submit</button>
        
    </form>
</div>
</body>

<?php

$obj = new GolfFunctions();
$id = ""; 
$id = $_POST['id'];
$obj->delete($id);

?>