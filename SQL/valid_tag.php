<?php
require_once 'conecta.php';

$tag = $_REQUEST['tag'];
$id = $_REQUEST['id'];



$link = conecta();
$query = "SELECT * "
        . "FROM banners "
        . "WHERE nombre = '$tag' AND status = 1 AND eliminado = 0 ";
if(isset($id) && $id > 0){
    $query .= " AND id != $id";
}
$query .=';';

    
$result = mysqli_query($link, $query);
echo mysqli_num_rows($result);






