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
									<?php echo $this->element('sidebar'); ?>
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

var elementEspecialidad;
var elementEdad;
var elementGenero;
var elementPais;
var elementosMostrados;
var ids = [];
function setBusqueda()
{
sessionStorage.clear();
/*
if(sessionStorage.getItem(idsSession)){

	ids = sessionStorage.getItem(idsSession);
	console.log("ids precargados");
	console.log(ids);
}


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

*/	sessionStorage.clear();
}
window.onload = setBusqueda();



function filtroEspecilidad(){
//var elementosEncontrados = [];
var palabra =  document.getElementById("especial").value;
sessionStorage.setItem('valorEspecialidad',palabra );

palabra = palabra.toLowerCase();
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

sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
 }else{
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

sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);

}

}


function filtroGenero(){

var palabra =  document.getElementById("genero").value;
sessionStorage.setItem('valorGenero',palabra );
//palabra = palabra.toLowerCase();
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

sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
 }else{
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

sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
}

}

function filtroPais(){

var palabra =  document.getElementById("pais").value;
sessionStorage.setItem('valorPais',palabra );
//palabra = palabra.toLowerCase();
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

sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
 }else{
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

sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);
}


}
	
function filtroEdad(){

var palabra =  document.getElementById("edad").value;
sessionStorage.setItem('valorEdad',palabra );
palabra = palabra.toLowerCase();
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

sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);

 }else{
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

}
sessionStorage.removeItem('idsSession');
sessionStorage.setItem('idsSession',ids);


}
	


</script>