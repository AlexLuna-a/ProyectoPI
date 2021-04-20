<?php
require_once './SQL/conecta.php';
$link = conecta();
$query = 'SELECT * FROM lista_administradores;';
$result = mysqli_query($link, $query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administradores</title>

        <link rel="stylesheet" type="text/css" href="./Assets/css/basics.css">
        <link rel="stylesheet" type="text/css" href="./Assets/css/bootstrap.min.css">

        <script type="text/javascript" src="./Assets/JS/bootstrap.bundle.min.js" ></script>

    </head>
    <body>
        <div class="container pt-5" align="center">
            <div class="title">
                <h1 class="mainFont">Lista de Administradores</h1>
            </div>

            <table class="table w-75">
                <thead>
                    <tr>
                        <th scope="col">
                            <a href="#" class="btn btn-outline-success"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                                añadir
                            </a></th>
                        <th scope="col" colspan="4" class="heads">Administradores</th>			     
                    </tr>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre completo</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($admin = mysqli_fetch_assoc($result) ) :?>
                    <tr>
                        <th scope="row"> <?php echo $admin["id"]?> </th>
                        <td><?php echo $admin["apellidos"].', '.$admin["nombre"]?> </td>
                        <td><?php echo $admin["Correo"]?> </td>
                        <td><?php echo $admin["rol"]?> </td>
                        <td> <a href="#" class="btn btn-outline-danger" >Eliminar</a> </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>



        </div>
        <?php
        ?>
    </body>
</html>
