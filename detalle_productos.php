<?php
define('mainJS', ' ');

require_once './SQL/conecta.php';
require_once ('./Includes/header.php');
$id = $_REQUEST['id'];
$link = conecta();
$query = "SELECT * FROM productos WHERE id = $id";
$result = mysqli_query($link, $query);
$product = mysqli_fetch_assoc($result);
?>


<table class="table w-75 mt-5">
	 <thead>
        <tr>
            <th scope="col" colspan="3" class="heads">Detalle de producto</th>			     
        </tr>
    </thead>
    <tbody>
    	<tr>
            <th rowspan="7"><img class="my-2" src="files/<?php echo $product['archivo']?>" height="300" width="300" /></th>
    		<th>ID</th>
                <td align="center"><?php echo $product['id'] ?> </td>
    	</tr>
        <tr>
    		<th>Código</th>
    		<td align="center"><?php echo $product['codigo'] ?> </td>
    	</tr>
    	<tr>
    		<th>Nombre</th>
    		<td align="center"><?php echo $product['nombre'] ?> </td>
    	</tr>
    	<tr>
    		<th>Descripcion</th>
    		<td align="center"><?php echo $product['descripcion'] ?> </td>
    	</tr>
    	<tr>
    		<th>Costo</th>
    		<td align="center">$<?php echo $product['costo']?> MXN </td>
    	</tr>
        <tr>
    		<th>Stock</th>
    		<td align="center"><?php echo $product['stock'] ?> piezas </td>
    	</tr>
        <tr>
    		<th>Estatus</th>
    		<td align="center"><?php echo ($product['status']==1)? 'Activo':'No activo' ?> </td>
    	</tr>
    </tbody>
</table>
<button type="button" class="btn btn-dark " onclick="regresar_product(); return false;">Regresar</button>