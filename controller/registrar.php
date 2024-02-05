<?php
//incluimos la conexion a la base de datos
include 'conexion.php';
//verificamos datos enviados
if (isset($_POST['usuario']) and isset($_POST['password'])){
  //guardamos los datos en varialbes
    $usuario=pg_escape_string($conexion,$_POST['usuario']);
    //la contraseña la mandamos incriptada
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

    //realziamos la consulta para insertar datos en la bd
    $ingresar=pg_query($conexion,"insert into postgres.login.usuarios (usuario, password) 
    values ('".$usuario."','".$contraseña."')") or die 
    ('<p>Error al registrar</p><br>'.pg_result_error ($ingresar));
    //redireccionamos a la pagina principal
    header ('location: ./');
}//si no se enviaron datos 
else{
    header ('location: ./');
}
?>
