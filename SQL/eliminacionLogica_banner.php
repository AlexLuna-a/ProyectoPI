<?php
require_once 'conecta.php';

$id = $_REQUEST['id'];
$link = conecta();

$query = "UPDATE banners "
       . "SET eliminado = 1 "
       . "WHERE id = $id;";

$res = mysqli_query($link, $query);
echo ($res==true)?1:0;