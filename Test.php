<html>

    <head>
        <title>Test Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>
<div class="container">
            <h1 style="text-align: center"> Maintenance Create</h1>
            <form method="post" action="#">
            <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" id="id" placeholder="Enter ID">
            </div>
            <div class="form-group">
                <label> First name </label>
                <input type="text" class="form-control" id="fName" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label> Surname </label>
                <input type="text" class="form-control" id="lName" placeholder="Enter surname">
            </div>
            <div class="form-group">
                <label> Email </label>
                <input type="text" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label> Facility </label>
                <input type="text" class="form-control" id="facility" placeholder="Enter facility">
            </div>
            <div class="form-group">
                <label> Phone no. </label>
                <input type="text" class="form-control" id="phoneNo" placeholder="Enter phone number">
            </div>
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

$arr = array (
    "id" => $id,
    "fName" => $fName,
    "lName" => $lName,
    "email" => $email,
    "facility" => $facility,
    "phoneNo" => $phoneNo
);
$obj = new MaintenanceFunctions();
$obj->create($id, $fName, $lName, $email, $facility, $phoneNo);
?>