<?php 
    require_once("vendor/autoload.php");
    require_once("MaintenanceFunctions.php");
?>

<!--"id","fName", "lName","email","facility","phoneNo"-->
<form method="post" action="#">
<!--Id-->
Id: <br>
<input type="text" name="id" placeholder="id"><br>

<!--First name-->
First name: <br>
<input type="text" name="fName" placeholder="fName"> <br>

<!--Surname-->
Last name: <br>
<input type="text" name="lName" placeholder="lName"> <br>

<!--Email-->
Email:<br>
<input type="text" name="email" placeholder="email"> <br>

<!--Facility-->
Facility:<br>
<input type="text" name="facility" placeholder="facility"> <br>

<!--Phone-->
Phone no.: <br>
<input type="text" name="phoneNo" placeholder="phoneNo"> <br>

<button type="submit" id="submit">Submit</button>
</form>

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