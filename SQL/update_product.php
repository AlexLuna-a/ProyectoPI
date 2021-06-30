<?php

require_once 'conecta.php';

$link = conecta();
$id = $_REQUEST['id'];
$nombre = $_REQUEST['nombre'];
$codigo = $_REQUEST['codigo'];
$descripcion = $_REQUEST['descripcion'];
$costo = $_REQUEST['costo'];
$stock = $_REQUEST['stock'];
$file_name = $_FILES['file']['name'];
$update_files = " ";
if (isset($file_name) && strlen($file_name) > 0) {
    $file_tmp = $_FILES['file']['tmp_name'];
    $cadena = explode('.', $file_name);
    $ext = $cadena[1];
    $dir = "../files/";
    $file_enc = md5_file($file_tmp);
    $fileName = "$file_enc.$ext";
    copy($file_tmp, $dir . $fileName);
    $update_files .= ", archivo_n = '$file_name', archivo = '$fileName' ";
    
}





$query = "UPDATE productos SET "
        . "nombre = '$nombre', codigo = '$codigo', descripcion = '$descripcion', costo = $costo, stock = $stock $update_files "
        . "WHERE id = $id";
$result = mysqli_query($link, $query);
header('Location: ../lista_productos.php');
