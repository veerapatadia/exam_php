<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $config = new Config();

        $id = $_POST['id'];
    
        $res = $config->fetchsingleparkingspace($id);
        $all_parkingspace = [];
        
        if($res){
            $record = mysqli_fetch_assoc($res);
            array_push($all_parkingspace,$record);
            echo json_encode($all_parkingspace);
        }
        else{
            $arr['data'] = "No data";
            echo json_encode($arr);
        }

    }
    else{
        $arr['error'] = "Only POST http request method is allowed";
        echo json_encode($arr);
    }
    

?>