<?php
define('mainJS', '<script type="text/javascript" src="./Assets/JS/forms_banners.js" ></script>');
require_once './Includes/header.php';
require_once './SQL/conecta.php';
$id = $_REQUEST['id'];
$link = conecta();
$query = "SELECT * FROM  banners "
        . "WHERE id = $id";
$result = mysqli_query($link, $query);
$banner = mysqli_fetch_assoc($result);
?>

<div class="w-75 mt-2">
    <form class="w-75 mx-auto pt-2 px-5 pb-3" id="form" enctype="multipart/form-data">
        <h1 class="mx-auto" id="formTitle">Editar banner</h1>
       
        <input type="text" name="id" id="id" hidden="hidden" value="<?php echo $banner['id']; ?>">
         <div class="form-group pb-2">
            <label for="nombre">Etiqueta</label>
            <input type="text" name="nombre" id="nombre" class="form-control"  placeholder="Ingresa una etiqueta para el banner" value="<?php echo $banner['nombre']; ?>" >
        </div>
        

        <div class="pb-3">
    <label for="file" class="form-label">Imagen</label>
    <input class="form-control" type="file" id="file" name="file">
    </div>
        
        
        <div class="row justify-content-around pt-2">
            <button type="submit" class="btn btn-info col-3" >Actualizar</button>
            <button type="button" class="btn btn-dark col-3" onclick="regresar_banner(); return false;">Regresar</button>
        </div>
        <div id="alerta" class="mt-1"></div>
    </form>

</div>


</div>
</body>
</html>


