<?php 
    require_once("vendor/autoload.php");
    require_once("MaintenanceFunctions.php");
?>

<form method="post" action="#">
<!--Id-->
Id: <br>
<input type="text" name="id" placeholder="id"><br>
<button type="submit" id="submit">Submit</button>
</form>

<?php
$obj = new MaintenanceFunctions();
$id = ""; 
$id = $_POST['id'];
$obj->delete($id);

?>