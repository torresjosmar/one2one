<?php 
/*$item_id = 0;
foreach ($profesores as $key) {
$axuliar = explode(",", $key['especialidad']);
foreach ($axuliar as $key2) {

	$key2 = strtolower($key2);
	$final = explode(" ", $key2);
	foreach ($final as $key3 ) {
	 	# code...

 ?>
<input type="hidden" id='<?php echo $item_id; ?>'  value='<?php echo $key3 ;?>' >

<?php 

$item_id++;
}

}


}

?>

*/

?>
<!--Start Page Content -->
			<div class="page-content" style="    margin-top: 18px;">
				<!--Start Page Header -->
				<div class="page-header-v1 bg-4 overlay-bg  text-center">
					<div class="page-header-inner">
						<p class="page-category">Tus clases particulares, ahora online</p>
						<h2 class="page-title">Listado de tus profesores en linea</h2>
						<div class="breadcrumbs">
							
						</div>
					</div>
				</div>
				<!--End Page Header -->
				<!-- Start Small image blog Post area -->
				<div class="shop-area shop-page bg-white-2">
					<div class="container">
						<div class="row">
							<!--Start Left Side -->
							<div class="col-md-8 left-side-wrap-v1 list-profesores">
								<!--Start shop wrap area -->
								<div class="shop-content-area">
									
									<!-- End Product toolbar -->
									<!--Start Product List  -->
									<div class="row">
										<div class="tab-content">
											
											<div role="tabpanel" class="tab-pane fade in active" id="list">
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
				<div class="<?php echo $especialidades.' '.$item['edad'].' '.$item['genero'].' '.$item['pais'];  ?>" id = "<?php echo $item_id; ?>" >
				<a href="perfilprofesor/<?php echo $item['idprofesor'].'-'.$item['nombres']; ?>">	
												<!-- Start List View Mode -->
												<div class="product-list-view-area clear">
													<!-- Start Single product -->
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
																<h3 class="pro-title"><a href="perfilprofesor/<?php echo $item['idprofesor'].'-'.$item['nombres']; ?>"><?php echo $item['nombres'] ;  ?></a></h3>
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
													<!-- End Single product -->
																									
													
												</div>
												</div>
												<!-- End List View Mode -->
												<?php 
												$item_id++;
											} ?>
											<input type="hidden" id='cantidad' value=<?php echo $item_id;?> >
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
						<!--Start Right Side -->
							<div class="col-md-4 right-side-wrap-v1" style="margin-top: 1em;">
								<div class="widget-wrap">
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
      											<input type="number" id = "edad" class="form-control" name="buscar" placeholder="Edades">
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
    											</div><!-- /input-group -->
    										
										</div>
									</aside>
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

<script type="text/javascript">
var cantidad = document.getElementById("cantidad").value;
//var palabras = [];
//for(var i = 0; i < cantidad; i++){
//palabras[i] = document.getElementById(i).value;

//}
//console.log(palabras);
function setBusqueda()
{
	if (sessionStorage.getItem("valorEspecialidad")){
		var palabra =  sessionStorage.getItem('valorEspecialidad');
		 

		var elements = document.getElementsByClassName(palabra);

		//console.log(elements);
		for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

		}
		for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
		}

	} 
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

	sessionStorage.clear();
}
window.onload = setBusqueda();



	function filtroEspecilidad(){

var palabra =  document.getElementById("especial").value;

palabra = palabra.toLowerCase();
sessionStorage.setItem('valorEspecialidad',palabra );
//console.log(palabra);
var elements = document.getElementsByClassName(palabra);

		//console.log(elements);
for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

}
for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
}


}


function filtroGenero(){

var palabra =  document.getElementById("genero").value;
sessionStorage.setItem('valorGenero',palabra );

//console.log(palabra);
var elements = document.getElementsByClassName(palabra);

		//console.log(elements);
for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

}
for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
}


}

function filtroPais(){

var palabra =  document.getElementById("pais").value;
sessionStorage.setItem('valorPais',palabra );
//console.log(palabra);
var elements = document.getElementsByClassName(palabra);

		//console.log(elements);
for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

}
for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
}


}
	
function filtroEdad(){

var palabra =  document.getElementById("edad").value;
sessionStorage.setItem('valorEdad',palabra );
//console.log(palabra);
var elements = document.getElementsByClassName(palabra);

		//console.log(elements);
for(var j = 0; j < cantidad; j++){

			document.getElementById(j).style.display = "none";
	

}
for(var i = 0; i<elements.length; i++){

		elements[i].style.display = "block";
}


}
	


</script>