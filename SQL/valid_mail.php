<?php
require_once 'conecta.php';

$email = $_REQUEST['mail'];
$id = $_REQUEST['id'];



$link = conecta();
$query = "SELECT * "
        . "FROM administradores "
        . "WHERE correo = '$email'";
if(isset($id)){
    $query .= "AND id != $id";
}
$query .=';';

    
$result = mysqli_query($link, $query);
echo mysqli_num_rows($result);




