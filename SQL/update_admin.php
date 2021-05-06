<?php
require_once 'Conecta.php';
$id = $_REQUEST['id'];
$nombre = $_REQUEST['nombres'];
$apellidos = $_REQUEST['apellidos'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$rol = $_REQUEST['rol'];
$newPass =" ";
$link = conecta();

if(isset($password)&& strlen($password) > 0){
    $encPass = md5($password);
    $newPass = ", pass = '$encPass'";
}

$query = "UPDATE administradores "
        . "SET nombre = '$nombre', apellidos = '$apellidos', "
        . "correo = '$email' $newPass, rol = $rol "
        . "WHERE id = $id;";

$result = mysqli_query($link, $query);
echo $result;


