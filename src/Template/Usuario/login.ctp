

<div class="row" id="fondologin" style="height: 100%;width: 100%; max-width: 100%;">
  <div class="col-md-4"></div>
  <div class="col-md-4" style="background: #fff;
    padding: 5%;
    text-align: center;
    margin: auto;
    display: block;">
      

 


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

    <h2 style="margin-top: 30px;color: #0d8dc0;    font-weight: 200;">Inicia Sesión</h2>
    <hr style="    width: 60%;
    text-align: center;
    display: inline-flex;
    margin: 0;">
    <?= $this->Form->create('login', array('id' => 'formulariologin')) ?>


<div class="form-group" id="alertas">
        <?php if (isset($flagbadlogin)) {
        ?>
        <div class="alert alert-danger"> Error usuario o contraseña incorrectos</div>
        <?php
        } ?>
    </div>
    <div class="row" style="margin-top: 40px;text-align: center;
    display: block;">
    
        <div class="col-md-12">
            <div class="form-group">
            <?= $this->Form->input('username',['label' => false, 'placeholder' => 'ejemplo@one2one.com', 'required' => 'required' , 'class' => 'form-control-1' , 'id' => 'username']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('password',['label' => false, 'placeholder' => 'Contraseña', 'required' => 'required', 'class' => 'form-control-1']) ?>
            </div>
        <span class="txt2">
                       <a class="link" href="#" style="text-decoration: none;">Olvidaste tu contraseña?</a>
                    </span>
                    <br>
                    <button type="button" class="btn btn-success entrar" onclick="validar()">Iniciar Sesion</button>
            <?php //echo $this->Form->button('Iniciar Sesion',['class' => 'btn btn-success entrar', 'onclick' => 'validar()']); ?>

        </div><br><br>
    
                    
            <div class="logeo-1" style="    margin-top: 30px;">
                                                <a class="users-registro" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-clipboard-list"></i> Regístrate gratis</a>
                                            </div>
                      
               
               </div>   
 

  </div>
  <div class="col-md-4"></div>
</div>

<!--
 <a class="link" data-toggle="modal" data-target="#exampleModal2" style="text-decoration: none;">no tienes una cuenta?<strong> Registrate!</strong></a>
    <?= $this->Form->end() ?>
</div>
-->
<script type='text/javascript'>

var todo_correcto = true;
function validar(){

/*creo una variable de tipo booleano que en principio tendrá un valor true(verdadero),
y que se convertirá en false(falso) cuando la condición no se cumpla*/


console.log('click en formulario');

/*Para comprobar el email haremos uso de una expresión regular. Esto es una secuencia
de caracteres que nos dirá si el valor ingresado por el usuario tiene estructura de
correo electrónico. Lo que hacemos es obtener el value del campo de texto destinado
al email, y le aplicamos el método test() del objeto global RegExp(que nos permite
trabajar con expresiones regulares).*/
var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;

var username = document.getElementById("username").value;

if (!expresion.test(username)){
    todo_correcto = false;
}

/*Por último, y como aviso para el usuario, si no está todo bién, osea, si la variable
todo_correcto ha devuelto false al menos una vez, generaremos una alerta advirtiendo
al usuario de que algunos datos ingresados no son los que esperamos.*/



if (todo_correcto && document.getElementById("password").value!='') 
{
    document.getElementById("formulariologin").submit();
}

if (!todo_correcto) 
{
document.getElementById("alertas").innerHTML = '<div class="alert alert-danger"> Error usuario o contraseña incorrectos</div>';
}


}

</script>

<!-- Modal Registro-->


<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

             <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background: #666;padding-left: 2%;padding-right: 2%;border-radius: 5px;">  <span aria-hidden="true">&times;</span>
        </button>  
      </div>
      <div class="modal-body">
        <h3 class="modal-title" id="exampleModalLabel" style="text-align: center;color: #58595b;">Registrate gratis</h3>
        <br>
        <br>
        <div class="row" style="    display: block;padding-left: 1%;">
            <div class="col-md-6">
                <form method="POST" action="<?php echo $this->Url->build(array('controller'=>'usuario','action'=>'registro')); ?>">
                    <input type="hidden" name="tipo" value="1">
                    <button type="submit" class="btn btn-default btn-registro">Soy Alumno</button>
                <?php echo $this->Form->end(); ?>
            </div>
            <div class="col-md-6">
                <form method="POST" action="<?php echo $this->Url->build(array('controller'=>'usuario','action'=>'registro')); ?>">
                    <input type="hidden" name="tipo" value="2">
                    <button type="submit" class="btn btn-default btn-registro">Soy Profesor</button>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
      </div>
      <div class="modal-footer">
      <br><br>
      </div>
    </div>
  </div>
</div>



<!-- Modal registro-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="    background: #dfdfdf;">
      <div class="modal-header" style="border-bottom: 0px solid #e5e5e5;">

             <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background: #666;padding-left: 2%;padding-right: 2%;border-radius: 5px;">  <span aria-hidden="true">&times;</span>
        </button>  
      </div>
      <div class="modal-body" style="    padding: 11%;">
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
    <select class="form-control" id="difucionp" name="difucion" onchange="validacionEnteraste()">
      <option value="google">Google</option>
      <option value="facebook">Facebook</option>
      <option value="instagram">Instagram</option>
      <option value="referido">Referido</option>
    </select>
  </div>

   <div class="form-group" id="campocodigoreferido" style="display: none;">
    <label>Codigo de referido</label>
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
      <div class="modal-footer" style="    border-top: 0px solid #e5e5e5;">
      <br><br>
      </div>
    </div>
  </div>
</div>
