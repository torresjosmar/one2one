<?php 
	if (isset($listadoprofesores)) { // validacion de excepcion para consultas vacias
?>
	
<div class="container">
  <h2>Listado de Profesor</h2>
  <table class="table">
    <thead>

      <tr>
        <th>Nombres-Apellidos</th>
        <th>Telefono</th>
        <th>Perfil</th>
        <th>Pais</th>
        <th></th>

      </tr>
 

    </thead>

     <tbody>
     	 	<?php $cont= 0; foreach ($listadoprofesores as $item) { ?>
      <tr>
      	<td><?php echo $item->profesor['nombres'].' '. $item->profesor['apellidos']; ?></td>
        <td><?php echo $item->profesor['telefono_celular']; ?></td>
       <td>

<?php 


  if (is_null($item->profesor['foto_perfil'])) 
                                      {
                                        echo $this->Html->image(
                        "user.png", 
                        ["alt" => "imagen de usuario",
                        "style" => "width: 50px; height: 50px;border-radius: 136px;"]
                      );
                                      }else 
                                       echo $this->Html->image(
                        "perfiles/".$item->profesor['foto_perfil'], 
                        ["alt" => "imagen de usuario",
                        "style" => "width: 50px; height: 50px;border-radius: 136px;"]
                      ); ?>

    </td>

   <td><?php echo $item->profesor['pais'] ?></td>
   <td>
   		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#profesorm<?php echo $cont; ?>" >
  			Ver Más
		</button>
   </td>
       
      </tr>
           <?php $cont++; } ?>
  </tbody>
  </table>
</div>

<?php
	}
	else
	{
 ?>
 	<h1>Vacio</h1>
 <?php } ?>

<?php $cont= 0; foreach ($listadoprofesores as $item2) { ?>
 <!-- Modal -->
<div class="modal fade" id="profesorm<?php echo $cont; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informacion de usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><b>Nombres:</b> <?php echo $item2->profesor['nombres']; ?></p>
        <p><b>Apellidos:</b> <?php echo $item2->profesor['apellidos']; ?> </p>
        <p><b>Edad:</b> <?php echo $item2->profesor['edad']; ?></p>
        <p><b>Genero:</b> <?php echo $item2->profesor['genero']; ?></p>
        <p><b>Dirección de correo electronico:</b> <?php echo $item2['email']; ?></p>
        <p><b>Teléfono:</b> <?php echo $item2->profesor['telefono_celular']; ?></p>
        <p><b>Especialidades:</b> <?php echo $item2->profesor['especialidad']; ?> </p>
        <p><b>Descripcion:</b> <?php echo $item2->profesor['descripcion']; ?></span></p>

        <?php echo $this->Form->create(); ?>
        	<div class="form-group">
        		<input type="hidden" name="idprofesor" value="<?php echo $item2['idusuario']; ?>">
   				 <label for="accion"><b>¿Que desea hacer?</b></label>
    			 <select class="form-control" id="estado" name="estado" onchange="validacionEnteraste()">
      				<option value="1">Aprobar Cuenta</option>
      				<option value="3">Cuenta spam</option>
    			</select>
  				</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="submit" name="enviar" value="Aceptar" class="btn btn-primary">
      </div>
    </div>
    </form>
  </div>
</div>

<?php $cont++; } ?>

