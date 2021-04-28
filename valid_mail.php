<?php
require_once 'conecta.php';

$email = $_REQUEST['mail'];


$link = conecta();
$query = "SELECT * "
        . "FROM administradores "
        . "WHERE correo = '$email';";
$result = mysqli_query($link, $query);
echo mysqli_num_rows($result);



