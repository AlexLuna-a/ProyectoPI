<?php 
session_start();

if(isset($_SESSION['backUser']))
    header('Location: ./bienvenido.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administradores</title>

        <link rel="stylesheet" type="text/css" href="./Assets/css/basics.css">
        <link rel="stylesheet" type="text/css" href="./Assets/css/bootstrap.min.css">
        <script type="text/javascript" src="./Assets/JS/jquery-3.6.0.min.js" ></script>
        <script type="text/javascript" src="./Assets/JS/bootstrap.bundle.min.js" ></script>
        <script type="text/javascript" src="./Assets/JS/login.js" ></script>
        <title></title>
    </head>
    <body>
        <div class="container" align="center">
            <div class="title mt-3">
                <h2 class="mainFont">Sistema de administracion</h2>
            </div>
            <div class="w-75">
    <form class="w-75 mx-auto pt-2 px-5 pb-3" id="form" enctype="multipart/form-data" >
        <h1 class="mx-auto" id="formTitle">Iniciar sesión</h1>
        <div class="form-group pt-2">

        
        <div class="form-grid pb-2">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control"  placeholder="Ingresa tu email">
        </div>
        <div class="form-group pb-2">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu Password">
        </div>

        <div class="row justify-content-around">
        <button type="submit" class="btn btn-info col-3">Ingresar</button>
        </div>
        <div id="alerta" class="mt-3"></div>
    </form>

</div>




        </div>


    </body>
</html>
