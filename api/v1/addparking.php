<?php

    include "../../config/config.php";
    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $config = new Config();

        $name = $_POST['name'];
        $location = $_POST['location'];
        $total_space = $_POST['total_space'];

        $res = $config->addparking($name,$location,$total_space);

        if($res){
            $arr['data'] = "One parking added successfully...";
        }
        else{
            $arr['data'] = "One parking addition failed...";
        }

    }
    else{
        $arr['error'] = "Only POST http request method is allowed";
    }
    echo json_encode($arr);








?>