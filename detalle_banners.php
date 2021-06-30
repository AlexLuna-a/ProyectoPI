<?php
define('mainJS', ' ');

require_once './SQL/conecta.php';
require_once ('./Includes/header.php');
$id = $_REQUEST['id'];
$link = conecta();
$query = "SELECT * FROM banners WHERE id = $id";
$result = mysqli_query($link, $query);
$banner = mysqli_fetch_assoc($result);
?>


<table class="table w-75 mt-5">
	 <thead>
        <tr>
            <th scope="col" colspan="3" class="heads">Detalle de banner</th>			     
        </tr>
    </thead>
    <tbody>
    	<tr>
    		<td align="center">ID</th>
            <td align="center">Etiqueta</th>
            <td align="center">Estatus</th>
    	</tr>
    	<tr>
    		<td align="center"><?php echo $banner['id'] ?> </td>
    		<td align="center"><?php echo $banner['nombre'] ?> </td>
            <td align="center"><?php echo ($banner['status']==1)?'Activo':'No activo' ?> </td>
    	</tr>
        <th colspan="3" align="center"><img class="d-block mx-auto my-2  " src="files/<?php echo $banner['archivo']?>" height="200" width="600" /></th>
    </tbody>
</table>
<button type="button" class="btn btn-dark " onclick="regresar_banner(); return false;">Regresar</button>