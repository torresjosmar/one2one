
<?php 
//$loguser = $this->Auth->user(); // informacion de usuario logeado

	foreach ($info_profesor as $key) {
		$info = $key;
	}
	
	
	             


 ?>


<?php //print_r($horario);
$c1 = 0;
$c2 =  count($horario);
?>
<input type="hidden" id='cantidad' name="" value=<?php echo $c2;?> >
<?php  
if($horario==1){
	echo "no tiene horario";
}else{
foreach ($horario as $key) {

	//echo $key['dia']."_".$key['hora'];
	//echo "<br>";
	
	if(empty($key['alumno_idalumno'])){
		$al = 0;
	}else{
	 $al = $key['alumno_idalumno'];
	}

	?>
<input type="hidden" id=<?php echo $c1;?> name=<?php echo $al;?> value=<?php echo $key['dia']."_".$key['hora'];?> >

<?php $c1++; } 
}?>

    <style type="text/css">


        .Table

        {

            display: table;

        }

        .Title

        {
            display: table-caption;

            text-align: center;

            font-weight: bold;

            font-size: larger;

        }
        .profesor{

            background-color: #03A9F4;
            height: 50px; width: 140px; 
            position: relative;
            display: block;
    
            border-radius: 3px;
            border: 1px solid #3a87ad;
        }

        #nm{
             font-weight: 500;
             text-align: center;
             font-size: 14px;
             line-height: 1.3;
           /* color: #f5f5f5;*/
        }

        #clase{
            height: 50px; width: 140px; 
           position: relative;
    display: block;
    
    border-radius: 3px;
    border: 1px solid #3a87ad;
    /*background-color: #3a87ad;*/
    
        }

        #clase2{
             height: 50px; width: 140px; 
           position: relative;
    display: block;
    
    border-radius: 3px;
    border: 1px solid #3a87ad;
        }
        .Heading

        {

            display: table-row;

            font-weight: bold;

            text-align: center;
            background-color: #b3d4fc;

        }

        .disp{

            height: 60px; width: 150px; background: #a6ed8e;
        }
        .Row

        {

            display: table-row;

        }

        .Cell

        {

            display: table-cell;

         

           
            padding:3px 18px;border-bottom:1px solid #e6e6e6;border-left:1px solid #e6e6e6;background:#f5f5f5;background:-webkit-gradient(linear,left top,left bottom,from(#fbfbfb),to(#f5f5f5));background:-moz-linear-gradient(top,#fbfbfb,#f5f5f5);font-size:13px;width:110px;vertical-align:top;

        }

        .centered
{
    text-align:center;
}

    </style>

    <script type="text/javascript">
    	
    	  $(window).load(function(){
                $('#onload').modal('show');
            });
    </script>
<!--Start Page Content -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">

    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         
        </div>
        <div class="modal-body">
        
Le recordamos a nuestros usuarios que el horario aquí es solo para visualizar las horas de los profesores, una vez hayas elegido esta clase tendrás la opción de seleccionar tu horario, en las horas que aquí se muestran disponibles
        </div>
        <div class="modal-footer" style="    padding: 30px;">
<a href="/selectclase/<?php echo $idprofesor.'-'.$info['nombres']; ?>" style="    padding: 3%;" class="btn-wi-3" id="solictar_clase">Solicitar Clase</a>
        </div>
      </div>

    </div>
</div>

			<div class="page-content" style="    margin-top: 65px;">
		
				<div class="shop-area shop-page bg-white-2">
					<div class="container">
						<div class="row">
							<!--Start Left Side -->
							<div class="col-md-8 left-side-wrap-v1" id="profile-info-container">
							 <a href="http://18.191.211.97/pages/lista"><i class="fas fa-arrow-left"></i> Volver a lista</a>
								<div class="shop-content-area">
									<div class="row">
										<div class="clear">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 profesor-description"> 	
												<?php 
													if($info['descripcion']==null)
													{
														?>
														<p>Contános mas de vos</p>
														<?php
													}
													else
													{
							echo '<h3 style=" float: left;font-size: 19px;color: #666;"   >Presentaciòn</h3>';
							
							echo '<p class="descripcion-prof">'.$info['descripcion'].'</p>';
													}
												?>
												<?php 
													if($info['video_presentacion']!=null || $info['video_presentacion']!='')
													{
														$url = $info['video_presentacion'];
														parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
														?>
														<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $my_array_of_vars['v']; ?>"  allowfullscreen></iframe>
														<?php
													}
													
												?>
												</div>
											
										</div>
									</div>
									<?php if ($formacionacademica !=null) {
									?>

									<hr>
									<div class="row">
										<div class="clear">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
												
												<h3  style=" float: left;font-size: 19px;color: #666;" >Formación</h3><br>

												 <span style="    display: block;
    padding: 4%;
    font-size: 14px;
    font-family: tahoma;">One2One te informa que para acercar la formaciones de tus profesores preferidos, debes mover el cursor por la imagen o ver el PDF cualquiera que sea el caso, para informaciòn màs cercana a tus favoritos.</span>

												<?php 
													if($formacionacademica == null)
													{
														echo '<p>Contános mas de vos</p>';
													}
													else
													{
														?>
														<ul class="item-list-profile">
															<?php
																foreach($formacionacademica as $row)
																{
																	?>
							<li  style="background: #f0f0f0;padding: 10px;margin-bottom: 10px; font-weight: bold;">



															<div class="row">
																<div class="col-md-9"><?php echo $row['descripcion']; ?></div>
																<div class="col-md-3">
																	
																	 <?php if($row["soporte_formacion"]!=""){
                                
                               ?> <?php 
                                 $auxiliar =  explode(".", $row["soporte_formacion"]);
                                if($auxiliar[1]=="pdf"){ ?>
                                    <button type="button" id = "sprt_formacion" style="margin-right: 15px;" class="btn btn-primary edit-proffesor-item btn-wi-4"  id = "<?php echo $row['descripcion']; ?>"
                                        onclick="popup('<?php echo $row["soporte_formacion"];  ?>')" >
                                        Ver PDF
                                    
                                    </button> 
                                      
<?php } ?>

                                    <?php


                         
                                     } ?>



                              <div class="container-enlarge">
    
                                  <?php if($row["soporte_formacion"]!=""){
                                  $auxiliar =  explode(".", $row["soporte_formacion"]);
                                    if($auxiliar[1]!="pdf"){
                                                 echo $this->Html->image(
                        "formaciones/".$row["soporte_formacion"], 
                        ["alt" => "Vista previa",
                        "style" => "width: 150px; height: 100px; float:right;"]
                      );}else{
                                    // echo '<iframe src="http://18.191.211.97/img/formaciones/'+$row['soporte_formacion']+'" width="150" height="100" marginheight="0" marginwidth="0" id="pdf"  
//></iframe>';             

//echo "<iframe  src='http://18.191.211.97/img/formaciones/".$row["soporte_formacion"]."'></iframe>";
                                                 }


                                               } ?>
    <span>
                                  <?php if($row["soporte_formacion"]!=""){
                                  $auxiliar =  explode(".", $row["soporte_formacion"]);
                                    if($auxiliar[1]!="pdf"){
                                                 echo $this->Html->image(
                        "formaciones/".$row["soporte_formacion"], 
                        ["alt" => "Vista previa",
                        "style" => "width: 300px; height: 300px; "]
                      );}else{
                                    // echo '<iframe src="http://18.191.211.97/img/formaciones/'+$row['soporte_formacion']+'" width="150" height="100" marginheight="0" marginwidth="0" id="pdf"  
//></iframe>';             

//echo "<iframe  src='http://18.191.211.97/img/formaciones/".$row["soporte_formacion"]."'></iframe>";
                                                 }


                                               } ?></span>
</div>
																</div>
															</div>

																		
                                   
<?php
                                }
                              ?> 		
															 </li>	
														</ul>
														<?php
													}
												?>
												
											</div>
											
										</div>
									</div>
									<?php
												} ?>
									<?php if ($trayectoria != null) {
									?>

									<hr>
									<div class="row">
										<div class="clear">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
												
												<h3  style=" float: left;font-size: 19px;color: #666;" >Trayectoría</h3><br>

												 <span style="    display: block;
    padding: 4%;
    font-size: 14px;
    font-family: tahoma;">One2One te informa que para acercar la trayectoria de tus profesores preferidos, debes mover el cursor por la imagen o ver el PDF cualquiera que sea el caso, para informaciòn màs cercana a tus favoritos.</span>
												<?php 
													if($trayectoria == null)
													{
														echo '<p>Contános mas de vos</p>';
													}
													else
													{
														?>
														<ul class="item-list-profile">
															<?php
																foreach($trayectoria as $row)
																{
																	?>
																	<li  style="background: #f0f0f0;padding: 10px;margin-bottom: 10px; font-weight: bold;">

<div class="row">
	
	<div class="col-md-9"><?php echo $row['descripcion']; ?></div>
	<div class="col-md-3">
		

																	 <?php if($row["soporte_trayectoria"] !="") { ?> 

                                  <?php  $auxiliar =  explode(".", $row["soporte_trayectoria"]);
                                    if($auxiliar[1]=="pdf"){ ?>
                                     <button type="button" style="margin-right: 15px;" id="sprt_trayect" class="btn btn-primary edit-proffesor-item"  
                                        onclick="popup('<?php echo $row["soporte_trayectoria"];  ?>')" >
                                    <i class="fas fa-info-circle"></i>
                                    </button>

                                        <?php }} ?>

                                        <div class="container-enlarge">
                              
     <?php 
                                        if($row["soporte_trayectoria"]!=""){
                                  $auxiliar =  explode(".", $row["soporte_trayectoria"]);
                                    if($auxiliar[1]!="pdf"){
                                                 echo $this->Html->image(
                        "formaciones/".$row["soporte_trayectoria"], 
                        ["alt" => "Vista previa",
                        "style" => "width: 150px; height: 100px;margin-left: 11px;"]
                      );}} ?>

                      <span>
                         <?php 
                                        if($row["soporte_trayectoria"]!=""){
                                  $auxiliar =  explode(".", $row["soporte_trayectoria"]);
                                    if($auxiliar[1]!="pdf"){
                                                 echo $this->Html->image(
                        "formaciones/".$row["soporte_trayectoria"], 
                        ["alt" => "Vista previa",
                        "style" => "width: 300; height: 300px;margin-left: 11px;"]
                      );}} ?>

                      </span>
                     </div>
                      <?php
                          }
                        ?>

	</div>
</div>
																		
																	

															</li>
														</ul>
														<?php
													}
												?>
											</div>	
										</div>
									</div>
									<?php
									} ?>
									<hr>
									<div class="row">
										<div class="clear">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
												<h3  style=" float: left;font-size: 19px;color: #666;    padding: 18px;" >Mi horario</h3><br>

												<span>Le recordamos a nuestros usuarios que el horario aquí es solo para visualizar las horas de los profesores, una vez hayas elegido esta clase tendrás la opción de seleccionar tu horario, en las horas que aquí se muestran disponibles.</span>
											                        	      <div class="row">
     
 
                    <div class="row" style="padding-top: 42px;">
                        <div class="col-md-12">
                            


    <form id="form1" runat="server">
<div class="row"  style="overflow-y: scroll; height: 30em;" >
    <div class="table table-hover border border-danger">
  <div class="Heading">
                <div class="Cell">
                <p>Hora</p>
                </div>
                 <div class="Cell" id="0">

                <p>Domingo</p>

            </div>
            <div class="Cell" id="1">
                <p>Lunes</p>
                </div>

            <div class="Cell" id="2">

                <p>Martes</p>
            </div>

            <div class="Cell" id="3">

                <p>Miercoles</p>

            </div>

              <div class="Cell" id="5">

                <p>Jueves</p>

            </div>

            <div class="Cell" id="6">

                <p>Viernes</p>

            </div>
             <div class="Cell" id="6">

                <p>Sabado</p>

            </div>
            


        </div>

	<?php $cc=0; 
		for ($i=0; $i< 24; $i++) { 
    		# code...
 		?>

		<div class="Row">

			<div class="Cell">

				<?php $h=$i;echo '<span class="hourempty">'.$h.':00</span>';?>

			</div>
		<?php for ($j=0; $j < 7 ; $j++) { ?>
	
		<?php //if
    		$cc++;
		?>

			<div class="Cell" style=" height: 25px; width: 120px; text-align: center; color: #fff"  id=<?php echo $j."_".$i;?> >
			</div>    
   		<?php    } ?>   

</div>
<?php } ?>


    </div>
</div>
    </form>

            </div>  
                </div>
          	</div>

											</div>	<!--end mi horario-->
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="clear">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
												<h3  style=" float: left;font-size: 19px;color: #666;">Comentarios</h3><br>
												
											</div>	
										</div>
									</div>
									<hr>
								</div>
		
							</div>
							<!--End Left Side -->
							<!--Start Right Side -->
							<div class="col-md-4 right-side-wrap-v1" style="margin-top: 1em;">
								<div class="widget-wrap">
									<aside class="widget widget-categories">
                                        <div style="text-align:center;">
                                        	<br>
                                    <?php 

                                    	if (is_null($info['foto_perfil'])) 
                                    	{
                                    		echo $this->Html->image(
												"user.png", 
												["alt" => "imagen de usuario",
												"class" => "user-profile-picture"]
											);
                                    	}

                                    	else
                                    	{
                                    		echo $this->Html->image(
												"perfiles/".$info['foto_perfil'], 
												["alt" => "imagen de usuario",
												"class" => "user-profile-picture"]
											);
                                    	}
											
                                        ?>
                                        </div>
										<h3 class="widget-title-v2"><?php echo $info['nombres'].' '.$info['apellidos']; ?></h3>
										<div class="widget-content professor-profile">
											<div class="pro-rating star professor-profile	">
																<span class="yes"><i class="fa fa-star"></i></span>
																<span class="yes"><i class="fa fa-star"></i></span>
																<span class="yes"><i class="fa fa-star"></i></span>
																<span class="yes"><i class="fa fa-star"></i></span>
																<span class="yes"><i class="fa fa-star-half-o"></i></span>
											</div>

											<?php 
            									if ($info['especialidad']!=null || $info['especialidad']!='') {
            										?>
            											<h5><b><?php echo $info['especialidad']; ?></b></h5>
            										<?php
            									}
            								 ?>

            								 <div class="pro-rating star">
																	<span>
																		<?php 
																			echo $this->Html->image(
																			"bandera/".$info['pais'].".png", 
																			["alt" => "imagen de usuario",
																			"style" => "margin-top: -3px;     width: 25px; height: 25px;",
																			
																			]
																			);
																		 ?>
																	</span>
																	<span>
																		<i class="fa fa-crown" style="font-size: 20px; color: #ffc73b; margin-left: 5px;" data-toggle="tooltip" title="Profesor Titulado"></i>
																	</span>
																	<span>
																		<i class="fas fa-award" style="font-size: 22px; color: #ffc73b; margin-left: 5px;" data-toggle="tooltip" title="Profesor Certificado"></i>
																	</span>
																</div>
											
											<a href="/selectclase/<?php echo $idprofesor.'-'.'shopcart'; ?>" style="    padding: 3%;" class="btn-wi-3" id="solictar_clase">Solicitar Clase</a>
											
											<?php  if($usuario['id_rol'] == 2){
	             	echo "<script type='text/javascript'>
	document.getElementById('solictar_clase').style.display = 'none';
									</script>"; }?>
										</div>
									</aside>
									
								</div>
							</div>
							<!--End Right Side -->


										<!--Start Right Side -->
							<div class="col-md-4 right-side-wrap-v1" style="margin-top: 20px;    float: right;" >
								<div class="widget-wrap">
									
									<div class="row" style="padding: 7%;">
									
									 <div class="col-md-3"><i class="fas fa-check-circle new"></i>      </div>
      								 <div class="col-md-9"><h5>Garantía de satisfacción</h5>Si no estás satisfecho tras tu primera clase, puedes hacer valer tus clases con otro profesor.</div>
									</div>

									<div class="row" style="padding: 7%;">
									
									 <div class="col-md-3"><i class="fas fa-calendar-alt new"></i>   </div>
      								 <div class="col-md-9"><h5>Cambia la fecha de la clase</h5>Podrás cambiar la fecha de la clase si te surge un imprevisto. Hasta 24 hs antes de la clase.</div>
									</div>

									<div class="row" style="padding: 7%;">
									
									 <div class="col-md-3"><i class="fas fa-star-half-alt new"></i></i>   </div>
      								 <div class="col-md-9"><h5>Evalúa a tu profesor</h5> Luego de cada clase, deberás completar una valoración del desarrollo de la clase. </div>
									</div>

								</div>
							</div>



						</div>
					</div>
				</div>
				<!-- End Small image blog Post area -->
			</div>
		</div>
		<!-- End wrapper --> 

		<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script type="text/javascript">
var hours = [];
var ids = [];
var idg = [];
function sethora(){

var c=0;
var tot = document.getElementById("cantidad").value;	



for (var i = 0; i < 24; i++) {
	for (var j = 0; j <7; j++){
	c++;
	hours[c]=0;
	ids[c]=j+'_'+i;	
}



for(var x = 0; x<tot; x++){
idg[x]= document.getElementById(x).value;

var y = document.getElementById(x).name;
console.log(y); 

var idx = ids.indexOf(idg[x]);
if(y==0){
hours[idx]=1;
document.getElementById(idg[x]).innerHTML = '<span> Libre </span>';	
document.getElementById(idg[x]).style.background= "#c16f6f"; 
}else{
	hours[idx]=2;
document.getElementById(idg[x]).innerHTML = '<span> Reservado </span>';	
document.getElementById(idg[x]).style.background= "#c1c1c1"; 
}

}


}

console.log(idg);

}

window.onload=sethora();
/*function intemclik(id, cont){


if(hours[cont]==0){
document.getElementById(id).style.background= "#bb3b3b"; 
hours[cont]=1;	

}else{
document.getElementById(id).style.background= "#f5f5f5"; 
hours[cont]=0;	

}
console.log(hours);
console.log(ids);

 
}
function reservar(){
var h = hours.length;
for (var i = 0; i<h; i++){
if(hours[i]==1){
  document.getElementById("itemshorario").innerHTML += '<input type="hidden" id="campo" name="'+ids[i]+'" value="'+ids[i]+'" >';

}


}
console.log("reservo");
document.getElementById("formu").submit();

}

*/


function  popup(url){

   window.open( "http://18.191.211.97/img/formaciones/"+url, "Soporte", "width=380,height=500, top=85,left=50");
}




</script>