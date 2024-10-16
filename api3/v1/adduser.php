<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $config = new Config();

        $name = $_POST['name'];
        $email = $_POST['email'];

        $res = $config->adduser($name,$email);

        if($res){
            $arr['data'] = "One user added successfully...";
        }
        else{
            $arr['data'] = "One user addition failed...";
        }

    }
    else{
        $arr['error'] = "Only POST http request method is allowed";
    }
    echo json_encode($arr);








?>