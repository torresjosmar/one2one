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

} ?>

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

.col-md-3.active {
    box-shadow: 1px 1px 3px 0px #ccc;
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
<!--Start Page Content -->

 <div class="azul-linea" style="margin-top: 18px;">
        <ul style="    margin-left: 10%;">
          <li class="das-prof active"><a data-toggle="tab" href="#home"> Mi perfil</a></li>
          <li class="das-prof"><a data-toggle="tab" href="#menu1">Mis Clases</a></li>
          <li class="das-prof"><a id = '2tab' data-toggle="tab" href="#menu2">Programador de Clases</a></li>
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
                        "style" => "width: 250px; height: 250px;border-radius: 136px;"]
                      );
                                      }

                                      else
                                      {
                                        echo $this->Html->image(
                        "perfiles/".$info_alumno[0]->alumno['foto_perfil'], 
                        ["alt" => "imagen de usuario",
                        "style" => "width: 250px; height: 250px;border-radius: 136px;"]
                      );
                                      }
                      
                                        ?>
            <p style="padding-right: 30%; text-align: right;"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ProfileModal">
                 <i class="fas fa-pencil-alt"></i>
            </button></p>
            <h3><?php echo $info_alumno[0]->alumno['nombres'].' '.$info_alumno[0]->alumno['apellidos']; ?></h3>
            <h5><?php echo $info_alumno[0]->alumno['telefono_celular']; ?></h5>
            <h5>Disciplina Favorita <button type="button" class="btn btn-primary edit-proffesor-item" data-toggle="modal" style="float: none;"><i class="fas fa-pencil-alt"></i></button></h5>
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
            <div>
              <h4>Próxima clase en vivo en: </h4>
            <div class= "counter" id="countdown"></div><i class="fa fa-clock-o" aria-hidden="true"></i>
            </div>
        </div>
       
    </div>


</div> <!--Contenido --></div>

<div id="menu1" class="tab-pane fade" style="padding: 7%;">
             


  <div class="row" >
<b style="    padding-left: 105px;">Clases en estado:</b>
<div class="row" style="padding-bottom: 40px;    padding-bottom: 40px;
    padding-left: 212px;
    padding-right: 150px;">
 	
  <div class="col-md-3 active" onclick="filtrobtn(3)" style="border: 1px solid #ccc;
    padding: 18px;"><div class="circulo-verde btn" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-  Disponible </div></div>
  <div class="col-md-3" style="border: 1px solid #ccc;
    padding: 18px;"  onclick="filtrobtn(2)"><div class="circulo-azul btn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-  Proximo </div></div>
  <div class="col-md-3" style="border: 1px solid #ccc;
    padding: 18px;" onclick="filtrobtn(1)"> <div class="circulo-amarrillo btn" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -  Por Comenzar </div> </div>
  <div class="col-md-3" style="border: 1px solid #ccc;
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
   
      <ul class="list-group" style="padding-left: 10%;width: 90%;">
        

  <?php if( strtotime($item['fecha_clase'])==strtotime($fecha_actual) && $item['hora']==$casi){
if($primera_clase==0){
$primera_clase=1;

?>

<input type="hidden" id='fecha_clase' name=<?php echo date("m/d/Y", strtotime($item['fecha_clase'])); ?> value= <?php echo $item['hora']; ?> >
<?php } ?>
<div class ="comenzar">

  <li class="list-group-item list-group-item-success" id = <?php echo $dias[$item['dia']].'_'.$cont;  ?> >Tu Clase <?php echo $cont+1; ?> : Día : <b><?php echo $dias[$item['dia']]." ". date("d/m/Y", strtotime($item['fecha_clase'])); ; ?></b> Hora : <b><?php echo ($item['hora']).':00'; ?></b>
<a  id=<?php echo $dias[$item['dia']].'_'.$cont.'btn';  ?>  href="http://ec2-18-216-189-145.us-east-2.compute.amazonaws.com/videochat/" target="_blank" class="btn btn-success" style="float: right;" >Ir a Clase</a>
  </li>
  </div>

  <?php 
  echo '<script type="text/javascript">
console.log("casi comienzo"); 
   console.log(document.getElementById('.'"'.$dias[$item["dia"]].'_'.$cont.'"'.').id);
    document.getElementById('.'"'.$dias[$item["dia"]].'_'.$cont.'"'.').style.background ="#fbf589";  

    </script>';
     
}
else if(strtotime($fecha_actual)>strtotime($item['fecha_clase']) ){
echo '';


}else if(strtotime($fecha_actual)==strtotime($item['fecha_clase']) && $hora_clase< $item['hora']){
echo '';

}else if($semana_acutal==$semana_clase){
if($primera_clase==0){
$primera_clase=1;

?>

<input type="hidden" id='fecha_clase' name=<?php echo date("m/d/Y", strtotime($item['fecha_clase'])); ?> value= <?php echo $item['hora']; ?> >
<?php } ?>
<div class="disponible">
  <li class="list-group-item list-group-item-success" id = <?php echo $dias[$item['dia']].'_'.$cont;  ?> >Tu Clase <?php echo $cont+1; ?> : Día : <b><?php echo $dias[$item['dia']]." ". date("d/m/Y", strtotime($item['fecha_clase'])); ; ?></b> Hora : <b><?php echo ($item['hora']).':00'; ?></b>
<a  id=<?php echo $dias[$item['dia']].'_'.$cont.'btn';  ?>  href="http://ec2-18-216-189-145.us-east-2.compute.amazonaws.com/videochat/" target="_blank" class="btn btn-success" style="float: right;" >Ir a Clase</a>
  </li>
  </div>
  <?php 
echo '<script type="text/javascript"> 
     document.getElementById('.'"'.$dias[$item["dia"]].'_'.$cont.'"'.').style.background = "#dff0d8";  
  	 document.getElementById('.'"'.$dias[$item["dia"]].'_'.$cont.'btn'.'"'.').style.display = "none";
    </script>';
}else{
	if($primera_clase==0){

$primera_clase=1; 
?>

<input type="hidden" id='fecha_clase' name=<?php echo date("m/d/Y", strtotime($item['fecha_clase'])); ?> value= <?php echo $item['hora']; ?> >
<?php } ?>
<div class ="proximo">
	<li class="list-group-item list-group-item-success" id = <?php echo $dias[$item['dia']].'_'.$cont;  ?> >Tu Clase <?php echo $cont+1; ?> : Día : <b><?php echo $dias[$item['dia']]." ". date("d/m/Y", strtotime($item['fecha_clase'])); ; ?></b> Hora : <b><?php echo ($item['hora']).':00'; ?></b>
<a  id=<?php echo $dias[$item['dia']].'_'.$cont.'btn';  ?>  href="http://ec2-18-216-189-145.us-east-2.compute.amazonaws.com/videochat/" target="_blank" class="btn btn-success" style="float: right;" >Ir a Clase</a>
  </li>
  </div>
  <?php 
echo '<script type="text/javascript"> 
   // console.log(document.getElementById('.'"'.$dias[$item["dia"]].'_'.$cont.'btn'.'"'.').id);
    document.getElementById('.'"'.$dias[$item["dia"]].'_'.$cont.'"'.').style.background= "#d9ecf7";  
   document.getElementById('.'"'.$dias[$item["dia"]].'_'.$cont.'btn'.'"'.').style.display = "none";
    </script>';

}
 ?>
</ul>
<?php $cont++; }
} ?>
</div>
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
    <select class="form-control" id="alum_categoria">
      <?php
        foreach($infocategorias as $rowcategoria)
        {
          ?>
          <option value="<?php echo $rowcategoria->subcategoria['idsubcategoria'] ?>"><?php echo $rowcategoria['nombre'].' - '.$rowcategoria->subcategoria['nombre']; ?></option>
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
var fecha_clase = document.getElementById("fecha_clase").name; 
var hora_clase = document.getElementById("fecha_clase").value; 
var fecha_actual = document.getElementById("fecha_actual").value; 

var end = new Date(fecha_clase+' '+hora_clase+':00:00');
console.log(fecha_clase);

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

//console.log(alumnos); 

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

//console.log("alumno: "+alumnos[0].id_pocision); 
auxiliar_clases = clases_actuales; 

//console.log("tamaño alumnos: "+xx);
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
// console.log(valu);
 document.getElementById("itemshorario").innerHTML += '<input type="hidden" id="campo" name="'+ids[i]+'" value="'+valu+'" >';

}


}
//console.log("reservo");
document.getElementById("formu").submit();


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

        document.getElementById('countdown').innerHTML = days + ' dias, ';
        document.getElementById('countdown').innerHTML += hours + ' horas, ';
        document.getElementById('countdown').innerHTML += minutes + ' minutos y ';
        document.getElementById('countdown').innerHTML += seconds + ' segundos';
    }

    timer = setInterval(showRemaining, 1000);
	
</script>

