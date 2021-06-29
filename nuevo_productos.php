<?php
define('mainJS', '<script type="text/javascript" src="./Assets/JS/forms_productos.js" ></script>');
require_once './Includes/header.php';
?>

<div class="w-75 mt-2">
    <form class="w-75 mx-auto pt-2 px-5 pb-3" id="form" enctype="multipart/form-data">
        <h1 class="mx-auto" id="formTitle">Nuevo producto</h1>
       
         <div class="form-group pb-2">
            <label for="codigo">Codigo</label>
            <input type="text" name="codigo" id="codigo" class="form-control"  placeholder="Ingresa el codigo del producto">
        </div>
        
        <div class="form-group pt-1 pb-2">
            <label for="nombre"> Nombre </label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa el Nombre del producto">
        </div>
       
        
        <label for="descripcion">Descripción</label>
        <div class="form-floating pb-2">
            
            <textarea class="form-control" placeholder="Coloca una breve descripcion de las caracteristicas del producto" id="descripcion" name="descripcion"></textarea>
            
        </div>

        <div class="form-group pb-2">
            <label for="costo">Costo</label>
            <input type="number" name="costo" id="costo" class="form-control"  placeholder="Ingresa el costo del producto" step="0.01">
        </div>

        <div class="form-group pb-2">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control"  placeholder="Ingresa el costo del producto">
        </div>

        <div class="pb-3">
    <label for="file" class="form-label">Imagen</label>
    <input class="form-control" type="file" id="file" name="file">
    </div>
        
        
        <div class="row justify-content-around pt-2">
            <button type="submit" class="btn btn-info col-3" >Añadir</button>
            <button type="button" class="btn btn-dark col-3" onclick="regresar_product(); return false;">Regresar</button>
        </div>
        <div id="alerta" class="mt-1"></div>
    </form>

</div>


</div>
</body>
</html>


