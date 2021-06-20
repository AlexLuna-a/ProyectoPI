<?php
define('mainJS', './Assets/JS/nuevo_administradores.js');
require_once ('./Includes/header.php');
require_once './SQL/conecta.php';
$id = $_REQUEST['id'];
$link = conecta();
$query = "SELECT * FROM detalle_administradores WHERE id = $id";
$result = mysqli_query($link, $query);
$admin = mysqli_fetch_assoc($result);
?>


<table class="table w-50 mt-5">
	 <thead>
        <tr>
            <th><img src="files/<?php echo $admin['archivo']?>" height="100" width="100" /></th>
            <th scope="col" class="heads">Detalle de administrador</th>			     
        </tr>
    </thead>
    <tbody>
    	<tr>
    		<th>ID</th>
                <td align="center"><?php echo $admin['id'] ?> </td>
    	</tr>
        <tr>
    		<th>Nombre</th>
    		<td align="center"><?php echo $admin['nombre'] ?> </td>
    	</tr>
    	<tr>
    		<th>Correo</th>
    		<td align="center"><?php echo $admin['correo'] ?> </td>
    	</tr>
    	<tr>
    		<th>Rol</th>
    		<td align="center"><?php echo $admin['rol'] ?> </td>
    	</tr>
    	<tr>
    		<th>Estatus</th>
    		<td align="center"><?php echo $admin['status'] ?> </td>
    	</tr>
    </tbody>
</table>
<button type="button" class="btn btn-dark " onclick="regresar(); return false;">Regresar</button>