<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $config = new Config();

        $id = $_POST['id'];
    
        $res = $config->fetchsinglevehicle($id);
        $all_vehicle = [];
        
        if($res){
            $record = mysqli_fetch_assoc($res);
            array_push($all_vehicle,$record);
            echo json_encode($all_vehicle);
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