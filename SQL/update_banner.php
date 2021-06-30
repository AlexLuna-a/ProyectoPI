<?php

require_once 'conecta.php';

$link = conecta();

$id = $_REQUEST['id'];
$nombre = $_REQUEST['nombre'];
$file_name = $_FILES['file']['name'];

$update_file = " ";

if (isset($file_name) && strlen($file_name) > 0) {
$file_tmp = $_FILES['file']['tmp_name'];
$cadena = explode('.', $file_name);
$ext = $cadena[1];
$dir = "../files/";
$file_enc = md5_file($file_tmp);
if ($file_name != '') {
    $fileName = "$file_enc.$ext";
    copy($file_tmp, $dir.$fileName);
    $update_file .= ", archivo = '$fileName' ";
}
}



$query = "UPDATE banners SET "
        . " nombre = '$nombre' $update_file "
        . "WHERE id = $id";
$result = mysqli_query($link, $query);

header('Location: ../lista_banners.php');
