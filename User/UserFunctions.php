<?php

require_once ("../../vendor/autoload.php");
//"id","fName", "lName","email","facility","phoneNo"
class userFunctions {
    
    public function create($id,$fName,$lName,$email,$facility,$phoneNo){
        try{
            $params = array(
                "id" => $id,
                "fName" => $fName,
                "lName" => $lName,
                "phoneNo" => $phoneNo
            );
            $url = "http://localhost:8080/HospitalityResort/user/create/userRegister";
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($params));
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }   
    }

    public function read($id) {
        try{
            $url = "http://localhost:8080/HospitalityResort/user/read/{$id}";
            $request = Requests::get($url, array('Content-type' => 'application/json'));
            $data = json_decode($request->body);           
        }catch(Exception $e){
            return $e;
        }   
        
        echo nl2br("Id:      $data[0] \n\r");
        echo nl2br("Name:    $data[1] \n\r");
        echo nl2br("Surname: $data[2] \n\r");
        echo nl2br("PhoneNo: $data[3].\n\r");
        ;
                
        exit;
    }

    public function update($id,$fName,$lName,$email,$facility,$phoneNo){
        try{
            $params = array(
                "id" => $id,
                "fName" => $fName,
                "lName" => $lName,
                "phoneNo" => $phoneNo
            );
            $url = "http://localhost:8080/HospitalityResort/user/update/userRegister";
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($params));
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }
    }

    public function delete($id){
        try{
            $url = "http://localhost:8080/HospitalityResort/user/delete/{$id}";
            $request = Requests::get($url, array('Content-type' => 'application/json'));
            $data = json_decode($request->body);           
        }catch(Exception $e){
            return $e;
        }      
    }
}

?>