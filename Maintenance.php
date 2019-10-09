<?php

require_once ("vendor/autoload.php");
//"id","fName", "lName","email","facility","phoneNo"
class Maintenance {
    
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
    }

    public function update($id){
        try{

        }catch(Exception $e){
            return $e;
        }
    }
}

?>