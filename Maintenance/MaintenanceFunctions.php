<?php

require_once ("../../vendor/autoload.php");
//"id","fName", "lName","email","facility","phoneNo"
class MaintenanceFunctions {
    
    public function create($id,$fName,$lName,$email,$facility,$phoneNo){
        try{
            $params = array(
                "id" => $id,
                "fName" => $fName,
                "lName" => $lName,
                "email" => $email,
                "facility" => $facility,
                "phoneNo" => $phoneNo
            );
            $url = "http://localhost:8080/HospitalityResort/maintenance/create/maintenanceRegister";
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($params));
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }   
    }

    public function read($id) {
        try{
            $url = "http://localhost:8080/HospitalityResort/maintenance/read/{$id}";
            $request = Requests::get($url, array('Content-type' => 'application/json'));
            $data = json_decode($request->body);           
        }catch(Exception $e){
            return $e;
        }   
        
        echo nl2br("Id:      $data[0] \n\r");
        echo nl2br("Name:    $data[1] \n\r");
        echo nl2br("Surname: $data[2] \n\r");
        echo nl2br("Email:   $data[3].\n\r");
        echo nl2br("Facility:$data[4].\n\r");
        echo nl2br("PhoneNo: $data[5].\n\r");
        ;
                
        exit;
    }

    public function update($id,$fName,$lName,$email,$facility,$phoneNo){
        try{
            $params = array(
                "id" => $id,
                "fName" => $fName,
                "lName" => $lName,
                "email" => $email,
                "facility" => $facility,
                "phoneNo" => $phoneNo
            );
            $url = "http://localhost:8080/HospitalityResort/maintenance/update/maintenanceRegister";
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($params));
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }
    }

    public function delete($id){
        try{
            $url = "http://localhost:8080/HospitalityResort/maintenance/delete/{$id}";
            $request = Requests::get($url, array('Content-type' => 'application/json'));
            $data = json_decode($request->body);           
        }catch(Exception $e){
            return $e;
        }      
    }
}

?>