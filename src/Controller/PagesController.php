<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{


    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function home(){

        $session = $this->request->session();
        $this->viewBuilder()->setLayout('default');
        $this->set('title','home');
        $this->requestAction('/Profesor/obtenerprofesores');

        $this->set('profesores', $session->consume('info'));

    }

    public function lista(){
          $session = $this->request->session();
        $this->viewBuilder()->setLayout('default');
        $this->set('title','Listado de profesores');
        $this->requestAction('/profesor/obtenerprofesores');

        $this->set('profesores', $session->consume('info'));


        /*llamando las categorias*/
        $this->requestAction('/categoria/obtenercategorias');
        $this->set('categoria', $session->consume('info'));

        /*obtener subtegorias*/
          $this->requestAction('/subcategoria/obtenersubcategorias');
        $this->set('subcategoria', $session->consume('info'));


    }

    public function funciona(){
        $this->viewBuilder()->setLayout('default');
        $this->set('title','Como Funciona');
    }

    public function busqueda()
    {
         $session = $this->request->session();
        $this->viewBuilder()->setLayout('default');
        $this->set('title','Busqueda');

        if($this->request->is('post'))
        {
            $request = $this->request->data;
            $this->set('busqueda', $request['buscar']);

            //debug($this->request->data);
            $session->write('info',$request['buscar']);
            $this->requestAction('/profesor/buscarprofesor');
            $resultado = $session->consume('info');
            $this->set('profesores', $resultado);

        
            /*llamando las categorias*/
            $this->requestAction('/categoria/obtenercategorias');
            $this->set('categoria', $session->consume('info'));

            /*obtener subtegorias*/
            $this->requestAction('/subcategoria/obtenersubcategorias');
            $this->set('subcategoria', $session->consume('info')); 
            /*obtener profesores sugeridos*/
            $this->requestAction('profesor/obtenerprofesoressugeridos');
            $this->set('profesores_sugeridos',$session->consume('info'));
        }
    }

    public function perfilprofesor($infoprofesor)
    {

        $session= $this->request->session();
        $loguser = $this->Auth->user(); // informacion de usuario logeado
        $this->set('usuario',$loguser);
         //print_r($usuario);
         //exit();    
        $idprofesor = explode('-', $infoprofesor);
        $session->write('info',$idprofesor[0]);
        $this->requestAction('profesor/obtenerprofesor');
        $this->set('nombre',$infoprofesor);
        $this->set('info_profesor',$session->consume('info')); // informacion general del profesor

         $session->write('info',$idprofesor[0]);
        $this->requestAction('/formacionacademica/getformacionacademica'); // formacion academica del profesor
        $this->set('formacionacademica',$session->consume('info'));
        $session->write('info',$idprofesor[0]);
        $this->requestAction('/trayectoria/gettrayectoria'); // trayectoria academica del profesor
        $this->set('trayectoria',$session->consume('info'));
        $session->write('info',$idprofesor[0]); 
        $this->requestAction('horario/gethorario'); // obtener horario profesor
        $this->set('horario',$session->consume('info'));

        $this->set('idprofesor',$idprofesor[0]);

    }

        public function quienes(){

                $this->viewBuilder()->setLayout('default');
                $this->set('title','Quienes Somos ');
        }

        public function selectclase($idprofesor)
        {
           // echo "estoy en select clase";
           // exit();
            
            $session= $this->request->session();
            $loguser = $this->Auth->user(); // informacion de usuario logeado
            if($loguser['id_rol'] == 2){  
            //echo "Soyprofesor";
             //exit();  
                header('Location: http://18.191.211.97');    
            }
            if(!isset($idprofesor)){

                header('Location: http://18.191.211.97');   
            }
            $idprofesor = explode('-', $idprofesor);


             $this->viewBuilder()->setLayout('default');
             $this->set('title','Solicita tu clase Ahora! ');

             $session->write('info',$this->Auth->user('id')); 
             $this->requestAction('alumno/getalumnodata'); // obtener informacion del alumno
             $this->set('alumno',$session->consume('info'));
       
            if($this->request->is('post'))
            {   
                $request = $this->request->data;
                //print_r($request);
                //exit();
                $session->write('resumen_compra',$request);
                if (isset($request['idalumno'])) {
               //proceso solicitud de factura (envio a otra vista para mostrar su informacion)
               $session->write('resumen_compra',$request);
                
              $this->redirect(['controller' => 'pages', 'action' => 'procesarorden']);
           }

       }
           $session->write('info',$idprofesor[0]);
           $this->requestAction('profesor/obtenerprofesor');
           $this->set('info_profesor',$session->consume('info')); // informacion general del profesor
           $session->write('info',$idprofesor[0]); 
           $this->requestAction('horario/gethorario'); // obtener horario profesor
           $this->set('horario',$session->consume('info'));
          

        }

        public function orden()
        {
            $session= $this->request->session();
             $this->viewBuilder()->setLayout('default');
             $this->set('title','Resumen de orden');
             $this->set('detalle_orden',$session->read('resumen_compra'));

             $session->write('info',$session->read('resumen_compra')['idprofesor']);
             $this->requestAction('profesor/obtenerprofesor');
             $this->set('info_profesor',$session->consume('info')); // informacion general del profesor

             if($this->request->is('post'))
             {
                $request = $session->consume('resumen_compra');
                $request['total'] = $this->request->data['total'];
                $session->write('resumen_compra',$request);
                $this->redirect(['controller' => 'pages', 'action' => 'procesarorden']);
             }
        }

        public function procesarorden()
        {
        
        $session= $this->request->session();
        
     	/*require_once "mercadopago.php";
 
   		      
		$preference_data = array(
    	"items" => array(
        array(
            "id" => "Code",
            "title" => "pago de curso",
            "currency_id" => "ARS",
            "picture_url" =>"https://www.mercadopago.com/org-img/MP3/home/logomp3.gif",
            "description" => "descripcion de prueba pago de curso",
            "quantity" => 1,
            "unit_price" => 1
        )
    	),
    		"payer" => array(
        	"name" => "josmar torres",
        	"email" => "josmar.torres3@gmail.com"
    	),
    		"back_urls" => array(
        	"success" => "http://18.191.211.97/pages/pagoexitoso",
        	"failure" => "http://www.google.com",
        	"pending" => "http://www.marca.com"
    	),
    		"auto_return" => "approved",
    		"payment_methods" => array(
        	"excluded_payment_methods" => array(
            array(
                "id" => "amex",
            )
        ),
        	"excluded_payment_types" => array(
            array(
                "id" => "ticket"
            )
        ),
        	"installments" => 24,
        	"default_payment_method_id" => null,
        	"default_installments" => null,
    	),
    		"external_reference" => "Referincia12345",
    		"expires" => false,
    		"expiration_date_from" => null,
    		"expiration_date_to" => null
		);

$preference = $mp->create_preference($preference_data);

echo '<a id = "home-link" href="'.$preference["response"]["init_point"].'" name="MP-Checkout" class="orange-ar-m-sq-arall">Pay</a>';    
        
        echo "<script type='text/javascript'> 
            
            document.getElementById('home-link').click();
        
        </script>
        <script type='text/javascript' src='//resources.mlstatic.com/mptools/render.js'></script>
        ";
        */
	$this->requestAction('pago/addpago');//registro pago
    $this->requestAction('horario/addalumnohorario'); //registro horas seleccionadas en el horario
	$this->redirect(['controller' => 'pages', 'action' => 'pagoexitoso']);
	


    
    }

        public function pagoexitoso()
        {
            $session= $this->request->session();
             $this->viewBuilder()->setLayout('default');

             if ($session->check('resumen_compra')) // control de seguridad para el ingreso a la pagina
             {
                //$resumen_compra = $session->consume('resumen_compra'); // obtengo resumen de compra para hacer algo
             }
             else
            {
                $this->Flash->error('Contenido no disponible');
                $this->redirect(['controller' => 'pages', 'action' => 'home']);
            }

             


             $this->set('title','Resumen de orden');
        }


        public function faq()
        {
           $session= $this->request->session();
             $this->viewBuilder()->setLayout('default');
             $this->set('title','Preguntas Frecuentes');
        }

                public function terminocondiciones()
        {
           $session= $this->request->session();
             $this->viewBuilder()->setLayout('default');
             $this->set('title','Preguntas Frecuentes');
        }
    
}
