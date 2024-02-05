<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body style="background-color:#263745">
<nav class="navbar navbar-default" style="background-color:#0f2332">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Navegacion</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color:#ffffff">Proyecto final</a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm" style="color:#ffffff">Acceder</a></li>
        <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-registrar" style="color:#ffffff">Registrate</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" >
  <div class="header">
   <h2 style="text-align:center;color: #ffffff">Registro e inicio de sesion</h2>
   <h3 style="text-align:center;color: #ffffff">UNIVERSIDAD AUTONOMA DE NICARAGUA UNAN-MANAGUA</h3>
  </div>
  <img src="..\res\marca_institucional_negativa.png" alt="logo UNAN-Managua Negativo" width="30%" height="30%" style="display:block; margin:auto">
<h3 style="text-align:center;color: #ffffff">Ingenieria en sistemas</h3>
<h3 style="text-align:center;color: #ffffff">Programacion web</h3>
<h3 style="text-align:center;color: #ffffff">Proyecto PHP</h3>
</div>
      <!--ventana modal para iniciar sesión-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Iniciar sesión</h2>
        </div>
        <div class="modal-body">
          <form action="..\controller\destino.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control1_nombre">Usuario</label>
              <input type="text" name="usuario" class="form-control" id="control1_nombre" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="control1_contraseña">Contraseña</label>
              <input type="password" name="password" class="form-control" id="control1_contraseña" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Entrar</button>
          </form>
        </div>
    </div>
  </div>
</div>
      <!--ventana modal para registrarse-->
<div class="modal fade bs-example-modal-sm-registrar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Regístrate</h2>
        </div>
        <div class="modal-body">
          <form action="..\controller\registrar.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control2_nombre">Usuario</label>
              <input type="text" name="usuario" class="form-control" id="control2_nombre" placeholder="Nombre usuario" required>
            </div>
            <div class="form-group">
              <label for="control2_contraseña">Contraseña</label>
              <input type="password" name="contraseña" class="form-control" id="control2_contraseña" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Registrar</button>
          </form>
        </div>
    </div>
  </div>
</div>

<footer  style="margin: 0; padding: 10px; position:fixed; bottom:0; height:40px;width:100%">
  <h6 style="color: #ffffff;">From: Isaac Pérez</h6>
</footer>
    <!-- jQuery ( para Bootstrap's) -->
    <script src="../js/jquery.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
