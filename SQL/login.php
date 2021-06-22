<?php
include_once 'conecta.php';

$link = conecta();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$logPass = md5($password);
$query = "SELECT * FROM administradores WHERE correo = '$email' AND pass = '$logPass' AND status = 1 AND eliminado = 0";

$result = mysqli_query($link, $query);
echo mysqli_num_rows($result);

