<?php

require_once 'conecta.php';

$link = conecta();

$nombres = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$encPass = md5($password);
$rol = $_REQUEST['rol'];
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$cadena = explode('.', $file_name);
$ext = $cadena[1];
$dir = "../files/";
$file_enc = md5_file($file_tmp);


if($file_name != ''){
    $fileName = "$file_enc.$ext";
    copy($file_tmp, $dir.$fileName);
}




$query = "INSERT INTO administradores (nombre, apellidos, correo, pass, rol, archivo_n, archivo) "
        . "VALUES ('$nombres', '$apellidos', '$email', '$encPass', $rol, '$file_name', '$fileName' );";
$result = mysqli_query($link, $query);

header('Location: ../lista_administradores.php');
