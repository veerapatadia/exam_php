<?php

    include "../../config/config.php";
    header("Access-Control-Allow-Methods: PUT,PATCH");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'PATCH'){

        $config = new Config();

        $input = file_get_contents("php://input");
        parse_str($input, $_UPDATE);

        $id = $_UPDATE['id'];
        $name = $_UPDATE['name'];
        $location = $_UPDATE['location'];
        $total_space = $_UPDATE['total_space'];

        $res = $config->updateparking($id,$name,$location,$total_space);

        if($res){
            $arr['data'] = "One parking updated successfully...";
        }
        else{
            $arr['data'] = "One parking updation failed...";
        }

    }
    else{
        $arr['error'] = "Only PUT or PATCH http request method is allowed";
    }
    echo json_encode($arr);








?>