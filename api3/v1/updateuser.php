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
        $email = $_UPDATE['email'];

        $res = $config->updateuser($id,$name,$email);

        if($res){
            $arr['data'] = "One user updated successfully...";
        }
        else{
            $arr['data'] = "One user updation failed...";
        }

    }
    else{
        $arr['error'] = "Only PUT or PATCH http request method is allowed";
    }
    echo json_encode($arr);








?>