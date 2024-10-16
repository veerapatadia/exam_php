<?php

    include "../../config/config.php";
    header("Access-Control-Allow-Methods: PUT,PATCH");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'PATCH'){

        $config = new Config();

        $input = file_get_contents("php://input");
        parse_str($input, $_UPDATE);

        $id = $_UPDATE['id'];
        $type = $_UPDATE['type'];

        $res = $config->updatevehicle($id,$type);

        if($res){
            $arr['data'] = "One vehicle updated successfully...";
        }
        else{
            $arr['data'] = "One vehicle updation failed...";
        }

    }
    else{
        $arr['error'] = "Only PUT or PATCH http request method is allowed";
    }
    echo json_encode($arr);








?>