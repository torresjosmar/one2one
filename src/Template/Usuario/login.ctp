

  

<div class="container" style="background-color: #fff;border-radius: 2px;padding: 10%; margin-top: 1.7em;    box-shadow: 2px 0px 4px 0px #737373; text-align: center;display: block;">
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

    <h2 style="margin-top: 30px;color: #0d8dc0;">Inicia Sesión</h2>
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
