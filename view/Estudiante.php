<div class="container">
	<div style="height:50px;"></div>
	<div class="well">


	<center><h2>Lista de Estudiantes</h2></center>
    <p align="right">

    <button type="button" style="height: 40px"; class="btn btn-info" data-toggle="modal" data-target="#modalAgregar">+ agregar</button>
    </p>

	<div style="height:10px;"></div>
	<table width="100%" class="table table-striped table-bordered table-hover">
		<thead>
			<th>Id</th>
			<th>Estudiante</th>
            <th>Direccion</th>
            <th>Telefono</th>
			<th>Acciones</th>
		</thead>
		<tbody>
		<?php
     include '..\controller\conexion.php';
      $quer ="select * from postgres.proyecto.estudiante order by estudiante.id";

      $consulta= pg_query($conexion,$quer) or die("error al optener datos");
			while($row=pg_fetch_array($consulta)){
				?>
				<tr>
				<td><span id="Id<?php echo $row['id']; ?>"> <?php echo $row['id']; ?></span></td>
				<td><span id="nombre<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></span></td>
                <td><span id="direccion<?php echo $row['id']; ?>"><?php echo $row['direccion']; ?></span></td>
                <td><span id="telefono<?php echo $row['id']; ?>"><?php echo $row['telefono']; ?></span></td>
				<td style="display:block; margin:auto">
                <button style="padding-left:5px" type="button" class="btn btn-danger eliminar" value="<?php echo $row['id']; ?>">Eliminar</button>
                <button style="margin-left:5px" type="button" class="btn btn-success editar" value="<?php echo $row['id']; ?>">Editar</button></td>
        </tr>
				<?php
			}
		?>
		</tbody>
	</table>
	</div>


</div>

<?php include('..\view\modal.php'); ?>
    <!-- jQuery (Bootstrap) -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    

    <script>
    $(document).ready(function(){
    	$(document).on('click', '.eliminar', function(){
    		var id=$(this).val();
    		var idu=$('#Id'+id).text();
    		var nombre=$('#nombre'+id).text();

    		$('#eliminar').modal('show');
    		$('#eid').val(id);
        $('#ideliminar').val(id);
        $('#estudianteEliminar').val(nombre);
    	$('#nombreEstudiante').val(nombre);
    	});

      $(document).on('click', '.editar', function(){
        var id=$(this).val();
        var idu=$('#Id'+id).text();
        var nombre=$('#nombre'+id).text();
        var telefono=$('#telefono'+id).text();
        var direccion=$('#direccion'+id).text();

        $('#editar').modal('show');
        $('#editid').val(id);
        $('#ideditar').val(id);
        $('#estudianteEditar').val(id);
        $('#nombreEditar').val(nombre);
        $('#telefonoEditar').val(telefono);
        $('#direccionEditar').val(direccion);


      });
    });

    $(document).ready(function(){
     
    });


    </script>