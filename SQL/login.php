<?php
include_once 'conecta.php';

$link = conecta();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$logPass = md5($password);
$query = "SELECT * FROM administradores WHERE correo = '$email' AND pass = '$logPass' AND status = 1 AND eliminado = 0";
$result = mysqli_query($link, $query);
$flag = mysqli_num_rows($result);
if($flag == 1)
{
    
    
    $query = "SELECT * FROM detalle_administradores WHERE correo = '$email'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['backUser'] = $user;

}

echo $flag;




