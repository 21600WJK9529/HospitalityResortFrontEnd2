<?php

require_once ("../../vendor/autoload.php");
//"id","fName", "lName","email","facility","phoneNo"
class GolfFunctions {
    
    public function create($golfID,$golfName){
        try{
            $params = array(
                "golfID" => $golfID,
                "golfName" => $golfName
            );
            $url = "http://localhost:8080/HospitalityResort/golf/create/golfCreate";
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($params));
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }   
    }

    public function read($id) {
        try{
            $url = "http://localhost:8080/HospitalityResort/golf/read/{$id}";
            $request = Requests::get($url, array('Content-type' => 'application/json'));
            $data = json_decode($request->body);           
        }catch(Exception $e){
            return $e;
        }   
        echo nl2br("Id:      $data[0] \n\r");
        echo nl2br("Name:    $data[1] \n\r");
        ;
                
        exit;
    }

    public function update($id,$gName){
        try{
            $params = array(
                "id" => $id,
                "gName" => $gName,
            );
            $url = "http://localhost:8080/HospitalityResort/golf/update/golfRegister";
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($params));
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }
    }

    public function delete($id){
        try{
            $url = "http://localhost:8080/HospitalityResort/golf/delete/{$id}";
            $request = Requests::get($url, array('Content-type' => 'application/json'));
            $data = json_decode($request->body);           
        }catch(Exception $e){
            return $e;
        }      
    }
}

?>