<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

        $config = new Config();

        $res = $config->fetchalluser();
        $all_vehicle = [];
        
        while($record = mysqli_fetch_assoc($res)){
            array_push($all_vehicle,$record);
        }
        echo json_encode($all_vehicle);

    }
    else{
        $arr['error'] = "Only GET http request method is allowed";
        echo json_encode($arr);
    }
    


?>