<?php

require_once ("../../vendor/autoload.php");
//"id","fName", "lName","email","facility","phoneNo"
class ReceptionFunctions {
    
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
            $url = "http://localhost:8080/HospitalityResort/reception/create/receptionRegister";
            $options = array(
                'auth' => new Requests_Auth_Basic(array('user', 'password'))
            );
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($params),$options);
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }   
    }

    public function read($id) {
        try{
            $url = "http://localhost:8080/HospitalityResort/reception/read/{$id}";
            $options = array(
                'auth' => new Requests_Auth_Basic(array('user', 'password'))
            );
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($id),$options);
            $data = json_decode($request->body);           
        }catch(Exception $e){
            return $e;
        }   
        
        if(count($data)==6){
            echo "<div style='margin-left:8.5% ; max-width:83%; opacity: 0.93'>";
            echo "<table class='table table-bordered table-dark'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>Name</th>";
            echo "<th>Surname</th>";
            echo "<th>Email</th>";
            echo "<th>Facility</th>";
            echo "<th>PhoneNo</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td>$data[0]</td>";
            echo "<td>$data[1]</td>";
            echo "<td>$data[2]</td>";
            echo "<td>$data[3]</td>";
            echo "<td>$data[4]</td>";
            echo "<td>$data[5]</td>";
            echo "</tr>";
            echo "</tbody>";
            echo "</table>";
            echo "</div>";      
        }else{
            echo "<div style='margin-left:8.5% ; max-width:83%; opacity: 0.93'>";
            echo "<table class='table table-bordered table-dark'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Nothing found</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "</table>";
    }           
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
            $url = "http://localhost:8080/HospitalityResort/reception/update/receptionRegister";
            $options = array(
                'auth' => new Requests_Auth_Basic(array('user', 'password'))
            );
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($params),$options);
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }
    }

    public function delete($id){
        try{
            $url = "http://localhost:8080/HospitalityResort/reception/delete/{$id}";
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