<?php
define('mainJS', '<script type="text/javascript" src="./Assets/JS/forms.js" ></script>');
require_once './Includes/header.php';
require_once './SQL/Conecta.php';
$id = $_REQUEST['id'];
$link = conecta();
$query = "SELECT * FROM administradores "
        . "WHERE id = $id";
$result = mysqli_query($link, $query);
$admin = mysqli_fetch_assoc($result);
?>
<div class="w-75 mt-2">
    <form class="w-75 mx-auto pt-2 px-5 pb-3" id="form" enctype="multipart/form-data" >
        <h1 class="mx-auto" id="formTitle">Editar registro</h1>
        <div class="form-group pt-2">

            <input type="text" hidden="hidden" name="id" id="id" value="<?php echo$admin['id']; ?>"/>
        <label for="nombre"> Nombre completo </label>
        <div class="form-row pb-2">
            <div class="col">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa tu(s) Nombre(s)" value="<?php echo$admin['nombre']; ?>">
            </div>
            <div class="col mt-2">
                <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingresa tu(s) Apellido(s)" value="<?php echo$admin['apellidos']; ?>">
            </div>
        </div>
    </div>
        <div class="form-grid pb-2">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control"  placeholder="Ingresa tu email" value="<?php echo$admin['correo']; ?>">
        </div>
        <div class="form-group pb-2">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu Password">
        </div>

        <div class="form-group pb-2">
    <label for="exampleFormControlSelect1">Rol</label>
        <select class="form-control" id="rol" name="rol">
          <option value="0">Elige una opcion</option>
          <option value="1" <?php if($admin['rol']==1) echo 'selected'; ?> >Ejecutivo</option>
          <option value="2" <?php if($admin['rol']==2) echo 'selected'; ?> >Gerente</option>
        </select>
    </div>
    <div class="pb-3">
    <label for="file" class="form-label">Imagen</label>
    <input class="form-control" type="file" id="file" name="file">
    </div>



        <div class="row justify-content-around">
        <button type="submit" class="btn btn-info col-3">Actualizar</button>
        <button type="button" class="btn btn-dark col-3" onclick="regresar_admin(); return false;">Regresar</button>
        </div>
        <div id="alerta" class="mt-3"></div>
    </form>

</div>


</div>
</body>
</html>

