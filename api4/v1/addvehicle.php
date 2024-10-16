<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $config = new Config();

        $type = $_POST['type'];

        $res = $config->addvehicle($type);

        if($res){
            $arr['data'] = "One vehicle successfully...";
        }
        else{
            $arr['data'] = "One vehicle addition failed...";
        }

    }
    else{
        $arr['error'] = "Only POST http request method is allowed";
    }
    echo json_encode($arr);








?>