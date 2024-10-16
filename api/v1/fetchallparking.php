<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

        $config = new Config();

        $res = $config->fetchallparking();
        $all_parking = [];
        
        while($record = mysqli_fetch_assoc($res)){
            array_push($all_parking,$record);
        }
        echo json_encode($all_parking);

    }
    else{
        $arr['error'] = "Only GET http request method is allowed";
        echo json_encode($arr);
    }
    


?>