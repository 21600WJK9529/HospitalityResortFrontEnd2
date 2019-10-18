<?php
require_once ("../../vendor/autoload.php");
include ("../../Auth/Auth.php");
//"id","fName", "lName","email","facility","phoneNo"
session_start();
class MaintenanceFunctions {
    function create($id,$fName,$lName,$email,$facility,$phoneNo){
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
            $options = array(
                'auth' => new Requests_Auth_Basic('user', 'password')
            );
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($params),$options);
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }   
        
    }

    function read($id) {
        try{
            $url = "http://localhost:8080/HospitalityResort/maintenance/read/{$id}";
            $options = array(
                'auth' => new Requests_Auth_Basic(array('user', 'password'))
            );
            Requests::get($url, array(), $options);
            $request = Requests::get($url, array('Content-type' => 'application/json'), $options);
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
                
        exit;
    }

    function update($id,$fName,$lName,$email,$facility,$phoneNo){
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
            $options = array(
                'auth' => new Requests_Auth_Basic(array('user', 'password'))
            );
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($params),$options);
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }
    }

    function delete($id){
        try{
            $url = "http://localhost:8080/HospitalityResort/maintenance/delete/{$id}";
            $options = array(
                'auth' => new Requests_Auth_Basic(array('user', 'password'))
            );
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($id),$options);
            $data = json_decode($request->body);   
                               
        }catch(Exception $e){
            return $e;
        }      
    }
}

?>