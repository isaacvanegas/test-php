<?php
//incluimos la conexion a la base de datos
include 'conexion.php';
//verificamos datos enviados
if (isset($_POST['nombre']) and isset($_POST['dni'])and isset($_POST['telefono'])and isset($_POST['direccion'])){
  //guardamos los datos en varialbes
    $nombre=pg_escape_string($conexion,$_POST['nombre']);
    $dni=pg_escape_string($conexion,$_POST['dni']);
    $telefono=pg_escape_string($conexion,$_POST['telefono']);
    $direccion=pg_escape_string($conexion,$_POST['direccion']);
  
   
    //realziamos la consulta para insertar datos en la bd
   // $ingresar=pg_query($conexion,"Insert into public.docentes(nombre,dni,telefono,direccion) values("."$nombre".","."$dni".","."$telefono".","."$direccion".");") or die ('<p>Error al registrar</p><br>'.pg_error($conexion));
    $ingresar=pg_query($conexion,"INSERT INTO public.docentes(nombre, dni, telefono, direccion) VALUES('".$nombre."','".$dni."','".$telefono."','".$direccion."');")
//redireccionamos a la pagina principal
    header ('location: home.php');
}//si no se enviaron datos
else{
    header ('location: home.php');
}
?>
