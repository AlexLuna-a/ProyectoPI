<?php

require_once 'conecta.php';

$link = conecta();

$nombres = $_REQUEST['nombres'];
$apellidos = $_REQUEST['apellidos'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$encPass = md5($password);
$rol = $_REQUEST['rol'];


$query = "INSERT INTO administradores (nombre, apellidos, correo, pass, rol) "
        . "VALUES ('$nombres', '$apellidos', '$email', '$encPass', $rol);";
$result = mysqli_query($link, $query);

echo $result;
