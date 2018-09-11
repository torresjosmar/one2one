
<div class="container">
  <h2>Listado de Profesor</h2>
  <table class="table">
    <thead>

      <tr>
        <th>Nombres-Apellidos</th>
        <th>Telefono</th>
        <th>Perfil</th>
        <th>Pais</th>

      </tr>
 

    </thead>

     <tbody>
     	 	<?php foreach ($listadoprofesores as $item) { ?>
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

       
      </tr>
           <?php } ?>
  </tbody>
  </table>
</div>
