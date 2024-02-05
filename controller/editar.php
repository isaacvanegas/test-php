<?php

//incluimos la conexion a la base de datos
include 'conexion.php';
//verificamos datos enviados
if (isset($_POST['ideditar']) and isset($_POST['usuarioeditar']) and isset($_POST['editpassword'])){
  //guardamos los datos en varialbes
    $id=pg_escape_string($conexion,$_POST['ideditar']);
    $nombre=pg_escape_string($conexion,$_POST['usuarioeditar']);
    $telefono=pg_escape_string($conexion,$_POST['editpassword']);
    $consulta="UPDATE public.docentes SET telefono='".$telefono."' WHERE Id='".$id."'";
    //realziamos la consulta para insertar datos en la bd
    $editar=pg_query($conexion,$consulta) or die ('<p>Error al registrar</p><br>'.pg_error($conexion));
    //redireccionamos a la pagina principal
 
      header ('location: home.php');
  

}
?>
