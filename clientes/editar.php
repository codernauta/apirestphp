<?php
    header('Access-Control-Allow-Origin: http://localhost:4200');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin,  Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: PUT");

    require_once "../models/Cliente.php";

    $datos = json_decode(file_get_contents('php://input'));
    if($datos != NULL) {
        if($res = Cliente::update($datos->id, $datos->nombre, $datos->ap, $datos->am, $datos->fn, $datos->genero)) {
            echo json_encode(['update' => TRUE]);
        }//end if
        else {
            echo json_encode(['update' => FALSE]);
        }//end else
    }//end if
    else {
        echo json_encode(['update' => FALSE]);
    }//end else