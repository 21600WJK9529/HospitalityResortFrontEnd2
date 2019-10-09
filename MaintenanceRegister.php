<?php 
    require_once("vendor/autoload.php");
    require_once("Maintenance.php");
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

    //function getDeliveryAddress() {

        /*try{

            $url = "http://localhost:8080/HospitalityResort/maintenance/read/id";
            $request = Requests::get($url, array('Content-type' => 'application/json'));
            $data = json_decode($request->body);
            
        }catch(Exception $e){
            return $e;
        }
        var_dump($data);
        exit;*/
    //}

    $obj = new Maintenance();
    $obj->read('id3');

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
    $obj->create($id, $fName, $lName, $email, $facility, $phoneNo);

    // $data_string = json_encode($arr);
    // var_dump($data_string);

    // $url = 'http://localhost:8080/HospitalityResort/maintenance/create/maintenanceRegister';

    // $curl = curl_init($url);
    // curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
    // curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    // curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    //     'Content-Type: application/json',
    //     'Content-Length: '.strLen($data_string)
    // ));
    // $curl_response = curl_exec($curl);
    // print_r($curl_response);
    // curl_close($curl);
?>