<?php

require_once 'conecta.php';

$link = conecta();

$nombre = $_REQUEST['nombre'];
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$cadena = explode('.', $file_name);
$ext = $cadena[1];
$dir = "../files/";
$file_enc = md5_file($file_tmp);


if ($file_name != '') {
    $fileName = "$file_enc.$ext";
    copy($file_tmp, $dir.$fileName);
}




$query = "INSERT INTO banners (nombre, archivo) "
        . "VALUES ('$nombre', '$fileName' );";
$result = mysqli_query($link, $query);

header('Location: ../lista_banners.php');
