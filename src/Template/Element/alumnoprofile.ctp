<?php 


//print_r($horario_completo);
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha_actual = date("Y-m-d G:i:s");

//debug($fecha_actual);
 ?>

<?php //echo "horario:  "; 
//debug($horario);
//print_r($pagos);
//exit();
$item_id = 0;
$cantidad_items =  count($horario_completo);
//debug($horario_completo);
?>
<input type="hidden" id='cantidad' name=<?php echo $info_alumno[0]->alumno['idalumno']; ?> value=<?php echo $cantidad_items;?> >

<input type="hidden" id='fecha_actual' name="" value=<?php echo date("d/m/Y G:i:s",strtotime($fecha_actual));  ?>  >


<input type="hidden" id='plan_actual' name="" value=<?php echo $horario[0]['plan'];  ?>  >
<?php 

if($horario_completo==1){
?>
<input type="hidden" id=<?php echo '0';?> name=<?php echo '0';?> value=<?php echo '0';?> >

<?php 
}else{
 	foreach ($horario_completo as $key) {

	
	if(empty($key['alumno_idalumno'])){
		$alumno_id = 0;
    ?>
       
    <input type="hidden" id=<?php echo $item_id;?> class = ""  name=<?php echo $alumno_id;?> value=<?php echo $key['dia']."_".$key['hora'];?> >
<?php  
	}else{
	 $alumno_id = $key['alumno_idalumno'];

	?>
<input type="hidden" id=<?php echo $item_id;?> class = <?php echo date("y-m-d",strtotime($key["fecha_clase"]))."_".$key['plan'];?>  name=<?php echo $alumno_id;?> value=<?php echo $key['dia']."_".$key['hora'];?> >
  <?php 
  }
 

	?>

<?php $item_id++; }

} 



?>

    <style type="text/css">

   .counter{ color: #ff6000;
    font-family: Droid Sans Mono,monospace;
    font-weight:bold;
  font-size: 1.25rem;;
        }
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
        .col-md-3.todo {
    background: #2764a5;
}

.col-md-3.todo.active {
    background: #c72e36;
     box-shadow: 1px 1px 3px 0px #ccc;
}

/* estrellas*/

#form {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}

#form p {
  text-align: center;
}

#form label {
  font-size: 20px;
}

input[type="radio"] {
  display: none;
}

label .estrellas {
  color: grey;
      font-size: 94px;
    text-align: center;
    margin: auto;
    display: initial;
}

.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
}

    </style>
<!--Start Page Content -->
 <div class="azul-linea" style="margin-top: 18px;">
        <ul style="    margin-left: 10%;">
          <li class="das-prof active"><a data-toggle="tab" href="#home"> Mi Perfil</a></li>
          <li class="das-prof"><a data-toggle="tab" href="#menu1">Mis Clases</a></li>
          <li class="das-prof"><a id = '2tab' data-toggle="tab" href="#menu2">Programador de Clases</a></li>
          <li class="das-prof"><a id = '2tab' data-toggle="tab" href="#menu3">Califica tus Profesores</a></li>
        </ul>
      </div>

<div class="tab-content">
              <div id="home" class="tab-pane fade in active">

<div class="contenido">

 


    <div class="row fullwidth">
        <div class="col-sm-8 col-md-8 col-lg-8">
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FotoperfilModal">
                 <i class="fa fa-camera"></i>
            </button>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 center-text">
          <?php 

                                      if (is_null($info_alumno[0]->alumno['foto_perfil'])) 
                                      {
                                        echo $this->Html->image(
                        "user.png", 
                        ["alt" => "imagen de usuario",
                        "style" => " border-radius: 100%;
    display: block;
    width: 300px;
    height: 300px;
    opacity: .9;
    filter: alpha(opacity=90);
    background-repeat: no-repeat;
    background-size: 300px 300px;
    padding: 20px;    display: block;
    text-align: center;
    margin: auto;

"]
                      );
                                      }

                                      else
                                      {
                                        echo $this->Html->image(
                        "perfiles/".$info_alumno[0]->alumno['foto_perfil'], 
                        ["alt" => "imagen de usuario",
                        "style" => " border-radius: 100%;
    display: block;
    width: 300px;
    height: 300px;
    opacity: .9;
    filter: alpha(opacity=90);
    background-repeat: no-repeat;
    background-size: 300px 300px;
    padding: 20px;    display: block;
    text-align: center;
    margin: auto;

"]
                      );
                                      }
                      
                                        ?>
            <p style="padding-right: 30%; text-align: right;"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ProfileModal">
                 <i class="fas fa-pencil-alt"></i>
            </button></p>
            <h3><?php echo $info_alumno[0]->alumno['nombres'].' '.$info_alumno[0]->alumno['apellidos']; ?></h3>
            <h5><?php echo $info_alumno[0]->alumno['telefono_celular']; ?></h5>
            <h5><?php echo $info_alumno[0]->alumno['disciplinafavorita'];?></h5>
            <br><br>
            <?php
                if($info_alumno[0]->alumno['edad'] <= 18)
                {
                ?>
                <h5>Responsable:</h5>
                <h5><?php echo $info_alumno[0]->alumno['nombre_responsable'].' '.$info_alumno[0]->alumno['apellido_responsable']; ?></h5>
                <?php    
                }
            ?> 
            <?php if($horario!=1){ ?>
            <div>
              <h4 style="    color: #666;
    font-size: 16px;
    font-weight: 300;">Próxima clase en vivo en: </h4>

              <div class="container-fluid" style="margin-bottom: 30px;">
                





              <div class="row">
                  <div class= "counter" id="countdown"></div><i class="fa fa-clock-o" aria-hidden="true"></i>
           
    <div class="col-md-1"></div>
      <div class="col-md-1"></div>       
  <div class="col-md-2"><div class= "counter dia" id="countdownD"> </div></div>
  <div class="col-md-2"><div class= "counter hora" id="countdownH"></div></div>
  <div class="col-md-2"> <div class= "counter minuto" id="countdownM"></div></div>
  <div class="col-md-2"> <div class= "counter seg" id="countdownS"></div></div>
  <div class="col-md-1"></div>
    <div class="col-md-1"></div>
    
</div>

 <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-1"></div>
  <div class="col-md-2"><p class="texto-horario"> Días</p> </div>
  <div class="col-md-2"><p class="texto-horario"> Hora</p></div>
  <div class="col-md-2"><p class="texto-horario"> Minutos</p></div>
  <div class="col-md-2"><p class="texto-horario"> Segundos</p></div>
    <div class="col-md-1"></div>
    <div class="col-md-1"></div>
</div>


              </div>
          
            
            
           
           

            </div>
          <?php } ?>
        </div>
       
    </div>


</div> <!--Contenido --></div>

<div id="menu1" class="tab-pane fade" style="padding: 7%;">
             


  <div class="row" >
<b style="    padding-left: 105px;">Clases en estado:</b>
<br>
<small style="padding-left: 105px;">Zona Horaria America/Argentina/Buenos_Aires</small>
<div class="row" style="padding-bottom: 40px;    padding-bottom: 40px;
    padding-left: 212px;
    padding-right: 150px;">
 	
  <div class="col-md-3 active todo" onclick="filtrobtn(3)" style="border: 1px solid #ccc;
    padding: 18px;"><div class="circulo-verde btn" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-  Disponible </div></div>
  <div class="col-md-3 todo" style="border: 1px solid #ccc;
    padding: 18px;"  onclick="filtrobtn(2)"><div class="circulo-azul btn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-  Proximo </div></div>
  <div class="col-md-3 todo" style="border: 1px solid #ccc;
    padding: 18px;" onclick="filtrobtn(1)"> <div class="circulo-amarrillo btn" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -  Por Comenzar </div> </div>
  <div class="col-md-3 todo" style="border: 1px solid #ccc;
    padding: 18px;" onclick="filtrobtn(4)"> <div class="circulo-rojo btn" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -  Ver Todo </div> </div>
  
</div>

   
 <?php 

$dias = [0 => 'Domingo', 1 => 'Lunes', 2 => 'Martes', 3 => 'Miercoles', 4 => 'Jueves', 5 => 'Viernes', 6 => 'Sabado'];  
$cont = 0;
$dia_semana = date("w",strtotime($fecha_actual)); //Sabemos el numero ordinal de dia en una semana
$hora_clase = date("G",strtotime($fecha_actual));
$semana_acutal =  date("W",strtotime($fecha_actual));
$casi = $hora_clase + 1;
$contador=0;
$cantidad_clases=$horario[0]['plan'];
$tipo_plan = $horario[0]['plan'];
$clases_inscritas=0;
$primera_clase = 0;

if($horario!=1){

?>




<?php  
foreach ($horario as $item) {
 $semana_clase = date("W",strtotime($item['fecha_clase']));
 ?>

<?php $cont++; }
} ?>
</div>

<?php  
$mihorario = $horarioalumno;
if ($mihorario != 1) {
       
    unset($mihorario['horario_profesor']);
  
$date = date("Y-m-d");
$fechaclase =  $mihorario['fecha_clase']->i18nFormat('YYY-MM-dd').' '.$mihorario['hora'].':00:00';
$fecha_actual = strtotime(date("d-m-Y H:00:00",time()));
$fecha_entrada = strtotime($fechaclase);


$week = date('W');
$year = date('Y');
for($day=0; $day<7; $day++)
{
   $dias_semana[] = date('Y-m-d', strtotime($year."W".$week.$day))."\n";
}



if ($mihorario['dia'] == date('w')) { // validacion de clases en el mismo dia de la semana

  if ($mihorario['hora'] == date('H')) {//mismo dia misma hora
    $fecha_actual = strtotime(date("Y-m-d H:00:00",time()));
    $fechaclase =  date('d-m-Y').' '.$mihorario['hora'].':00:00';
     $fecha_entrada = strtotime($fechaclase);
      $acumfecha = date('d-m-Y');
  $arrayAux['fecha'] = $acumfecha.' '.$mihorario['hora'].':00:00';
  $arrayAux['hora'] = $mihorario['hora'];
  $arrayAux['flag'] = 1;
  $arrayAux['dia'] = $mihorario['dia'];
  $clases[] = $arrayAux;
  
  for ($i=0; $i < $mihorario['plan']-1 ; $i++) { 
    $fechaclase2 =  strtotime ( $acumfecha."+ 7 days") ;
    $arrayAux['fecha'] = date("d-m-Y",$fechaclase2).' '.$mihorario['hora'].':00:00';
  $arrayAux['flag'] = 3;
    $arrayAux['dia'] = $mihorario['dia'];
  $arrayAux['hora'] = $mihorario['hora'];
  $clases[] = $arrayAux;
    $acumfecha = date("Y-m-d",$fechaclase2);
  }
  }

  if ($mihorario['hora'] < date('H')) { // validacion mismo dia ya paso la hora de la clase mando a siguiente semana
    $fecha_actual = strtotime(date("d-m-Y H:00:00",time()));
    $fechaclase =  date('d-m-y').' '.$mihorario['hora'].':00:00';
     $fecha_entrada = strtotime($fechaclase);
      $acumfecha = date('d-m-Y');

  for ($i=0; $i < $mihorario['plan'] ; $i++) { 
    $fechaclase2 =  strtotime ( $acumfecha."+ 7 days") ;
     $arrayAux['fecha'] = date("d-m-Y",$fechaclase2).' '.$mihorario['hora'].':00:00';
     $arrayAux['hora'] = $mihorario['hora'];
    $arrayAux['dia'] = $mihorario['dia'];
  $arrayAux['flag'] = 3;
  $clases[] = $arrayAux;
    $acumfecha = date("Y-m-d",$fechaclase2);
  }
  }

  if ($mihorario['hora'] > date('H')) { // validacion mismo dia aun no esta en la hora de la clase
    $fecha_actual = strtotime(date("Y-m-d H:00:00",time()));
    $fechaclase =  date('d-m-Y').' '.$mihorario['hora'].':00:00';
     $fecha_entrada = strtotime($fechaclase);
      $acumfecha = date('d-m-Y');
  $arrayAux['fecha'] = $acumfecha.' '.$mihorario['hora'].':00:00';
  $arrayAux['hora'] = $mihorario['hora'];
  $arrayAux['dia'] = $mihorario['dia'];
  $arrayAux['flag'] = 2;
  $clases[] = $arrayAux;
  
  for ($i=0; $i < $mihorario['plan']-1 ; $i++) { 
    $fechaclase2 =  strtotime ( $acumfecha."+ 7 days") ;
     $arrayAux['fecha'] = date("d-m-Y",$fechaclase2).' '.$mihorario['hora'].':00:00';
     $arrayAux['hora'] = $mihorario['hora'];
    $arrayAux['dia'] = $mihorario['dia'];
  $arrayAux['flag'] = 3;
  $clases[] = $arrayAux;
    $acumfecha = date("Y-m-d",$fechaclase2);
  }
  }

}
if ($mihorario['dia'] < date('w')) { // dia antes de la fecha de clases
     $fecha_actual = strtotime(date("d-m-Y H:00:00",time()));
    $fechaclase = $dias_semana[$mihorario['dia']];
     $fecha_entrada = strtotime($fechaclase);
      $acumfecha = $fechaclase;
  for ($i=0; $i < $mihorario['plan'] ; $i++) { 
    $fechaclase2 =  strtotime ( $acumfecha."+ 7 days") ;
     $arrayAux['fecha'] = date("d-m-Y",$fechaclase2).' '.$mihorario['hora'].':00:00';
     $arrayAux['hora'] = $mihorario['hora'];
    $arrayAux['dia'] = $mihorario['dia'];
  $arrayAux['flag'] = 3;
  $clases[] = $arrayAux;
    $acumfecha = date("Y-m-d",$fechaclase2);
  }
}
if ($mihorario['dia'] > date('w')) { // dia despues de la fecha de clases
   $fecha_actual = strtotime(date("d-m-Y H:00:00",time()));
    $fechaclase = $dias_semana[$mihorario['dia']];
     $fecha_entrada = strtotime($fechaclase);
      $acumfecha = $fechaclase;
  $arrayAux['fecha'] = $acumfecha.' '.$mihorario['hora'].':00:00';
  $arrayAux['hora'] = $mihorario['hora'];
  $arrayAux['dia'] = $mihorario['dia'];
  $arrayAux['flag'] = 3;
  $clases[] = $arrayAux;
  
  for ($i=0; $i < $mihorario['plan']-1 ; $i++) { 
    $fechaclase2 =  strtotime ( $acumfecha."+ 7 days") ;
     $arrayAux['fecha'] = date("d-m-Y",$fechaclase2).' '.$mihorario['hora'].':00:00';
     $arrayAux['dia'] = $mihorario['dia'];
     $arrayAux['hora'] = $mihorario['hora'];
  $arrayAux['flag'] = 3;
  $clases[] = $arrayAux;
    $acumfecha = date("Y-m-d",$fechaclase2);
  }
}

//variable $clases ya seteada y configurada para mostrar en el panel de usuario
//flags de horas de clase 
// 1: clase en proceso (hora actual)
// 2: clase proxima a comenzar (mismo dia)
// 3: clase lejos de comenzar
foreach ($clases as $itemclase) {
  if ($itemclase['flag']==1) {
    $claseEnProceso[] = $itemclase;
  }
  if ($itemclase['flag']==2) {
    $clasePorComenzar[] = $itemclase;
  }
  if ($itemclase['flag']==3) {
    $claseProxima[] = $itemclase;
  }
}

?>

<input type="hidden" id='fecha_clase' name="<?php echo $clases[0]['hora']; ?>" value=<?php echo date("m/d/Y",strtotime($clases[0]['fecha']));  ?>  >
<?php 
if (isset($claseEnProceso)) {
?>
  <ul class="list-group" style="padding-left: 10%; width: 90%;">
  <li class="list-group-item list-group-item-success" style="background: #fbf589;">
    <b>Tu Clase el dia</b> <?php echo $dias[$claseEnProceso[0]['dia']] ?>  <b>Fecha:</b> <?php echo $claseEnProceso[0]['fecha'] ?> <b>Hora:</b> <?php echo $claseEnProceso[0]['hora'] ?>:00
    <br>
    <b>Profesor: </b> <?php echo $horarioalumno['profesor_nombres'].' '.$horarioalumno['profesor_apellidos'];; ?>

    <p>
      <a href="<?php echo $this->Url->build([
    "controller" => "usuario",
    "action" => "generarsala",
    $item['prof_sessionid'],
]); ?>" class="btn btn-primary" style="margin-top: 20px; margin-bottom: 0px;">Ver Clase</a>
    </p>
    
  </li>
</ul>
<?php
}

if(isset($clasePorComenzar))
{
?>
  <ul class="list-group" style="padding-left: 10%; width: 90%;">
  <li class="list-group-item list-group-item-success" <?php if(($clasePorComenzar[0]['hora']-date('h')) == 1){echo 'style="background: #fbf589;"';}else{ echo 'style="background: #dff0d8;"'; } ?> >
    <b>Tu Clase el dia</b> <?php echo $dias[$clasePorComenzar[0]['dia']] ?>  <b>Fecha:</b> <?php echo $clasePorComenzar[0]['fecha'] ?> <b>Hora:</b> <?php echo $clasePorComenzar[0]['hora'] ?>:00
    <br>
    <b>Profesor: </b> <?php echo $horarioalumno['profesor_nombres'].' '.$horarioalumno['profesor_apellidos'];; ?>
  </li>
</ul>
<?php  
}

if(isset($claseProxima))
{
?>
  <?php 
    $contProxima = 0;
    foreach ($claseProxima as $itemClaseProxima) {
    ?>

    <ul class="list-group" style="padding-left: 10%; width: 90%;">
      <li class="list-group-item list-group-item-success"  style="background: #d9edf7;">
        <b>Tu Clase el dia</b> <?php echo $dias[ $itemClaseProxima['dia']] ?>  <b>Fecha:</b> <?php echo $itemClaseProxima['fecha'] ?> <b>Hora:</b> <?php echo $itemClaseProxima['hora'] ?>:00
    <br>
    <b>Profesor: </b> <?php echo $horarioalumno['profesor_nombres'].' '.$horarioalumno['profesor_apellidos'];; ?>
      </li>
  </ul>

    <?php
    $contProxima ++;
    }
   ?>
  

<?php
}


}
 ?>



</div>  



<div id="menu2" class="tab-pane fade">
  <div class="row" >
    <h1 style=" padding: 3%;
    text-align: center;
    font-size: 15px;">Tus Reservas</h1>



     
 
                    <div class="row">
                        
                            


    <form id="form1" runat="server">
<div class="row"  style="height: 30em;" >
  <div class="col-md-2"></div>
  <div class="col-md-8">
    
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

      <div class="Cell" style=" height: 25px; width: 120px; text-align: center; color: #fff"  id=<?php echo $j."_".$i;?> onclick="intemclik('<?php echo  $j.'_'.$i; ?>',<?php echo $cc;?>)">
      </div>    
      <?php    } ?>   

</div>
<?php } ?>


    </div>


  </div>
  <div class="col-md-2"></div>
 
</div>
    </form>

           
                </div>
                 <form action="" method="POST" id= "formu">
  	<input type="hidden" name="idprofesorhorario" value="<?php  echo $horario_completo[0]['profesor_idprofesor']; ?>">
    <div id="itemshorario"> 
       
    </div>
    <div class="centered" style="    padding: 3%;">
  <input type="button" class="btn-wi-3" name="enviar" value="GUARDAR HORARIO" onclick="reservar()">
</div>
</form>
</div>

            
  </div> <!--tab-->
               



<div id="menu3" class="tab-pane fade" style="padding: 7%;">


  <div class="container-fluid" style="    border: 1px solid #cccc;
    padding: 1%;
    border-radius: 5px;
    background: #e9e9e9;
    color: #000;
    font-weight: bold;">

   

 <div class="col-md-8">
   
   <div class="foto">
   <?php 

                                        echo $this->Html->image(
                        "user.png", 
                        ["alt" => "imagen de usuario",
                        "style" => "width: 50px; height: 50px;border-radius: 136px;"]
                      );
                                      
   ?> &nbsp;&nbsp;&nbsp; Nombre de profesor
   </div>
 </div>
  <div class="col-md-4" style="margin-top: 10px;"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#calificar">Calificar</a></div>
</div>

</div>

              </div>


<!-- Modal -->
<div id="calificar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Califica tu profesor</h4>
      </div>
      <div class="modal-body">
      
       <form>
  <p class="clasificacion">
    <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label  class="estrellas" for="radio1">★</label><!--
    --><input  id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label class="estrellas" for="radio2">★</label><!--
    --><input  id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label class="estrellas" for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
    --><label class="estrellas" for="radio5">★</label>
  </p>

  <div class="form-group">
  <p>Agrega tu comentario:</p>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>

<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#calificar">Calificar</a>
</form>

      </div>
      <div class="modal-footer">

      </div>
    </div>

  </div>
</div>



</div> <!-- tabs-->





<!-- Modal -->
<div class="modal fade" id="ProfileModal" tabindex="-1" role="dialog" aria-labelledby="ProfileModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         <?php echo $this->Form->create('index', array('type' => 'text')); ?> 
        <h2 style="text-align: center;">Mi Información Personal</h2>
        <div class="row" id="formulario_alumno">
  <div class="col-md-12">
  
  <div class="form-group">
  <label for="sel1">Tu información personal:</label>
    <input type="text" class="form-control" id="alum_nombres" name="alum_nombres"  placeholder="Nombres" value="<?php echo $info_alumno[0]->alumno['nombres']; ?>">

      <input type="hidden" class="form-control" id="alum_id" name="alum_id"  placeholder="id" value="<?php echo $info_alumno[0]->alumno['idalumno']; ?>">
    
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="alum_apellidos" name="alum_apellidos"  placeholder="Apellidos" value="<?php echo $info_alumno[0]->alumno['apellidos']; ?>">
  </div>
  <div class="form-group">
   
    <input type="number" min="3" class="form-control" id="alum_edad" name="alum_edad" placeholder="Edad" value="<?php echo $info_alumno[0]->alumno['edad']; ?>">
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="alum_nombresresponsable" name="alum_nombresresponsable" style="display: none;"  placeholder="Nombre-responsable" value="<?php echo $info_alumno[0]->alumno['nombre_responsable']; ?> " >
  </div>
  <div class="form-group">
    

    <input type="text" class="form-control" id="alum_apellidosresponsable" name="alum_apellidosresponsable" style="display: none;" placeholder="Apellido-responsable" value="<?php echo $info_alumno[0]->alumno['apellido_responsable']; ?>">
  </div> 
  <div class="form-group">
    <input type="text" class="form-control" id="alum_telefonomovil" name="alum_telefonomovil"  placeholder="telefono movil" value="<?php echo $info_alumno[0]->alumno['telefono_celular']; ?>" >
  </div>


  <div class="form-group">
    <label for="sel1">Selecciona tu disciplina favorita:</label>
    <select class="form-control" id="alum_categoria" name="disciplinafavorita">
      <?php
        foreach($infocategorias as $rowcategoria)
        {
          ?>
          <option value="<?php echo $rowcategoria['nombre'].' - '.$rowcategoria->subcategoria['nombre']; ?>"><?php echo $rowcategoria['nombre'].' - '.$rowcategoria->subcategoria['nombre']; ?></option>
          <?php
        }
      ?>
    </select>
  </div>


  <div class="form-group">
  <label for="sel1">Tu Contraseña:</label>
    <input type="password" class="form-control" id="alum_calve" name="alum_clave" placeholder="Contraseña">
    <small>Deja en Blanco si no deseas cambiarla.</small>
  </div>

  <div class="form-group">
    <input type="password" class="form-control" id="alum_calve_confirmar" name="alum_clave_confirmar" placeholder="Confirma tu Contraseña">
  </div>

  <div class="form-group" style="text-align: right;">
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </div>
  </div>
  <?= $this->Form->end() ?>
</div>

                
      </div>
    </div>
  </div>
</div>


<!-- Modal foto de perfil -->

<!-- Modal -->
<div class="modal fade" id="FotoperfilModal" tabindex="-1" role="dialog" aria-labelledby="FotoperfilModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>      </button>
        <div class="row">
      <div class="col-md-6">

  
        
        <?php 

                                      if (is_null($info_alumno[0]->alumno['foto_perfil'])) 
                                      {
                                        echo $this->Html->image(
                                          "user.png", 
                                          ["alt" => "imagen de usuario",
                                          "style" => "width: 250px; height: 250px;border-radius: 136px;"]
                                        );
                                      }

                                      else
                                    {                                   

                                    echo $this->Html->image(
                                    "perfiles/".$info_alumno[0]->alumno['foto_perfil'],
                                    ["alt" => "imagen de usuario",                         "style" => "width:
                                    250px; height: 250px;border-radius: 136px;"]                        );
                                    }?>      

     </div>      

 <div class="col-md-6">         

  <?php            
  echo $this->Form->create('index', array('type' => 'file'));    ?>      
 <?php echo $this->Form->input('file',array( 'type' => 'file', 'label' => ' Actualice su imagen JPG-PNG', 'class' => 'file', 'id' => 'input-b1'));
?>        

 <input type="hidden" name="flag-photo" value="1">     
     <input type="submit" name="send" value="Actualizar" class="btn-success-enviar">       
       <?php           echo $this->Form->end();         ?>   

  </div>  

   </div> <!-- fin de row -->
        

        
                
      </div>
    </div>
  </div>
</div>
<?php 
/*if( $session->read('redireccion')==1){

  echo '<script type="text/javascript">
  document.getElementById("2tab").click();

  
</script>';
$session->write('redireccion', '0');
}*/ ?> 

<script type="text/javascript">
	
var hours = [];
var ids = [];
var idg = [];
var alumnos = [{}];

var id_actual = document.getElementById("cantidad").name;
var clases_actuales=0;
var auxiliar_clases=0;



////////////7
 var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;
////////////
var hora_clase = document.getElementById("fecha_clase").name; 
var fecha_clase = document.getElementById("fecha_clase").value; 
var fecha_actual = document.getElementById("fecha_actual").value; 

var end = new Date(fecha_clase+' '+hora_clase+':00:00');
console.log(fecha_clase+' '+hora_clase);
console.log(end);
var plan_actual = document.getElementById("plan_actual").value;








function sethora(){
var xx=0;
var c=0;
var tot = document.getElementById("cantidad").value;	


  
for (var i = 0; i < 24; i++) {
	for (var j = 0; j <7; j++){
	c++;
	hours[c]=0;
	ids[c]=j+'_'+i;	
}
}
var vacio = document.getElementById(0).value;
if(vacio!=0){
for(var x = 0; x<tot; x++){


idg[x]= document.getElementById(x).value;

var y = document.getElementById(x).name;
var yy = document.getElementById(x).className;
if(y==0){
alumnos[x] = {
  id_pocision: idg[x],
  id_alumno: y,
  fecha_de_clase: ''
};
}else{
  alumnos[x] = {
  id_pocision: idg[x],
  id_alumno: y,
  fecha_de_clase: yy
};
}

console.log(alumnos); 

var idx = ids.indexOf(idg[x]);
if(y==0){
hours[idx]=1;
document.getElementById(idg[x]).innerHTML = '<span> Disponible </span>';	
document.getElementById(idg[x]).style.background= "#c16f6f"; 
}else{
if(y==id_actual){
hours[idx]=3;
  //alumnos[xx] = idg[x]+'_'+y;
document.getElementById(idg[x]).innerHTML = '<span>Seleccionado </span>';	
document.getElementById(idg[x]).style.background= "#1a95cf";
xx++; 
clases_actuales++;
}else{
hours[idx]=2;
  //alumnos[xx] = idg[x]+'_'+y;
document.getElementById(idg[x]).innerHTML = '<span> Reservado </span>';	
document.getElementById(idg[x]).style.background= "#c1c1c1";
 xx++; 

}

}

}
}

console.log("alumno: "+alumnos[0].id_pocision); 
auxiliar_clases = clases_actuales; 

console.log("tamaño alumnos: "+xx);
}

window.onload=sethora();
function intemclik(id, cont){
console.log("auxiliar_clases: "+auxiliar_clases);

//console.log("clases_actuales: "+clases_actuales);



if(hours[cont]==3){

document.getElementById(id).innerHTML = '<span> Disponible </span>';		
document.getElementById(id).style.background= "#c16f6f"; 
hours[cont]=1;	
auxiliar_clases--;
window.confirm("Estás seguro de modificar tu clase?");
}else if(hours[cont]==1){
	if(auxiliar_clases<clases_actuales){
document.getElementById(id).style.background= "#1a95cf"; 
document.getElementById(id).innerHTML = '<span>Seleccionado</span>';	
hours[cont]=3;	
auxiliar_clases++;
window.confirm("Estás seguro de modificar tu clase?");
}
}

//console.log(hours);
//console.log(ids);

 
}
function reservar(){
var h = hours.length;
var valu;
var bandera=0;
for (var i = 0; i<h; i++){
if(hours[i]==1 ){
     valu = ids[i]+'_'+'0'+'_'+' ';
  document.getElementById("itemshorario").innerHTML += '<input type="hidden" id="campo" name="'+ids[i]+'" value="'+valu+'" >';

}else if( hours[i]==2){

  for (var j = 0; j < alumnos.length; j++) {
   if(alumnos[j].id_pocision == ids[i]){
   
valu = alumnos[j].id_pocision+'_'+alumnos[j].id_alumno+'_'+alumnos[j].fecha_de_clase;
//console("valor del alumno: " +valu);
 document.getElementById("itemshorario").innerHTML += '<input type="hidden" id="campo" name="'+ids[i]+'" value="'+valu+'" >';

   } 

  }
 
 
}
else if(hours[i]==3){
 valu = ids[i]+'_'+id_actual+'_'+'cambio'+'_'+plan_actual;
 	bandera = 1;
// console.log(valu);
 document.getElementById("itemshorario").innerHTML += '<input type="hidden" id="campo" name="'+ids[i]+'" value="'+valu+'" >';

}


}
//console.log("reservo");
if(bandera==1){;
document.getElementById("formu").submit();
}else{
	alert("debe seleccionar por lo menos una hora para su clase");
}

}

function filtrobtn(val){


	$(function() {
  
  // elementos de la lista
  var menues = $("div.col-md-3 "); 

  // manejador de click sobre todos los elementos
  menues.click(function() {
     // eliminamos active de todos los elementos
     menues.removeClass("active");
     // activamos el elemento clicado.
     $(this).addClass("active");
  });

});

if(val==1){



	var elements = document.getElementsByClassName('disponible');
		console.log(elements);
		for(var i = 0; i < elements.length; i++){

			elements[i].style.display = "none";

		}

	var elements2 = document.getElementsByClassName('proximo');
		console.log(elements2);
		for(var i = 0; i < elements2.length; i++){


			elements2[i].style.display = "none";

		}	

		var elements3 = document.getElementsByClassName('comenzar');
		console.log(elements3);
		for(var i = 0; i < elements3.length; i++){

			elements3[i].style.display = "block";

		}
	
//document.getElementsByClassName("disponible").style.display = "none";
//document.getElementsByClassName("proximo").style.display = "none";

}else if(val==2){




	var elements = document.getElementsByClassName('disponible');
		console.log(elements);
		for(var i = 0; i < elements.length; i++){

			elements[i].style.display = "none";

		}

	var elements2 = document.getElementsByClassName('comenzar');
		console.log(elements2);
		for(var i = 0; i < elements2.length; i++){

			elements2[i].style.display = "none";

		}		

		var elements3 = document.getElementsByClassName('proximo');
		console.log(elements3);
		for(var i = 0; i < elements3.length; i++){

			elements3[i].style.display = "block";

		}


//	document.getElementsByClassName("disponible").style.display = "none";
//document.getElementsByClassName("comenzar").style.display = "none";
}else if(val==3){

	var elements = document.getElementsByClassName('proximo');
		console.log(elements);
		for(var i = 0; i < elements.length; i++){

			elements[i].style.display = "none";

		}

	var elements2 = document.getElementsByClassName('comenzar');
		console.log(elements2);
		for(var i = 0; i < elements2.length; i++){

			elements2[i].style.display = "none";

		}


	var elements3 = document.getElementsByClassName('disponible');
		console.log(elements3);
		for(var i = 0; i < elements3.length; i++){

			elements3[i].style.display = "block";

		}

				
//document.getElementsByClassName("").style.display = "none";
//document.getElementsByClassName("comenzar").style.display = "none";
}else if(val==4){


var elements = document.getElementsByClassName('proximo');
		console.log(elements);
		for(var i = 0; i < elements.length; i++){

			elements[i].style.display = "block";

		}

	var elements2 = document.getElementsByClassName('comenzar');
		console.log(elements2);
		for(var i = 0; i < elements2.length; i++){

			elements2[i].style.display = "block";

		}


	var elements3 = document.getElementsByClassName('disponible');
		console.log(elements3);
		for(var i = 0; i < elements3.length; i++){

			elements3[i].style.display = "block";

		}

	

}

}
 function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = end;

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdownD').innerHTML = days;
        document.getElementById('countdownH').innerHTML = hours;
        document.getElementById('countdownM').innerHTML = minutes;
        document.getElementById('countdownS').innerHTML = seconds;
    }

    timer = setInterval(showRemaining, 1000);
	
</script>

