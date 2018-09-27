
<div class="container">
  <h2>Listado de alumnos</h2>
  <table class="table">
    <thead>

      <tr>
        <th>Nombres-Apellidos</th>
        <th>Telefono</th>
        <th>Perfil</th>
        <th>Informacion</th>

      </tr>
 

    </thead>

     <tbody>
     	 	<?php   $cont= 0;  foreach ($listadoalumnos as $item) { ?>
      <tr>
      	<td><?php echo $item->alumno['nombres'].' '. $item->alumno['apellidos']; ?></td>
        <td><?php echo $item->alumno['telefono_celular']; ?></td>
       <td>

<?php 


  if (is_null($item->alumno['foto_perfil'])) 
                                      {
                                        echo $this->Html->image(
                        "user.png", 
                        ["alt" => "imagen de usuario",
                        "style" => "width: 50px; height: 50px;border-radius: 136px;"]
                      );
                                      }else 
                                       echo $this->Html->image(
                        "perfiles/".$item->alumno['foto_perfil'], 
                        ["alt" => "imagen de usuario",
                        "style" => "width: 50px; height: 50px;border-radius: 136px;"]
                      ); ?>

    </td>
<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#profesorm<?php echo $cont; ?>">Información</button></td>
       
      </tr>
           <?php  $cont++; } ?>
  </tbody>
  </table>
</div>

<?php $cont= 0; foreach ($listadoalumnos as $item2) { ?>
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
        <p><b>Nombres:</b> <?php echo $item2->alumno['nombres']; ?></p>
        <p><b>Apellidos:</b> <?php echo $item2->alumno['apellidos']; ?> </p>
        <p><b>Edad:</b> <?php echo $item2->alumno['edad']; ?></p>
        <p><b>Teléfono:</b> <?php echo $item2->alumno['telefono_celular']; ?></p>       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    </form>
  </div>
</div>

<?php $cont++; } ?>