<?php
define('mainJS', './Assets/JS/lista_administradores.js');
require_once ('./Includes/header.php');
require_once './SQL/conecta.php';
$link = conecta();
$query = 'SELECT * FROM lista_administradores;';
$result = mysqli_query($link, $query);
?>

<table class="table mt-5 w-75">
    <thead>
        <tr>
            <th scope="col">
                <a href="nuevo_administradores.php" class="btn btn-outline-info"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    añadir
                </a></th>
            <th scope="col" colspan="4" class="heads">Lista de administradores</th>			     
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
        <?php while ($admin = mysqli_fetch_assoc($result)) : ?>
            <tr id="admin<?php echo $admin['id'] ?>">
                <th scope="row"> <?php echo $admin["id"] ?> </th>
                <td><?php echo $admin["apellidos"] . ', ' . $admin["nombre"] ?> </td>
                <td><?php echo $admin["Correo"] ?> </td>
                <td><?php echo $admin["rol"] ?> </td>
                <td> 
                    <a href="" class="btn btn-outline-danger" onclick="eliminarAdmin(<?php echo $admin["id"] . ', \'' . $admin['apellidos'] . ', ' . $admin['nombre'] . '\'' ?>); return false;" >

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                        </svg>

                    </a>
                    
                    <a href="detalle_administradores.php?id='<?php echo $admin['id'] ?>' " class="btn btn-outline-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                    </a>
                   
                    <!--
                    <a href="" class="btn btn-outline-warning"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg>
                    </a>

                    -->
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</div>
<div class="ajax"></div>
</body>
</html>
