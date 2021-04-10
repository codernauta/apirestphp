<?php
    header('Access-Control-Allow-Origin: http://localhost:4200');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin,  Content-Type, Accept, Access-Control-Request-Method");

    require_once "../models/Cliente.php";
    
    $datos = json_decode(file_get_contents('php://input'));
    if($datos != NULL) {
        if(Cliente::insert($datos->nombre, $datos->ap, $datos->am, $datos->fn, $datos->genero)) {
            echo json_encode(['insert' => TRUE]);
        }//end if
        else {
            echo json_encode(['insert' => FALSE]);
        }//end else
    }//end if
    else {
        echo json_encode(['insert' => FALSE]);
    }//end else