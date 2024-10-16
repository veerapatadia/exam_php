<?php

    include "../../config/config.php";
    header("Access-Control-Allow-Methods: PUT,PATCH");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'PATCH'){

        $config = new Config();

        $input = file_get_contents("php://input");
        parse_str($input, $_UPDATE);

        $id = $_UPDATE['id'];
        $size = $_UPDATE['size'];
        $price = $_UPDATE['price'];

        $res = $config->updateparkingspace($id,$size,$price);

        if($res){
            $arr['data'] = "One parking space updated successfully...";
        }
        else{
            $arr['data'] = "One parking space updation failed...";
        }

    }
    else{
        $arr['error'] = "Only PUT or PATCH http request method is allowed";
    }
    echo json_encode($arr);








?>