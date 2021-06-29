<?php

require_once 'conecta.php';

$link = conecta();

$nombre = $_REQUEST['nombre'];
$codigo = $_REQUEST['codigo'];
$descripcion = $_REQUEST['descripcion'];
$costo = $_REQUEST['costo'];
$stock = $_REQUEST['stock'];
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




$query = "INSERT INTO productos (nombre, codigo, descripcion, costo, stock, archivo_n, archivo) "
        . "VALUES ('$nombre', '$codigo', '$descripcion', $costo, $stock, '$file_name', '$fileName' );";
$result = mysqli_query($link, $query);

    header('Location: ../lista_productos.php');
