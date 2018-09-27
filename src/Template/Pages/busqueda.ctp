<?php 


 ?>

<?php 
function normaliza ($cadena){
    $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÒÓÔÕÖØÙÚÛÜÝÞ
ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
    $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuy
bsaaaaaaaceeeeiiiidoooooouuuyybyRr';
    $cadena = utf8_decode($cadena);
    $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
    $cadena = strtolower($cadena);
    return utf8_encode($cadena);
} ?>
<style type="text/css">
	.lds-facebook {
  display: inline-block;
  position: relative;
  top:50%;
	left:50%;
  width: 64px;
  height: 64px;
}
.lds-facebook div {
  display: inline-block;
  position: absolute;
  left: 6px;
  width: 13px;
  background: #343434;
  animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}
.lds-facebook div:nth-child(1) {
  left: 6px;
  animation-delay: -0.24s;
}
.lds-facebook div:nth-child(2) {
  left: 26px;
  animation-delay: -0.12s;
}
.lds-facebook div:nth-child(3) {
  left: 45px;
  animation-delay: 0;
}
@keyframes lds-facebook {
  0% {
    top: 6px;
    height: 51px;
  }
  50%, 100% {
    top: 19px;
    height: 26px;
  }
}

</style>
<!--Start Page Content -->
			<div class="page-content" style="    margin-top: 18px;">
				
				<!-- Start Small image blog Post area -->
				<div class="shop-area shop-page bg-white-2">
					<div class="container">
						<div class="row">
							<!--Start Left Side -->
							<div class="col-md-8 left-side-wrap-v1 list-profesores">
								<!--Start shop wrap area -->
								<div class="shop-content-area">
									<div class="row">
										<div class="product-toolbar clear">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
												<!--start List & Grid  -->
												<?php if(isset($busqueda)){ ?>
												<input type="hidden" id='<?php echo "set_busqueda"; ?>'  value='<?php echo strtolower ($busqueda);?>'> 
											<?php }else{ ?>
												<input type="hidden" id='<?php echo "set_busqueda"; ?>'  value='<?php echo 
												"nada";?>'> 
											<?php } ?>
												<h3 id = "conline"></h3>
												<h4 id ="conline2"></h4>
												<!--End List & Grid  -->
											
											</div>
											
										</div>
									</div>
									<!--Start Product List  -->
									<div class="row">
										<div class="lds-facebook" id="loadE" style="display: none"><div></div><div></div><div></div></div>
										<div class="tab-content">
						
											<div role="tabpanel" class="tab-pane fade in active" id="list">
												<?php 
												if (isset($profesores))
												{
												 ?>
															<?php 
												$item_id = 0;
												foreach ($profesores as $item) {
													$i = 0;
												 $aux = explode(",", $item['especialidad']);
												 foreach ($aux as $key) {
												   $aux[$i] = strtolower($key);
												   $i++;
												 }
												 $especialidades = implode(" ", $aux); 
													?>
				<div class="<?php echo $especialidades.' '.$item['edad'].' '.strtolower($item['genero']).' '.strtolower($item['pais']).' '.'todos'.' '.normaliza($item['nombres']);  ?>" id = "<?php echo $item_id; ?>" >
					
												<div class="product-list-view-area clear">
													<!-- Start Single product -->
												<a href="perfilprofesor/<?php echo $item['idprofesor'].'-'.$item['nombres']; ?>">
													<div class="col-md-12" style="margin-bottom: 20px;">
														<div class="single-product text-left fix">
															<div class="pro-thumb profesor-list" >
																<?php 
																	if (!is_null($item['foto_perfil'])) 
																	{
																		echo $this->Html->image(
																		"perfiles/".$item['foto_perfil'], 
																		["alt" => "imagen de usuario", "class" => "photo-box-2"]
																		);
																	}
																	else
																	{
																		echo $this->Html->image(
																		"user.png", 
																		["alt" => "imagen de usuario", "class" => "photo-box-2"]
																		);
																	}
																?>
															</div>
															<div class="pro-info profesor-list">

																<p class="pro-category"><?php echo $item['especialidad'];  ?></p>
																<h3 class="pro-title"><a href="#"><?php echo $item['nombres'] ;  ?></a></h3>
																<div class="pro-rating star">
																	<span class="yes"><i class="fa fa-star"></i></span>
																	<span class="yes"><i class="fa fa-star"></i></span>
																	<span class="yes"><i class="fa fa-star"></i></span>
																	<span class="yes"><i class="fa fa-star"></i></span>
																	<span class="yes"><i class="fa fa-star-half-o"></i></span>
																</div>
																<div class="pro-rating star">
																	<span>
																		<?php 
																	
																			echo $this->Html->image(
																			"bandera/".$item['pais'].".png", 
																			["alt" => "imagen de usuario",
																			"style" => "margin-top: -3px;     width: 25px; height: 25px;"
																			]
																			);
																		 ?>
																	</span>
																	<span>
																		<i class="fa fa-crown" style="font-size: 20px; color: #ffc73b; margin-left: 5px;" data-toggle="tooltip" title="Profesor Destacado"></i>
																	</span>
																	<span>
																		<i class="fas fa-award" style="font-size: 22px; color: #ffc73b; margin-left: 5px;" data-toggle="tooltip" title="Postgrado"></i>
																	</span>
																</div>
																<p class="pro-content"><?php echo substr($item['descripcion'], 0, 160)."...";  ?></p>
																<!--<div class="pro-available-color">
																	<ul class="color-list">
																		<li class="color"></li>
																		<li class="color"></li>
																		<li class="color"></li>
																		<li class="color"></li>
																	</ul>
																</div> -->
															</div>
														</div>
													</div>

												</a>
													<!-- End Single product -->
																									
													

												</div>
											</div>
												<!-- End List View Mode -->
												<?php
												$item_id++;
												 } ?>
													<input type="hidden" id='cantidad' value=<?php echo $item_id;?> >
												<?php 
													}
													else
													{
												 ?>

												 <h2>Busqueda sin resultados</h2>
												 <p>Te sugerimos uno de nuestros profesores destacados.</p>

												 <?php foreach ($profesores_sugeridos as $item) {?>
												<!-- Start List View Mode -->
												<div class="product-list-view-area clear">
													<!-- Start Single product -->
												<a href="perfilprofesor/<?php echo $item['idprofesor'].'-'.$item['nombres']; ?>">
													<div class="col-md-12" style="margin-bottom: 20px;">
														<div class="single-product text-left fix">
															<div class="pro-thumb profesor-list" >
																<?php 
																	if (!is_null($item['foto_perfil'])) 
																	{
																		echo $this->Html->image(
																		"perfiles/".$item['foto_perfil'], 
																		["alt" => "imagen de usuario", "class" => "photo-box"]
																		);
																	}
																	else
																	{
																		echo $this->Html->image(
																		"user.png", 
																		["alt" => "imagen de usuario", "class" => "photo-box"]
																		);
																	}
																?>
															</div>
															<div class="pro-info profesor-list">

																<p class="pro-category"><?php echo $item['especialidad'];  ?></p>
																<h3 class="pro-title"><a href="#"><?php echo $item['nombres'] ;  ?></a></h3>
																<div class="pro-rating star">
																	<span class="yes"><i class="fa fa-star"></i></span>
																	<span class="yes"><i class="fa fa-star"></i></span>
																	<span class="yes"><i class="fa fa-star"></i></span>
																	<span class="yes"><i class="fa fa-star"></i></span>
																	<span class="yes"><i class="fa fa-star-half-o"></i></span>
																</div>
																<div class="pro-rating star">
																	<span>
																		<?php 
																			echo $this->Html->image(
																			"icon/icon-flag-argentina.png", 
																			["alt" => "imagen de usuario",
																			"style" => "margin-top: -3px;",
																			"data-toggle" => "tooltip",
																			"title" => "País: Argentina"
																			]
																			);
																		 ?>
																	</span>
																	<span>
																		<i class="fa fa-crown" style="font-size: 20px; color: #ffc73b; margin-left: 5px;" data-toggle="tooltip" title="Profesor Destacado"></i>
																	</span>
																	<span>
																		<i class="fas fa-award" style="font-size: 22px; color: #ffc73b; margin-left: 5px;" data-toggle="tooltip" title="Postgrado"></i>
																	</span>
																</div> 
																<p class="pro-content"><?php echo substr($item['descripcion'], 0, 160)."...";  ?></p>
																<!--<div class="pro-available-color">
																	<ul class="color-list">
																		<li class="color"></li>
																		<li class="color"></li>
																		<li class="color"></li>
																		<li class="color"></li>
																	</ul>
																</div> -->
															</div>
														</div>
													</div>
												</a>
													<!-- End Single product -->
																									
													
												</div>
												<!-- End List View Mode -->
												<?php } ?>

												 <?php 
												}
												  ?>

											</div>
										
										</div>
									<!--End Product List  -->
									</div>
									<!--Start Pagination  area
									<div class="row">
										<div class="pagination-area-v1">
											<div class="col-md-12 text-left">
												<ul class="page-numbers">
													<li class="page-number current">1</li>
													<li><a class="page-number" href="#">2</a></li>
													<li><a class="page-number" href="#">3</a></li>
													<li><a class="page-number" href="#">4</a></li>
												</ul>
											</div>
										</div>
									</div>
									--> <!--End Pagination  area-->
									<!-- End Product Filter Tab Wrap -->
								</div>
								<!--End shop wrap area -->
							</div>
							<!--End Left Side -->
							<?php //echo $this->element('sidebar'); ?>
							<!--Start Right Side -->
							<div class="col-md-4 right-side-wrap-v1" style="margin-top: 1em;">
								<div class="widget-wrap">
										<aside class="widget widget-tagcloud-list">
										<h3 class="widget-title-v2">Tu Busqueda</h3>
										<div class="widget-content"> 
											<div id = "busquedas" class="widget-menu tagcloud">
												<?php 
												 if(isset($busqueda)){ 
												if(strpos($busqueda, "-")>0){
													$busquedax = "&".$busqueda;
												}else
													$busquedax = "$".$busqueda;
												 ?>
												<a href="#" id = <?php echo trim($busquedax); ?> onclick="inversa(<?php echo "'".$busquedax."'"; ?>)"><i class="far fa-times-circle">  </i>&nbsp;&nbsp;<?php echo $busqueda; ?></a>
											<?php } ?>
												
											</div>
										</div>
									</aside>
											<aside class="widget widget-tagcloud-list">
										<h3 class="widget-title-v2">Nombre Profesor</h3>
										<div class="widget-content">
										
											<div class="input-group">
      											<input id = "nombres" type="text" class="form-control" name="buscar" placeholder="Nacho, Mathias, William">
      											<span class="input-group-btn">
        											<button class="btn btn-danger btn-search" type="submit" onclick="filtroNombre()"  ><i class="fa fa-search"></i></button>
      											</span>
    											</div><!-- /input-group -->
    										
										</div>
									</aside>
									<aside class="widget widget-tagcloud-list">
										<h3 class="widget-title-v2">¿Qué quieres aprender?</h3>
										<div class="widget-content">
										
											<div class="input-group">
      											<input id = "especial" type="text" class="form-control" name="buscar" placeholder="Guitarra, Bateria, Bombo">
      											<span class="input-group-btn">
        											<button class="btn btn-danger btn-search" type="submit" onclick="filtroEspecilidad()"  ><i class="fa fa-search"></i></button>
      											</span>
    											</div><!-- /input-group -->
    										
										</div>
									</aside>
									<aside class="widget widget-tagcloud-list">
										<h3 class="widget-title-v2">¿Qué edades prefieres?</h3>
										<div class="widget-content">
										
											<div class="input-group">
      											<select class="form-control" id="edad" name="buscar">
      											 <option value="18-24">18-24</option>
                                                         <option value="25-34">25-34</option>
                                                         <option value="35-44">35-44</option>
                                                         <option value="45-54">45-54</option>
                                                         <option value="55-64">55-64</option>
                                                           <option value="65">65 en adelante</option>
                                                       </select>
      											<span class="input-group-btn">
        											<button class="btn btn-danger btn-search" type="submit" onclick="filtroEdad()" ><i class="fa fa-search"></i></button>
      											</span>
    											</div><!-- /input-group -->
    										
										</div>
									</aside>
									<aside class="widget widget-tagcloud-list">
										<h3 class="widget-title-v2">Genero</h3>
										<div class="widget-content">
											
											<div class="input-group">
      											<select class="form-control" id="genero" name="buscar">
      												<option value="todos">Todos</option>
      												<option value="Masculino">Masculino</option>
      												<option value="Femenino">Femenino</option>

    											</select>
      											<span class="input-group-btn">
        											<button class="btn btn-danger btn-search" type="submit" onclick="filtroGenero()"><i class="fa fa-search"></i></button>
      											</span>
    											</div><!-- /input-group -->
    										
										</div>
									</aside>

															<aside class="widget widget-tagcloud-list">
										<h3 class="widget-title-v2">¿Qué país prefieres?</h3>
										<div class="widget-content">
										
											<div class="input-group">
      											<select class="form-control" id="pais" name="buscar">
                                                                              <option value="AF">Afganistán</option>
      <option value="AL">Albania</option>
      <option value="DE">Alemania</option>
      <option value="AD">Andorra</option>
      <option value="AO">Angola</option>
      <option value="AI">Anguilla</option>
      <option value="AG">Antigua y Barbuda</option>
      <option value="DZ">Argelia</option>
      <option value="AR" selected>Argentina</option>
      <option value="AM">Armenia</option>
      <option value="AW">Aruba</option>
      <option value="AU">Australia</option>
      <option value="AT">Austria</option>
      <option value="AZ">Azerbaiyán</option>
      <option value="BS">Bahamas</option>
      <option value="BH">Bahrein</option>
      <option value="BD">Bangladesh</option>
      <option value="BB">Barbados</option>
      <option value="BE">Bélgica</option>
      <option value="BZ">Belice</option>
      <option value="BJ">Benin</option>
      <option value="BM">Bermudas</option>
      <option value="BO">Bolivia</option>
      <option value="BA">Bosnia y Herzegovina</option>
      <option value="BW">Botswana</option>
      <option value="BR">Brasil</option>
      <option value="BN">Brunei</option>
      <option value="BG">Bulgaria</option>
      <option value="BI">Burundi</option>
      <option value="CV">Cabo Verde</option>
      <option value="KH">Camboya</option>
      <option value="CM">Camerún</option>
      <option value="CA">Canadá</option>
      <option value="TD">Chad</option>
      <option value="CL">Chile</option>
      <option value="CN">China</option>
      <option value="CO">Colombia</option>
      <option value="KM">Comores</option>
      <option value="CR">Costa Rica</option>
      <option value="HR">Croacia (Hrvatska)</option>
      <option value="CU">Cuba</option>
      <option value="DK">Dinamarca</option>
      <option value="DJ">Djibouti</option>
      <option value="DM">Dominica</option>
      <option value="EC">Ecuador</option>
      <option value="EG">Egipto</option>
      <option value="ES">España</option>
      <option value="US">Estados Unidos</option>
      <option value="EE">Estonia</option>
      <option value="ET">Etiopía</option>
      <option value="FJ">Fiji</option>
      <option value="PH">Filipinas</option>
      <option value="FI">Finlandia</option>
      <option value="FR">Francia</option>
      <option value="GA">Gabón</option>
      <option value="GM">Gambia</option>
      <option value="GE">Georgia</option>
      <option value="GH">Ghana</option>
      <option value="GI">Gibraltar</option>
      <option value="GD">Granada</option>
      <option value="GR">Grecia</option>
      <option value="GL">Groenlandia</option>
      <option value="GP">Guadalupe</option>
      <option value="GU">Guam</option>
      <option value="GT">Guatemala</option>
      <option value="GN">Guinea</option>
      <option value="GW">Guinea-Bissau</option>
      <option value="HT">Haití</option>
      <option value="HN">Honduras</option>
      <option value="HU">Hungría</option>
      <option value="IN">India</option>
      <option value="ID">Indonesia</option>
      <option value="IR">Irán</option>
      <option value="IE">Irlanda</option>
      <option value="IS">Islandia</option>
      <option value="IL">Israel</option>
      <option value="ITA">Italia</option>
      <option value="JM">Jamaica</option>
      <option value="JP">Japón</option>
      <option value="JO">Jordania</option>
      <option value="KZ">Kazajistán</option>
      <option value="KE">Kenia</option>
      <option value="KG">Kirguizistán</option>
      <option value="KI">Kiribati</option>
      <option value="KW">Kuwait</option>
      <option value="LA">Laos</option>
      <option value="LS">Lesotho</option>
      <option value="LB">Líbano</option>
      <option value="LR">Liberia</option>
      <option value="LY">Libia</option>
      <option value="LI">Liechtenstein</option>
      <option value="LT">Lituania</option>
      <option value="LU">Luxemburgo</option>
      <option value="MG">Madagascar</option>
      <option value="MY">Malasia</option>
      <option value="MW">Malawi</option>
      <option value="MV">Maldivas</option>
      <option value="ML">Malí</option>
      <option value="MT">Malta</option>
      <option value="MX">México</option>
      <option value="FM">Micronesia</option>
      <option value="MD">Moldavia</option>
      <option value="MC">Mónaco</option>
      <option value="MN">Mongolia</option>
      <option value="MS">Montserrat</option>
      <option value="MZ">Mozambique</option>
      <option value="NA">Namibia</option>
      <option value="NR">Nauru</option>
      <option value="NP">Nepal</option>
      <option value="NI">Nicaragua</option>
      <option value="NE">Níger</option>
      <option value="NG">Nigeria</option>
      <option value="NU">Niue</option>
      <option value="NZ">Nueva Zelanda</option>
      <option value="OM">Omán</option>
      <option value="PA">Panamá</option>
      <option value="PK">Paquistán</option>
      <option value="PY">Paraguay</option>
      <option value="PE">Perú</option>
      <option value="PN">Pitcairn</option>
      <option value="PT">Portugal</option>
      <option value="PR">Puerto Rico</option>
      <option value="QA">Qatar</option>
      <option value="RO">Rumania</option>
      <option value="RU">Rusia</option>
      <option value="SN">Senegal</option>
      <option value="SC">Seychelles</option>
      <option value="SL">Sierra Leona</option>
      <option value="SG">Singapur</option>
      <option value="SO">Somalia</option>
      <option value="SD">Sudán</option>
      <option value="SE">Suecia</option>
      <option value="TH">Tailandia</option>
      <option value="TW">Taiwán</option>
      <option value="TZ">Tanzania</option>
      <option value="TJ">Tayikistán</option>
      <option value="TT">Trinidad y Tobago</option>
      <option value="TR">Turquía</option>
      <option value="TV">Tuvalu</option>
      <option value="UA">Ucrania</option>
      <option value="UG">Uganda</option>
      <option value="UY">Uruguay</option>
      <option value="VU">Vanuatu</option>
      <option value="VE">Venezuela</option>
      <option value="VN">Vietnam</option>
      <option value="YE">Yemen</option>
      <option value="ZM">Zambia</option>
      <option value="ZW">Zimbabue</option>
                                                                        </select>
      											<span class="input-group-btn">
        											<button class="btn btn-danger btn-search" type="submit" onclick="filtroPais()"><i class="fa fa-search"></i></button>
      											</span>
    											</div>
    										
										</div>
									</aside>
									<!-- /input-group 
									<aside class="widget widget-categories">
										<h3 class="widget-title-v2">Busca por instrumento musical</h3>
										<div class="widget-content">
											<?php foreach ($categoria as $item) { ?>
												
										
											<div id='categorymenu'>
												<ul class="widget-menu widget-submenu">   
												   <li class='has-sub'><a href='#'><i class="fas fa-angle-double-down"></i> <?php echo $item['nombre']; ?></a>
												   	<?php foreach ($subcategoria as $item2) {
													if ($item2['categoria_idcategoria']==$item['idcategoria']) { ?>
													  <ul>
														 <li>
														 	<form method="POST" action="busqueda">
														 		<input type="hidden" name="buscar" value="<?php echo $item2['nombre']; ?>">
														 		<input type="submit" name="" class="item-listado-busqueda" value="<?php echo $item2['nombre']; ?>">
														    </form>
														 </li>
													</ul>
													<?php }} ?>
												   </li>
												   
												   
												</ul>
												
											</div>
											<?php	} ?>
										</div>
									</aside> 
											-->
									<aside class="widget widget-tagcloud-list">
										<h3 class="widget-title-v2">Tags</h3>
										<div class="widget-content"> 
											<div class="widget-menu tagcloud">
												<a href="#">Guitarra</a>
												<a href="#">Musica</a>
												<a href="#">Cursos</a>
												<a href="#">Clases</a>
												<a href="#">Niños</a>
												<a href="#">Canto</a>
												<a href="#">Mujeres</a>
												<a href="#">Hombres</a>
											</div>
										</div>
									</aside>
									<aside class="widget widget-tagcloud-list">
										<div class="widget-content"> 
											<div class="add">
												<a href="#"><img alt="" src="img/others/promo-1.png"></a>
											</div>
										</div>
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

				<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
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
var cantidad = document.getElementById("cantidad").value;
var busq = document.getElementById("set_busqueda").value;
var elementEspecialidad;
var elementEdad;
var elementGenero;
var elementPais;
var elementosMostrados;
var ids = [];
var idsRecomendados = [];
var palabraEspecial;
var edadMy;
var edadMe; 
var idsInterna = [];
	console.log("busqueda "+busq);		 
function destaca(){

	document.getElementById("conline").innerHTML="La búsqueda no fue exitosa pero que le recomendamos estos profesores:";
	console.log(cantidad);
	
var cantidadNumeros = cantidad;
var myArray = []
while(myArray.length < 4 ){
  var numeroAleatorio = Math.ceil(Math.random()*cantidadNumeros);
  var existe = false;
  for(var i=0;i<myArray.length;i++){
	if(myArray [i] == numeroAleatorio){
        existe = true;
        break;
    }
  }
  if(!existe){
    myArray[myArray.length] = numeroAleatorio;
  }

}
for(var j = 0; j < myArray.length; j++){

document.getElementById(myArray[j]).style.display = "block";
			

		}
}
function setBusqueda()
{
document.getElementById("conline2").style.display = "none";
	for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

		} 

 document.getElementById("loadE").style.display="block";
document.getElementById("conline").innerHTML="Hemos encontrado...";

	 setTimeout(function(){ 
 document.getElementById("loadE").style.display="none";

 var c=0;
 var palabra;
 var palabray;
 var palabrax;

//alert("estoy en busqueda");
//console.log(" set busqueda");


//	console.log("busqueda"+busq);	
	  console.log(sessionStorage.getItem("idsSession"));

	if (sessionStorage.getItem("busquedaAfuera")){
		console.log("estoy en busqueda afuera");
		console.log(sessionStorage.getItem("busquedaAfuera"));
		palabra =  sessionStorage.getItem('busquedaAfuera');
		busq = palabra;
		palabray = palabra.replace(" ","");
		palabrax = '"$'+palabray+'"';

		document.getElementById("busquedas").innerHTML += "<a href='#' id = $"+palabra+" onclick='inversa("+palabrax+")'><i class='far fa-times-circle'>"+palabra+"</a>";
 


	}


	if(sessionStorage.getItem("idsSession")){
			
		ids = sessionStorage.getItem("idsSession");
		ids = ids.split(",")
		console.log("carga de ids preexistentes");
		console.log(ids);
		console.log(ids.length);
		//console.log(sessionStorage.getItem("idsSession"));

		for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

		} 
		for(var i = 0; i<ids.length; i++){

		document.getElementById(ids[i]).style.display = "block";
		console.log(ids[i]);	
		}
		document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
		if(ids.length==0)
			destaca();
	}else{
	if(busq=="nada"){
		for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "block";
			ids[j]=document.getElementById(j).id;
				
	}
	
		document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
		if(ids.length==0)
			destaca();

	}else{	
	sessionStorage.setItem('busquedaAfuera',busq);	
		console.log("busqueda Afuera");
		console.log(sessionStorage.getItem("busquedaAfuera"));
	if(busq.indexOf("-")>0){

	for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

	}
var rango = busq.split("-");
edadMy = rango[1];
edadMe = rango[0];
for(var xx = rango[0]-1; xx<=rango[1]; xx++){
var elements = document.getElementsByClassName(xx);

if(elements.length>0){

for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
		ids[c] = elements[i].id; 		
		c++;
}	
//elementosMostrados = elements;

}

}


console.log("busqueda primera");
console.log(ids);

sessionStorage.setItem('idsSession',ids);	

		document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
			if(ids.length==0)
			destaca();

	}else{	 

		var elements = document.getElementsByClassName(busq);

		//console.log(elements);
		for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

		}
		for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
		ids[i] = elements[i].id; 		
		}

sessionStorage.setItem('idsSession',ids);

		document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
			if(ids.length==0)
			destaca();
console.log(sessionStorage.getItem("idsSession"));
		}

	}
}

	
	 

	if (sessionStorage.getItem("valorEspecialidad")){

		palabra =  sessionStorage.getItem('valorEspecialidad');
		palabray = palabra.replace(" ","");
		palabrax = '"!'+palabray+'"';

		document.getElementById("busquedas").innerHTML += "<a href='#' id = !"+palabray+" onclick='inversa("+palabrax+")'><i class='far fa-times-circle'>"+palabra+"</a>";
 


	}
	
	 

	 

	if (sessionStorage.getItem("valorNombre")){
	
		palabra =  sessionStorage.getItem('valorNombre');
		palabray = palabra.replace(" ","");
		palabrax = '"*'+palabray+'"';

		document.getElementById("busquedas").innerHTML += "<a href='#' id = *"+palabray+" onclick='inversa("+palabrax+")'><i class='far fa-times-circle'>"+palabra+"</a>";
 


	}

		if (sessionStorage.getItem("valorEdad")){
			palabra = sessionStorage.getItem("valorEdad");
	 		palabrax = '"&'+palabra+'"';

	  document.getElementById("busquedas").innerHTML += "<a href='#' id = &"+palabra+" onclick='inversa("+palabrax+")'><i class='far fa-times-circle'>"+palabra+"</a>";
		}

		if (sessionStorage.getItem("valorGenero")){
		
			palabra = sessionStorage.getItem("valorGenero");
			palabrax = '"¿'+palabra+'"';

			document.getElementById("busquedas").innerHTML += "<a href='#' id = ¿"+palabra+" onclick='inversa("+palabrax+")'><i class='far fa-times-circle'>"+palabra+"</a>";
		}


		if (sessionStorage.getItem("valorPais")){
		
			palabra = sessionStorage.getItem("valorPais");
			 palabrax = '"?'+palabra+'"';

			document.getElementById("busquedas").innerHTML += "<a href='#' id = ?"+palabra+" onclick='inversa("+palabrax+")'><i class='far fa-times-circle'>"+palabra+"</a>";
		}
	/* 
		if (sessionStorage.getItem("valorGenero")){
		var palabra =  sessionStorage.getItem('valorGenero');
		 

		var elements = document.getElementsByClassName(palabra);

		//console.log(elements);
		for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

		}
		for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
		}

	} 

		if (sessionStorage.getItem("valorPais")){
		var palabra =  sessionStorage.getItem('valorPais');
		 

		var elements = document.getElementsByClassName(palabra);

		//console.log(elements);
		for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

		}
		for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
		}

	}

		if (sessionStorage.getItem("valorEdad")){
		var palabra =  sessionStorage.getItem('valorEdad');
		 

		var elements = document.getElementsByClassName(palabra);

		//console.log(elements);
		for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

		}
		for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
		}

	}

	*/
	}, 3000);
}
window.onload = setBusqueda();
function getCleanedString(cadena){
   // Definimos los caracteres que queremos eliminar
   var specialChars = "!@#$^&%*()+=-[]\/{}|:<>?,.";

   // Los eliminamos todos
   for (var i = 0; i < specialChars.length; i++) {
       cadena= cadena.replace(new RegExp("\\" + specialChars[i], 'gi'), '');
   }   

   // Lo queremos devolver limpio en minusculas
   cadena = cadena.toLowerCase();



   // Quitamos acentos y "ñ". Fijate en que va sin comillas el primer parametro
   cadena = cadena.replace(/á/gi,"a");
   cadena = cadena.replace(/é/gi,"e");
   cadena = cadena.replace(/í/gi,"i");
   cadena = cadena.replace(/ó/gi,"o");
   cadena = cadena.replace(/ú/gi,"u");
//   cadena = cadena.replace(/ñ/gi,"n");
   return cadena;
}

function filtroNombre(){

document.getElementById("conline2").style.display = "none";
		for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

		} 

 document.getElementById("loadE").style.display="block";
document.getElementById("conline").innerHTML="Hemos encontrado...";

	 setTimeout(function(){ 
 document.getElementById("loadE").style.display="none";

	//var elementosEncontrados = [];
var palabra =  document.getElementById("nombres").value;
palabra = getCleanedString(palabra);
palabraEspecial = palabra;
var palabray = palabra.replace(" ","");
var palabrax = '"*'+palabray+'"';
var tags = document.getElementById("busquedas").children;

document.getElementById("busquedas").innerHTML += "<a href='#' id = *"+palabray+" onclick='inversa("+palabrax+")'><i class='far fa-times-circle'>"+palabra+"</a>";

sessionStorage.setItem('valorNombre',palabra );

palabra = getCleanedString(palabra);
console.log("palabra sin acento"+palabra);

var c = 0;
var newids = [];

 var elements= document.getElementsByClassName(palabra);
 
 if(ids.length>0){
 
for(var i = 0; i<ids.length; i++){
 
for(var j = 0; j < elements.length; j++){

	if(ids[i] == elements[j].id){
		newids[c] = elements[j].id;
		//elementosMostrados[i].style.display = "block";
		console.log("igual");
		c++;
		}else{
		console.log("diferente");
	}  
		

	}
	
}
for(var h = 0; h < cantidad; h++){

			document.getElementById(h).style.display = "none";
	

}

for(var k = 0; k<newids.length; k++){
document.getElementById(newids[k]).style.display = "block";

}
ids = newids;


//elementosMostrados = elements;
console.log("ya hice otra busqueda");


//sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
	if(ids.length==0)
			destaca();
console.log(sessionStorage.getItem("idsSession"));
 }else{
 	if(tags.length==0){
for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

}
for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
		ids[i] = elements[i].id; 		
}	
//elementosMostrados = elements;
console.log("busqueda primera");
console.log(ids);

//sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
	if(ids.length==0)
			destaca();
console.log(sessionStorage.getItem("idsSession"));
}
}
 			}, 3000);
}


function filtroEspecilidad(){

document.getElementById("conline2").style.display = "none";
			for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

		} 

 document.getElementById("loadE").style.display="block";
document.getElementById("conline").innerHTML="Hemos encontrado...";

	 setTimeout(function(){ 
 document.getElementById("loadE").style.display="none";

//var elementosEncontrados = [];
var palabra =  document.getElementById("especial").value;
palabra = palabra.toLowerCase();
palabraEspecial = palabra;
var palabray = palabra.replace(" ","");
var palabrax = '"!'+palabray+'"';
var tags = document.getElementById("busquedas").children;

document.getElementById("busquedas").innerHTML += "<a href='#' id = !"+palabray+" onclick='inversa("+palabrax+")'><i class='far fa-times-circle'>"+palabra+"</a>";

sessionStorage.setItem('valorEspecialidad',palabra );
console.log(sessionStorage.getItem('valorEspecialidad'));

//console.log(palabra);

var c = 0;
var newids = [];

 var elements= document.getElementsByClassName(palabra);
 
 if(ids.length>0){
 
for(var i = 0; i<ids.length; i++){
 
for(var j = 0; j < elements.length; j++){

	if(ids[i] == elements[j].id){
		newids[c] = elements[j].id;
		//elementosMostrados[i].style.display = "block";
		console.log("igual");
		c++;
		}else{
		console.log("diferente");
	}  
		

	}
	
}
for(var h = 0; h < cantidad; h++){

			document.getElementById(h).style.display = "none";
	

}

for(var k = 0; k<newids.length; k++){
document.getElementById(newids[k]).style.display = "block";

}
ids = newids;


//elementosMostrados = elements;
console.log("ya hice otra busqueda");
console.log(ids);

//sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
	if(ids.length==0)
			destaca();
console.log(sessionStorage.getItem("idsSession"));
 }else{
 	if(tags.length==0){
for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

}
for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
		ids[i] = elements[i].id; 		
}	
//elementosMostrados = elements;
console.log("busqueda primera");
console.log(ids);

//sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
	if(ids.length==0)
			destaca();
console.log(sessionStorage.getItem("idsSession"));
}
}
	}, 3000);
}


function filtroGenero(){

document.getElementById("conline2").style.display = "none";
	for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

		} 

 document.getElementById("loadE").style.display="block";
document.getElementById("conline").innerHTML="Hemos encontrado...";

	 setTimeout(function(){ 
 document.getElementById("loadE").style.display="none";

var palabra =  document.getElementById("genero").value;
palabra = palabra.toLowerCase();
var palabrax = '"¿'+palabra+'"';
var tags = document.getElementById("busquedas").children;

document.getElementById("busquedas").innerHTML += "<a href='#' id = ¿"+palabra+" onclick='inversa("+palabrax+")'><i class='far fa-times-circle'>"+palabra+"</a>";

sessionStorage.setItem('valorGenero',palabra );
document.getElementById("genero").disabled = true;

console.log(palabra);

var c = 0;
var newids = [];

 var elements= document.getElementsByClassName(palabra);
console.log(elements); 
 if(ids.length>0){
 
for(var i = 0; i<ids.length; i++){
 
for(var j = 0; j < elements.length; j++){

	if(ids[i] == elements[j].id){
		newids[c] = elements[j].id;
		//elementosMostrados[i].style.display = "block";
		console.log("igual");
		c++;
	}
	}  
		
}
for(var h = 0; h < cantidad; h++){

			document.getElementById(h).style.display = "none";
	

}

for(var k = 0; k<newids.length; k++){
document.getElementById(newids[k]).style.display = "block";

}
ids = newids;


//elementosMostrados = elements;
console.log("ya hice otra busqueda");
console.log(ids);

//sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
	if(ids.length==0)
			destaca();
console.log(sessionStorage.getItem("idsSession"));
 }else{

 	if(tags.length==0){
for(var j = 0; j < cantidad; j++){

document.getElementById(j).style.display = "none";
	

}
for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
		ids[i] = elements[i].id; 		
}	
}
//elementosMostrados = elements;
console.log("busqueda primera");
console.log(ids);

//sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
	if(ids.length==0)
			destaca();
console.log(sessionStorage.getItem("idsSession"));
}
	}, 3000);
}

function filtroPais(){

document.getElementById("conline2").style.display = "none";
	for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

		} 

 document.getElementById("loadE").style.display="block";
document.getElementById("conline").innerHTML="Hemos encontrado...";

	 setTimeout(function(){ 
 document.getElementById("loadE").style.display="none";
var palabra =  document.getElementById("pais").value;
var palabrax = '"?'+palabra+'"';
var tags = document.getElementById("busquedas").children;
			
document.getElementById("busquedas").innerHTML += "<a href='#' id = ?"+palabra+" onclick='inversa("+palabrax+")'><i class='far fa-times-circle'>"+palabra+"</a>";

sessionStorage.setItem('valorPais',palabra );
palabra = palabra.toLowerCase();
console.log("palabra pais: "+palabra);
document.getElementById("pais").disabled = true;
var c = 0;
var newids = [];


 var elements= document.getElementsByClassName(palabra);
 ///document.getElementById("demo").innerHTML = "Hello World!";
 console.log(elements);
 console.log(ids);
 if(ids.length>0){
 
for(var i = 0; i<ids.length; i++){
 
for(var j = 0; j < elements.length; j++){

	if(ids[i] == elements[j].id){
		newids[c] = elements[j].id;
		//elementosMostrados[i].style.display = "block";
		console.log("igual");
		c++;
	}
	}  
		
}
for(var h = 0; h < cantidad; h++){

			document.getElementById(h).style.display = "none";
	

}

for(var k = 0; k<newids.length; k++){
document.getElementById(newids[k]).style.display = "block";

}
ids = newids;


//elementosMostrados = elements;
console.log("ya hice otra busqueda");
console.log(ids);

//sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
	if(ids.length==0)
			destaca();
 }else{
console.log(tags.length);
 	if(tags.length==0){
for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

}
for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
		ids = elements[i].id; 		
}	
//elementosMostrados = elements;
console.log("busqueda primera");
console.log(ids);

//sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
	if(ids.length==0)
			destaca();
}

}
	}, 3000);
}
	
function filtroEdad(){

document.getElementById("conline2").style.display = "none";
	for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

		} 

 document.getElementById("loadE").style.display="block";
document.getElementById("conline").innerHTML="Hemos encontrado...";

	 setTimeout(function(){ 
 document.getElementById("loadE").style.display="none";
var palabra =  document.getElementById("edad").value;
document.getElementById("edad").disabled = true;
var rango = palabra.split("-");
edadMe = rango[0];
edadMy = rango[1];
var palabrax = '"&'+palabra+'"';
var tags = document.getElementById("busquedas").children;

document.getElementById("busquedas").innerHTML += "<a href='#' id = &"+palabra+" onclick='inversa("+palabrax+")'><i class='far fa-times-circle'>"+palabra+"</a>";
sessionStorage.setItem('valorEdad',palabra );
//console.log(palabra);

var c = 0;
var newids = [];


var elements;
 
 if(ids.length>0){
 
for(var h = 0; h < cantidad; h++){

			document.getElementById(h).style.display = "none";
	

} 
for(var xx = rango[0]-1; xx<=rango[1]; xx++){
elements = document.getElementsByClassName(xx)
if(elements.length>0){
for(var i = 0; i<ids.length; i++){
 
for(var j = 0; j < elements.length; j++){

	if(ids[i] == elements[j].id){
		newids[c] = elements[j].id;
		//elementosMostrados[i].style.display = "block";
		console.log("igual");
		c++;
	}
	}  
		
}

}


for(var k = 0; k<newids.length; k++){
document.getElementById(newids[k]).style.display = "block";

}

}

ids = newids;
//elementosMostrados = elements;
console.log("ya hice otra busqueda");
console.log(ids);

//sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
 document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
 	if(ids.length==0)
			destaca();
 }else{

 	if(tags.length==0){ 
for(var xx = rango[0]-1; xx<=rango[1]; xx++){
 elements = document.getElementsByClassName(xx);

for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

}
if(elements.length>0){

for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
		ids[c] = elements[i].id; 		
}	
//elementosMostrados = elements;

}

}


console.log("busqueda primera");
console.log(ids);
//sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
	if(ids.length==0)
			destaca();
}
}
 }, 3000);
}

function busquedainterna(pal){


var tags = document.getElementById("busquedas").children;
console.log("busqueda interna");


var c = 0;
var newids = [];
pal = pal.toLowerCase();
 var elements= document.getElementsByClassName(pal);
console.log(elements); 

 if(idsInterna.length>0){
 
for(var i = 0; i<idsInterna.length; i++){
 
for(var j = 0; j < elements.length; j++){

	if(idsInterna[i] == elements[j].id){
		newids[c] = elements[j].id;
		//elementosMostrados[i].style.display = "block";
		console.log("igual");
		c++;
	}
	}  
		
}
for(var h = 0; h < cantidad; h++){

			document.getElementById(h).style.display = "none";
	

}

for(var k = 0; k<newids.length; k++){
document.getElementById(newids[k]).style.display = "block";

}
idsInterna = newids;

ids = idsInterna;
//elementosMostrados = elements;
console.log("ya hice otra busqueda interna");
console.log(ids);

//sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
document.getElementById("conline").innerHTML="Profesores Online "+idsInterna.length;
console.log(sessionStorage.getItem("idsSession"));
 }else{

for(var j = 0; j < cantidad; j++){

document.getElementById(j).style.display = "none";
	

}
for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
		idsInterna[i] = elements[i].id; 	
		console.log(elements[i].id);	
}	
//elementosMostrados = elements;
console.log("busqueda primera");
console.log(idsInterna);
ids = idsInterna;
//sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',idsInterna);
document.getElementById("conline").innerHTML="Profesores Online "+idsInterna.length;
console.log(sessionStorage.getItem("idsSession"));
}
}
	
function inversa(tag){

document.getElementById("conline2").style.display = "none";
for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

		} 

 document.getElementById("loadE").style.display="block";
document.getElementById("conline").innerHTML="Hemos encontrado...";

	 setTimeout(function(){ 
 document.getElementById("loadE").style.display="none";
var stag = tag.replace(" ","");

var imagen = document.getElementById(stag);
var tags = document.getElementById("busquedas").children;
var elements;
var newids =[];
var c=0;
var band = 0;
var banderaEdad=0;
var edadids=[];
var e=0;
var elements2;
var bandera2=0;

console.log("palabra a borrar: "+stag);

if(stag.charAt(0)=="$"){
	sessionStorage.removeItem('busquedaAfuera');
	console.log(stag);
}

if(stag.charAt(0)=="&"){
document.getElementById("edad").disabled = false;
sessionStorage.removeItem('valorEdad');

}

if(stag.charAt(0)=="!"){
sessionStorage.removeItem('valorEspecialidad');


}

if(stag.charAt(0)=="*"){
sessionStorage.removeItem('valorNombre');

}

if(stag.charAt(0)=="¿"){
	document.getElementById("genero").disabled = false;
sessionStorage.removeItem('valorGenero');

}

if(stag.charAt(0)=="?"){
document.getElementById("pais").disabled = false;
sessionStorage.removeItem('valorPais');

}

if(tags.length==1){

sessionStorage.clear();

for(var xx = 0; xx < cantidad; xx++){

			document.getElementById(xx).style.display = "block";
			newids[xx]=xx;

}

ids = newids;
document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
	if(ids.length==0)
			destaca();
}else{
for(var j = 0; j < tags.length; j++){

		if(tags[j].id == stag){
			console.log(tags[j].id);
		}else{
			var es = tags[j].id;	
			console.log(es);	
		if(es.charAt(0)=="!"){
			
						elements= document.getElementsByClassName(es.substring(1));
			console.log(palabraEspecial);
			if(elements.length==0){
 		band = 1;
	}
	if(band==0){
	/*for(var i = 0; i<elements.length; i++){
	 newids[c] = elements[i].id;
	console.log("cargando elemenos vector");
	console.log(elements[i].id);

		c++; 
		}*/

		busquedainterna(es.substring(1));
	}
	}else if(es.charAt(0)=="&"){
		banderaEdad = 1;	

		}else{
		elements= document.getElementsByClassName(es.substring(1));
		if(elements.length==0){
 		band = 1;
	}
	if(band==0){
	/*	
	for(var i = 0; i<elements.length; i++){
	 newids[c] = elements[i].id;
	console.log("cargando elemenos vector");
	console.log(elements[i].id);

		c++; 
		}*/
		busquedainterna(es.substring(1));

	}
	}


}
	
}


}
if(band==1){
	for(var h = 0; h < cantidad; h++){

			document.getElementById(h).style.display = "none";
	

}
}else{
		if(banderaEdad==1){
console.log("estoyen bandera edad");
console.log("menor "+edadMe);
console.log("mayor "+edadMy);
if(idsInterna.length>0){
for(var xx = edadMe-1; xx<=edadMy; xx++){
elements2 = document.getElementsByClassName(xx);

if(elements2.length>0){
console.log(elements2);
console.log(xx);
console.log(idsInterna); 
	for(var yy = 0; yy<idsInterna.length; yy++){
 
	for(var zz = 0; zz < elements2.length; zz++){

	if(idsInterna[yy] == elements2[zz].id){
		edadids[e] = elements2[zz].id;
		//elementosMostrados[i].style.display = "block";
		console.log("igual");
		e++;
		}
	}  
		
}


if(edadids!=undefined){
	for(var k = 0; k<edadids.length; k++){

document.getElementById(edadids[k]).style.display = "block";

				}
			}
		}
	}

}else{

for(var xx = edadMe-1; xx<=edadMy; xx++){
elements2 = document.getElementsByClassName(xx);

if(elements2.length>0){

 
	for(var zz = 0; zz < elements2.length; zz++){

		edadids[e] = elements2[zz].id;
		//elementosMostrados[i].style.display = "block";
		console.log("igual");
		e++;
	}  
		



if(edadids!=undefined){
	for(var k = 0; k<edadids.length; k++){

document.getElementById(edadids[k]).style.display = "block";

				}
			}
		}
	}

}
ids = edadids;

sessionStorage.setItem('idsSession',ids);
document.getElementById("conline").innerHTML="Hemos encontrado "+ids.length+" profesores";
	if(ids.length==0)
			destaca();
}

}
var padre = imagen.parentNode;
padre.removeChild(imagen);

idsInterna = [];
}, 3000);


}

</script> 