function regresar_admin() {
    //window.history.back();
    window.location.href = "lista_administradores.php";
}
function regresar_product() {
    //window.history.back();
    window.location.href = "lista_productos.php";
}
function logout () {
    location.href("./SQL/logout.php");
}