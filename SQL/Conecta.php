<?php

define("HOST", "localhost");
define("DB", "ProyectoPI");
define("USER_DB", "root");
define("PASS_DB", "");

function conecta(){
    if(!($con =mysqli_connect(HOST, USER_DB, PASS_DB, DB))){
        echo 'Error al conectar al servidor de base de datos';
        exit();
    }
    return $con;
}

