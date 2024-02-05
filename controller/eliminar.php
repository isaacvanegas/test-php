<?php
//incluimos la conexion a la base de datos
include 'conexion.php';
//verificamos datos enviados
if (isset($_POST['ideliminar'])  ){
  //guardamos los datos en varialbes
    $id=pg_escape_string($conexion,$_POST['ideliminar']);
    echo "$id";
     $consulta="delete from public.docentes where id='".$id."'";

    //realziamos la consulta para insertar datos en la bd
  $eliminar=pg_query($conexion,$consulta) or die ('<p>Error al registrar</p><br>'.pg_error($conexion));
    //redireccionamos a la pagina principal
 
     header ('location: home.php');
    }


?>