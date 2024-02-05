<?php
//incluimos la conexion a la base de datos
include '..\controller\conexion.php';
//verificamos datos enviados
if (isset($_POST['nombre']) and isset($_POST['telefono']) and isset($_POST['direccion'])){
  //guardamos los datos en varialbes
    $nombre=pg_escape_string($conexion,$_POST['nombre']);
    $telefono=pg_escape_string($conexion,$_POST['telefono']);
    $direccion=pg_escape_string($conexion,$_POST['direccion']);
  
    //realziamos la consulta para insertar datos en la bd
    $ingresar=pg_query($conexion,"insert into postgres.proyecto.estudiante (nombre, telefono, direccion)
    values ('".$nombre."','".$telefono."','".$direccion."')") or die 
    ('<p>Error al registrar</p><br>'.pg_result_error ($conexion));
    //redireccionamos a la pagina principal
    header ('location: ../');
}//si no se enviaron datos 
else{
    header ('location: ../');
}
?>
