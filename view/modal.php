<!-- Eliminar Modal-->
    <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Eliminar Estudiante</h4></center>
                </div>
                <div class="modal-body">

				<div class="container-fluid">
          <form action="..\controller\eliminar.php" method="post" enctype="application/x-www-form-urlencoded">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Id Estudiante:</span>
						<input type="text" style="width:350px;" class="form-control" id="eid" disabled="true">
					</div>
          <div class="form-group input-group" style="visibility:hidden; display: none;">
						<span class="input-group-addon" style="width:150px;">Id Estudiante:</span>
						<input type="text" style="width:350px;"  class="form-control" name="ideliminar" id="ideliminar">
					</div>
          <div class="form-group input-group" style="visibility:hidden; display: none;">
            <span class="input-group-addon" style="width:150px;">Id Estudiante:</span>
            <input type="text" style="width:350px;"  class="form-control" name="estudianteEliminar" id="estudianteEliminar">
          </div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Nombre:</span>
						<input type="text" style="width:350px;" class="form-control" disabled="true" name="nombreEstudiante" id="nombreEstudiante">
					</div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-danger ">Eliminar</button>
          </div>
        </form>
				</div>

				</div>

            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Editar Modal-->
    <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Estudiante</h4></center>
                </div>
                <div class="modal-body">

				<div class="container-fluid">
          <form action="..\controller\editarEstudiante.php" method="post" enctype="application/x-www-form-urlencoded">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Id Estudiante:</span>
						<input type="text" style="width:350px;" class="form-control" id="editid" disabled="true">
					</div>
          <div class="form-group input-group" style="visibility:hidden; display: none;">
						<span class="input-group-addon" style="width:150px;">Id Estudiante:</span>
						<input type="text" style="width:350px;"  class="form-control" name="ideditar" id="ideditar">
					</div>
          <div class="form-group input-group" style="visibility:hidden; display: none;">
            <span class="input-group-addon" style="width:150px;">Id Estudiante:</span>
            <input type="text" style="width:350px;"  class="form-control" name="estudianteEditar" id="estudianteEditar">
          </div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Nombre:</span>
						<input type="text" style="width:350px;" class="form-control" require="true"  name="nombreEditar" id="nombreEditar" placeholder="Digite el nombre">
					</div>
          <div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Telefono</span>
						<input type="text" style="width:350px;" class="form-control" required="true" name="telefonoEditar" id="telefonoEditar" placeholder="Digite el telefono">
					</div>
          <div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Direccion</span>
						<input type="text" style="width:350px;" class="form-control" required="true" name="direccionEditar" id="direccionEditar" placeholder="Digite la direccion">
					</div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-success ">Editar</button>
          </div>
        </form>
				</div>

				</div>

            </div>
        </div>
    </div>
<!-- /.modal -->

 <!--ventana modal para agregar un nuevo docente-->
<div class="modal fade bs-example-modal-sm-registrar" id="editar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Regístrate</h2>
        </div>
        <div class="modal-body">
          <form action="registrar.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control2_nombre">Nombre</label>
              <input type="text" name="nombre" class="form-control" id="control2_nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
              <label for="control2_contraseña">DNI</label>
              <input type="text" name="dni" class="form-control" id="control2_contraseña" placeholder="DNI" required>
            </div>
            <div class="form-group">
              <label for="control2_nombre">Telefono</label>
              <input type="text" name="telefono" class="form-control" id="control2_telefono" placeholder="Telefono" required>
            </div>
            <div class="form-group">
              <label for="control2_contraseña">Direccion</label>
              <input type="text" name="direccion" class="form-control" id="control2_direccion" placeholder="Direccion" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Registrar</button>
          </form>
        </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="modalAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Estudiante</h4>
      </div>
      <div class="modal-body">
      <form action="..\controller\registrarEstudiante.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control2_nombre">Nombre</label>
              <input type="text" name="nombre" class="form-control" id="control2_nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
              <label for="control2_telefono">Telefono</label>
              <input type="text" name="telefono" class="form-control" id="control2_telefono" placeholder="telefono" required>
            </div>
            <div class="form-group">
              <label for="control2_direccion">Direccion</label>
              <input type="text" name="direccion" class="form-control" id="control2_direccion" placeholder="direccion" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Registrar</button>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>