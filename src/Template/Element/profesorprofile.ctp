<?php 
//echo "usuario: ";
//print_r($current_user);
// seteo de categorias en array separado

date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha_actual = date("Y-m-d G:i:s");
//echo $fecha_actual;
//debug($fecha_actual);
//exit(); 

$session = $this->request->session();
//debug($redireccion);
//echo $nombres_horario[0]['nombre_alumno'];
  //   exit();
//debug($nombres_horario);
$idcategoria = 0;
$categorias;
//echo $agrego_horario;
foreach ($especialidades as $itemrow) {
  //echo $itemrow->subcategoria['nombre'];
  if($itemrow['idcategoria']!= $idcategoria) {
    $row['idcategoria'] = $itemrow['idcategoria'];
    $row['nombre'] = $itemrow['nombre'];
    $categorias[] = $row;
    $idcategoria = $itemrow['idcategoria'];
    unset($row);

  } 
}

?> 

<input type="hidden" id='fecha_actual' name="" value=<?php echo date("d/m/Y G:i:s",strtotime($fecha_actual));  ?>  >
<?php 
$item_id = 0;
$cantidad_items =  count($horario);
?>
<input type="hidden" id='cantidad' name="" value=<?php echo $cantidad_items;?> >
<?php 

if($horario==1){
?>
<input type="hidden" id=<?php echo '0';?> name=<?php echo '0';?> value=<?php echo '0';?> >

<?php 
}else{
  foreach ($horario as $key) {

  //echo $key['dia']."_".$key['hora'];
  //echo "<br>";
  
  if(empty($key['alumno_idalumno'])){
    $alumno_id = 0;
    ?>
    <input type="hidden" id=<?php echo $item_id;?> class = ""  name=<?php echo $alumno_id;?> value=<?php echo $key['dia']."_".$key['hora'];?> >
    <?php  
  }else{
   $alumno_id = $key['alumno_idalumno'];
  
?>
<input type="hidden" id=<?php echo $item_id;?> class = <?php echo date("y-m-d",strtotime($key["fecha_clase"]))."_".$key['plan'];?>  name=<?php echo $alumno_id;?> value=<?php echo $key['dia']."_".$key['hora'];?> >
 <?php   }
 

  ?>


<?php $item_id++; }

} ?>
    <style type="text/css">
 .counter{ color: #ff6000;
    font-family: Droid Sans Mono,monospace;
    font-weight:bold;
  font-size: 1rem;;
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

label .estrellas{
  color: grey;
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
      <div class="page-content" style="    margin-top: 18px;">
      <div class="azul-linea">
        <ul style="    margin-left: 10%;">
          <li id = "0tab" class="das-prof active"><a data-toggle="tab" href="#home"> Mi Perfil</a></li>
          <li  class="das-prof"><a data-toggle="tab" href="#menu1">Mis Alumnos</a></li>
          <li id = "2" class="das-prof"><a id = '2tab' data-toggle="tab"  href="#menu2">Clases Programadas</a></li>
          <li class="das-prof"><a data-toggle="tab" href="#menu3">Saldos</a></li>
        </ul>
      </div>
<?php 

$flaghorario = 0;
if ($horario!= 1) {
  foreach ($horario as $keyhorario) 
{
  if ($keyhorario['alumno_idalumno'] != 0) 
  {
      $flaghorario = 1; 
  }
}

}

if($horario!=1 && $flaghorario == 1){
?>
          <h4 style="    color: #666;
    font-size: 16px;
    font-weight: 300;padding: 3%;font-weight: bold;">Próxima clase en vivo en: </h4>

              <div class="container-fluid">
              


              <div class="row">
                  <div class= "counter" id="countdown"></div><i class="fa fa-clock-o" aria-hidden="true"></i>
           
    <div class="col-md-1"></div>
      <div class="col-md-1"></div>       
  <div class="col-md-2"><div class= "counter dia" id="countdownD" style="margin-bottom: 20px"> </div></div>
  <div class="col-md-2"><div class= "counter hora" id="countdownH" style="margin-bottom: 20px"></div></div>
  <div class="col-md-2"> <div class= "counter minuto" id="countdownM" style="margin-bottom: 20px"></div></div>
  <div class="col-md-2"> <div class= "counter seg" id="countdownS" style="margin-bottom: 20px"></div></div>
  <div class="col-md-1"></div>
    <div class="col-md-1"></div>
    
</div>

 <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-1"></div>
  <div class="col-md-2"><p class="texto-horario" style="margin-bottom: 20px"> Días</p> </div>
  <div class="col-md-2"><p class="texto-horario" style="margin-bottom: 20px"> Hora</p></div>
  <div class="col-md-2"><p class="texto-horario" style="margin-bottom: 20px"> Minutos</p></div>
  <div class="col-md-2"><p class="texto-horario" style="margin-bottom: 20px"> Segundos</p></div>
    <div class="col-md-1"></div>
    <div class="col-md-1"></div>
</div>


              </div>
          

<?php } ?>
        <div class="shop-area shop-page bg-white-2">
          <div class="container">
            <div class="row">
                
              <!--Start Left Side -->
              <div class="col-md-8 left-side-wrap-v1" id="profile-info-container">

              <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
              <h3  style=" float: left;font-size: 19px;color: #666;">Presentaciòn</h3>
                <div class="shop-content-area">
                  <div class="row">
                    <div class="clear">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 profesor-description">
                        <button type="button" class="btn btn-primary edit-proffesor-item" data-toggle="modal" data-target="#profesor_descripcion">
                                  <i class="fas fa-pencil-alt"></i>
                        </button>
                        <?php 
                          if($info_profesor[0]->profesor['descripcion']==null)
                          {
                            ?>
                            <p>Contános mas de vos</p>
                            <?php
                          }
                          else
                          {


                            echo '<p class="descripcion-prof">'.$info_profesor[0]->profesor['descripcion'].'</p>';
                          }
                        ?>
                        <?php 
                          if($info_profesor[0]->profesor['video_presentacion']!=null || $info_profesor[0]->profesor['video_presentacion']!='')
                          {
                            $url = $info_profesor[0]->profesor['video_presentacion'];
                            parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
                            ?>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $my_array_of_vars['v']; ?>"  allowfullscreen></iframe>
                            <?php
                          }
                          
                        ?>
                        </div>
                      
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="clear">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                        <button type="button" class="btn btn-primary edit-proffesor-item" data-toggle="modal" data-target="#profesor_formacion">
                                  <i class="fas fa-pencil-alt"></i>
                              </button>
                        <h3>Formación</h3>

                        <span style="    display: block;
    padding: 4%;
    font-size: 14px;
    font-family: tahoma;">One2One te informa que para acercar la formaciones de tus profesores preferidos, debes mover el cursos por la imagen o ver el PDF cualquiera que sea el caso, para informaciòn màs cercana a tus favoritos.</span>
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
                                    <button type="button" id = "sprt_formacion" class="btn btn-primary edit-proffesor-item btn-wi-4"  id = "<?php echo $row['descripcion']; ?>"
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
                  <hr>
                  <div class="row">
                    <div class="clear">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                        <button type="button" class="btn btn-primary edit-proffesor-item" data-toggle="modal" data-target="#profesor_trayectoria">
                                  <i class="fas fa-pencil-alt"></i>
                              </button>
                        <h3>Trayectoría</h3>
                           <span style="    display: block;
    padding: 4%;
    font-size: 14px;
    font-family: tahoma;">One2One te informa que para acercar la formaciones de tus profesores preferidos, debes mover el cursos por la imagen o ver el PDF cualquiera que sea el caso, para informaciòn màs cercana a tus favoritos.</span>
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
                  <hr>
                  <div class="row">
                    <div class="clear">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                        <h3>Opiniones de nuestros alumnos</h3>

         
               
                        <div class="caja-comentarios" style="    margin-bottom: 90px;">
                        	<form>
  <p class="clasificacion">
    <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label class="estrellas" for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label class="estrellas" for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label class="estrellas" for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label class="estrellas" for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
    --><label class="estrellas" for="radio5">★</label>
  </p>
</form>

<p>

<?php  
                     echo $this->Html->image(
                        "user.png", 
                        ["alt" => "imagen de usuario",
                        "style" => "width: 50px; height: 50px;"]
                      );
                                     ?><span style="    width: 80%;
    display: block;
    float: right;
    position: relative;">

<strong style="text-transform: uppercase"> </strong>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id ultrices lacus. Proin vitae augue neque. Quisque venenatis tellus ut efficitur laoreet. Vestibulum urna ipsum, condimentum ac magna et, mattis imperdiet est. Nulla maximus ligula ut purus dictum suscipit. Fusce sollicitudin vestibulum mauris, rutrum vulputate purus.</span>

                                     </p>
                        </div>


                           

                      </div>  
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
  <div id="menu1" class="tab-pane fade">
        <h3>Mis Alumnos</h3>
     
  <div class="row" >
<b style="padding-left: 105px;">Clases en estado:</b>
<br>
<small style="padding-left: 105px;">Zona Horaria America/Argentina/Buenos_Aires</small>
<div class="row" style="padding-bottom: 40px;    padding-bottom: 40px;
    padding-left: 212px;
    padding-right: 150px;">
 
  <div class="col-md-3"><div class="circulo-verde btn" onclick="filtrobtn(3)"><p class="title-cir"> -  Disponible </p></div></div>
  <div class="col-md-3"><div class="circulo-azul btn" onclick="filtrobtn(2)"><p class="title-cir"> -  Proximo </p></div></div>
  <div class="col-md-3"> <div class="circulo-amarrillo btn" onclick="filtrobtn(1)"><p class="title-cir"> -  Por Comenzar </p></div> </div>
  <div class="col-md-3"> <div class="circulo-rojo btn" onclick="filtrobtn(4)"><p class="title-cir"> -  Ver Todo </p></div> </div>
  
</div>

   
 <?php 

$dias = [0 => 'Domingo', 1 => 'Lunes', 2 => 'Martes', 3 => 'Miercoles', 4 => 'Jueves', 5 => 'Viernes', 6 => 'Sabado'];

$cont = 0;
$dia_semana = date("w",strtotime($fecha_actual)); //Sabemos el numero ordinal de dia en una semana
$hora_clase = date("G",strtotime($fecha_actual));
$semana_acutal =  date("W",strtotime($fecha_actual));
$casi = $hora_clase + 1;

      $contador=0;
      $cantidad_clases=$nombres_horario[0]['plan'];
      $tipo_plan = $nombres_horario[0]['plan'];
      $clases_inscritas=0;
      $primera_clase = 0;
if($nombres_horario!=1){

?>




<?php 
} ?>

<?php 



  if ($horarioClases != 1) {

    foreach ($horarioClases as $mihorario) {
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
          $arrayAux['idalumno'] = $mihorario['alumno_idalumno'];
          $arrayAux['alumnonombres'] = $mihorario['alumno_nombres'];
          $arrayAux['alumnoapellidos'] = $mihorario['alumno_apellidos'];
          $arrayAux['dia'] = $mihorario['dia'];
          $clases[] = $arrayAux;
  
          for ($i=0; $i < $mihorario['plan']-1 ; $i++) { 
            $fechaclase2 =  strtotime ( $acumfecha."+ 7 days") ;
            $arrayAux['fecha'] = date("d-m-Y",$fechaclase2).' '.$mihorario['hora'].':00:00';
            $arrayAux['flag'] = 3;
            $arrayAux['dia'] = $mihorario['dia'];
            $arrayAux['hora'] = $mihorario['hora'];
            $arrayAux['idalumno'] = $mihorario['alumno_idalumno'];
            $arrayAux['alumnonombres'] = $mihorario['alumno_nombres'];
            $arrayAux['alumnoapellidos'] = $mihorario['alumno_apellidos'];
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
        $arrayAux['idalumno'] = $mihorario['alumno_idalumno'];
        $arrayAux['alumnonombres'] = $mihorario['alumno_nombres'];
        $arrayAux['alumnoapellidos'] = $mihorario['alumno_apellidos'];
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
        $arrayAux['idalumno'] = $mihorario['alumno_idalumno'];
        $arrayAux['alumnonombres'] = $mihorario['alumno_nombres'];
        $arrayAux['alumnoapellidos'] = $mihorario['alumno_apellidos'];
        $arrayAux['flag'] = 2;
        $clases[] = $arrayAux;
  
        for ($i=0; $i < $mihorario['plan']-1 ; $i++) { 
        $fechaclase2 =  strtotime ( $acumfecha."+ 7 days") ;
        $arrayAux['fecha'] = date("d-m-Y",$fechaclase2).' '.$mihorario['hora'].':00:00';
        $arrayAux['hora'] = $mihorario['hora'];
        $arrayAux['dia'] = $mihorario['dia'];
        $arrayAux['idalumno'] = $mihorario['alumno_idalumno'];
        $arrayAux['alumnonombres'] = $mihorario['alumno_nombres'];
        $arrayAux['alumnoapellidos'] = $mihorario['alumno_apellidos'];
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
      $arrayAux['idalumno'] = $mihorario['alumno_idalumno'];
      $arrayAux['alumnonombres'] = $mihorario['alumno_nombres'];
      $arrayAux['alumnoapellidos'] = $mihorario['alumno_apellidos'];
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
      $arrayAux['idalumno'] = $mihorario['alumno_idalumno'];
      $arrayAux['alumnonombres'] = $mihorario['alumno_nombres'];
      $arrayAux['alumnoapellidos'] = $mihorario['alumno_apellidos'];
      $arrayAux['flag'] = 3;
      $clases[] = $arrayAux; 
      for ($i=0; $i < $mihorario['plan']-1 ; $i++) { 
        $fechaclase2 =  strtotime ( $acumfecha."+ 7 days") ;
        $arrayAux['fecha'] = date("d-m-Y",$fechaclase2).' '.$mihorario['hora'].':00:00';
        $arrayAux['dia'] = $mihorario['dia'];
        $arrayAux['hora'] = $mihorario['hora'];
        $arrayAux['idalumno'] = $mihorario['alumno_idalumno'];
        $arrayAux['alumnonombres'] = $mihorario['alumno_nombres'];
        $arrayAux['alumnoapellidos'] = $mihorario['alumno_apellidos'];
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

asort($clases);
unset($claseEnProceso);
unset($clasePorComenzar);
unset($claseProxima);
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

}

if (isset($clasePorComenzar)) 
{
  sort($clasePorComenzar);
}

if (isset($claseProxima)) 
{
  sort($claseProxima);
}


?>
<?php

if (isset($claseEnProceso)) {
?>
  <ul class="list-group" style="padding-left: 10%; width: 90%;">
  <li class="list-group-item list-group-item-success" style="background: #fbf589;">
    <b>Tu Clase el dia</b> <?php echo $dias[$claseEnProceso[0]['dia']] ?>  <b>Fecha:</b> <?php echo $claseEnProceso[0]['fecha'] ?> <b>Hora:</b> <?php echo $claseEnProceso[0]['hora'] ?>:00
    <br>
    <b>Alumno: </b> <?php echo $claseEnProceso[0]['alumnonombres'].' '.$claseEnProceso[0]['alumnoapellidos']; ?>

    <p>
      <a href="<?php echo $this->Url->build([
    "controller" => "usuario",
    "action" => "generarsala",
    $info_profesor[0]->profesor['session_id'],
]); ?>" class="btn btn-primary" style="margin-top: 20px; margin-bottom: 0px;">Ver Clase</a>
    </p>
    
  </li>
</ul>

<input type="hidden" id='fecha_clase' name="<?php echo $claseEnProceso[0]['hora']; ?>" value=<?php echo date("m/d/Y",strtotime($claseEnProceso[0]['fecha']));  ?>  >
<?php
}

if(isset($clasePorComenzar))
{
  foreach ($clasePorComenzar as $itemClasePorComenzar) {  
?>
  <ul class="list-group" style="padding-left: 10%; width: 90%;">
  <li class="list-group-item list-group-item-success" <?php if(($itemClasePorComenzar['hora']-date('h')) == 1){echo 'style="background: #fbf589;"';}else{ echo 'style="background: #dff0d8;"'; } ?> >
    <b>Tu Clase el dia</b> <?php echo $dias[$itemClasePorComenzar['dia']] ?>  <b>Fecha:</b> <?php echo $itemClasePorComenzar['fecha'] ?> <b>Hora:</b> <?php echo $itemClasePorComenzar['hora'] ?>:00
    <br>
    <b>Alumno: </b> <?php echo $itemClasePorComenzar['alumnonombres'].' '.$itemClasePorComenzar['alumnoapellidos']; ?>
  </li>
</ul>

<?php 
  } 
?>

<input type="hidden" id='fecha_clase' name="<?php echo $clasePorComenzar[0]['hora']; ?>" value=<?php echo date("m/d/Y",strtotime($clasePorComenzar[0]['fecha']));  ?>  >
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
    <b>Alumno: </b> <?php echo $itemClaseProxima['alumnonombres'].' '.$itemClaseProxima['alumnoapellidos']; ?>
      </li>
  </ul>

    <?php
    $contProxima ++;
    }
   ?>
  
<input type="hidden" id='fecha_clase' name="<?php echo $claseProxima[0]['hora']; ?>" value=<?php echo date("m/d/Y",strtotime($claseProxima[0]['fecha']));  ?>  >

<?php
}


  }//fin if horarioClase


 ?>

</div>
              
    </div>
    <div id="menu2" class="tab-pane fade" style="    padding: 2%;">
      <h3 style="padding-bottom: 5%;">Clases Programadas</h3>

                        
                <div class="row">
     
 
                    <div class="row">
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

      <div class="Cell" style=" height: 25px; width: 120px; text-align: center; color: #fff"  id=<?php echo $j."_".$i;?> onclick="intemclik('<?php echo  $j.'_'.$i; ?>',<?php echo $cc;?>)">
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
  <form action="" method="POST" id= "formu">
    <input type="hidden" name="idprofesorhorario" value="<?php echo $info_profesor[0]->profesor['idprofesor']; ?>">
    <div id="itemshorario"> 
       
    </div>
    <div class="centered" style="    padding: 8%;">
  <input type="button" class="btn-wi-3" name="enviar" value="GUARDAR HORARIO" onclick="reservar()">
</div>
</form>
<!--End calendar -->
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Saldo por Clases</h3>
        <div class="row">
          <div class="col-md-12 col-lg-12 col-xl-12">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#creditos">Creditos</a></li>
            <li><a data-toggle="tab" href="#debitos">Debitos</a></li>
          </ul>
          <div class="tab-content">
            <div id="creditos" class="tab-pane fade in active">
              <br>
                <h3>Creditos</h3> 
                <?php $credito = 0; if($pagos) { ?>
                <table class="table table-hover" style="text-align: center;">
                <thead>
                    <tr>
                      <th style="text-align: center;">Fecha</th>
                      <th style="text-align: center;">Tipo de Pago</th>
                      <th style="text-align: center;">Monto</th>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                    
                    foreach ($pagos as $row) {
                    ?>
                      <tr>
                          <td><?php echo $row['fecha_pago']; ?></td>
                          <td>
                          <?php 
                            if ($row['plataforma']=='MERCADOPAGO')  {
                              echo 'Pago Clase';
                            }
                            else
                            {
                              echo 'Comision por Referido';
                            } 
                          ?>
                            
                          </td>
                          <td> <?php echo $row['total_saldo']; ?> </td>
                        </tr>
                    <?php
                    $credito += $row['total_saldo'];
                    }
                   ?>
                    
                </tbody>
              </table>
              <?php }
              else {
                echo '<p>Aún no posee depositos en su cuenta</p>';
              } ?>
            </div>
            <div id="debitos" class="tab-pane fade">
              <br>
                <h3>Debitos</h3>
                <div class="list-group">
                <p>Aún no posee retiros de dinero de su cuenta</p>
  
            </div>
            </div>
          </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <br><br><br>
              <h3 style="text-align: right;">Saldo Disponible: <?php echo $credito; ?>$</h3>
            </div>
          </div>
        </div>  
    </div>

</div>

</div>
              <!--End Left Side -->
              <!--Start Right Side -->
              <div class="col-md-4 right-side-wrap-v1" style="margin-top: 1em;">
                <div class="widget-wrap">
                  <aside class="widget widget-categories">
                                        <div style="text-align:center;">
                                          <br>
                                          <button type="button" class="btn btn-primary edit-proffesor-item" data-toggle="modal" data-target="#profesor_informacionpersonal">
                                  <i class="fa fa-camera"></i>
                        </button> 
                                    <?php 

                                      if (is_null($info_profesor[0]->profesor['foto_perfil'])) 
                                      {
                                        echo $this->Html->image(
                        "user.png", 
                        ["alt" => "imagen de usuario",
                        "class" => "user-profile-picture"
                        ]
                      );
                                      }

                                      else
                                      {
                                        echo $this->Html->image(
                        "perfiles/".$info_profesor[0]->profesor['foto_perfil'], 
                        ["alt" => "imagen de usuario",
                        "class" => "user-profile-picture"]
                      );
                                      }
                      
                                        ?>
                                        </div>
                                       
                    <h3 class="widget-title-v2" ><?php echo $info_profesor[0]->profesor['nombres'].' '.$info_profesor[0]->profesor['apellidos']; ?> <a type="button" data-toggle="modal" data-target="#profesor_detalle">
                          <i class="fas fa-pencil-alt pencil-white"></i>
                            </a></h3>
                    <div class="widget-content professor-profile">
                      <div class="pro-rating star professor-profile ">
                                <span class="yes"><i class="fa fa-star"></i></span>
                                <span class="yes"><i class="fa fa-star"></i></span>
                                <span class="yes"><i class="fa fa-star"></i></span>
                                <span class="yes"><i class="fa fa-star"></i></span>
                                <span class="yes"><i class="fa fa-star-half-o"></i></span>
                      </div>
                      
                            <?php 
                              if ($info_profesor[0]->profesor['especialidad']!=null || $info_profesor[0]->profesor['especialidad']!='') {
                                ?>
                                  <h5><b><?php echo $info_profesor[0]->profesor['especialidad']; ?></b></h5>
                                <?php
                              }
                             ?>

                             <label>Tu código de referido es:</label>
                             <a href="perfilprofesor/<?php echo $info_profesor[0]->profesor['idprofesor'].'-'.$info_profesor[0]->profesor['nombres']; ?>" > <h3><?php echo $info_profesor[0]->profesor['pais'].'-'.$info_profesor[0]->profesor['idprofesor'].'-'.$info_profesor[0]->profesor['genero'][0]; ?></h3></a>
                      <div>
                    
                      </div>
                      
                    </div>

                      <h3 class="widget-title-v2 new">Selecciona tu instrumento<a type="button" data-toggle="modal" data-target="#profesor_detalle_instrumento">
                          <i class="fas fa-pencil-alt pencil-white"></i>
                            </a></h3>

                            <?php 

                              if ($info_profesor[0]->profesor['idreferido'] == 99999999) 
                              {
                            ?><div style="padding: 2%;">
                              <div class="alert alert-danger" role="alert">
                                <b><i class="fas fa-exclamation-circle"></i> Codigo de referido errado.</b> Por favor confirme el codigo de referido
                                <br>
                                <br>
                                <div class="row">
                                  <?= $this->Form->create() ?>
                                    <div class="form-group">
                                        <input type="hidden" name="idprofesor" value="<?php echo $info_profesor[0]->profesor['idprofesor'] ?>">
                                       
                                        <input type="text" class="form-control" id="confirmacioncodigoreferido" name="confirmacioncodigoreferido" placeholder="XX-00-x" style="text-align: center;">
                                    </div>

                                    <input type="submit" name="confirmar" value="Confirmar" class="btn btn-danger">
                                  </form>
                                </div>
                              </div>
                              </div>
                            <?php             
                              }
                            ?>

                             <?php 

                              if ($info_profesor[0]->profesor['idreferido'] == 0) 
                              {
                            ?><div style="padding: 2%;">
                              <div class="alert alert-success" role="alert">
                                <b><i class="fas fa-exclamation-circle"></i> Aún no haz registrado a un referido.</b> que esperas ingresa el codigo de tu referido y comienza a disfrutar de los beneficios
                                <br>
                                <br>
                                <div class="row">
                                  <?= $this->Form->create() ?>
                                    <div class="form-group">
                                        <input type="hidden" name="idprofesor" value="<?php echo $info_profesor[0]->profesor['idprofesor'] ?>">
                                       
                                        <input type="text" class="form-control" id="confirmacioncodigoreferido" name="confirmacioncodigoreferido" placeholder="XX-00-x" style="text-align: center;">
                                    </div>

                                    <input type="submit" name="confirmar" value="Confirmar" class="btn btn-success">
                                  </form>
                                </div>
                              </div>
                              </div>
                            <?php             
                              }
                            ?>
                  </aside>
                  
                </div>
              </div>
              <!--End Right Side -->
            </div>
          </div>
        </div>
        <!-- End Small image blog Post area -->
      </div>
    </div>
    <!-- End wrapper --> 


    
<!-- Modal Description -->
<div class="modal fade" id="profesor_descripcion" tabindex="-1" role="dialog" aria-labelledby="profesor_descripcion" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <?= $this->Form->create() ?>  
    <div class="modal-content">

      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h2 style="text-align: center;">Mi descripción</h2>
        <div class="row" id="formulario_profesor">
  <div class="col-md-12">
  
  <div class="form-group">
    <textarea class="form-control" rows="5" id="descripcion" name="profesor_descripcion">
      <?php 
       if($info_profesor[0]->profesor['descripcion']!=null || $info_profesor[0]->profesor['descripcion']!=' ') 
       {
         echo $info_profesor[0]->profesor['descripcion'];
       }
      ?>
    </textarea>
  </div>
  <div class="form-group">
   <label for="descripcion">URL video de presentación</label>
   <input type="text" class="form-control" name="video_url" <?php   if($info_profesor[0]->profesor['video_presentacion']!=null || $info_profesor[0]->profesor['video_presentacion']!='')
                          {
                            echo 'value="'.$info_profesor[0]->profesor['video_presentacion'].'"';} ?>>
  </div>
  <input type="hidden" name="id_profesor" value="<?php echo $info_profesor[0]->profesor['idprofesor']; ?>">
  
  <div class="form-group" style="text-align: right;">
    <input type="submit" class="btn btn-primary" value="Actualizar">
  </div>
  </div>
</div>
<?= $this->Form->end() ?>
                
      </div>
    </div>
  </div>
</div>

<!-- Modal formacion -->
<div class="modal fade" id="profesor_formacion" tabindex="-1" role="dialog" aria-labelledby="profesor_formacion" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        <h2 style="text-align: center;">Mi Formación Academica</h2>
        <?php if($formacionacademica!=null) { ?>
          <label for="profesor" style="font-weight: 300;
    font-size: 13px;
    padding: 4%;">Te recordamos que solo tendrás 5 oportunidades de publicar tu formación, aprovéchalas al máximo.</label>
          <?php //echo count($formacionacademica); ?>
        <?php foreach ($formacionacademica as $row) { ?>
          

          <?= $this->Form->create() ?>
          
          <div class="row" id="formulario_profesor">
              <div class="col-md-9">
                <div class="form-group">
                  <input type="text" class="form-control" name="profesor_formacionedit" value="<?php echo $row['descripcion']; ?>" disabled >
              </div>
              <input type="hidden" name="idprofesor" value="<?php echo $info_profesor[0]->profesor['idprofesor']; ?>"> 
              <input type="hidden" name="idformacionacademica" value="<?php echo $row['idformacionacademica']; ?>">  
              
              </div>
              <div class="col-md-3">
              <button type="submit" class="btn btn-primary">
                        <i class="fa fa-trash"></i>
                    </button>   
            </div>
          </div>
          <?= $this->Form->end() ?>  
        <?php } ?>
          
        <?php } ?>
        <?php if(count($formacionacademica)<5){ ?>
        <?php 
         echo $this->Form->create('index', array('type' => 'file'));
          /* creamos el input para seleccionar el archivo */
       
        /* Cerramos el formulario y se coloca en boton para hacer submit */ ?>
        
        <div class="row" id="formulario_profesor">
            <div class="col-md-12"> 
              <div class="form-group">
              <label for="profesor">Nueva Formación</label>
                <input type="text" class="form-control" name="profesor_formacion">

            </div>
            
               <?php  echo $this->Form->input('file',array( 'type' => 'file','label' => ' Sube tu soporte JPG-PNG-PDF', 'class' => 'file', 'id' => 'input-b1', 'name'=>'profesor_formacion_soporte')); ?>

            <input type="hidden" name="idprofesor" value="<?php echo $info_profesor[0]->profesor['idprofesor']; ?>">  
              <div class="form-group" style="text-align: right;">
              <input type="submit" class="btn btn-primary" value="Agregar">
              </div>
            </div>
        </div>  
        <?= $this->Form->end() ?>  
        <?php } ?>
          </div>
      </div>
    </div>
</div>





<!-- Modal trayectoria -->
<div class="modal fade" id="profesor_trayectoria" tabindex="-1" role="dialog" aria-labelledby="profesor_trayectoria" aria-hidden="true">
<div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        <h2 style="text-align: center;">Mi Trayectoria</h2>
        <?php if($trayectoria!=null) { ?>
          
                <label for="profesor" style="font-weight: 300;
    font-size: 13px;
    padding: 4%;">Te recordamos que solo tendrás 5 oportunidades de publicar tu trayectoria, aprovéchalas al máximo.</label>
        
        <?php foreach ($trayectoria as $row) { ?>
          <?= $this->Form->create() ?>
          <div class="row" id="formulario_profesor">
              <div class="col-md-9">
                <div class="form-group">
                  <input type="text" class="form-control" name="profesor_trayectoriaedit" value="<?php echo $row['descripcion']; ?>" disabled >
              </div>
              <input type="hidden" name="idprofesor" value="<?php echo $info_profesor[0]->profesor['idprofesor']; ?>"> 
              <input type="hidden" name="idtrayectoria" value="<?php echo $row['idtrayectoria']; ?>">  
              
              </div>
              <div class="col-md-3">
              <button type="submit" class="btn btn-primary">
                        <i class="fa fa-trash"></i>
                    </button>   
            </div>
          </div>
          <?= $this->Form->end() ?>  
        <?php } ?>
          
        <?php } ?>
        <?php if(count($trayectoria)<5){ ?>
      <?php  echo $this->Form->create('index', array('type' => 'file')); ?>
        <div class="row" id="formulario_profesor">
            <div class="col-md-12">
              <div class="form-group">
              <label for="profesor">Nueva Trayectoria</label>
                <input type="text" class="form-control" name="profesor_trayectoria">
            </div>

               <?php  echo $this->Form->input('file',array( 'type' => 'file','label' => 'Sube tu soporte JPG-PNG-PDF', 'class' => 'file', 'id' => 'input-b1', 'name'=>'soporte_trayectoria')); ?>

            <input type="hidden" name="idprofesor" value="<?php echo $info_profesor[0]->profesor['idprofesor']; ?>">  
              <div class="form-group" style="text-align: right;">

              <input type="submit" class="btn btn-primary" value="Agregar">
              </div>
            </div>
        </div>  
        <?= $this->Form->end() ?>
        <?php } ?>  
          </div>
      </div>
    </div>
</div>

<!-- Modal informacion personal -->
<div class="modal fade" id="profesor_informacionpersonal" tabindex="-1" role="dialog" aria-labelledby="profesor_informacionpersonal" aria-hidden="true">
<div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
                <div class="row">
              <div class="col-md-6">
        <?php

        
                                      if (is_null($info_profesor[0]->profesor['foto_perfil'])) 
                                      {
                                        echo $this->Html->image(
                        "user.png", 
                        ["alt" => "imagen de usuario",
                        "style" => "width: 250px; height: 250px;"]
                      );
                                      }

                                      else
                                      {
                                        echo $this->Html->image(
                        "perfiles/".$info_profesor[0]->profesor['foto_perfil'], 
                        ["alt" => "imagen de usuario",
                        "style" => "width: 250px; height: 250px;"]
                      );
                                      }
                         ?>
                         </div>      

 <div class="col-md-6">    <?php

        echo $this->Form->create('index', array('type' => 'file'));
          /* creamos el input para seleccionar el archivo */
        echo $this->Form->input('file',array( 'type' => 'file','label' => ' Actualice su imagen JPG-PNG', 'class' => 'file', 'id' => 'input-b1'));
        /* Cerramos el formulario y se coloca en boton para hacer submit */
        ?>
        <input type="hidden" name="flag-photo" value="1">
        <input type="submit" name="send" value="Actualizar" class="btn-success-enviar">
        <?php
        //echo $this->Form->('Submit', array('class' => 'btn btn-default'));
        echo $this->Form->end();
        ?>
       </div>  

   </div> <!-- fin de row -->
          </div>
      </div>
    </div>
</div>

<!-- Modal detalle de informacion personal -->
<div class="modal fade" id="profesor_detalle" tabindex="-1" role="dialog" aria-labelledby="profesor_informacionpersonal" aria-hidden="true">
<div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
                <div class="row">
            <?= $this->Form->create() ?>
<input type="hidden" name="idprofesor" value="<?php echo $info_profesor[0]->profesor['idprofesor']; ?>">

  <div class="form-group">
    <label for="">Nombres</label>
    <input type="text" class="form-control" id="profesornombres" name="profesornombres" value="<?php echo $info_profesor[0]->profesor['nombres']; ?>">
  </div>

  <div class="form-group">
    <label for="">Apellidos</label>
    <input type="text" class="form-control" id="profesorapellidos" name="profesorapellidos" value="<?php echo $info_profesor[0]->profesor['apellidos']; ?>">
  </div>
  <div class="form-group" style="display: none;"> 
    <label>Especialidad</label>
  </div>
<ul class="nav nav-tabs" id="modal-tabs" style="display: none;">
  <?php 
    $cont = 0;
    foreach ($categorias as $itemcategoria) {
      ?>

      <li <?php if($cont == 0){ echo 'class="tabmodal active" style="display: none;"'; } ?>> 
        <a data-toggle="tab" href="#esp<?php echo $itemcategoria['idcategoria'] ?>"><?php echo $itemcategoria['nombre']; ?></a>
      </li>
      <?php
    $cont++;
    }
   ?>
</ul>

 <div class="tab-content" style="display: none;">
  <?php 
  $split_especialidad = explode(', ', $info_profesor[0]->profesor['especialidad']);
  $cont = 0;
    foreach ($categorias as $itemcategoria2) {
      ?>
      <div id="esp<?php echo $itemcategoria2['idcategoria']; ?>" class="tab-pane fade <?php if($cont==0 ) echo 'in active'; ?>">
          <div class="row">
          <?php 
            foreach ($especialidades as $itemsubcategoria) {
              if($itemcategoria2['idcategoria'] == $itemsubcategoria['idcategoria'])
              {
                ?>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <label class="checkbox-inline">
                    <input type="checkbox" name="esp-<?php echo $itemsubcategoria->subcategoria['idsubcategoria']; ?>" value="<?php echo $itemsubcategoria->subcategoria['nombre']; ?>" class="tab-checkbox"
                    <?php foreach ($split_especialidad as $flagactive) {
                      if ($itemsubcategoria->subcategoria['nombre'] == $flagactive) {
                        echo ' checked';
                      }
                    } ?>
                    ><?php echo $itemsubcategoria->subcategoria['nombre']; ?>
                  </label>
                  </div>
                <?php
              }
            }
           ?>
           </div>
      </div>
      <?php
      $cont++;
    }
   ?>
</div>
  <div class="form-group" style="text-align: right;">
    <input type="submit" name="send" value="Actualizar" class="btn btn-primary">
  </div>
  
<?php echo $this->Form->end(); ?>
            </div> <!-- fin de row -->
          </div>
      </div>
    </div>
</div>

<!-- Modal instrumento -->
<div class="modal fade" id="profesor_detalle_instrumento" tabindex="-1" role="dialog" aria-labelledby="profesor_detalle_instrumento" aria-hidden="true">
<div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
                <div class="row">
            <?= $this->Form->create() ?>
<input type="hidden" name="idprofesor" value="<?php echo $info_profesor[0]->profesor['idprofesor']; ?>">

  <div class="form-group" style="display: none;">
    <label for="">Nombres</label>
    <input type="text" class="form-control" id="profesornombres" name="profesornombres" value="<?php echo $info_profesor[0]->profesor['nombres']; ?>">
  </div>

  <div class="form-group" style="display: none;">
    <label for="">Apellidos</label>
    <input type="text" class="form-control" id="profesorapellidos" name="profesorapellidos" value="<?php echo $info_profesor[0]->profesor['apellidos']; ?>">
  </div>
  <div class="form-group">
    <label>Especialidad</label>
  </div>
<ul class="nav nav-tabs" id="modal-tabs">
  <?php 
    $cont = 0;
    foreach ($categorias as $itemcategoria) {
      ?>

      <li <?php if($cont == 0){ echo 'class="tabmodal active"'; } ?>> 
        <a data-toggle="tab" href="#espinstrumento<?php echo $itemcategoria['idcategoria'] ?>"><?php echo $itemcategoria['nombre']; ?></a>
      </li>
      <?php
    $cont++;
    }
   ?>
</ul>

 <div class="tab-content">
  <?php 
  $split_especialidad = explode(', ', $info_profesor[0]->profesor['especialidad']);
  $cont = 0;
    foreach ($categorias as $itemcategoria2) {
      ?>
      <div id="espinstrumento<?php echo $itemcategoria2['idcategoria']; ?>" class="tab-pane fade <?php if($cont==0 ) echo 'in active'; ?>">
          <div class="row">
          <?php 
            foreach ($especialidades as $itemsubcategoria) {
              if($itemcategoria2['idcategoria'] == $itemsubcategoria['idcategoria'])
              {
                ?>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <label class="checkbox-inline">
                    <input type="checkbox" name="esp-<?php echo $itemsubcategoria->subcategoria['idsubcategoria']; ?>" value="<?php echo $itemsubcategoria->subcategoria['nombre']; ?>" class="tab-checkbox"
                    <?php foreach ($split_especialidad as $flagactive) {
                      if ($itemsubcategoria->subcategoria['nombre'] == $flagactive) {
                        echo ' checked';
                      }
                    } ?>
                    ><?php echo $itemsubcategoria->subcategoria['nombre']; ?>
                  </label>
                  </div>
                <?php
              }
            }
           ?>
           </div>
      </div>
      <?php
      $cont++;
    }
   ?>
</div>
  <div class="form-group" style="text-align: right;">
    <input type="submit" name="send" value="Actualizar" class="btn btn-primary">
  </div>
  
<?php echo $this->Form->end(); ?>
            </div> <!-- fin de row -->
          </div>
      </div>
    </div>
</div>

<?php 

if( $session->read('redireccion')==1){

  echo '<script type="text/javascript">
  document.getElementById("2tab").click();

  
</script>';
$session->write('redireccion', '0');
} ?>
<script type="text/javascript">
var hours = [];
var ids = [];
var idg = [];
var alumnos = [{}];

/*


*/

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


function sethora(){
var xx=0;
var c=0;
var tot = document.getElementById("cantidad").value;  
console.log(tot);

  
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
//console.log(alumnos); 

var idx = ids.indexOf(idg[x]);
if(y==0){
hours[idx]=1;
document.getElementById(idg[x]).innerHTML = '<span> Disponible </span>';  
document.getElementById(idg[x]).style.background= "#c16f6f"; 
}else{

  hours[idx]=2;
  //alumnos[xx] = idg[x]+'_'+y;
document.getElementById(idg[x]).innerHTML = '<span> Reservado </span>'; 
document.getElementById(idg[x]).style.background= "#c1c1c1";
 xx++; 
}

}
}

//console.log("alumno: "+alumnos[0].id_pocision); 

console.log(alumnos);
//console.log("tamaño alumnos: "+xx);
}

window.onload=sethora();
function intemclik(id, cont){



if(hours[cont]==0){
document.getElementById(id).innerHTML = '<span> Disponible </span>';    
document.getElementById(id).style.background= "#c16f6f"; 
hours[cont]=1;  

}else if(hours[cont]==1){
document.getElementById(id).style.background= "#f5f5f5"; 
document.getElementById(id).innerHTML = '<span></span>';  
hours[cont]=0;  

}
console.log(cont);
console.log(id);

 
}
function reservar(){
var h = hours.length;
var valu;
for (var i = 0; i<h; i++){
if(hours[i]==1 ){
   valu = ids[i]+'_'+'0'+'_'+' ';
  document.getElementById("itemshorario").innerHTML += '<input type="hidden" id="campo" name="'+ids[i]+'" value="'+valu+'" >';

}else if( hours[i]==2 ){

  for (var j = 0; j < alumnos.length; j++) {
   if(alumnos[j].id_pocision == ids[i]){
valu = alumnos[j].id_pocision+'_'+alumnos[j].id_alumno+'_'+alumnos[j].fecha_de_clase;
//console("valor del alumno: " +valu);
 document.getElementById("itemshorario").innerHTML += '<input type="hidden" id="campo" name="'+ids[i]+'" value="'+valu+'" >';
 
   } 

  }
 
 
}
}
//console.log("reservo");
document.getElementById("formu").submit();
//
}





function  popup(url){

   window.open( "http://18.191.211.97/img/formaciones/"+url, "Soporte", "width=380,height=500, top=85,left=50");
}



function filtrobtn(val){
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


//  document.getElementsByClassName("disponible").style.display = "none";
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

        document.getElementById('countdownD').innerHTML = days ;
        document.getElementById('countdownH').innerHTML = hours;
        document.getElementById('countdownM').innerHTML = minutes;
        document.getElementById('countdownS').innerHTML = seconds;
    }

    timer = setInterval(showRemaining, 1000);
  
</script>