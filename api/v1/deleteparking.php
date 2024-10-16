<?php

    include "../../config/config.php";
    header("Access-Control-Allow-Methods: DELETE");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'DELETE'){

        $config = new Config();

        $input = file_get_contents("php://input");
        parse_str($input, $_DELETE);

        $id = $_DELETE['id'];
    
        $res = $config->deleteparking($id);

        if($res){
            $arr['data'] = "One parking deleted successfully...";
        }
        else{
            $arr['data'] = "One parking deletion failed...";
        }

    }
    else{
        $arr['error'] = "Only DELETE http request method is allowed";
    }
    echo json_encode($arr);








?>