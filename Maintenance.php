<?php

require_once ("vendor/autoload.php");

class Maintenance {
    public function create($maintenance){
        try{
            $url = "http://localhost:8080/HospitalityResort/maintenance/create/{$maintenance}";
            $request = Requests::get($url, array('Content-type' => 'application/json'));
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }
        var_dump($data);
        exit;
    }

    public function read($id) {

        try{

            $url = "http://localhost:8080/HospitalityResort/maintenance/read/{$id}";
            $request = Requests::get($url, array('Content-type' => 'application/json'));
            $data = json_decode($request->body);
            
        }catch(Exception $e){
            return $e;
        }
        var_dump($data);
        exit;
    }

}

?>