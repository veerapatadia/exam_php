<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $config = new Config();

        $size = $_POST['size'];
        $price = $_POST['price'];

        $res = $config->addparkingspace($size,$price);

        if($res){
            $arr['data'] = "One parking space added successfully...";
        }
        else{
            $arr['data'] = "One parking space addition failed...";
        }

    }
    else{
        $arr['error'] = "Only POST http request method is allowed";
    }
    echo json_encode($arr);








?>