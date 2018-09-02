<?php 
	
	//debug($detalle_orden);

	foreach ($info_profesor as $key) {
		$profesor = $key;
	}

	$dias = [0 => 'lunes', 1 => 'martes', 2 => 'miercoles', 3 => 'jueves', 4 => 'viernes', 5 => 'sabado', 6 => 'domingo'];
	$itemdias = $detalle_orden;
	unset($itemdias['idprofesor']);
	unset($itemdias['idalumno']);
	unset($itemdias['curso']);
 ?>

 <div class="row" style="    background: #f2f2f2;">
 	<div class="col-md-6 col-lg-6 col-xl-6" style="padding: 5%;">
 		<h4 class="title-t">Su Reservación</h4>


<div class="row" style="padding: 15px;">
  <div class="col-md-3">   <?php 

                                    	if (is_null($info_profesor[0]->profesor['foto_perfil'])) 
                                    	{
                                    		echo $this->Html->image(
												"user.png", 
												["alt" => "imagen de usuario",
												"class" => "user-profile-picture-orden"
												]
											);
                                    	}

                                    	else
                                    	{
                                    		echo $this->Html->image(
												"perfiles/".$info_profesor[0]->profesor['foto_perfil'], 
												["alt" => "imagen de usuario",
												"class" => "user-profile-picture-orden"]
											);
                                    	}
											
                                        ?>
                                        	
                                        </div>
  <div class="col-md-9" style="    margin-top: 20px;margin-bottom: 30px;">	
  	<p class="title-r"><?php echo $profesor['nombres'].' '.$profesor['apellidos']; ?></p>
  	<p class="title-r">Lección: <?php echo $detalle_orden['curso']; ?></p>
  
  </div>

</div>
 		
 			<hr style="width: 60%;">
 		
 		<h4 class="title-t">Fechas Solicitadas: </h4>
 		<?php 
 			foreach ($itemdias as $row) {
 				$row = explode('_', $row)
 			?>
 				<p><b>Dia: <?php  echo $dias[$row[0]];?></b> <b>Hora: <?php echo ($row[1]+1).':00'; ?></b></p>
 			<?php
 			}

 		 ?>
 		 <hr style="width: 60%;">

 		<h4 style="text-align: left;" class="title-t">Total: 1000$</h4>
<br><br>
 		<h4 style="text-align: left;" class="title-t">Metodo de pago</h4>
 		<div class="row" style="margin-bottom: 3em;">
 			<div class="col-md-6" style="text-align: center;">
 				<?php 
 			echo $this->Html->image("mercadopago-logo.png", 
									["alt" => "Mercadopago",
									"style" => "width: 300px; margin: auto;"
									]);
 		 ?>
 			</div>
 			<div class="col-md-6" style="text-align: center;">
 				<?php 
 			echo $this->Html->image("paypal_PNG23.png", 
									["alt" => "paypal",
									"style" => "width: 300px; margin: auto;"
									]);
 		 ?>
 			</div>
 		</div>
 		
 		 <form action="" method="POST"> 
 		 	<input type="hidden" name="total" value="1000">
 		 	<input type="submit" value="Pagar" style="float: left;" class="btn-wi-3">
 		 </form>
 		

 	</div>

 	<div class="col-md-6 col-lg-6 col-xl-6" style="padding: 6.5%;">
 		<div class="row caja-select-2"> 
  <h1>	Preguntas frecuentes</h1>	
  
  <p class="tit">
¿Podré modificar la fecha de la clase?</p>
<br>
<p class="subtit">
Sí, siempre puede surgir un imprevisto, por lo que podrás modificar el día y la hora de la clase hasta 4 horas antes de empezar.</p>
<p class="tit">
¿Podré cancelar la reserva?</p>
<br>
<p class="subtit">
Sí, podrás cancelar la clase hasta 48 horas antes de su hora de inicio. En caso de quedar menos de 48 horas, podrás modificar el día y hora.</p>
<p class="tit">
¿Cómo se realiza el pago?</p>
<br>
<p class="subtit">
Tienes dos opciones para efectuar el pago: 

- Tarjeta de débito / crédito.
- Paypal.
<br>
No efectuaremos el cargo hasta el día de la clase, exceptuando los bonos dónde se efectúa el cobro en el momento de la compra.
</p>
</div>
 	</div>

 </div>