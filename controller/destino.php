<?php
//se lee la cookie de sesion
session_start();
//se establece una conexión a la base de datos
include 'conexion.php';
//se validarán los campos si la sesion aún no está abierta

if (empty($_SESSION) and isset($_POST['usuario']) and isset($_POST['password'])){
    //se escaparán caracteres peligrosos
    $nombre_de_usuario= pg_escape_string ($conexion,$_POST['usuario']);
    $contraseña_introducida=pg_escape_string ($conexion,$_POST['password']);
    //se hará la consulta a la base de datos
    $consulta="select* from postgres.login.usuarios where usuario='".$nombre_de_usuario."'";
    //si hubo un resultado

    var_dump($consulta);
    if ($ejecución_de_la_consulta = pg_query($conexion,$consulta)){
        //se obtiene la contraseña registrada
        $contraseña_guardada= pg_fetch_assoc($ejecución_de_la_consulta);
        //se compara la contraseña
        
        $verificar_contraseña = password_verify($contraseña_introducida,$contraseña_guardada['password']);
        
        //si el resultado de la comparación ha sido verdadero
        if ($verificar_contraseña){
            //se asigna la sesión y redirecciona
            $_SESSION['name']=$nombre_de_usuario;
          header ('location: ../view/home.php');
        }//si la contraseña es incorrecta
        else{
           header ('location: ../');
        }
    }//si el usuario no está registrado
    else{
      header ('location: ../');
    }
}//si hay una sesion abierta o no se enviaron datos
else{
    header ('location: ../');
  
}
?>
