<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
    //se muestra el contenido de la página web
    header ('location: view/home.php');
?>
<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: view/paginaInicio.php');

}
?>
