<?php
    header('Access-Control-Allow-Origin: http://localhost:4200');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin,  Content-Type, Accept, Access-Control-Request-Method");

    require_once "../models/Cliente.php";

    if(isset($_GET['id'])) {
        echo json_encode(Cliente::getWhere($_GET['id']));
    }//end if
    else {
        echo json_encode(Cliente::getAll());
    }//end else
