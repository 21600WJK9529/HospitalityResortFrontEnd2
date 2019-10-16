<?php 
    require_once("../../Maintenance/MaintenanceFunctions.php");
?>
<head>
        <title>Update Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://localhost/practice/PHP/assets/css/style.css">
    </head>
    <?php
include 'MaintenanceIndex.php'
?>

<div class="bg"></div>
<body>
<!--"id","fName", "lName","email","facility","phoneNo"-->
<div class="container">
    <h2>
    Update maintenance person
    </h2>
    <form method="post" action="#">
        <div class = "form-group">
        <!--Id-->
        <label>ID:</label>
        <input type="text" class="form-control" name="id" placeholder="id">
        </div>

        <div class = "form-group">
        <!--First name-->
        <label>First name:</label>
        <input type="text" class="form-control"  name="fName" placeholder="fName"> <br>
        </div>

        <div class = "form-group">
        <!--Surname-->
        <label>Last name:</label>
        <input type="text" class="form-control" name="lName" placeholder="lName"> <br>
        </div>

        <div class = "form-group">
        <!--Email-->
        <label>Email:</label>
        <input type="text" class="form-control" name="email" placeholder="email"> <br>
        </div>

        <div class = "form-group">
        <!--Facility-->
        <label>Facility:</label>
        <input type="text" class="form-control" name="facility" placeholder="facility"> <br>
        </div>

        <div class = "form-group">
        <!--Phone-->
        <label>Phone no.:</label>
        <input type="text" class="form-control" name="phoneNo" placeholder="phoneNo"> <br>

        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</div>
</body>
<?php
$id = $fName = $lName = $email = $facility = $phoneNo = "";
    
$id = $_POST['id'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['email'];
$facility = $_POST['facility'];
$phoneNo = $_POST['phoneNo'];

$obj = new MaintenanceFunctions();
$obj->update($id, $fName, $lName, $email, $facility, $phoneNo);

?>