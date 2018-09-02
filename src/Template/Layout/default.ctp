<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>one2one music school</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Google Fonts
		============================================ -->		
       	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500italic,500,400italic,700italic,900,100,300' rel='stylesheet' type='text/css'>
	   	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,900' rel='stylesheet' type='text/css'>



        <?= $this->Html->css('bootstrap.min.css') ?>
        
        <?= $this->Html->css('owl.carousel.css') ?>
        <?= $this->Html->css('owl.theme.css') ?>
        <?= $this->Html->css('owl.transitions.css') ?>
        <?= $this->Html->css('nivo-slider.css') ?>
        <?= $this->Html->css('preview.css') ?>
        <?= $this->Html->css('jquery-ui.css') ?>
        <?= $this->Html->css('meanmenu.min.css') ?>
        <?= $this->Html->css('animate.css') ?>
        <?= $this->Html->css('normalize.css') ?>
        <?= $this->Html->css('main.css') ?>
        <?= $this->Html->css('color-one.css') ?>
        <?= $this->Html->css('shortcodes/shortcodes.css') ?>
        <?= $this->Html->css('style.css') ?>
        <?= $this->Html->css('responsive.css') ?>
        <?= $this->Html->css('intlTelInput.css.css') ?>

		<?= $this->Html->script('vendor/modernizr-2.8.3.min.js') ?>

		<?= $this->Html->script('intlTelInput.js') ?>

		<?= $this->Html->script('utils.js') ?>



		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        

</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b32971aeba8cd3125e33330/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<?php 

	$session = $this->request->session();


 ?>

<body style="padding-right: 0 !important;">
    

    	<!-- Start Header Area -->
			<header id="header" class="solid-bg-header clear">
				<div class="header-v1">
					<!-- Start Header Top -->
					<div class="header-top-right" style="display: none;"> 
<i class="fab fa-facebook" style="font-size: 11px;"></i>
<i class="fab fa-twitter-square" style="font-size: 11px;"></i>
<i class="fab fa-google-plus-g" style="font-size: 11px;"></i>
<i class="fab fa-instagram" style="font-size: 11px;"></i>
					</div>
					<!-- End Header Top -->
					<!-- Start Header Bottom -->
					<div class="header-bottom">
						<div class="container">
							<div class="row hidden-sm hidden-xs">
								<!-- Start Logo -->
								<div class="col-md-3">
									<div class="header-logo">
										<?= 
											$this->Html->image(
												"logo/1.png", 
												["alt" => "one 2 one music school",
												"style" => "width: 75%;",
												"url" => ["controller" => "pages", "action" => "home"]]
											);
										?>
									</div>
								</div>
								<!-- End Logo -->
								<!-- Start Main Menu -->
                                <div class="col-md-9">
                                    <div class="menu-wrap pull-right">
                                        <nav class="primary-menu">
										    <ul>
                                                <li><a href="<?php echo $this->Url->build(["controller" => "Pages","action" => "lista"]); ?>">Profesores Online </a></li>
                                                <li><a href="<?php echo $this->Url->build(["controller" => "Pages","action" => "funciona"]); ?>">Como Funciona </a></li>   
										    
										    </ul>
										</nav>
                                    </div>

                                    <div class="header-top-right header-top-info">
									<?php 
										if(isset($current_user)) {

											?>
											<div class="logeo">
												<a class="users-micuenta" href="<?php echo $this->Url->build(array('controller'=>'usuario','action'=>'index')) ?>"><i class="fa fa-user"></i>   <?php  echo $session->read('infologer'); ?> </a>
												
											</div>
											<div class="logeo-1">
												<a class="users" href="<?php echo $this->Url->build(array('controller'=>'usuario','action'=>'logout')) ?>"><i class="fa fa-sign-out"></i> Cerrar Sesión</a>
											</div>
											<?php
										}
										else {
											?>
											<div class="logeo">
												<a class="users" href="<?php echo $this->Url->build(array('controller'=>'usuario','action'=>'login')) ?>"><i class="fa fa-lock"></i>  Inicia sesión </a>
											</div>
											<div class="logeo-1">
												<a class="users-registro" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-clipboard-list"></i> Regístrate gratis</a>
											</div>
										<?php	
										}

									?>
										
									</div>

                                </div>
                                <!-- End Main Menu -->
							</div>
							
							</div>
						</div>
					</div>
					<!-- End Header Bottom -->
				</div>
			</header>
			<!-- End Header Area -->



      <?= $this->Flash->render() ?>
    
        <?= $this->fetch('content') ?>
			<!-- Start  Footer  Area -->	
			<footer id="footer-area">
				<div class="footer-top-area" style="background: #2b2b2bf2;height: 50px;border-bottom: 1px solid #4f4f4f;">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<div class="copyright-wrap text-center">
									<p>Todo lo podemos en Cristo que nos fortalece 
												<?= 
											$this->Html->image(
												"pc.png", 
												["alt" => "one 2 one music school",
												"style" => "width: 3%;"]);
										?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start Footer Top Area -->	
				<div class="footer-top-area bg-1 overlay-bg padding50">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-4">
								<div class="footer-top-menu">
									<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/one2onemusicschool" data-tabs="timeline" data-width="450px" data-height="350px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/one2onemusicschool" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/one2onemusicschool">One2one Music School</a></blockquote></div>
									
								</div>
							</div>
							<div class="col-md-3 col-sm-4">

								<h3 class="widget-title">QUIENES SOMOS</h3>
									<div class="fo-aboutus-container">
									
<ul>
									<li><a href="\quienes-somos">Quienes Somos </a></li>
									<li><a href="\quienes-somos">Mision y Valores 	 </a></li>
									<li><a href="#">Notas de Interés 	 </a></li>
									<li><a href="#">Nuestro Equipo</a></li>
									<li><a href="#">Prensa 	 </a></li>
								</ul>

										<address>
											
											<p><strong>Email : </strong><a href="mailto:info@one2onemusicschool.com ">
												info@one2onemusicschool.com
 												</a></p>
											
										</address>
										<div class="footer-social-bookmark">
											<ul>
												<li><a target="_blank" href="https://www.facebook.com/one2onemusicschool" class="facebook"><i class="fab fa-facebook"></i></a></li>	
												<li><a target="_blank" href="https://www.instagram.com/one2onemusicschool/" class="instagram"><i class="fab fa-instagram"></i></a></li>
											</ul>
										</div>
									</div>
								
							</div>
							<div class="col-md-3 hidden-sm">
								<div class="footer-top-menu">
									<h3 class="widget-title">Sumate</h3>
									<ul>
									<li><a href="#">Invertir en One2One </a></li>
									<li><a href="#">Dar clases en One2One</a></li>
								
								</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="footer-top-menu">
									<h3 class="widget-title">SOPORTE</h3>
									<ul>
									<li><a href="/faq">Preguntas Frecuentas </a></li>
									<li><a href="/terminos">Términos y condiciones	 </a></li>
									
								</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Footer Top Area -->	
				<!-- Start Footer Bottom Area -->	
				<div class="footer-bottom-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<div class="copyright-wrap text-center">
									<p>&copy; 2018 ONE2ONEMUSIC All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Footer Bottom Area -->	
			</footer>
			<!-- End Footer  Area -->	
<!-- Modal Registro-->


<!-- Modal registro-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

      	     <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background: #666;padding-left: 2%;padding-right: 2%;border-radius: 5px;">  <span aria-hidden="true">&times;</span>
        </button>  
      </div>
      <div class="modal-body" style="    padding: 5%;">
     <h3 class="modal-title" id="exampleModalLabel" style="text-align: center;color: #333; padding-bottom: 20px;">Registrate gratis</h3>
     <span style="font-size: 12px;text-align: center;width: 40%;    padding-bottom: 20px;">El registro en One2one es totalmente gratis, luego con tu usuaio y contrasena, podras ingresar a tu perfil de alumno, seleccionar profesores y adquirir las lases que desees.</span>
      	<br>
      	<br>
        <div class="row" style="    display: block;padding-left: 1%;">
        	<div class="col-md-6">
              	
         			<input type="hidden" name="tipo" value="1">
				<button type="button" class="btn btn-default btn-registro" id="alternar-alumno">Soy Alumno</button>

      			
      		</div>
 
     		<div class="col-md-6">
              	
         			<input type="hidden" name="tipo" value="2">
				<button type="button" class="btn btn-default btn-registro" id="alternar-prof">Soy Profesor</button>
      			
      		</div>
      	<div id="respuesta-prof" style="display:none;width: 100%;height: 650px;background:rgb(223, 223, 223);    margin-top: 74px;padding-left: 10%;
    		padding-right: 10%;
    		padding-top: 23px;
		}">

		<?php echo $this->Form->create(null,['url' => ['controller'=>'usuario','action' => 'registro'],'id' => 'registro_profesor']); ?>

		<input type="hidden" name="tipo" value="2">

      		 <div class="form-group">
    <input type="text" class="form-control" id="prof_nombres" name="prof_nombres"  placeholder="Nombres">
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="prof_apellidos" name="prof_apellidos"  placeholder="Apellidos">
  </div>
  <div class="form-group">

    <input type="number" min="3" class="form-control" id="prof_edad" name="prof_edad" placeholder="Edad">
  </div>

<!--  <div class="form-group">

    <input type="text" class="form-control" id="prof_telefonofijo" name="prof_telefonofijo"  placeholder="telefono fijo">
  </div> -->

  <div class="form-group">
    <label for="como te enteraste">Genero</label>
    <select class="form-control" id="generop" name="genero">
      <option value="Masculino">Masculino</option>
      <option value="Femenino">Femenino</option>
    </select>
  </div>

  <div class="form-group">
    <label for="pais">¿De donde eres?</label>
    <select class="form-control" id="pais pf" name="pais" onchange="codigospf()">
      <option value="AF">Afganistán</option>
      <option value="AL">Albania</option>
      <option value="DE">Alemania</option>
      <option value="AD">Andorra</option>
      <option value="AO">Angola</option>
      <option value="AI">Anguilla</option>
      <option value="AQ">Antártida</option>
      <option value="AG">Antigua y Barbuda</option>
      <option value="AN">Antillas Holandesas</option>
      <option value="SA">Arabia Saudí</option>
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
      <option value="BY">Bielorrusia</option>
      <option value="MM">Birmania</option>
      <option value="BO">Bolivia</option>
      <option value="BA">Bosnia y Herzegovina</option>
      <option value="BW">Botswana</option>
      <option value="BR">Brasil</option>
      <option value="BN">Brunei</option>
      <option value="BG">Bulgaria</option>
      <option value="BF">Burkina Faso</option>
      <option value="BI">Burundi</option>
      <option value="BT">Bután</option>
      <option value="CV">Cabo Verde</option>
      <option value="KH">Camboya</option>
      <option value="CM">Camerún</option>
      <option value="CA">Canadá</option>
      <option value="TD">Chad</option>
      <option value="CL">Chile</option>
      <option value="CN">China</option>
      <option value="CY">Chipre</option>
      <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
      <option value="CO">Colombia</option>
      <option value="KM">Comores</option>
      <option value="CG">Congo</option>
      <option value="CD">Congo, República Democrática del</option>
      <option value="KR">Corea</option>
      <option value="KP">Corea del Norte</option>
      <option value="CI">Costa de Marfíl</option>
      <option value="CR">Costa Rica</option>
      <option value="HR">Croacia (Hrvatska)</option>
      <option value="CU">Cuba</option>
      <option value="DK">Dinamarca</option>
      <option value="DJ">Djibouti</option>
      <option value="DM">Dominica</option>
      <option value="EC">Ecuador</option>
      <option value="EG">Egipto</option>
      <option value="SV">El Salvador</option>
      <option value="AE">Emiratos Árabes Unidos</option>
      <option value="ER">Eritrea</option>
      <option value="SI">Eslovenia</option>
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
      <option value="GY">Guayana</option>
      <option value="GF">Guayana Francesa</option>
      <option value="GN">Guinea</option>
      <option value="GQ">Guinea Ecuatorial</option>
      <option value="GW">Guinea-Bissau</option>
      <option value="HT">Haití</option>
      <option value="HN">Honduras</option>
      <option value="HU">Hungría</option>
      <option value="IN">India</option>
      <option value="ID">Indonesia</option>
      <option value="IQ">Irak</option>
      <option value="IR">Irán</option>
      <option value="IE">Irlanda</option>
      <option value="BV">Isla Bouvet</option>
      <option value="CX">Isla de Christmas</option>
      <option value="IS">Islandia</option>
      <option value="KY">Islas Caimán</option>
      <option value="CK">Islas Cook</option>
      <option value="CC">Islas de Cocos o Keeling</option>
      <option value="FO">Islas Faroe</option>
      <option value="HM">Islas Heard y McDonald</option>
      <option value="FK">Islas Malvinas</option>
      <option value="MP">Islas Marianas del Norte</option>
      <option value="MH">Islas Marshall</option>
      <option value="UM">Islas menores de Estados Unidos</option>
      <option value="PW">Islas Palau</option>
      <option value="SB">Islas Salomón</option>
      <option value="SJ">Islas Svalbard y Jan Mayen</option>
      <option value="TK">Islas Tokelau</option>
      <option value="TC">Islas Turks y Caicos</option>
      <option value="VI">Islas Vírgenes (EEUU)</option>
      <option value="VG">Islas Vírgenes (Reino Unido)</option>
      <option value="WF">Islas Wallis y Futuna</option>
      <option value="IL">Israel</option>
      <option value="IT">Italia</option>
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
      <option value="LV">Letonia</option>
      <option value="LB">Líbano</option>
      <option value="LR">Liberia</option>
      <option value="LY">Libia</option>
      <option value="LI">Liechtenstein</option>
      <option value="LT">Lituania</option>
      <option value="LU">Luxemburgo</option>
      <option value="MK">Macedonia, Ex-República Yugoslava de</option>
      <option value="MG">Madagascar</option>
      <option value="MY">Malasia</option>
      <option value="MW">Malawi</option>
      <option value="MV">Maldivas</option>
      <option value="ML">Malí</option>
      <option value="MT">Malta</option>
      <option value="MA">Marruecos</option>
      <option value="MQ">Martinica</option>
      <option value="MU">Mauricio</option>
      <option value="MR">Mauritania</option>
      <option value="YT">Mayotte</option>
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
      <option value="NF">Norfolk</option>
      <option value="NO">Noruega</option>
      <option value="NC">Nueva Caledonia</option>
      <option value="NZ">Nueva Zelanda</option>
      <option value="OM">Omán</option>
      <option value="NL">Países Bajos</option>
      <option value="PA">Panamá</option>
      <option value="PG">Papúa Nueva Guinea</option>
      <option value="PK">Paquistán</option>
      <option value="PY">Paraguay</option>
      <option value="PE">Perú</option>
      <option value="PN">Pitcairn</option>
      <option value="PF">Polinesia Francesa</option>
      <option value="PL">Polonia</option>
      <option value="PT">Portugal</option>
      <option value="PR">Puerto Rico</option>
      <option value="QA">Qatar</option>
      <option value="UK">Reino Unido</option>
      <option value="CF">República Centroafricana</option>
      <option value="CZ">República Checa</option>
      <option value="ZA">República de Sudáfrica</option>
      <option value="DO">República Dominicana</option>
      <option value="SK">República Eslovaca</option>
      <option value="RE">Reunión</option>
      <option value="RW">Ruanda</option>
      <option value="RO">Rumania</option>
      <option value="RU">Rusia</option>
      <option value="EH">Sahara Occidental</option>
      <option value="KN">Saint Kitts y Nevis</option>
      <option value="WS">Samoa</option>
      <option value="AS">Samoa Americana</option>
      <option value="SM">San Marino</option>
      <option value="VC">San Vicente y Granadinas</option>
      <option value="SH">Santa Helena</option>
      <option value="LC">Santa Lucía</option>
      <option value="ST">Santo Tomé y Príncipe</option>
      <option value="SN">Senegal</option>
      <option value="SC">Seychelles</option>
      <option value="SL">Sierra Leona</option>
      <option value="SG">Singapur</option>
      <option value="SY">Siria</option>
      <option value="SO">Somalia</option>
      <option value="LK">Sri Lanka</option>
      <option value="PM">St Pierre y Miquelon</option>
      <option value="SZ">Suazilandia</option>
      <option value="SD">Sudán</option>
      <option value="SE">Suecia</option>
      <option value="CH">Suiza</option>
      <option value="SR">Surinam</option>
      <option value="TH">Tailandia</option>
      <option value="TW">Taiwán</option>
      <option value="TZ">Tanzania</option>
      <option value="TJ">Tayikistán</option>
      <option value="TF">Territorios franceses del Sur</option>
      <option value="TP">Timor Oriental</option>
      <option value="TG">Togo</option>
      <option value="TO">Tonga</option>
      <option value="TT">Trinidad y Tobago</option>
      <option value="TN">Túnez</option>
      <option value="TM">Turkmenistán</option>
      <option value="TR">Turquía</option>
      <option value="TV">Tuvalu</option>
      <option value="UA">Ucrania</option>
      <option value="UG">Uganda</option>
      <option value="UY">Uruguay</option>
      <option value="UZ">Uzbekistán</option>
      <option value="VU">Vanuatu</option>
      <option value="VE">Venezuela</option>
      <option value="VN">Vietnam</option>
      <option value="YE">Yemen</option>
      <option value="YU">Yugoslavia</option>
      <option value="ZM">Zambia</option>
      <option value="ZW">Zimbabue</option>
    </select>
  </div>

    <div class="form-group">
<label for="como te enteraste">Numero telefonico</label>
    <input type="text" class="form-control" id="prof_telefonomovil" name="prof_telefonomovil"  value="+54">
  </div>
  <div class="form-group">
    <label for="como te enteraste">¿Como te enteraste de nosotros?</label>
    <select class="form-control" id="difucionp" name="difucion">
      <option value="google">Google</option>
      <option value="facebook">Facebook</option>
      <option value="instagram">Instagram</option>
      <option value="otro">Otro</option>
    </select>
  </div>

   <div class="form-group">
   	<label>Codigo de referido (opcional)</label>
    <input type="text" class="form-control" id="idreferido" name="idreferido" style="text-transform: uppercase !important;" placeholder="XX-00-x">
  </div>
  
          <div class="form-group">
    <input type="text" class="form-control" id="emailp" name="email"  placeholder="Correo Electrónico">

      </div>
      
  <div class="form-group">
    <input type="password" class="form-control" id="clavep" name="clave" placeholder="Elige Tu Password">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="confirmarclave"  placeholder="Confirma Tu Password">
  </div>	

  	<button type="button" class="btn btn-success entrar" onclick="valida_envia(1)">Registrarse</button>

    </form>
</div>
    <div id="respuesta-alumno" style="display:none;width: 100%;height: 
    650px;background: rgb(223, 223, 223);margin-top: 74px;padding-left: 10%;
    padding-right: 10%;
    padding-top: 23px;
}">

<?php echo $this->Form->create(null,['url' => ['controller'=>'usuario','action' => 'registro'],'id' => 'registro_alumno']); ?>
 <div class="form-group"> 

 	<input type="hidden" name="tipo" value="1">
    
    <input type="text" class="form-control" id="alum_nombres" name="alum_nombres"  placeholder="Nombres">
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="alum_apellidos" name="alum_apellidos"  placeholder="Apellidos">
  </div>
  <div class="form-group">
   
    <input type="number" min="3" class="form-control" id="alum_edad" name="alum_edad" placeholder="Edad"  onchange="segmentaredad()">
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="alum_nombresresponsable" name="alum_nombresresponsable"  placeholder="Nombre-responsable" style="display: none;" >
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="alum_apellidosresponsable" name="alum_apellidosresponsable" placeholder="Apellido-responsable" style="display: none;">



  <div class="form-group">


  <div class="form-group">
    <label for="como te enteraste">Genero</label>
    <select class="form-control" id="generoa" name="genero">
      <option value="Masculino">Masculino</option>
      <option value="Femenino">Femenino</option>
    </select>
  </div>

  <div class="form-group">
    <label for="pais">¿De donde eres?</label>
    <select class="form-control" id="pais" name="pais" onchange="codigos()" >
      <option value="AF">Afganistán</option>
      <option value="AL">Albania</option>
      <option value="DE">Alemania</option>
      <option value="AD">Andorra</option>
      <option value="AO">Angola</option>
      <option value="AI">Anguilla</option>
      <option value="AQ">Antártida</option>
      <option value="AG">Antigua y Barbuda</option>
      <option value="AN">Antillas Holandesas</option>
      <option value="SA">Arabia Saudí</option>
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
      <option value="BY">Bielorrusia</option>
      <option value="MM">Birmania</option>
      <option value="BO">Bolivia</option>
      <option value="BA">Bosnia y Herzegovina</option>
      <option value="BW">Botswana</option>
      <option value="BR">Brasil</option>
      <option value="BN">Brunei</option>
      <option value="BG">Bulgaria</option>
      <option value="BF">Burkina Faso</option>
      <option value="BI">Burundi</option>
      <option value="BT">Bután</option>
      <option value="CV">Cabo Verde</option>
      <option value="KH">Camboya</option>
      <option value="CM">Camerún</option>
      <option value="CA">Canadá</option>
      <option value="TD">Chad</option>
      <option value="CL">Chile</option>
      <option value="CN">China</option>
      <option value="CY">Chipre</option>
      <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
      <option value="CO">Colombia</option>
      <option value="KM">Comores</option>
      <option value="CG">Congo</option>
      <option value="CD">Congo, República Democrática del</option>
      <option value="KR">Corea</option>
      <option value="KP">Corea del Norte</option>
      <option value="CI">Costa de Marfíl</option>
      <option value="CR">Costa Rica</option>
      <option value="HR">Croacia (Hrvatska)</option>
      <option value="CU">Cuba</option>
      <option value="DK">Dinamarca</option>
      <option value="DJ">Djibouti</option>
      <option value="DM">Dominica</option>
      <option value="EC">Ecuador</option>
      <option value="EG">Egipto</option>
      <option value="SV">El Salvador</option>
      <option value="AE">Emiratos Árabes Unidos</option>
      <option value="ER">Eritrea</option>
      <option value="SI">Eslovenia</option>
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
      <option value="GY">Guayana</option>
      <option value="GF">Guayana Francesa</option>
      <option value="GN">Guinea</option>
      <option value="GQ">Guinea Ecuatorial</option>
      <option value="GW">Guinea-Bissau</option>
      <option value="HT">Haití</option>
      <option value="HN">Honduras</option>
      <option value="HU">Hungría</option>
      <option value="IN">India</option>
      <option value="ID">Indonesia</option>
      <option value="IQ">Irak</option>
      <option value="IR">Irán</option>
      <option value="IE">Irlanda</option>
      <option value="BV">Isla Bouvet</option>
      <option value="CX">Isla de Christmas</option>
      <option value="IS">Islandia</option>
      <option value="KY">Islas Caimán</option>
      <option value="CK">Islas Cook</option>
      <option value="CC">Islas de Cocos o Keeling</option>
      <option value="FO">Islas Faroe</option>
      <option value="HM">Islas Heard y McDonald</option>
      <option value="FK">Islas Malvinas</option>
      <option value="MP">Islas Marianas del Norte</option>
      <option value="MH">Islas Marshall</option>
      <option value="UM">Islas menores de Estados Unidos</option>
      <option value="PW">Islas Palau</option>
      <option value="SB">Islas Salomón</option>
      <option value="SJ">Islas Svalbard y Jan Mayen</option>
      <option value="TK">Islas Tokelau</option>
      <option value="TC">Islas Turks y Caicos</option>
      <option value="VI">Islas Vírgenes (EEUU)</option>
      <option value="VG">Islas Vírgenes (Reino Unido)</option>
      <option value="WF">Islas Wallis y Futuna</option>
      <option value="IL">Israel</option>
      <option value="IT">Italia</option>
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
      <option value="LV">Letonia</option>
      <option value="LB">Líbano</option>
      <option value="LR">Liberia</option>
      <option value="LY">Libia</option>
      <option value="LI">Liechtenstein</option>
      <option value="LT">Lituania</option>
      <option value="LU">Luxemburgo</option>
      <option value="MK">Macedonia, Ex-República Yugoslava de</option>
      <option value="MG">Madagascar</option>
      <option value="MY">Malasia</option>
      <option value="MW">Malawi</option>
      <option value="MV">Maldivas</option>
      <option value="ML">Malí</option>
      <option value="MT">Malta</option>
      <option value="MA">Marruecos</option>
      <option value="MQ">Martinica</option>
      <option value="MU">Mauricio</option>
      <option value="MR">Mauritania</option>
      <option value="YT">Mayotte</option>
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
      <option value="NF">Norfolk</option>
      <option value="NO">Noruega</option>
      <option value="NC">Nueva Caledonia</option>
      <option value="NZ">Nueva Zelanda</option>
      <option value="OM">Omán</option>
      <option value="NL">Países Bajos</option>
      <option value="PA">Panamá</option>
      <option value="PG">Papúa Nueva Guinea</option>
      <option value="PK">Paquistán</option>
      <option value="PY">Paraguay</option>
      <option value="PE">Perú</option>
      <option value="PN">Pitcairn</option>
      <option value="PF">Polinesia Francesa</option>
      <option value="PL">Polonia</option>
      <option value="PT">Portugal</option>
      <option value="PR">Puerto Rico</option>
      <option value="QA">Qatar</option>
      <option value="UK">Reino Unido</option>
      <option value="CF">República Centroafricana</option>
      <option value="CZ">República Checa</option>
      <option value="ZA">República de Sudáfrica</option>
      <option value="DO">República Dominicana</option>
      <option value="SK">República Eslovaca</option>
      <option value="RE">Reunión</option>
      <option value="RW">Ruanda</option>
      <option value="RO">Rumania</option>
      <option value="RU">Rusia</option>
      <option value="EH">Sahara Occidental</option>
      <option value="KN">Saint Kitts y Nevis</option>
      <option value="WS">Samoa</option>
      <option value="AS">Samoa Americana</option>
      <option value="SM">San Marino</option>
      <option value="VC">San Vicente y Granadinas</option>
      <option value="SH">Santa Helena</option>
      <option value="LC">Santa Lucía</option>
      <option value="ST">Santo Tomé y Príncipe</option>
      <option value="SN">Senegal</option>
      <option value="SC">Seychelles</option>
      <option value="SL">Sierra Leona</option>
      <option value="SG">Singapur</option>
      <option value="SY">Siria</option>
      <option value="SO">Somalia</option>
      <option value="LK">Sri Lanka</option>
      <option value="PM">St Pierre y Miquelon</option>
      <option value="SZ">Suazilandia</option>
      <option value="SD">Sudán</option>
      <option value="SE">Suecia</option>
      <option value="CH">Suiza</option>
      <option value="SR">Surinam</option>
      <option value="TH">Tailandia</option>
      <option value="TW">Taiwán</option>
      <option value="TZ">Tanzania</option>
      <option value="TJ">Tayikistán</option>
      <option value="TF">Territorios franceses del Sur</option>
      <option value="TP">Timor Oriental</option>
      <option value="TG">Togo</option>
      <option value="TO">Tonga</option>
      <option value="TT">Trinidad y Tobago</option>
      <option value="TN">Túnez</option>
      <option value="TM">Turkmenistán</option>
      <option value="TR">Turquía</option>
      <option value="TV">Tuvalu</option>
      <option value="UA">Ucrania</option>
      <option value="UG">Uganda</option>
      <option value="UY">Uruguay</option>
      <option value="UZ">Uzbekistán</option>
      <option value="VU">Vanuatu</option>
      <option value="VE">Venezuela</option>
      <option value="VN">Vietnam</option>
      <option value="YE">Yemen</option>
      <option value="YU">Yugoslavia</option>
      <option value="ZM">Zambia</option>
      <option value="ZW">Zimbabue</option>
    </select>
  </div>
  
  </div> 
  <label for="como te enteraste">Numero Telefonico</label>
    <div class="form-group">

    <input type="text" class="form-control" id="alum_telefonomovil" name="alum_telefonomovil"  value="+54" >
  </div>

  <div class="form-group">
    <label for="como te enteraste">¿Como te enteraste de nosotros?</label>
    <select class="form-control" id="difuciona" name="difucion">
      <option value="google">Google</option>
      <option value="facebook">Facebook</option>
      <option value="instagram">Instagram</option>
      <option value="otro">Otro</option>
    </select>
  </div>

   

    <div class="form-group">

    <input type="text" class="form-control" id="emaila" name="email"  placeholder="Correo Electrónico">
  </div>
 

   <div class="form-group">
    <input type="password" class="form-control" id="clavea" name="clave" placeholder="Elige tu password">
   </div>

   <div class="form-group">
    <input type="password" class="form-control" id="confirmarclavea" placeholder="Confirma tu password">
   </div>

  <button type="button" class="btn btn-success entrar" onclick="valida_envia(2)">Registrarse</button>
    

    </div>

     </from> 	
      </div>
      <div class="modal-footer">
      <br><br>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	// jQuery
$(document).ready(function(){ 
   $('#alternar-alumno').on('click',function(){
   	  
      $('#respuesta-alumno').toggle('slow');
       document.getElementById("respuesta-prof").style.display = "none";
     
   });
});

	// jQuery
$(document).ready(function(){ 
   $('#alternar-prof').on('click',function(){
    
      $('#respuesta-prof').toggle('slow');
       document.getElementById("respuesta-alumno").style.display = "none";

           
            
   });
});





 function segmentaredad()
 {
 	console.log("cambiando edad");
  if (document.getElementById('alum_edad').value<18) {

     document.getElementById('alum_nombresresponsable').style.display='block'; 
          document.getElementById('alum_apellidosresponsable').style.display='block'; 
  }
  else
  {
document.getElementById('alum_nombresresponsable').style.display='none'; 
          document.getElementById('alum_apellidosresponsable').style.display='none'; 

  }
 }



function codigos(){

   var allCountries = [ [ "Afghanistan (‫افغانستان‬‎)", "af", "93" ], [ "Albania (Shqipëri)", "al", "355" ], [ "Algeria (‫الجزائر‬‎)", "dz", "213" ], [ "American Samoa", "as", "1684" ], [ "Andorra", "ad", "376" ], [ "Angola", "ao", "244" ], [ "Anguilla", "ai", "1264" ], [ "Antigua and Barbuda", "ag", "1268" ], [ "Argentina", "ar", "54" ], [ "Armenia (Հայաստան)", "am", "374" ], [ "Aruba", "aw", "297" ], [ "Australia", "au", "61", 0 ], [ "Austria (Österreich)", "at", "43" ], [ "Azerbaijan (Azərbaycan)", "az", "994" ], [ "Bahamas", "bs", "1242" ], [ "Bahrain (‫البحرين‬‎)", "bh", "973" ], [ "Bangladesh (বাংলাদেশ)", "bd", "880" ], [ "Barbados", "bb", "1246" ], [ "Belarus (Беларусь)", "by", "375" ], [ "Belgium (België)", "be", "32" ], [ "Belize", "bz", "501" ], [ "Benin (Bénin)", "bj", "229" ], [ "Bermuda", "bm", "1441" ], [ "Bhutan (འབྲུག)", "bt", "975" ], [ "Bolivia", "bo", "591" ], [ "Bosnia and Herzegovina (Босна и Херцеговина)", "ba", "387" ], [ "Botswana", "bw", "267" ], [ "Brazil (Brasil)", "br", "55" ], [ "British Indian Ocean Territory", "io", "246" ], [ "British Virgin Islands", "vg", "1284" ], [ "Brunei", "bn", "673" ], [ "Bulgaria (България)", "bg", "359" ], [ "Burkina Faso", "bf", "226" ], [ "Burundi (Uburundi)", "bi", "257" ], [ "Cambodia (កម្ពុជា)", "kh", "855" ], [ "Cameroon (Cameroun)", "cm", "237" ], [ "Canada", "ca", "1", 1, [ "204", "226", "236", "249", "250", "289", "306", "343", "365", "387", "403", "416", "418", "431", "437", "438", "450", "506", "514", "519", "548", "579", "581", "587", "604", "613", "639", "647", "672", "705", "709", "742", "778", "780", "782", "807", "819", "825", "867", "873", "902", "905" ] ], [ "Cape Verde (Kabu Verdi)", "cv", "238" ], [ "Caribbean Netherlands", "bq", "599", 1 ], [ "Cayman Islands", "ky", "1345" ], [ "Central African Republic (République centrafricaine)", "cf", "236" ], [ "Chad (Tchad)", "td", "235" ], [ "Chile", "cl", "56" ], [ "China (中国)", "cn", "86" ], [ "Christmas Island", "cx", "61", 2 ], [ "Cocos (Keeling) Islands", "cc", "61", 1 ], [ "Colombia", "co", "57" ], [ "Comoros (‫جزر القمر‬‎)", "km", "269" ], [ "Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)", "cd", "243" ], [ "Congo (Republic) (Congo-Brazzaville)", "cg", "242" ], [ "Cook Islands", "ck", "682" ], [ "Costa Rica", "cr", "506" ], [ "Côte d’Ivoire", "ci", "225" ], [ "Croatia (Hrvatska)", "hr", "385" ], [ "Cuba", "cu", "53" ], [ "Curaçao", "cw", "599", 0 ], [ "Cyprus (Κύπρος)", "cy", "357" ], [ "Czech Republic (Česká republika)", "cz", "420" ], [ "Denmark (Danmark)", "dk", "45" ], [ "Djibouti", "dj", "253" ], [ "Dominica", "dm", "1767" ], [ "Dominican Republic (República Dominicana)", "do", "1", 2, [ "809", "829", "849" ] ], [ "Ecuador", "ec", "593" ], [ "Egypt (‫مصر‬‎)", "eg", "20" ], [ "El Salvador", "sv", "503" ], [ "Equatorial Guinea (Guinea Ecuatorial)", "gq", "240" ], [ "Eritrea", "er", "291" ], [ "Estonia (Eesti)", "ee", "372" ], [ "Ethiopia", "et", "251" ], [ "Falkland Islands (Islas Malvinas)", "fk", "500" ], [ "Faroe Islands (Føroyar)", "fo", "298" ], [ "Fiji", "fj", "679" ], [ "Finland (Suomi)", "fi", "358", 0 ], [ "France", "fr", "33" ], [ "French Guiana (Guyane française)", "gf", "594" ], [ "French Polynesia (Polynésie française)", "pf", "689" ], [ "Gabon", "ga", "241" ], [ "Gambia", "gm", "220" ], [ "Georgia (საქართველო)", "ge", "995" ], [ "Germany (Deutschland)", "de", "49" ], [ "Ghana (Gaana)", "gh", "233" ], [ "Gibraltar", "gi", "350" ], [ "Greece (Ελλάδα)", "gr", "30" ], [ "Greenland (Kalaallit Nunaat)", "gl", "299" ], [ "Grenada", "gd", "1473" ], [ "Guadeloupe", "gp", "590", 0 ], [ "Guam", "gu", "1671" ], [ "Guatemala", "gt", "502" ], [ "Guernsey", "gg", "44", 1 ], [ "Guinea (Guinée)", "gn", "224" ], [ "Guinea-Bissau (Guiné Bissau)", "gw", "245" ], [ "Guyana", "gy", "592" ], [ "Haiti", "ht", "509" ], [ "Honduras", "hn", "504" ], [ "Hong Kong (香港)", "hk", "852" ], [ "Hungary (Magyarország)", "hu", "36" ], [ "Iceland (Ísland)", "is", "354" ], [ "India (भारत)", "in", "91" ], [ "Indonesia", "id", "62" ], [ "Iran (‫ایران‬‎)", "ir", "98" ], [ "Iraq (‫العراق‬‎)", "iq", "964" ], [ "Ireland", "ie", "353" ], [ "Isle of Man", "im", "44", 2 ], [ "Israel (‫ישראל‬‎)", "il", "972" ], [ "Italy (Italia)", "it", "39", 0 ], [ "Jamaica", "jm", "1", 4, [ "876", "658" ] ], [ "Japan (日本)", "jp", "81" ], [ "Jersey", "je", "44", 3 ], [ "Jordan (‫الأردن‬‎)", "jo", "962" ], [ "Kazakhstan (Казахстан)", "kz", "7", 1 ], [ "Kenya", "ke", "254" ], [ "Kiribati", "ki", "686" ], [ "Kosovo", "xk", "383" ], [ "Kuwait (‫الكويت‬‎)", "kw", "965" ], [ "Kyrgyzstan (Кыргызстан)", "kg", "996" ], [ "Laos (ລາວ)", "la", "856" ], [ "Latvia (Latvija)", "lv", "371" ], [ "Lebanon (‫لبنان‬‎)", "lb", "961" ], [ "Lesotho", "ls", "266" ], [ "Liberia", "lr", "231" ], [ "Libya (‫ليبيا‬‎)", "ly", "218" ], [ "Liechtenstein", "li", "423" ], [ "Lithuania (Lietuva)", "lt", "370" ], [ "Luxembourg", "lu", "352" ], [ "Macau (澳門)", "mo", "853" ], [ "Macedonia (FYROM) (Македонија)", "mk", "389" ], [ "Madagascar (Madagasikara)", "mg", "261" ], [ "Malawi", "mw", "265" ], [ "Malaysia", "my", "60" ], [ "Maldives", "mv", "960" ], [ "Mali", "ml", "223" ], [ "Malta", "mt", "356" ], [ "Marshall Islands", "mh", "692" ], [ "Martinique", "mq", "596" ], [ "Mauritania (‫موريتانيا‬‎)", "mr", "222" ], [ "Mauritius (Moris)", "mu", "230" ], [ "Mayotte", "yt", "262", 1 ], [ "Mexico (México)", "mx", "52" ], [ "Micronesia", "fm", "691" ], [ "Moldova (Republica Moldova)", "md", "373" ], [ "Monaco", "mc", "377" ], [ "Mongolia (Монгол)", "mn", "976" ], [ "Montenegro (Crna Gora)", "me", "382" ], [ "Montserrat", "ms", "1664" ], [ "Morocco (‫المغرب‬‎)", "ma", "212", 0 ], [ "Mozambique (Moçambique)", "mz", "258" ], [ "Myanmar (Burma) (မြန်မာ)", "mm", "95" ], [ "Namibia (Namibië)", "na", "264" ], [ "Nauru", "nr", "674" ], [ "Nepal (नेपाल)", "np", "977" ], [ "Netherlands (Nederland)", "nl", "31" ], [ "New Caledonia (Nouvelle-Calédonie)", "nc", "687" ], [ "New Zealand", "nz", "64" ], [ "Nicaragua", "ni", "505" ], [ "Niger (Nijar)", "ne", "227" ], [ "Nigeria", "ng", "234" ], [ "Niue", "nu", "683" ], [ "Norfolk Island", "nf", "672" ], [ "North Korea (조선 민주주의 인민 공화국)", "kp", "850" ], [ "Northern Mariana Islands", "mp", "1670" ], [ "Norway (Norge)", "no", "47", 0 ], [ "Oman (‫عُمان‬‎)", "om", "968" ], [ "Pakistan (‫پاکستان‬‎)", "pk", "92" ], [ "Palau", "pw", "680" ], [ "Palestine (‫فلسطين‬‎)", "ps", "970" ], [ "Panama (Panamá)", "pa", "507" ], [ "Papua New Guinea", "pg", "675" ], [ "Paraguay", "py", "595" ], [ "Peru (Perú)", "pe", "51" ], [ "Philippines", "ph", "63" ], [ "Poland (Polska)", "pl", "48" ], [ "Portugal", "pt", "351" ], [ "Puerto Rico", "pr", "1", 3, [ "787", "939" ] ], [ "Qatar (‫قطر‬‎)", "qa", "974" ], [ "Réunion (La Réunion)", "re", "262", 0 ], [ "Romania (România)", "ro", "40" ], [ "Russia (Россия)", "ru", "7", 0 ], [ "Rwanda", "rw", "250" ], [ "Saint Barthélemy", "bl", "590", 1 ], [ "Saint Helena", "sh", "290" ], [ "Saint Kitts and Nevis", "kn", "1869" ], [ "Saint Lucia", "lc", "1758" ], [ "Saint Martin (Saint-Martin (partie française))", "mf", "590", 2 ], [ "Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)", "pm", "508" ], [ "Saint Vincent and the Grenadines", "vc", "1784" ], [ "Samoa", "ws", "685" ], [ "San Marino", "sm", "378" ], [ "São Tomé and Príncipe (São Tomé e Príncipe)", "st", "239" ], [ "Saudi Arabia (‫المملكة العربية السعودية‬‎)", "sa", "966" ], [ "Senegal (Sénégal)", "sn", "221" ], [ "Serbia (Србија)", "rs", "381" ], [ "Seychelles", "sc", "248" ], [ "Sierra Leone", "sl", "232" ], [ "Singapore", "sg", "65" ], [ "Sint Maarten", "sx", "1721" ], [ "Slovakia (Slovensko)", "sk", "421" ], [ "Slovenia (Slovenija)", "si", "386" ], [ "Solomon Islands", "sb", "677" ], [ "Somalia (Soomaaliya)", "so", "252" ], [ "South Africa", "za", "27" ], [ "South Korea (대한민국)", "kr", "82" ], [ "South Sudan (‫جنوب السودان‬‎)", "ss", "211" ], [ "Spain (España)", "es", "34" ], [ "Sri Lanka (ශ්‍රී ලංකාව)", "lk", "94" ], [ "Sudan (‫السودان‬‎)", "sd", "249" ], [ "Suriname", "sr", "597" ], [ "Svalbard and Jan Mayen", "sj", "47", 1 ], [ "Swaziland", "sz", "268" ], [ "Sweden (Sverige)", "se", "46" ], [ "Switzerland (Schweiz)", "ch", "41" ], [ "Syria (‫سوريا‬‎)", "sy", "963" ], [ "Taiwan (台灣)", "tw", "886" ], [ "Tajikistan", "tj", "992" ], [ "Tanzania", "tz", "255" ], [ "Thailand (ไทย)", "th", "66" ], [ "Timor-Leste", "tl", "670" ], [ "Togo", "tg", "228" ], [ "Tokelau", "tk", "690" ], [ "Tonga", "to", "676" ], [ "Trinidad and Tobago", "tt", "1868" ], [ "Tunisia (‫تونس‬‎)", "tn", "216" ], [ "Turkey (Türkiye)", "tr", "90" ], [ "Turkmenistan", "tm", "993" ], [ "Turks and Caicos Islands", "tc", "1649" ], [ "Tuvalu", "tv", "688" ], [ "U.S. Virgin Islands", "vi", "1340" ], [ "Uganda", "ug", "256" ], [ "Ukraine (Україна)", "ua", "380" ], [ "United Arab Emirates (‫الإمارات العربية المتحدة‬‎)", "ae", "971" ], [ "United Kingdom", "gb", "44", 0 ], [ "United States", "us", "1", 0 ], [ "Uruguay", "uy", "598" ], [ "Uzbekistan (Oʻzbekiston)", "uz", "998" ], [ "Vanuatu", "vu", "678" ], [ "Vatican City (Città del Vaticano)", "va", "39", 1 ], [ "Venezuela", "ve", "58" ], [ "Vietnam (Việt Nam)", "vn", "84" ], [ "Wallis and Futuna (Wallis-et-Futuna)", "wf", "681" ], [ "Western Sahara (‫الصحراء الغربية‬‎)", "eh", "212", 1 ], [ "Yemen (‫اليمن‬‎)", "ye", "967" ], [ "Zambia", "zm", "260" ], [ "Zimbabwe", "zw", "263" ], [ "Åland Islands", "ax", "358", 1 ] ];
    // loop over all of the countries above
     var valor = document.getElementById("pais").value;
     var pais = valor.toLowerCase();
   for (var i = 0; i < allCountries.length; i++) {
        var c = allCountries[i];
        allCountries[i] = {
            name: c[0],
            iso2: c[1],
            dialCode: c[2],
            priority: c[3] || 0,
            areaCodes: c[4] || null
        };
if(pais==c[1]){
	document.getElementById("alum_telefonomovil").value = "+"+c[2];
    }
}
   
    
}



function codigospf(){

   var allCountries = [ [ "Afghanistan (‫افغانستان‬‎)", "af", "93" ], [ "Albania (Shqipëri)", "al", "355" ], [ "Algeria (‫الجزائر‬‎)", "dz", "213" ], [ "American Samoa", "as", "1684" ], [ "Andorra", "ad", "376" ], [ "Angola", "ao", "244" ], [ "Anguilla", "ai", "1264" ], [ "Antigua and Barbuda", "ag", "1268" ], [ "Argentina", "ar", "54" ], [ "Armenia (Հայաստան)", "am", "374" ], [ "Aruba", "aw", "297" ], [ "Australia", "au", "61", 0 ], [ "Austria (Österreich)", "at", "43" ], [ "Azerbaijan (Azərbaycan)", "az", "994" ], [ "Bahamas", "bs", "1242" ], [ "Bahrain (‫البحرين‬‎)", "bh", "973" ], [ "Bangladesh (বাংলাদেশ)", "bd", "880" ], [ "Barbados", "bb", "1246" ], [ "Belarus (Беларусь)", "by", "375" ], [ "Belgium (België)", "be", "32" ], [ "Belize", "bz", "501" ], [ "Benin (Bénin)", "bj", "229" ], [ "Bermuda", "bm", "1441" ], [ "Bhutan (འབྲུག)", "bt", "975" ], [ "Bolivia", "bo", "591" ], [ "Bosnia and Herzegovina (Босна и Херцеговина)", "ba", "387" ], [ "Botswana", "bw", "267" ], [ "Brazil (Brasil)", "br", "55" ], [ "British Indian Ocean Territory", "io", "246" ], [ "British Virgin Islands", "vg", "1284" ], [ "Brunei", "bn", "673" ], [ "Bulgaria (България)", "bg", "359" ], [ "Burkina Faso", "bf", "226" ], [ "Burundi (Uburundi)", "bi", "257" ], [ "Cambodia (កម្ពុជា)", "kh", "855" ], [ "Cameroon (Cameroun)", "cm", "237" ], [ "Canada", "ca", "1", 1, [ "204", "226", "236", "249", "250", "289", "306", "343", "365", "387", "403", "416", "418", "431", "437", "438", "450", "506", "514", "519", "548", "579", "581", "587", "604", "613", "639", "647", "672", "705", "709", "742", "778", "780", "782", "807", "819", "825", "867", "873", "902", "905" ] ], [ "Cape Verde (Kabu Verdi)", "cv", "238" ], [ "Caribbean Netherlands", "bq", "599", 1 ], [ "Cayman Islands", "ky", "1345" ], [ "Central African Republic (République centrafricaine)", "cf", "236" ], [ "Chad (Tchad)", "td", "235" ], [ "Chile", "cl", "56" ], [ "China (中国)", "cn", "86" ], [ "Christmas Island", "cx", "61", 2 ], [ "Cocos (Keeling) Islands", "cc", "61", 1 ], [ "Colombia", "co", "57" ], [ "Comoros (‫جزر القمر‬‎)", "km", "269" ], [ "Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)", "cd", "243" ], [ "Congo (Republic) (Congo-Brazzaville)", "cg", "242" ], [ "Cook Islands", "ck", "682" ], [ "Costa Rica", "cr", "506" ], [ "Côte d’Ivoire", "ci", "225" ], [ "Croatia (Hrvatska)", "hr", "385" ], [ "Cuba", "cu", "53" ], [ "Curaçao", "cw", "599", 0 ], [ "Cyprus (Κύπρος)", "cy", "357" ], [ "Czech Republic (Česká republika)", "cz", "420" ], [ "Denmark (Danmark)", "dk", "45" ], [ "Djibouti", "dj", "253" ], [ "Dominica", "dm", "1767" ], [ "Dominican Republic (República Dominicana)", "do", "1", 2, [ "809", "829", "849" ] ], [ "Ecuador", "ec", "593" ], [ "Egypt (‫مصر‬‎)", "eg", "20" ], [ "El Salvador", "sv", "503" ], [ "Equatorial Guinea (Guinea Ecuatorial)", "gq", "240" ], [ "Eritrea", "er", "291" ], [ "Estonia (Eesti)", "ee", "372" ], [ "Ethiopia", "et", "251" ], [ "Falkland Islands (Islas Malvinas)", "fk", "500" ], [ "Faroe Islands (Føroyar)", "fo", "298" ], [ "Fiji", "fj", "679" ], [ "Finland (Suomi)", "fi", "358", 0 ], [ "France", "fr", "33" ], [ "French Guiana (Guyane française)", "gf", "594" ], [ "French Polynesia (Polynésie française)", "pf", "689" ], [ "Gabon", "ga", "241" ], [ "Gambia", "gm", "220" ], [ "Georgia (საქართველო)", "ge", "995" ], [ "Germany (Deutschland)", "de", "49" ], [ "Ghana (Gaana)", "gh", "233" ], [ "Gibraltar", "gi", "350" ], [ "Greece (Ελλάδα)", "gr", "30" ], [ "Greenland (Kalaallit Nunaat)", "gl", "299" ], [ "Grenada", "gd", "1473" ], [ "Guadeloupe", "gp", "590", 0 ], [ "Guam", "gu", "1671" ], [ "Guatemala", "gt", "502" ], [ "Guernsey", "gg", "44", 1 ], [ "Guinea (Guinée)", "gn", "224" ], [ "Guinea-Bissau (Guiné Bissau)", "gw", "245" ], [ "Guyana", "gy", "592" ], [ "Haiti", "ht", "509" ], [ "Honduras", "hn", "504" ], [ "Hong Kong (香港)", "hk", "852" ], [ "Hungary (Magyarország)", "hu", "36" ], [ "Iceland (Ísland)", "is", "354" ], [ "India (भारत)", "in", "91" ], [ "Indonesia", "id", "62" ], [ "Iran (‫ایران‬‎)", "ir", "98" ], [ "Iraq (‫العراق‬‎)", "iq", "964" ], [ "Ireland", "ie", "353" ], [ "Isle of Man", "im", "44", 2 ], [ "Israel (‫ישראל‬‎)", "il", "972" ], [ "Italy (Italia)", "it", "39", 0 ], [ "Jamaica", "jm", "1", 4, [ "876", "658" ] ], [ "Japan (日本)", "jp", "81" ], [ "Jersey", "je", "44", 3 ], [ "Jordan (‫الأردن‬‎)", "jo", "962" ], [ "Kazakhstan (Казахстан)", "kz", "7", 1 ], [ "Kenya", "ke", "254" ], [ "Kiribati", "ki", "686" ], [ "Kosovo", "xk", "383" ], [ "Kuwait (‫الكويت‬‎)", "kw", "965" ], [ "Kyrgyzstan (Кыргызстан)", "kg", "996" ], [ "Laos (ລາວ)", "la", "856" ], [ "Latvia (Latvija)", "lv", "371" ], [ "Lebanon (‫لبنان‬‎)", "lb", "961" ], [ "Lesotho", "ls", "266" ], [ "Liberia", "lr", "231" ], [ "Libya (‫ليبيا‬‎)", "ly", "218" ], [ "Liechtenstein", "li", "423" ], [ "Lithuania (Lietuva)", "lt", "370" ], [ "Luxembourg", "lu", "352" ], [ "Macau (澳門)", "mo", "853" ], [ "Macedonia (FYROM) (Македонија)", "mk", "389" ], [ "Madagascar (Madagasikara)", "mg", "261" ], [ "Malawi", "mw", "265" ], [ "Malaysia", "my", "60" ], [ "Maldives", "mv", "960" ], [ "Mali", "ml", "223" ], [ "Malta", "mt", "356" ], [ "Marshall Islands", "mh", "692" ], [ "Martinique", "mq", "596" ], [ "Mauritania (‫موريتانيا‬‎)", "mr", "222" ], [ "Mauritius (Moris)", "mu", "230" ], [ "Mayotte", "yt", "262", 1 ], [ "Mexico (México)", "mx", "52" ], [ "Micronesia", "fm", "691" ], [ "Moldova (Republica Moldova)", "md", "373" ], [ "Monaco", "mc", "377" ], [ "Mongolia (Монгол)", "mn", "976" ], [ "Montenegro (Crna Gora)", "me", "382" ], [ "Montserrat", "ms", "1664" ], [ "Morocco (‫المغرب‬‎)", "ma", "212", 0 ], [ "Mozambique (Moçambique)", "mz", "258" ], [ "Myanmar (Burma) (မြန်မာ)", "mm", "95" ], [ "Namibia (Namibië)", "na", "264" ], [ "Nauru", "nr", "674" ], [ "Nepal (नेपाल)", "np", "977" ], [ "Netherlands (Nederland)", "nl", "31" ], [ "New Caledonia (Nouvelle-Calédonie)", "nc", "687" ], [ "New Zealand", "nz", "64" ], [ "Nicaragua", "ni", "505" ], [ "Niger (Nijar)", "ne", "227" ], [ "Nigeria", "ng", "234" ], [ "Niue", "nu", "683" ], [ "Norfolk Island", "nf", "672" ], [ "North Korea (조선 민주주의 인민 공화국)", "kp", "850" ], [ "Northern Mariana Islands", "mp", "1670" ], [ "Norway (Norge)", "no", "47", 0 ], [ "Oman (‫عُمان‬‎)", "om", "968" ], [ "Pakistan (‫پاکستان‬‎)", "pk", "92" ], [ "Palau", "pw", "680" ], [ "Palestine (‫فلسطين‬‎)", "ps", "970" ], [ "Panama (Panamá)", "pa", "507" ], [ "Papua New Guinea", "pg", "675" ], [ "Paraguay", "py", "595" ], [ "Peru (Perú)", "pe", "51" ], [ "Philippines", "ph", "63" ], [ "Poland (Polska)", "pl", "48" ], [ "Portugal", "pt", "351" ], [ "Puerto Rico", "pr", "1", 3, [ "787", "939" ] ], [ "Qatar (‫قطر‬‎)", "qa", "974" ], [ "Réunion (La Réunion)", "re", "262", 0 ], [ "Romania (România)", "ro", "40" ], [ "Russia (Россия)", "ru", "7", 0 ], [ "Rwanda", "rw", "250" ], [ "Saint Barthélemy", "bl", "590", 1 ], [ "Saint Helena", "sh", "290" ], [ "Saint Kitts and Nevis", "kn", "1869" ], [ "Saint Lucia", "lc", "1758" ], [ "Saint Martin (Saint-Martin (partie française))", "mf", "590", 2 ], [ "Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)", "pm", "508" ], [ "Saint Vincent and the Grenadines", "vc", "1784" ], [ "Samoa", "ws", "685" ], [ "San Marino", "sm", "378" ], [ "São Tomé and Príncipe (São Tomé e Príncipe)", "st", "239" ], [ "Saudi Arabia (‫المملكة العربية السعودية‬‎)", "sa", "966" ], [ "Senegal (Sénégal)", "sn", "221" ], [ "Serbia (Србија)", "rs", "381" ], [ "Seychelles", "sc", "248" ], [ "Sierra Leone", "sl", "232" ], [ "Singapore", "sg", "65" ], [ "Sint Maarten", "sx", "1721" ], [ "Slovakia (Slovensko)", "sk", "421" ], [ "Slovenia (Slovenija)", "si", "386" ], [ "Solomon Islands", "sb", "677" ], [ "Somalia (Soomaaliya)", "so", "252" ], [ "South Africa", "za", "27" ], [ "South Korea (대한민국)", "kr", "82" ], [ "South Sudan (‫جنوب السودان‬‎)", "ss", "211" ], [ "Spain (España)", "es", "34" ], [ "Sri Lanka (ශ්‍රී ලංකාව)", "lk", "94" ], [ "Sudan (‫السودان‬‎)", "sd", "249" ], [ "Suriname", "sr", "597" ], [ "Svalbard and Jan Mayen", "sj", "47", 1 ], [ "Swaziland", "sz", "268" ], [ "Sweden (Sverige)", "se", "46" ], [ "Switzerland (Schweiz)", "ch", "41" ], [ "Syria (‫سوريا‬‎)", "sy", "963" ], [ "Taiwan (台灣)", "tw", "886" ], [ "Tajikistan", "tj", "992" ], [ "Tanzania", "tz", "255" ], [ "Thailand (ไทย)", "th", "66" ], [ "Timor-Leste", "tl", "670" ], [ "Togo", "tg", "228" ], [ "Tokelau", "tk", "690" ], [ "Tonga", "to", "676" ], [ "Trinidad and Tobago", "tt", "1868" ], [ "Tunisia (‫تونس‬‎)", "tn", "216" ], [ "Turkey (Türkiye)", "tr", "90" ], [ "Turkmenistan", "tm", "993" ], [ "Turks and Caicos Islands", "tc", "1649" ], [ "Tuvalu", "tv", "688" ], [ "U.S. Virgin Islands", "vi", "1340" ], [ "Uganda", "ug", "256" ], [ "Ukraine (Україна)", "ua", "380" ], [ "United Arab Emirates (‫الإمارات العربية المتحدة‬‎)", "ae", "971" ], [ "United Kingdom", "gb", "44", 0 ], [ "United States", "us", "1", 0 ], [ "Uruguay", "uy", "598" ], [ "Uzbekistan (Oʻzbekiston)", "uz", "998" ], [ "Vanuatu", "vu", "678" ], [ "Vatican City (Città del Vaticano)", "va", "39", 1 ], [ "Venezuela", "ve", "58" ], [ "Vietnam (Việt Nam)", "vn", "84" ], [ "Wallis and Futuna (Wallis-et-Futuna)", "wf", "681" ], [ "Western Sahara (‫الصحراء الغربية‬‎)", "eh", "212", 1 ], [ "Yemen (‫اليمن‬‎)", "ye", "967" ], [ "Zambia", "zm", "260" ], [ "Zimbabwe", "zw", "263" ], [ "Åland Islands", "ax", "358", 1 ] ];
    // loop over all of the countries above
     var valor = document.getElementById("pais pf").value;
     var pais = valor.toLowerCase();
   for (var i = 0; i < allCountries.length; i++) {
        var c = allCountries[i];
        allCountries[i] = {
            name: c[0],
            iso2: c[1],
            dialCode: c[2],
            priority: c[3] || 0,
            areaCodes: c[4] || null
        };
if(pais==c[1]){
	document.getElementById("prof_telefonomovil").value = "+"+c[2];
    }
}
   
    
}


function valida_envia(tipo){ 

var todo_correcto = false;
var expresion_email = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
var contador = 0;

if (tipo == 1) //validaciones del formulario de registro de profesor
{
	console.log("registro de profesor");
	var username = document.getElementById("emailp").value;
	if (expresion_email.test(username)) 
	{
		document.getElementById("emailp").classList.remove("errorinputfield");
		contador ++;
	}
	else
	{
		document.getElementById("emailp").classList.add("errorinputfield");
	}
	
	
	var referido = document.getElementById("idreferido").value;
	
	console.log("valor de id de referido: "+ referido);
	if (referido.length == 7 && referido[2] == '-' && referido[5] == '-' || referido.length == 0 ) 
	{
		contador ++;
		document.getElementById("idreferido").classList.remove("errorinputfield");
		console.log("formato de referido correcto");
	}
	else
	{
		document.getElementById("idreferido").classList.add("errorinputfield");
		console.log("formato de referido incorrecto");
	}


	var nombres = document.getElementById("prof_nombres").value;
	if (nombres != '') 
	{
		document.getElementById("prof_nombres").classList.remove("errorinputfield");
		contador ++;
	}
	else
	{
		document.getElementById("prof_nombres").classList.add("errorinputfield");
	}

	var apellidos = document.getElementById("prof_apellidos").value;
	if (apellidos != '') 
	{
		document.getElementById("prof_apellidos").classList.remove("errorinputfield");
		contador ++;
	}
	else
	{
		document.getElementById("prof_apellidos").classList.add("errorinputfield");
	}

	var edad = document.getElementById("prof_edad").value;
	if (edad > 3) 
	{
		document.getElementById("prof_edad").classList.remove("errorinputfield");
		contador ++;
	}
	else
	{
		document.getElementById("prof_edad").classList.add("errorinputfield");
	}

	var clave = document.getElementById("clavep").value;
	var confirmarclave = document.getElementById("confirmarclave").value;
	if (clave != '' && confirmarclave != '' && clave == confirmarclave) 
	{
		document.getElementById("clavep").classList.remove("errorinputfield");
		document.getElementById("confirmarclave").classList.remove("errorinputfield");
		contador ++;
	}
	else
	{
		document.getElementById("clavep").classList.add("errorinputfield");
		document.getElementById("confirmarclave").classList.add("errorinputfield");
	}

	console.log("contador: "+ contador);

	if (contador == 6) // todo correcto realizo submit del formulario 
	{
		document.getElementById("registro_profesor").submit();
	}

}

if (tipo ==2) //validaciones del formulario de registro de alumno
{
	console.log("registro de alumno");

	var username = document.getElementById("emaila").value;
	if (expresion_email.test(username)) 
	{
		document.getElementById("emaila").classList.remove("errorinputfield");
		contador ++;
	}
	else
	{
		document.getElementById("emaila").classList.add("errorinputfield");
	}
	

	var nombres = document.getElementById("alum_nombres").value;
	if (nombres != '') 
	{
		document.getElementById("alum_nombres").classList.remove("errorinputfield");
		contador ++;
	}
	else
	{
		document.getElementById("alum_nombres").classList.add("errorinputfield");
	}

	var apellidos = document.getElementById("alum_apellidos").value;
	if (apellidos != '') 
	{
		document.getElementById("alum_apellidos").classList.remove("errorinputfield");
		contador ++;
	}
	else
	{
		document.getElementById("alum_apellidos").classList.add("errorinputfield");
	}

	var edad = document.getElementById("alum_edad").value;
	if (edad > 3) 
	{
		document.getElementById("alum_edad").classList.remove("errorinputfield");
		contador ++;
	}
	else
	{
		document.getElementById("alum_edad").classList.add("errorinputfield");
	}

	var clave = document.getElementById("clavea").value;
	var confirmarclavea = document.getElementById("confirmarclavea").value;
	if (clave != '' && confirmarclavea != '' && clave == confirmarclavea) 
	{
		document.getElementById("clavea").classList.remove("errorinputfield");
		document.getElementById("confirmarclavea").classList.remove("errorinputfield");
		contador ++;
	}
	else
	{
		document.getElementById("clavea").classList.add("errorinputfield");
		document.getElementById("confirmarclavea").classList.add("errorinputfield");
	}

	if (contador == 5) // todo correcto realizo submit del formulario de alumno
	{
		document.getElementById("registro_alumno").submit();
	}
}

  
}
</script>



    <!-- jquery
		============================================ -->	
        <?= $this->Html->script('vendor/jquery-1.11.3.min.js') ?>	
		<!-- mixitup JS
		============================================ -->		
        <?= $this->Html->script('jquery.mixitup.js') ?>	
		<!-- bootstrap JS
		============================================ -->
        <?= $this->Html->script('bootstrap.min.js') ?>

        <?= $this->Html->script('bootstrap-select.min.js') ?>		
        
		<!-- wow JS
		============================================ -->		
        <?= $this->Html->script('wow.min.js') ?>
		<!-- price-slider JS
		============================================ -->		
        <?= $this->Html->script('jquery-price-slider.js') ?>		
		<!-- meanmenu JS
		============================================ -->		
        <?= $this->Html->script('jquery.meanmenu.js') ?>
		<!-- owl.carousel JS
		============================================ -->
        <?= $this->Html->script('owl.carousel.min.js') ?>		
		<!-- counterup JS
		============================================ -->
        <?= $this->Html->script('jquery.counterup.min.js') ?>		

		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- sliphover JS
		============================================ -->		
        <?= $this->Html->script('jquery.sliphover.min.js') ?>
		<!-- Nivo slider js
		============================================ --> 	
        <?= $this->Html->script('jquery.nivo.slider.js') ?>

        <?= $this->Html->script('home.js') ?>	
		 
		
        <!-- bxslider JS
		============================================ -->	
        <?= $this->Html->script('jquery.bxslider.min.js') ?>	
		<!-- masonry JS
		============================================ -->		
        <?= $this->Html->script('masonry.pkgd.min.js') ?>
		<!-- plugins JS
		============================================ -->
        <?= $this->Html->script('plugins.js') ?>		
		<!-- main JS
		============================================ -->
        <?= $this->Html->script('main.js') ?>		
        
</body>
</html>
