<script type="text/javascript">
	sessionStorage.clear();
</script>
<div class="wrapper">
		

<!-- Start Slider Area -->
<section class="slider-area" style="    margin-top: 18px;">
				<div class="bend niceties preview-2">
					<div id="ensign-nivoslider" class="slides">	
						<?php 
							echo $this->Html->image("sliders/slide-1.png", [
    						"alt" => "Brownies", "title" => "#slider-direction-1"
							]);
						 ?>
						<!--<img src="img/sliders/slide-1.png" alt="" title="#slider-direction-1"  />
						-->
					</div>
					<!-- direction 1 -->
					<div id="slider-direction-1" class="slider-direction slider-one">
						<div class="container">
							<div class="row">
								<div class="col-md-12 text-right">
									<div class="slider-content" style="text-align: center;" >
										<!-- layer 1 -->
										<div class="layer-1-1">
											<h5 class="title1" style="color: white;font-weight: 300;">Todos los <strong> instrumentos</strong>,Todas las <strong> edades</strong>! </h5>
										</div>
										<!-- layer 2 -->
										<div class="layer-1-2">
										
										</div>
										<!-- layer 3 -->
										<div class="layer-1-3" style="">
											<p class="title3" style="color: white;"><b>One2one</b> es la única escuela de música <b>online</b> <br> a la que puedes acceder desde cualquier parte del <b>mundo</b>.</p><br>
											
											<p class="title3" style="color: white;">Aprende rápidamente el <b>instrumento</b> que te gusta, <br> con un profesor en vivo a través de clases personalizadas.</p>

											
										<!-- layer 4 -->
										<div class="layer-1-4">
											<div class="container">
 
  <form method="POST" action="busqueda">
    <div class="form-group">
      <input type="text" class="form-control" id="usr" name="buscar" placeholder="Ingresa tu busqueda ejemplo: <Guitarra>" onclick="showsearchoption()" autocomplete="off">
      <input type="submit" value="Buscar" class="btn-wi">
    </div>
    <div class="form-group">
      	<div class="container" id="search-option" style="background: #fff; display: none;float: left;position: relative;width: 80%;">
      		<p style="text-align: left; color: #424242; line-height: 30px;">
      			Te recomendamos: Cursos de bateria, guitarra o canto
      		</p>
      	</div>
      </div>
  <?= $this->Form->end() ?>
										</div>
</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- direction 2 
					<div id="slider-direction-2" class="slider-direction slider-two">
						<div class="container">
							<div class="row">
								<div class="col-md-12 text-left">
									<div class="slider-content">
									
										<div class="layer-2-1">
											<h5 class="title1" style="color: white;">Todas las edades </h5>
										</div>
									
										<div class="layer-2-2">
										
										</div>
									
										<div class="layer-2-3">
											<p class="title3" style="color: white;">One2one es la única escuela de música online a la que puedes <br> acceder desde cualquier parte del mundo.</p>
										</div>
									
										<div class="layer-2-4">
											<a href="#" class="estut-btn active">registro online</a>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>-->
				</div>
			</section>
			<!-- End Slider Area -->




 <!-- Start Latest Blog Area -->	
			<section class="latest-blog-area bg-gray padding100">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="area-headding text-center">
								<h2 class="section-title">Principales Profesores</h2>
								<p>Realiza las clases el día y hora que mejor se ajuste a tu disponibilidad<br> horaria, incluso los fines de semana y desde cualquier lugar con acceso a Internet: desde casa, en el trabajo.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="blog-list">
							<?php foreach ($profesores as $item) {?>
							<!-- Start Single Blog -->
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="single-blog text-left bg-white">
									<div class="blog-thumb overlay-bg">

					<a href="perfilprofesor/<?php echo $item['idprofesor'].'-'.$item['nombres']; ?>">	
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
									<div class="blog-info text-left">
										
										<span class="blog-category c-green"><?php echo $item['especialidad'];  ?></span>
										
											
										
										<h3 class="blog-title"><a href="perfilprofesor/<?php echo $item['idprofesor'].'-'.$item['nombres']; ?>"><?php echo $item['nombres'] ;  ?></a></h3>
										<div class="pro-rating star professor-profile	">
																<span class="yes"><i class="fa fa-star"></i></span>
																<span class="yes"><i class="fa fa-star"></i></span>
																<span class="yes"><i class="fa fa-star"></i></span>
																<span class="yes"><i class="fa fa-star"></i></span>
																<span class="yes"><i class="fa fa-star-half-o"></i></span>
											</div>
																			
										<p class="blog-content"><?php echo substr($item['descripcion'], 0, 160)."...";  ?></p>
										
									</div>
								</div>
							</div><?php } ?>
							<!-- End Single Blog -->
							
						</div>
					</div>
				</div>
			</section>
			<!-- End Latest Blog Area -->	




		 	<!-- Start Testimonials Area -->
             <div class="testimonial-area bg-1 overlay-bg padding100">
				<div class="testimonial-container owl-controls-style-1">
			 		
			 		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			 			
			 		
					<!-- Start Single Testimonial -->

    				<!-- Wrapper for slides -->
    				<div class="carousel-inner">
    				 <div class="item active">	
					<div class="single-testimonial text-center">
						<div class="client-pic">
							<?php 
								echo $this->Html->image("testimonial/1testi.png", [
    						"alt" => "Miguel Auteri", "title" => "Miguel Auteri", "class" => "img-circle"
							]);
							 ?> 
						</div>
						<p>One2one me ha dado una posibilidad unica de aprender musica seriamente. Vivo en Charata, Prov del. Chaco a 270 km de Resistencia y 300 km de Corrientes, donde hay escuelas de musica. Soy medico, tengo 60 años y obviamente por cuestiones de distancia, tiempo y costos, seria imposible asistir a una de ella, cosa que quise hacer siempre. El año pasado se me hizo realidad.<br> Tomo una clase semanal de instrumento y otra de audioperceptiva on line, en tiempo real, como si estuviera en el aula de la escuela. Los profe muy buen nivel, sobre todo mucha paciencia, te dan la posiblidad de contactarte con ellos y se empeñan para que aprendas. La verdad, " el sueño del pibe". Estoy feliz.</p>
						<p class="client-name">Miguel Auteri  </p>
						<p class="review-date">Bajo eléctrico </p>
						<p class="review-date">Charata, Argentina</p>
					</div>
					</div>
					<!-- End Single Testimonial -->
					
						<!-- Start Single Testimonial -->
						<div class="item">
					<div class="single-testimonial text-center">
						<div class="client-pic">
							<?php 
								echo $this->Html->image("testimonial/test.jpeg", [
    						"alt" => "Miguel Auteri", "title" => "Miguel Auteri", "class" => "img-circle"
							]);
							 ?>
						</div>
						<p>
							La selección de profesores llevada a cabo con el equipo de introducción, me permitió conocer al Profesor William y establecer una muy interesante relación en la cual se percibe no sólo la calidad de su conocimiento musical sino también humana.
Si bien no hemos tenido el agrado de conocernos personalmente, lo cual mantiene intacta la virtualidad del sistema educativo Online, existe un respeto mutuo que denota una gran integridad de la relación.
 
Quiero destacar la flexibilidad de horarios tanto de William como del cuerpo técnico que prepara las clases lo cual me permite mantener la asistencia.
 
Realmente recomiendo a todos los que estén interesados en aprender un instrumento o simplemente música tomar contacto con esta academia y experimentar un nuevo aproach al lenguaje musical basado en lo que hoy nos brinda la tecnología de telecomunicaciones.
 
Gran saludo
						</p>
						<p class="client-name">Miguel Auteri  </p>
						<p class="review-date">Bajo eléctrico </p>
						<p class="review-date">Charata, Argentina</p>
					</div>
				</div>

				</div>
					<!-- End Single Testimonial -->
				</div>
				</div>
					 <!-- Indicators -->
    					<ol class="carousel-indicators">
      					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      					<li data-target="#myCarousel" data-slide-to="1"></li>
      					
    					</ol>
			</div>
			<!-- End Testimonials Area -->


<!-- Start Search Area -->
<section class="search-area bg-color-2 fix ">
				
 <div class="row">
      <div class="col-md-6">
      	<?php 
		echo $this->Html->image("chico-1.png", [
    	"alt" => "brand 1"
		]);
		?>
      </div>
      <div class="col-md-6">
     <div class="r" style="text-align: center;">
                <p class="title">COMO QUIERAS DONDE QUIERAS</p>
                <p class="desc">
                	<b>One2one</b> te ofrece la oportunidad de conectarte desde donde estés. Interactuando Online con el profesor, de manera segura y cómoda.
                </p>
                <p class="act"><a href="<?php echo $this->Url->build(["controller" => "Pages","action" => "lista"]); ?>"><input type="submit" value="Ver tu listado de profesores" class="btn-wi-2"></p></a>
            </div>
      </div>
</div>

<br><br><br><br><br>
<div class="row">

            <div class="col-md-6">
      <div class="r" style="text-align: center;">

                <p class="title">CLASES EN VIVO</p>
                <p class="desc">
                	<b>One2one</b> te ofrece clases en vivo, personalizadas, interactuando con el profesor en tiempo real. Se adaptan a tu ritmo de aprendizaje. Tienes la posibilidad de interactuar, consultar y profundizar en lo que sea necesario. Podes buscar profesores de técnicas y estilos especificos para que puedas avanzar en el aprendizaje de manera eficaz.
                </p>
                <p class="act"><a href="<?php echo $this->Url->build(["controller" => "Pages","action" => "lista"]); ?>"><input type="submit" value="Comienza hoy!" class="btn-wi-2"></a></p>
            </div>
      </div>
      <div class="col-md-6">
      	<?php 
		echo $this->Html->image("videoc-1.png", [
    	"alt" => "brand 2"
		]);
		?>
      </div>
    </div>

    <br><br><br><br><br>

     <div class="row">
      <div class="col-md-6">
      	<?php 
		echo $this->Html->image("cochino-1.png", [
    	"alt" => "brand 3"
		]);
		?>

      </div>
      <div class="col-md-6">
     <div class="r" style="text-align: center;">
                <p class="title">TODOS LOS NIVELES AL MEJOR PRECIO</p>
                <p class="desc">
                	Encuentra profesores de nivel hobby, inicial, intermedio o avanzado pudiendo seleccionar el precio que mejor te convenga. Además, las clases online son mas económicas, ya que no necesitas moverte.
                </p>
             	<!--   <p class="act"><a href="./como-funciona"><input type="submit" value="contactanos" class="btn-wi-2"></p></a>  -->	
            </div>
      </div>
</div>


			</section>
			<!-- End Search Area -->	

            <!-- Start Counter Area	
			<section class="counter-area bg-1 overlay-bg padding65">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="counter-list">
								<div class="s-counter">
									<div class="counter-box">
										<h2 class="counter">532</h2>
										<h5 class="count-title">Alumnos</h5>
									</div>
								</div>
								<div class="s-counter">
									<div class="counter-box">
										<h2 class="counter">460</h2>
										<h5 class="count-title">Profesores</h5>
									</div>
								</div>
								<div class="s-counter">
									<div class="counter-box">
										<h2 class="counter">1840</h2>
										<h5 class="count-title">Artistas</h5>
									</div>
								</div>
								<div class="s-counter">
									<div class="counter-box">
										<h2 class="counter">298</h2>
										<h5 class="count-title">Embajador</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			 End Counter Area -->	
			<!-- Start Call To Action  Area -->	
			<section class="call-to-action bg-1 overlay-bg padding100">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="call-to-action-wrap">
								
								<h5 class="call-content">Accede a clases online desde cualquier parte del mundo aprendiendo rápidamente el instrumento que te gusta a través de clases personalizadas, grupales y de contenido, con un profesor en vivo a tu disposición.</h5>
								<a class="estut-btn" href="<?php echo $this->Url->build(["controller" => "Pages","action" => "lista"]); ?>">Conoce tus profesores ahora</a>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Call To Action  Area -->          
		</div>

<script type="text/javascript"> 
	function showsearchoption()
	{
		document.getElementById("search-option").style.display = "block";
	}
//setInterval(function(){ document.getElementsByClassName("owl-page").click(); console.log("click cada 3 sec"); }, 3000);

var x = document.getElementsByClassName("owl-page-active");
console.log(x);
</script>