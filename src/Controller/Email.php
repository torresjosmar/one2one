<?php function registro($email,$nombre,$apellido,$telefono)
{

$destinatario = $email; 
$asunto = "Registro de usuario one2one"; 
$cuerpo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>¡Excelente, ya formas parte de ONE2ONE!</title>
	<style type="text/css">

		#outlook a {padding:0;}
		body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
		.ExternalClass {width:100%;}
		.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
		#backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
		img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
		a img {border:none;display:inline-block;}
		.image_fix {display:block;}
		
		h1, h2, h3, h4, h5, h6 {color: black !important;}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: blue !important;}

		h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
			color: red !important; 
		}

		h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
			color: purple !important; 
		}

		table td {border-collapse: collapse;}

		table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

		a {color: #000;}

		@media only screen and (max-device-width: 480px) {

			a[href^="tel"], a[href^="sms"] {
				text-decoration: none;
				color: black; /* or whatever your want */
				pointer-events: none;
				cursor: default;
			}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
				text-decoration: default;
				color: orange !important; /* or whatever your want */
				pointer-events: auto;
				cursor: default;
			}
		}


		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
			a[href^="tel"], a[href^="sms"] {
				text-decoration: none;
				color: blue; /* or whatever your want */
				pointer-events: none;
				cursor: default;
			}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
				text-decoration: default;
				color: orange !important;
				pointer-events: auto;
				cursor: default;
			}
		}

		p {
			margin:0;
			color:#555;
			font-family:Helvetica, Arial, sans-serif;
			font-size:16px;
			line-height:160%;
		}
		a.link2{
			text-decoration:none;
			font-family:Helvetica, Arial, sans-serif;
			font-size:16px;
			color:#fff;
			border-radius:4px;
		}
		h2{
			color:#181818;
			font-family:Helvetica, Arial, sans-serif;
			font-size:22px;
			font-weight: normal;
		}

		.bgItem{
			background:#1a95cf;
		}
		.bgBody{
			background:#ffffff;
		}

	</style>

<script type="colorScheme" class="swatch active">
  {
    "name":"Default",
    "bgBody":"ffffff",
    "link":"f2f2f2",
    "color":"555555",
    "bgItem":"F4A81C",
    "title":"181818"
  }
</script>

</head>
<body>
	<!-- Wrapper/Container Table: Use a wrapper table to control the width and the background color consistently of your email. Use this approach instead of setting attributes on the body tag. -->
	<table cellpadding="0" width="100%" cellspacing="0" border="0" id="backgroundTable" class="bgBody">
		<tr>
			<td>

				<!-- Tables are the most common way to format your email consistently. Set your table widths inside cells and in most cases reset cellpadding, cellspacing, and border to zero. Use nested tables as a way to space effectively in your message. -->

				<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border-collapse:collapse;">
					<tr>
						<td class="movableContentContainer">
							
							<div class="movableContent">
								<table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
									<tr height="40">
										<td width="200">&nbsp;</td>
										<td width="200">&nbsp;</td>
										<td width="200">&nbsp;</td>
									</tr>
									<tr>
										<td width="200" valign="top">&nbsp;</td>
										<td width="200" valign="top" align="center">
											<div class="contentEditableContainer contentTextEditable">
												<div class="contentEditable" >
													<img src="images/logo.png" width="100%" height="100%"   data-default="placeholder" />
												</div>
											</div>
										</td>
										<td width="200" valign="top">&nbsp;</td>
									</tr>
									<tr height="25">
										<td width="200">&nbsp;</td>
										<td width="200">&nbsp;</td>
										<td width="200">&nbsp;</td>
									</tr>
								</table>
							</div>

							<div class="movableContent">
								<table cellpadding="0" cellspacing="0" border="0" align="center" width="600" style="background: #fbfbfb;">
									<tr>
										<td width="100%" colspan="3" align="center" style="padding-bottom:10px;padding-top:25px;">
											<div class="contentEditableContainer contentTextEditable">
												<div class="contentEditable" >
													<h2 style="    color: #828282!important;font-weight: bold;font-family: Helvetica, Arial, sans-serif;" >Bienvenido a ONE2ONE</h2>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td width="100">&nbsp;</td>
										<td width="400" align="center" style="padding-bottom:5px;">
											<div class="contentEditableContainer contentTextEditable">
												<div class="contentEditable" >
													<p >Bienvenido ya formas parte de ONE2ONE <br><br>

<b>¡Te damos la bienvenida a nuestra comunidad!</b> <br><br>Aquí tienes una pequeña guía de lo que encontrarás:<br><br>
<b>1.-</b> Busca y encuentra tu profesor ideal<br>
<b>2.-</b> Encuentra al profesor que más se ajusta a tus necesidades como músico.<br>
<b>3.-</b>Reserva tu clase<br>
<b>4.-</b> Aprende con un profesor, aprende de verdad<br>
<b>5.-</b> Aprende con el profesor en nuestro aula virtual. Dispondrás de vídeo, chat y muchas funcionalidades más!<br>
</p>
												</div>
											</div>
										</td>
										<td width="100">&nbsp;</td>
									</tr>
								</table>
							</div>

							<div class="movableContent">
								<table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
									<tr>
										<td width="100">&nbsp;</td>
										<td width="400" align="center" style="padding-top:25px;padding-bottom:115px;">
											<table cellpadding="0" cellspacing="0" border="0" align="center" width="200" height="50">
												<tr>
													<td bgcolor="#c72e36" align="center" style="border-radius:4px;" width="200" height="50">
														<div class="contentEditableContainer contentTextEditable">
															<div class="contentEditable" >
																<a target="_blank" href="http://18.191.211.97/usuario/login" class="link2">Visita tu perfil</a>
															</div>
														</div>

													</td>
												</tr>
											</table>
										</td>
										<td width="100">&nbsp;</td>
									</tr>
								</table>
							</div>


							<div class="movableContent">
								<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border-collapse:collapse;">
									<tr>
										<td style="color:#fff;" class="bgItem">
											<table cellpadding="0" style="border-collapse:collapse;" cellspacing="0" border="0" align="center" width="600">
												<tr>
													<td width="200" style="vertical-align:bottom;">
														<div class="contentEditableContainer contentImageEditable">
															<div class="contentEditable" >
																<div style="padding-top:20px;text-align:center;">
																	<img src="images/6@2x.png" width="148" data-default="placeholder" data-max-width="200" style="margin-bottom:-3px;" />
																</div>
															</div>
														</div>
														
													</td>
													<td width="400" valign="top" style="padding-top:40px;padding-bottom:20px;">
														<br/>
														<div class="contentEditableContainer contentTextEditable">
															<div class="contentEditable" >
																<div style="font-size:23px;font-family:Heveltica, Arial, sans-serif;color:#fff;">Un poco acerca de ONE2ONE</div>
															</div>
														</div>
														
														<div class="contentEditableContainer contentTextEditable">
															<div class="contentEditable"  style="padding:20px 10px 0 0;margin:0;font-family:Helvetica, Arial, sans-serif;font-size:15px;line-height:150%;">
																<p style="color:#FFEECE;"><b>One2one</b> es la única escuela de música online a la que puedes acceder desde cualquier parte del mundo. Aprende rápidamente el instrumento que te gusta, con un profesor en vivo a través de clases personalizadas.</strong></p>
															</div>
														</div>

													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</div>

						<div class="movableContent">
								<table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
									<tr>
										<td width="100%" colspan="2" style="padding-top:65px;">
											<hr style="height:1px;border:none;color:#333;background-color:#ddd;" />
										</td>
									</tr>
									<tr>
										<td width="60%" height="70" valign="middle" style="padding-bottom:20px;">
											<div class="contentEditableContainer contentTextEditable">
												<div class="contentEditable" >
													<span style="font-size:13px;color:#181818;font-family:Helvetica, Arial, sans-serif;line-height:200%;">One2onemusic@email.com</span>
													<br/>
								          
												</div>
											</div>
										</td>
										<td width="40%" height="70" align="right" valign="top" align="right" style="padding-bottom:20px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">
												<tr>
													<td width="57%"></td>
													<td valign="top" width="34">
														<div class="contentEditableContainer contentFacebookEditable" style="display:inline;">
															<div class="contentEditable" >
															<a href="https://www.facebook.com/one2onemusicschool">
																<img src="images/facebook.png" data-default="placeholder" data-max-width="30" width="30" height="30"  style="margin-right:40x;" data-customIcon="true" > </a>
															</div>
														</div>
													</td>
													
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</div>

						</td>
					</tr>
				</table>
<!-- END BODY -->

			</td>
		</tr>
	</table>
	<!-- End of wrapper table -->
</body>
</html>
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: One2One <no-reply@one2onemusicschool.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n";  

if (mail($destinatario,$asunto,$cuerpo,$headers)) {
	echo 'Correo enviado con exito';
}
else
{
	echo 'Fallo al enviar correo';
}



	}

function compra($idalumno, $total_neto, $plataforma, $fecha, $email){
$destinatario = $email; 
$asunto = "Registro de usuario one2one"; 
$cuerpo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>¡Excelente, ya formas parte de ONE2ONE!</title>
	<style type="text/css">

		#outlook a {padding:0;}
		body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
		.ExternalClass {width:100%;}
		.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
		#backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
		img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
		a img {border:none;display:inline-block;}
		.image_fix {display:block;}
		
		h1, h2, h3, h4, h5, h6 {color: black !important;}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: blue !important;}

		h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
			color: red !important; 
		}

		h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
			color: purple !important; 
		}

		table td {border-collapse: collapse;}

		table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

		a {color: #000;}

		@media only screen and (max-device-width: 480px) {

			a[href^="tel"], a[href^="sms"] {
				text-decoration: none;
				color: black; /* or whatever your want */
				pointer-events: none;
				cursor: default;
			}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
				text-decoration: default;
				color: orange !important; /* or whatever your want */
				pointer-events: auto;
				cursor: default;
			}
		}


		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
			a[href^="tel"], a[href^="sms"] {
				text-decoration: none;
				color: blue; /* or whatever your want */
				pointer-events: none;
				cursor: default;
			}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
				text-decoration: default;
				color: orange !important;
				pointer-events: auto;
				cursor: default;
			}
		}

		p {
			margin:0;
			color:#555;
			font-family:Helvetica, Arial, sans-serif;
			font-size:16px;
			line-height:160%;
		}
		a.link2{
			text-decoration:none;
			font-family:Helvetica, Arial, sans-serif;
			font-size:16px;
			color:#fff;
			border-radius:4px;
		}
		h2{
			color:#181818;
			font-family:Helvetica, Arial, sans-serif;
			font-size:22px;
			font-weight: normal;
		}

		.bgItem{
			background:#1a95cf;
		}
		.bgBody{
			background:#ffffff;
		}

	</style>

<script type="colorScheme" class="swatch active">
  {
    "name":"Default",
    "bgBody":"ffffff",
    "link":"f2f2f2",
    "color":"555555",
    "bgItem":"F4A81C",
    "title":"181818"
  }
</script>

</head>
<body>
	<!-- Wrapper/Container Table: Use a wrapper table to control the width and the background color consistently of your email. Use this approach instead of setting attributes on the body tag. -->
	<table cellpadding="0" width="100%" cellspacing="0" border="0" id="backgroundTable" class="bgBody">
		<tr>
			<td>

				<!-- Tables are the most common way to format your email consistently. Set your table widths inside cells and in most cases reset cellpadding, cellspacing, and border to zero. Use nested tables as a way to space effectively in your message. -->

				<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border-collapse:collapse;">
					<tr>
						<td class="movableContentContainer">
							
							<div class="movableContent">
								<table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
									<tr height="40">
										<td width="200">&nbsp;</td>
										<td width="200">&nbsp;</td>
										<td width="200">&nbsp;</td>
									</tr>
									<tr>
										<td width="200" valign="top">&nbsp;</td>
										<td width="200" valign="top" align="center">
											<div class="contentEditableContainer contentTextEditable">
												<div class="contentEditable" >
													<img src="images/logo.png" width="100%" height="100%"  data-default="placeholder" />
												</div>
											</div>
										</td>
										<td width="200" valign="top">&nbsp;</td>
									</tr>
									<tr height="25">
										<td width="200">&nbsp;</td>
										<td width="200">&nbsp;</td>
										<td width="200">&nbsp;</td>
									</tr>
								</table>
							</div>

							<div class="movableContent">
								<table cellpadding="0" cellspacing="0" border="0" align="center" width="600" style="background: #fbfbfb;">
									<tr>
										<td width="100%" colspan="3" align="center" style="padding-bottom:10px;padding-top:25px;">
											<div class="contentEditableContainer contentTextEditable">
												<div class="contentEditable" >
													<h2 style="    color: #828282!important;font-weight: bold;font-family: Helvetica, Arial, sans-serif;" >Bienvenido a ONE2ONE</h2>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td width="100">&nbsp;</td>
										<td width="400" align="center" style="padding-bottom:5px;">
											<div class="contentEditableContainer contentTextEditable">
												<div class="contentEditable" >
													<p 

<b>¡Gracias por tu compra!</b> <br><br>Aquí tienes una pequeño resumen de tu compra:<br><br>
<b>Tu Nombre:</b>    <br>
<b>Tu pago:</b> <br>
<b>Fecha de pago:</b>  <br>
<b>Metodo de pago:</b> <br>
</p>
												</div>
											</div>
										</td>
										<td width="100">&nbsp;</td>
									</tr>
								</table>
							</div>

							<div class="movableContent">
								<table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
									<tr>
										<td width="100">&nbsp;</td>
										<td width="400" align="center" style="padding-top:25px;padding-bottom:115px;">
											<table cellpadding="0" cellspacing="0" border="0" align="center" width="200" height="50">
												<tr>
													<td bgcolor="#c72e36" align="center" style="border-radius:4px;" width="200" height="50">
														<div class="contentEditableContainer contentTextEditable">
															<div class="contentEditable" >
																<a target="_blank" href="http://18.191.211.97/usuario/login" class="link2">Visita tu perfil</a>
															</div>
														</div>

													</td>
												</tr>
											</table>
										</td>
										<td width="100">&nbsp;</td>
									</tr>
								</table>
							</div>


							<div class="movableContent">
								<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border-collapse:collapse;">
									<tr>
										<td style="color:#fff;" class="bgItem">
											<table cellpadding="0" style="border-collapse:collapse;" cellspacing="0" border="0" align="center" width="600">
												<tr>
													<td width="200" style="vertical-align:bottom;">
														<div class="contentEditableContainer contentImageEditable">
															<div class="contentEditable" >
																<div style="padding-top:20px;text-align:center;">
																	<img src="images/6@2x.png" width="148" data-default="placeholder" data-max-width="200" style="margin-bottom:-3px;" />
																</div>
															</div>
														</div>
														
													</td>
													<td width="400" valign="top" style="padding-top:40px;padding-bottom:20px;">
														<br/>
														<div class="contentEditableContainer contentTextEditable">
															<div class="contentEditable" >
																<div style="font-size:23px;font-family:Heveltica, Arial, sans-serif;color:#fff;">Gracias por estudiar con ONE2ONE</div>
															</div>
														</div>
														
														<div class="contentEditableContainer contentTextEditable">
															<div class="contentEditable"  style="padding:20px 10px 0 0;margin:0;font-family:Helvetica, Arial, sans-serif;font-size:15px;line-height:150%;">
																<p style="color:#FFEECE;"><b>¿Y ahora qué tengo que hacer?</b>	
																	Ve a tu perfil y organiza tu horario para que disfrutes de las clases en las fechas que hayas elegido.<br><br>

<b>¡Que lo disfrutes!</b><br>
El equipo de ONE2ONE</p>
															</div>
														</div>

													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</div>

						<div class="movableContent">
								<table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
									<tr>
										<td width="100%" colspan="2" style="padding-top:65px;">
											<hr style="height:1px;border:none;color:#333;background-color:#ddd;" />
										</td>
									</tr>
									<tr>
										<td width="60%" height="70" valign="middle" style="padding-bottom:20px;">
											<div class="contentEditableContainer contentTextEditable">
												<div class="contentEditable" >
													<span style="font-size:13px;color:#181818;font-family:Helvetica, Arial, sans-serif;line-height:200%;">One2onemusic@email.com</span>
													<br/>
								          
												</div>
											</div>
										</td>
										<td width="40%" height="70" align="right" valign="top" align="right" style="padding-bottom:20px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">
												<tr>
													<td width="57%"></td>
													<td valign="top" width="34">
														<div class="contentEditableContainer contentFacebookEditable" style="display:inline;"">
															<div class="contentEditable" >
																<img src="images/facebook.png" data-default="placeholder" data-max-width="30" width="30" height="30" alt="facebook" style="margin-right:40x;" data-customIcon="true" >
															</div>
														</div>
													</td>
													<td valign="top" width="34">
														<div class="contentEditableContainer contentTwitterEditable" style="display:inline;">
															<div class="contentEditable" >
																<img src="images/twitter.png" data-default="placeholder" data-max-width="30" width="30" height="30" alt="twitter" style="margin-right:40x;" data-customIcon="true" >
															</div>
														</div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</div>

						</td>
					</tr>
				</table>
<!-- END BODY -->

			</td>
		</tr>
	</table>
	<!-- End of wrapper table -->
</body>
</html>
 '; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: One2One <no-reply@one2onemusicschool.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n";  

if (mail($destinatario,$asunto,$cuerpo,$headers)) {
	echo 'Correo enviado con exito';
}
else
{
	echo 'Fallo al enviar correo';
}



	

}

 ?>