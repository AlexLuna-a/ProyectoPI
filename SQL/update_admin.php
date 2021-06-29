<?php
session_start();
require_once 'Conecta.php';

$newPass =" ";
$newFile = "";

$link = conecta();
$id = $_REQUEST['id'];
$nombre = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$encPass = md5($password);
$rol = $_REQUEST['rol'];
$file_name = $_FILES['file']['name'];
if(isset($file_name) && strlen($file_name)>0){
    $file_tmp = $_FILES['file']['tmp_name'];
    $cadena = explode('.', $file_name);
    $ext = $cadena[1];
    $dir = "../files/";
    $file_enc = md5_file($file_tmp);
    $fileName = "$file_enc.$ext";
    copy($file_tmp, $dir.$fileName);
    $newFile = ", archivo_n = '$file_name', archivo = '$fileName'";
}


if(isset($password)&& strlen($password) > 0){
    $encPass = md5($password);
    $newPass = ", pass = '$encPass'";
}

$query = "UPDATE administradores "
        . "SET nombre = '$nombre', apellidos = '$apellidos', "
        . "correo = '$email' $newPass, rol = $rol $newFile "
        . "WHERE id = $id;";

$result = mysqli_query($link, $query);


if ($id == $_SESSION['backUser']['id']) {
    $query = "SELECT * FROM detalle_administradores WHERE id = $id";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);
    $_SESSION['backUser'] = $user;
}

header('Location: ../lista_administradores.php');

