<?php

//incluimos la conexion a la base de datos
include '..\controller\conexion.php';

//verificamos datos enviados
if (isset($_POST['ideditar']) and isset($_POST['nombreEditar']) and isset($_POST['telefonoEditar'])and isset($_POST['direccionEditar'])){
  //guardamos los datos en varialbes
    $id=pg_escape_string($conexion,$_POST['ideditar']);
    $nombre=pg_escape_string($conexion,$_POST['nombreEditar']);
    $telefono=pg_escape_string($conexion,$_POST['telefonoEditar']);
    $direccion=pg_escape_string($conexion,$_POST['direccionEditar']);
    
    $consulta="UPDATE postgres.proyecto.estudiante SET nombre='".$nombre."', telefono='".$telefono."', direccion='".$direccion."' 
    WHERE id='".$id."'";
    //var_dump($consulta);
    //realziamos la consulta para insertar datos en la bd
    $editar=pg_query($conexion,$consulta) or die ('<p>Error al registrar</p><br>'.pg_result_error ($conexion));
    //redireccionamos a la pagina principal
 
      header ('location: ../');
  

}
else
{
    echo('hola');
}
?>
