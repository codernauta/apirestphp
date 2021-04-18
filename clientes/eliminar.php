<?php
    header('Access-Control-Allow-Origin: http://localhost:4200');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin,  Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: DELETE");

    require_once "../models/Cliente.php";

    if(isset($_GET['id'])){
        if($resultado = Cliente::delete($_GET['id'])) {
            echo json_encode(['delete' => TRUE]);
        }//end if
        else {
            echo json_encode(['delete' => FALSE]);
        }//end else
    }//end if 
    else {
        echo json_encode(['delete' => FALSE]);
    }//end else