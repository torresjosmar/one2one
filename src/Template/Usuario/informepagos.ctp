<div class="container">
  <h2>Saldos</h2>
  <table class="table" style="
      text-align: center;">
    <thead>

      <tr>
        <th>Nombres</th>
        <th>Telefono</th>
        <th>Fecha pago</th>
        <th>Plataforma</th>
        <th>Total Neto</th>
        <th style="    background: #c72e36;color: #fff;">Total Comision</th>
        <th>Total Saldo</th>
        <th>Id de Referencia</th>

      </tr>
 

    </thead>

     <tbody>
     	 	<?php foreach ($pagos as $item) { ?>
      <tr>
      	 <td><?php echo $item->alumno['nombres']; ?></td>
         <td><?php echo $item->alumno['telefono_celular']; ?></td>
         <td><?php echo $item->pagos['fecha_pago']; ?></td>
         <td><?php echo $item->pagos['plataforma']; ?></td>
         <td><?php echo $item->pagos['total_neto']; ?></td>
         <td style="    background: #c72e36;color: #fff;"><?php echo $item->pagos['total_comision']; ?></td>
         <td><?php echo $item->pagos['total_saldo']; ?></td>
         <td><?php echo $item->pagos['idreferencia']; ?></td>
     
      </tr>
           <?php } ?>
  </tbody>
  </table>
</div>
