<?php 
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha_actual = date("Y-m-d G:i:s");
$dia_semana = date("w",strtotime($fecha_actual)); 
$hora_clase = date("G",strtotime($fecha_actual));
foreach ($info_profesor as $key) {
		$info = $key;
	}

$especialidades = explode(', ', $info['especialidad']);
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
        text-align: center;
    display: block;
    margin: auto;
    
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
.title-m {
    width: 50%;
    text-align: center;
    display: block;
    margin: auto;
}
h4.modal-title {
    font-size: 32px;
}

    </style>

<div class="row" style="margin-top: 18px;background-color: #f2f2f2">
  <div class="col-md-8" style="padding: 5%;">
  <p class="titl">	¡Reserva tu clase en sólo 2 minutos!</p>

<div class="row caja-select">

  <div class="col-md-12">
  <!-- tab content -->
  <ul class="list-inline">
    <li class="list-inline-item active"><a data-toggle="tab" href="#paso1"><button class="btn btn-default" id="btnpaso1"><b> 1-.</b> Selecciona tu clase</button>  </a></li>
    <li class="list-inline-item"><a data-toggle="tab" href="#paso2"><button class="btn btn-default" id="btnpaso2"><b>2-. </b> Selecciona tu plan</button></a></li>
    <li class="list-inline-item"><a data-toggle="tab" href="#paso3"><button class="btn btn-default" id="btnpaso3" disabled="true"><b>3-.</b> Selecciona tu horario</button></a></li>
    <li class="list-inline-item"><a data-toggle="tab" href="#paso4"><button class="btn btn-default" id="btnpaso4" disabled="true"><b>4-. </b> Tu método de pago</button></a></li>
  </ul>

  <div class="tab-content">
    <div id="paso1" class="stepcartpanel tab-pane fade in active">
      <div class="col-md-4">
    <div class="photo">
      <?php 

                                      if (is_null($info['foto_perfil'])) 
                                      {
                                        echo $this->Html->image(
                        "user.png", 
                        ["alt" => "imagen de usuario",
                        "class" => "user-profile-class"]
                      );
                                      }

                                      else
                                      {
                                        echo $this->Html->image(
                        "perfiles/".$info['foto_perfil'], 
                        ["alt" => "imagen de usuario",
                        "class" => "user-profile-class"]
                      );
                                      }
                      
                                        ?>
           
    </div>
  </div>
  <div class="col-md-8">

  

    <h3>¡Hola! soy <?php echo $info['nombres'] ?> y seré tu profesor</h3>
    <p>¿De qué quieres recibir la clase?</p>
  <div class="form-group">
  <label for="sel1">Selecciona uno:</label>
  <select class="form-control" id="clase" id="clase" onchange="setclase()">
    <?php 
      foreach ($especialidades as $itemespecialidad) {
      ?>
      <option value="<?php echo $itemespecialidad; ?>"><?php echo $itemespecialidad; ?></option>
      <?php
      }
     ?>
  </select>
</div>
  </div>
  
  <div class="col-md-12" style="margin-top: 1em;">
    <button class="btn btn-default new" style="float: right;" onclick="navtabs(2)">Siguiente</button>
  </div>

    </div>
    <div id="paso2" class="stepcartpanel tab-pane fade">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title-step-panel">Selecciona tu Pack de Clases.</h2>
          <br><br>
        </div>
          <div class="col-md-6" style="    border-right: 1px solid #ddd;">
    <i class="fas fa-angle-double-down new"></i>
    <h3>Pack 4</h3>
    <p class="price">4 clase</p>
    <hr>
    <p>Comprando un paquete de 4 clases, podrás usarlas eligiendo los horarios que vos quieras. Tienes un plazo de 5 semanas para usarlas <br><br><b>Selecciona un minimo de una clases.</b></br></p>

    <p class="price">$1200/h</p>
    <p class="act"><a href="#">
<label class="radio-inline"><input type="radio" name="optradio" onclick="plan(4)" value="pack4">Selecciona este plan</label>
    </p>
  </div>
  <div class="col-md-6">
   <i class="fas fa-bookmark"></i>
    <h3>Pack 12</h3>
    <p class="price">12 clases</p>
    <hr>
    <p>Comprando este paquete de clases, podrás usarlas eligiendo los horarios que vos quieras con un plazo de 13 semanas para usarlas <br><br><b>Selecciona un minimo de seis clases.</b></br></p>

    <p class="price">$3240/h</p>
    <p class="act"><a href="#">
    <label class="radio-inline"><input type="radio" name="optradio" onclick="plan(12)" value="pack12">Selecciona este plan</label>

    </a></p>
  </div>
  
  <div class="col-md-12" style="margin-top: 1em;">
    <button class="btn btn-default new" style="float: left;" onclick="navtabs(1)">Anterior</button>
    <button id = "p2" disabled="true" class="btn btn-default new" style="float: right;" onclick="navtabs(3)">Siguiente</button>
  </div>
      </div>
    </div>
    <div id="paso3" class="stepcartpanel tab-pane fade">
       <div class="row">
     
 
                    <div class="row">
                        <div class="col-md-12">
                            
    <h2 class="title-step-panel">Completa tu horario de clases</h2>
    <br><br>

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

      <div class="Cell" style=" height: 25px; width: 120px; color: #fff"  id=<?php echo $j."_".$i;?> onclick="intemclik('<?php echo  $j.'_'.$i; ?>','<?php echo $cc;?>','<?php echo $dia_semana;?>','<?php echo $hora_clase; ?>')" >
      </div>    
      <?php    } ?>   

</div>
<?php } ?>


    </div>
</div>
    </form>

            </div>  
                </div>
               
                <div class="col-md-12" style="margin-top: 2em;">
    <button class="btn btn-default new" style="float: left;" onclick="navtabs(2)">Anterior</button>
    <button class="btn btn-default new" id = "p3" disabled="true" style="float: right;" onclick="navtabs(4)">Siguiente</button>
  </div>

                    </div>
    </div>
    <div id="paso4" class="stepcartpanel tab-pane fade">
      <div class="row">
          <div class="col-md-12" style="text-align: justify !important;">

            <h2 class="title-step-panel">Detalle de tu compra</h2>
            <br><br>
            
<div class="row">
  <div class="col-md-3">  
   <?php 

                                      if (is_null($info['foto_perfil'])) 
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
                        "perfiles/".$info['foto_perfil'], 
                        ["alt" => "imagen de usuario",
                        "class" => "user-profile-picture-orden"]
                      );
                                      }
                      
                                        ?>
                                          
                                        </div>
  <div class="col-md-9" style="    margin-top: 20px;margin-bottom: 30px;">  
    <p class="title-r"><b>Profesor:&nbsp;</b> <?php echo $info['nombres'].' '.$info['apellidos']; ?></p>
    <p class="title-r"><b>Pais:&nbsp;</b> <?php echo $this->Html->image(
                        "bandera/".$info['pais'].'.png', 
                        ["alt" => "pais", "style" => "width: 24px; heiht: 24px;"]); ?></p>
    <p class="title-r"><b>Lección:&nbsp;</b> <span id="leccion-text"></span></p>
  
  </div>

</div>
    
      <hr>
    
        <h4 style="float: right;
    display: block;" class="title-t"> <div id="precio" style="    float: right;
    display: block;"></div><b>Total:&nbsp; </b>$ </h4>
<br><br>
    <h4 style="text-align: left;" class="title-t">Metodo de pago</h4>
    <div class="row" style="margin-bottom: 3em;">
      <div class="col-md-6" style="text-align: center;">

       <?php 
      echo $this->Html->image("mercadopago-logo.png", 
                  ["alt" => "Mercadopago",
                  "style" => "width: 200px; margin: auto; float: left;padding: 6%;"
                  ]);
     ?> 
      </div>
      
    </div>
  

          </div>
     

              <div class="col-md-4">         <button class="btn btn-default new" style="float: left;" onclick="navtabs(3)">Anterior</button></div>
          <div class="col-md-8" style="margin-top: 1em;">

            <button type="button" class="btn btn-default btn-wi-4 btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pagar</button>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="title-m"> <h4 class="modal-title">Excelente!<i class="fas fa-check-circle" style="    font-size: 40px;"></i> </h4></div>
       
      </div>
      <div class="modal-body">
        <p>Ahora te redireccionaremos a MERCADO PAGO para que realices tu compra, una vez realizada podras disfrutar de tus clases con el profesor que has elegido. </p>
      </div>
      <div class="modal-footer">
           <button class="btn btn-default btn-wi-3" style="float: right;" onclick="reservar()">Pagar</button>

      </div>
    </div>

  </div>
</div>


  </div>
      </div>
    </div>
  </div>
  <!-- end tab content -->
  </div>

	
</div>



<!--End calendar -->


</div>

<div class="col-md-4 " style="padding: 6.5%;">
	<div class="row caja-select-2"> 
  <h1>	Preguntas frecuentes</h1>	
  
  <p class="tit">
¿Puedo reprogramar una clase?</p>
<br>
<p class="subtit">
Sí puedes reprogramar clases hasta de 48 hs antes de la clase, desde tu menú personal, dentro de "Clases programadas", en la opción “Cambiar fecha”.</p>
<p class="tit">
¿Puedo recuperar una clase?</p>
<br>
<p class="subtit">
Sí, puedes cancelar una clase hasta 4 horas antes de la clase, indicando el motivo de cancelación. Estudiaremos cada caso de forma personal para proceder a la devolución de esa clase. En el caso de que no avises en el plazo estipulado, esa clase no podrá recuperarse.
También puedes reprogramar clases desde tu menú personal, dentro de "Clases programadas", en la opción “Cambiar fecha”.
</p>
<p class="tit">
¿Como realizo el pago de mis clases?</p>
<br>
<p class="subtit">
Cuando elijas una clase o un pack de clases, podrás realizar el pago mediante  Mercado Pago o Paypal.
Una vez realizado el pago, recibirás un e-mail de confirmación de la reserva.
</p>

<p class="tit">
¿Como se realizan las clases?</p>
<br>
<p class="subtit">
Las clases se realizan en el aula virtual de One2one, que cuenta con muchas herramientas especiales, diseñadas para una mayor comodidad del alumno y profesor, como la video clase, el chat, box de archivos compartidos entre ambos, el editor de textos a tiempo real. 
</p>
</div>
  </div>
  </div>
  
</div>

              
  <form action="" method="POST" id= "formu">
    <div style="display: none;">
      <input type="hidden" name="idprofesor" value="<?php echo $info['idprofesor']; ?>">
    <input type="hidden" name="idalumno" value="<?php echo $alumno['idalumno']; ?>">
    <input type="hidden" name="curso" id="curso">
    <input type=" hidden" name="total" id="total" value="1000">
   
    <div id="itemshorario"> 
       
    </div>
    
</div>
</form> 

<script type="text/javascript">
var hours = [];
var ids = [];
var idg = [];
var cantidad;
var tipo_plan;
var cantidad_plan;
var clase = document.getElementById("clase").value;
document.getElementById("leccion-text").innerHTML = clase;
document.getElementById("curso").value = clase;



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
document.getElementById(idg[x]).innerHTML = '<span> Disponible </span>';  
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

var precio;

function plan(plan){

sethora();
cantidad = plan;
cantidad_plan = plan;
if(cantidad == 4)
{
  tipo_plan = 1;
}

if(cantidad== 12)
{
  tipo_plan = 2;
}
document.getElementById('p2').disabled=false;
  document.getElementById("btnpaso3").disabled=false;
if (cantidad==4) {
	precio = 1200;
	document.getElementById("precio").innerHTML=precio;
  document.getElementById("total").value=precio;
}
else{
	precio = 3240;
		document.getElementById("precio").innerHTML=precio;
    document.getElementById("total").value=precio;
}

cantidad = 1;
}
function intemclik(id, cont,dia,hora){

console.log("dia: "+dia+" hora "+hora+"contador: "+id);
var rango = id.split("_");
var diax = rango[0];
var horax = rango[1];

console.log("plan: "+cantidad);
if(dia == diax && hora == horax){
  alert("Debido a que la hora actual ya inicio, no puedes seleccionar este horario pero tenemos muchas más opciones para ti para que continúes disfrutando de la experiencia ONE2ONE");
}else{
if(hours[cont]==1){
if(cantidad>0){
document.getElementById(id).style.background= "#bb3b3b"; 
document.getElementById(id).innerHTML = '<span>Seleccionado</span>';  
hours[cont]=3;   
//console.log(hours[cont]);

cantidad--;
console.log("restante: "+cantidad);
}

}
else if(hours[cont]==3){

 

document.getElementById(id).style.background="#c16f6f"; 
document.getElementById(id).innerHTML = '<span> Disponible </span>';   
hours[cont]=1;  
//document.getElementById('botton').disabled=true;
cantidad++;
console.log("restante: "+cantidad);

}

if(tipo_plan == 1){

  if(cantidad<=1){

      document.getElementById('p3').disabled=false;
      document.getElementById("btnpaso4").disabled=false;
  }else {



      document.getElementById('p3').disabled=true;
      document.getElementById("btnpaso4").disabled=true;
  }
}else{
  if(tipo_plan == 2){
  
  if(cantidad<=1){
    document.getElementById('p3').disabled=false;
      document.getElementById("btnpaso4").disabled=false;
}
else {



      document.getElementById('p3').disabled=true;
      document.getElementById("btnpaso4").disabled=true;
    }

    }
  }
}
//console.log(hours);
//console.log(ids);

 
}
function reservar(){
var h = hours.length;
for (var i = 0; i<h; i++){
if(hours[i]==3){
  document.getElementById("itemshorario").innerHTML += '<input type="hidden" id="campo" name="'+ids[i]+'" value="'+ids[i]+'" >';

}


}
document.getElementById("itemshorario").innerHTML += '<input type="hidden" id="curso" name="curso" value="'+document.getElementById("clase").value+'" >'; 
document.getElementById("itemshorario").innerHTML += '<input type="hidden" id="plan" name="plan" value="'+cantidad_plan+'" >';  
console.log("reservo");
document.getElementById("formu").submit();


}


function navtabs(pos)
{
  console.log(pos);
  if (pos == 1) // paso 1 
  {
    document.getElementById("btnpaso1").click();
  }
  if (pos == 2) // paso 2
  {
    document.getElementById("btnpaso2").click();
  }
  if (pos == 3) // paso 3
  {
    document.getElementById("btnpaso3").click();
  }
  if (pos == 4) // paso 4
  {
    document.getElementById("btnpaso4").click();
  }
}

function setclase()
{
  clase = document.getElementById("clase").value;
  document.getElementById("leccion-text").innerHTML = clase;
  document.getElementById("curso").value = clase;
}





</script>