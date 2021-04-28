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
                    <?php while ($admin = mysqli_fetch_assoc($result) ) :?>
                    <tr id="admin<?php echo $admin['id'] ?>">
                        <th scope="row"> <?php echo $admin["id"]?> </th>
                        <td><?php echo $admin["apellidos"].', '.$admin["nombre"]?> </td>
                        <td><?php echo $admin["Correo"]?> </td>
                        <td><?php echo $admin["rol"]?> </td>
                        <td> <a href="" class="btn btn-outline-danger" onclick="eliminarAdmin(<?php echo $admin["id"].', \''.$admin['apellidos'].', '.$admin['nombre'].'\''?> ); return false;" >Eliminar</a> </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <div class="ajax"></div>
    </body>
</html>
