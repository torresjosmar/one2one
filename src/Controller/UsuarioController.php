<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;


/**
 * Usuario Controller
 *
 */
class UsuarioController extends AppController
{
    public function index() // metodo utilizado para el perfil de usuario
    {

       $this->set('title','perfil de usuario');
       $loguser = $this->Auth->user(); // informacion de usuario logeado
       $session = $this->request->session();
       $usuario = $this->Usuario->newEntity();
       if($loguser['id_rol'] == 1) // administrador 
       {
       
       }

       if($loguser['id_rol'] == 2) //profesor
       {
  

        if ($this->request->is('post'))
        {
            $request = $this->request->data;
            
            if (isset($request['idprofesorhorario'])) 
            {  // $session = $this->request->sesion();    
                $session->write('info',$request);
                $this->requestAction('/horario/addhorario'); // cargar items a la tabla horario
                
                $session->write('redireccion', '1');

               
               // exit();
                //$this->set('agrego_horario',$session->consume('info'));

            }

            if(isset($request['profesor_descripcion'])) // actualizar descripcion
            {
                $session->write('info',$request);
                $this->requestAction('/profesor/setdescripcion'); // formacion academica del profesor
            }
            if(isset($request['profesor_formacion']))
            {
                $session->write('info',$request);
                $this->requestAction('/formacionacademica/setnewformacionacademica'); // agregar formacion academica del profesor
            }
            if(isset($request['idformacionacademica']))
            {
                $session->write('info',$request);
                $this->requestAction('/formacionacademica/delformacionacademica'); // eliminar formacion academica del profesor
            }
            if(isset($request['profesor_trayectoria']))
            {
                $session->write('info',$request);
                $this->requestAction('/trayectoria/setnewtrayectoria'); // agregar trayectoria del profesor
            }
            if(isset($request['idtrayectoria']))
            {
                $session->write('info',$request);
                $this->requestAction('/trayectoria/deltrayectoria'); // eliminar trayectoria del profesor
            }
            if(isset($request['flag-photo']))
            {
                $query = $this->Usuario->find('all')
                     ->select(['profesor.idprofesor','profesor.nombres','profesor.apellidos','profesor.edad','profesor.telefono_celular','profesor.telefono_fijo','profesor.foto_perfil','profesor.especialidad','profesor.descripcion','profesor.video_presentacion','profesor.provincia_idprovincia','profesor.url_facebook','profesor.url_twitter','profesor.url_instagram'])
                     ->join([
                        'profesor' => [
                            'table' => 'profesor',
                            'conditions' => 'idusuario = profesor.usuario_idusuario'
                        ]
                     ])
                     ->where(['idusuario' => $this->Auth->user('id')]);

                foreach($query as $row)
                {
                    $result1[] = $row;
                }      

                $archivo = $request['file'];
           
             
                if($archivo['type'] == 'image/png' || $archivo['type'] == 'image/jpeg' || $archivo['type'] == 'image/jpg' )
                {
                    $nombre_usuario = explode(' ', $result1[0]->profesor['nombres']);
                    $nombre_archivo = explode('.', $archivo['name']);
                    $nombre_archivo[0] = $result1[0]->profesor['idprofesor'].$nombre_usuario[0].'.'.$nombre_archivo[1];
                        //si el usuario no posee imagen
                        if(is_null($result1[0]->profesor['foto_perfil']))
                        {
                             if (move_uploaded_file($archivo['tmp_name'],WWW_ROOT . 'img/perfiles' . DS .$nombre_archivo[0]))
                            {
                                $session->write('info' ,array('id_profesor' => $result1[0]->profesor['idprofesor'] , 'foto_perfil' => $nombre_archivo[0]));
                                $this->requestAction('/profesor/setimagenperfil'); // cargar imagen de perfil

                                $this->Flash->success('foto de perfil actualizada con exito');
                            }
                            else 
                            {
                                $this->Flash->error('Error al cargar la imagen');
                            }
                           
                        }
                        else
                        {
                            unlink(WWW_ROOT . 'img/perfiles/'.$result1[0]->profesor['foto_perfil']);
                            if (move_uploaded_file($archivo['tmp_name'],WWW_ROOT . 'img/perfiles' . DS .$nombre_archivo[0]))
                            {
                                  $session->write('info' ,array('id_profesor' => $result1[0]->profesor['idprofesor'] , 'foto_perfil' => $nombre_archivo[0]));
                                $this->requestAction('/profesor/setimagenperfil'); // cargar imagen de perfil

                                $this->Flash->success('foto de perfil actualizada con exito');
                            }
                            else
                            {
                                $this->Flash->error('Error al cargar la imagen');
                            }
                            //si posee imagen elimino la imagen del servidor
                            //$this->Flash->error('usuario ya posee imagen');
                        }    

                        //$this->Flash->success('imagen de perfil actualizada con exito');
                    
                }  
                else
                {
                    $this->Flash->error('Formato de archivo incorrecto');
                }
            }

            if (isset($request['profesornombres'])) {
                $info['idprofesor'] = $request['idprofesor'];
                $info['nombres'] = $request['profesornombres'];
                $info['apellidos'] = $request['profesorapellidos'];
                $info['especialidad'] = '';
                for ($i=1; $i < 100 ; $i++) { 
                    $itemname='esp-'.$i;
                    if (isset($request[$itemname])) {
                        $info['especialidad'][] = $request[$itemname];   
                    }
                }

                $session->write('info',$info);
                $this->requestAction('/profesor/actualizarinformaciongeneral'); // formacion academica del profesor

                //debug($info);
            }
        }

        $query = $this->Usuario->find('all')
                     ->select(['profesor.idprofesor','profesor.nombres','profesor.apellidos','profesor.edad','profesor.telefono_celular','profesor.telefono_fijo','profesor.foto_perfil','profesor.especialidad','profesor.descripcion','profesor.video_presentacion','profesor.provincia_idprovincia','profesor.url_facebook','profesor.url_twitter','profesor.url_instagram','profesor.pais','profesor.genero','profesor.idreferido'])
                     ->join([
                        'profesor' => [
                            'table' => 'profesor',
                            'conditions' => 'idusuario = profesor.usuario_idusuario'
                        ]
                     ])
                     ->where(['idusuario' => $this->Auth->user('id')]);

            foreach($query as $row)
            {
                $result[] = $row;
            } 


            $session->write('infologer',$result[0]->profesor['nombres']);      

        $this->set('info_profesor',$result); // informacion general del profesor
        //$this->set('es_profesor',$loguser);
        $session->write('info',$result[0]->profesor['idprofesor']);
        $this->requestAction('/formacionacademica/getformacionacademica'); // formacion academica del profesor
        $this->set('formacionacademica',$session->consume('info'));
        $session->write('info',$result[0]->profesor['idprofesor']);
        $this->requestAction('/trayectoria/gettrayectoria'); // trayectoria academica del profesor
        $this->set('trayectoria',$session->consume('info'));
        $this->requestAction('categoria/getcategorias'); // obtener categorias y sub categorias de especialidades
        $this->set('especialidades',$session->consume('info'));
        $this->requestAction('categoria/getsolocategorias');
        $this->set('categorias_especialidades', $session->consume('info'));
        $session->write('info',$result[0]->profesor['idprofesor']); // obtener horario profesor
        $this->requestAction('horario/gethorario');
        $this->set('horario',$session->consume('info'));//obtener pagos del profesor
         $session->write('info',$result[0]->profesor['idprofesor']); // obtener horario con nombre
        $this->requestAction('horario/gethorarionombre');
        $this->set('nombres_horario',$session->consume('info'));//obtener pagos del profesor
        
  //      $session->write('info',$result[0]->profesor['idprofesor']); // obtener horario profesor
        //print_r($info);
        //exit();
        //$this->requestAction('horario/gethorario_nombre');
        
        //$this->set('horario_nombres',$session->consume('info'));//obtener pagos del profesor
    

        $session->write('info',$result[0]->profesor['idprofesor']);
        $this->requestAction('pago/obtenerpagoprofesor');
        $this->set('pagos',$session->consume('info')); // pagos del profesor
       
       }

       if($loguser['id_rol'] == 3) //alumno
       {


        if ($this->request->is('post')) 
        {
            $request = $this->request->data;

            if (isset($request['idprofesorhorario'])) 
            {  // $session = $this->request->sesion();    
                $session->write('info',$request);
                $this->requestAction('/horario/addhorario'); // cargar items a la tabla horario
                
                $session->write('redireccion', '1');

               
               // exit();
                //$this->set('agrego_horario',$session->consume('info'));

            }
              if(isset($request['alum_nombres'])) // actualizar iformacion personal
            {
        

                      $iduser = $loguser['id'];
        
                        $query = $this->Usuario->find('all')
                     
                     
                     ->where(['idusuario' => $iduser]);
        
        
               foreach ($query as $row) {
               $item['pass'] = $row->password;
           
                $resultado = $item;
                }

            $hasher = new DefaultPasswordHasher;

            if(!$request['alum_clave']==""){   
            
         
            if($hasher->check($request['alum_clave'], $resultado['pass'])){
                       
                  
                $usuario->idusuario = $loguser['id'];
                $usuario->password = $hasher->hash($request['alum_clave_confirmar']);
               
                if($this->Usuario->save($usuario)){
                       $session->write('info',$request);
                
                
                $this->requestAction('/alumno/actualizarinformaciongeneral'); 
            
                }
                 
                }
                else{

                         $this->Flash->error('Error al Actualizar Información, Contraseña no coincide');


       
                }
         

            }else{
                    $session->write('info',$request);
                
                
                $this->requestAction('/alumno/actualizarinformaciongeneral'); 
            

            }         
               

            }

            if(isset($request['flag-photo']))
            {
               $query = $this->Usuario->find('all')
                     ->select(['alumno.idalumno','alumno.nombres','alumno.apellidos','alumno.edad','alumno.telefono_celular','alumno.telefono_fijo','alumno.foto_perfil','alumno.nombre_responsable','alumno.apellido_responsable','alumno.subcategoria_idsubcategoria','alumno.provincia_idprovincia','alumno.usuario_idusuario'])
                     ->join([
                        'alumno' => [
                            'table' => 'alumno',
                            'conditions' => 'idusuario = alumno.usuario_idusuario'
                        ]
                     ])
                     ->where(['idusuario' => $this->Auth->user('id')]);

                foreach($query as $row)
                {
                    $result1[] = $row;
                }      

                $archivo = $request['file'];
                
                //exit();
             
                if($archivo['type'] == 'image/png' || $archivo['type'] == 'image/jpeg' || $archivo['type'] == 'image/jpg' )
                {
                    $nombre_usuario = explode(' ', $result1[0]->alumno['nombres']);
                    $nombre_archivo = explode('.', $archivo['name']);
                    $nombre_archivo[0] = $result1[0]->alumno['usuario_idusuario'].$nombre_usuario[0].'.'.$nombre_archivo[1];
                        //si el usuario no posee imagen
                        if(is_null($result1[0]->alumno['foto_perfil']))
                        {
                             if (move_uploaded_file($archivo['tmp_name'],WWW_ROOT . 'img/perfiles' . DS .$nombre_archivo[0]))
                            {
                                $session->write('info' ,array('id_alumno' => $result1[0]->alumno['idalumno'] , 'foto_perfil' => $nombre_archivo[0]));
                                $this->requestAction('/alumno/setimagenperfil'); // cargar imagen de perfil

                                $this->Flash->success('foto de perfil actualizada con exito');
                            }
                            else 
                            {
                                $this->Flash->error('Error al cargar la imagen');
                            } 
                           
                        }
                        else
                        {
                            unlink(WWW_ROOT . 'img/perfiles/'.$result1[0]->alumno['foto_perfil']);
                            if (move_uploaded_file($archivo['tmp_name'],WWW_ROOT . 'img/perfiles' . DS .$nombre_archivo[0]))
                            {
                                $session->write('info' ,array('id_alumno' => $result1[0]->alumno['idalumno'] , 'foto_perfil' => $nombre_archivo[0]));
                                $this->requestAction('/alumno/setimagenperfil'); // cargar imagen de perfil

                                $this->Flash->success('foto de perfil actualizada con exito');
                            }
                            else 
                            {
                                $this->Flash->error('Error al cargar la imagen');
                            } 
                        }    

                        //$this->Flash->success('imagen de perfil actualizada con exito');
                    
                }  
                else
                {
                    $this->Flash->error('Formato de archivo incorrecto');
                }
            }
        }
            $query = $this->Usuario->find('all')
                     ->select(['alumno.idalumno','alumno.nombres','alumno.apellidos','alumno.edad','alumno.telefono_celular','alumno.telefono_fijo','alumno.foto_perfil','alumno.nombre_responsable','alumno.apellido_responsable','alumno.subcategoria_idsubcategoria','alumno.provincia_idprovincia'])
                     ->join([
                        'alumno' => [
                            'table' => 'alumno',
                            'conditions' => 'idusuario = alumno.usuario_idusuario'
                        ]
                     ])
                     ->where(['idusuario' => $this->Auth->user('id')]);

            foreach($query as $row)
            {
                $result[] = $row;
            }         

            $this->set('info_alumno',$result); // informacion general del alumno
            $this->set('infousuario',$loguser);//info del usuario

            $session->write('info',$result[0]->alumno['idalumno']);
            $session->write('infologer',$result[0]->alumno['nombres']);

            $this->requestAction('/horario/gethorarioalumno'); // informacion de categorias y subcategorias de 
            $this->set('horario',$session->consume('info'));
            
            
            $session->write('info',$result[0]->alumno['idalumno']);
            $this->requestAction('/horario/gethorarioalumnocompleto');
            $this->set('horario_completo',$session->consume('info'));
            
            $this->requestAction('/categoria/getcategorias'); // informacion de categorias y subcategorias de cursos
            $this->set('infocategorias',$session->consume('info'));

            if(!isset($result[0]->alumno['subcategoria_idsubcategoria']) || !isset($result[0]->alumno['provincia_idprovincia']))
            {
                //$this->Flash->warning('Por Favor completa tu informacion personal');
            }
            
       }

       



    }

    public function registro()
    {

$this->viewBuilder()->setLayout('registro');
        $this->set('title','registro');


        $this->set('title','Registro');
        $session = $this->request->session();
        $usuario = $this->Usuario->newEntity();

        if ($this->request->is('post')) {
            //debug($this->request->data); //impresion de informacion enviada via post
            $request = $this->request->data;


            if($request['tipo'] == '1' ) //registro alumno
            {
                $usuario->rol_idrol = '3';
                $usuario->estado_idestado = '1';//usuario verificado por defecto
                $usuario->email = $request['email'];
                $hasher = new DefaultPasswordHasher;
                $usuario->password = $hasher->hash($request['clave']);

                if($this->Usuario->save($usuario))
                {

                    $idususario = $usuario->idusuario;
                    $informacion_alumno['idusuario'] = $idususario;
                    $informacion_alumno['nombres'] = $request['alum_nombres'];
                    $informacion_alumno['apellidos'] = $request['alum_apellidos'];
                    $informacion_alumno['edad'] = $request['alum_edad'];
                    $informacion_alumno['nombresresponsable'] = $request['alum_nombresresponsable'];
                    $informacion_alumno['apellidosresponsable'] = $request['alum_apellidosresponsable'];
                    $informacion_alumno['telefonomovil'] = $request['alum_telefonomovil'];
                    
                    $informacion_alumno['genero'] = $request['genero'];
                    $informacion_alumno['pais'] = $request['pais'];
                    $informacion_alumno['difucion'] = $request['difucion'];

                    $session->write('addinfo',$informacion_alumno);
                    $this->requestAction('/alumno/add');

                    $this->Flash->success('Alumno creado con exito');

                    //auto login

                    $data = array('id' => $usuario->idusuario , 'username' => $usuario->email, 'id_rol' => $usuario->rol_idrol , 'id_estado' => $usuario->estado_idestado);

                    $login = $this->Auth->setUser($data);

                    return $this->redirect(['controller' => 'Usuario', 'action' => 'index']);
                }
                else
                {
                    $this->set('tipo', 1);
                    $this->set('request', $request);
                    $this->Flash->error('Error al registrar usuario');
                }
                
            }
            if($request['tipo'] == '2') //registro profesor
            {
                $usuario->rol_idrol = '2';
                $usuario->estado_idestado = '2';//usuario pendiente por verificar por defecto
                $usuario->email = $request['email'];
                $hasher = new DefaultPasswordHasher;
                $usuario->password = $hasher->hash($request['clave']);
                
                if($this->Usuario->save($usuario))
                {
                    $idususario = $usuario->idusuario;
                    $informacion_profesor['idusuario'] = $idususario;
                    $informacion_profesor['nombres'] = $request['prof_nombres'];
                    $informacion_profesor['apellidos'] = $request['prof_apellidos'];
                    $informacion_profesor['edad'] = $request['prof_edad'];
                    $informacion_profesor['telefonomovil'] = $request['prof_telefonomovil'];
                   
                    $informacion_profesor['pais'] = $request['pais'];
                    $informacion_profesor['genero'] = $request['genero'];
                    $informacion_profesor['difucion'] = $request['difucion'];
                   
                    if (isset($request['idreferido']) || $request['idreferido'] != '') {

                        /*Validacion de que existe referido y concuerdan los datos con este*/
                         $idref = explode('-', $request['idreferido']);
                        
                        if (isset($idref[1])) {
                            
                        

                            $query = $this->Usuario->find('all')
                                                ->select(['profesor.idprofesor','profesor.genero','profesor.pais'])
                                                ->join([
                                                        'profesor' => [
                                                        'table' => 'profesor',
                                                        'conditions' => 'idusuario = profesor.usuario_idusuario'
                        ]
                                                        ])
                                                ->where([ 'profesor.idprofesor =' => $idref[1]]);
                         
                        }
                        

                     
                        foreach ($query as $item) 
                        {
                            $result[] = $item;
                        }
                            
            

                        if (isset($result)) {
                            
                            if ($result[0]->profesor['pais'] == strtoupper($idref[0]) && $result[0]->profesor['idprofesor'] == $idref[1] && $result[0]->profesor['genero'][0] == strtoupper($idref[2])) {
                                
                                $informacion_profesor['idreferido'] = $request['idreferido'];

                            }
                            else
                            {
                                $informacion_profesor['idreferido'] = 'XX-99999999-M';
                            }
                        }
                        else
                        {
                            $informacion_profesor['idreferido'] = 'XX-99999999-M';
                        }



                    }

                    $session->write('addinfo',$informacion_profesor);
                    $this->requestAction('/profesor/add');

                    $this->Flash->success('Profesor creado con exito');

                    //auto login

                    $data = array('id' => $usuario->idusuario , 'username' => $usuario->email, 'id_rol' => $usuario->rol_idrol , 'id_estado' => $usuario->estado_idestado);

                    $login = $this->Auth->setUser($data);
                    return $this->redirect(['controller' => 'Usuario', 'action' => 'index']);
                }
                else
                {
                    $this->set('tipo',2);
                    $this->set('request', $request);
                    $this->Flash->error('Error al registrar usuario');
                }
                
            }
        

        else
        {
            $this->set('tipo',$request['tipo']);
        }

            

        }
    }

public function login()
    {
        $this->viewBuilder()->setLayout('login');
        $session = $this->request->session();
        $this->set('title','Login');
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        //echo $actual_link;
        $pos  = strpos($actual_link, "%2F");
        if($pos!==false){
         $auxiliar =  explode("%2F", $actual_link);
            $primera = 0;
        }else
            $primera  = 1;  
       // print_r($auxiliar);
        //exit();
        if($this->request->is('post'))
        {
            $user = $this->Auth->identify();
            if($user)
            {
            
                if ($user['id_rol']==2) { // profesor
                    $query = $this->Usuario->find('all')
                     ->select(['profesor.idprofesor','profesor.nombres','profesor.apellidos','profesor.edad','profesor.telefono_celular','profesor.telefono_fijo','profesor.foto_perfil','profesor.especialidad','profesor.descripcion','profesor.video_presentacion','profesor.provincia_idprovincia','profesor.url_facebook','profesor.url_twitter','profesor.url_instagram','profesor.pais','profesor.genero'])
                     ->join([
                        'profesor' => [
                            'table' => 'profesor',
                            'conditions' => 'idusuario = profesor.usuario_idusuario'
                        ]
                     ])
                     ->where(['idusuario' => $user['id']]);

            foreach($query as $row)
            {
                $result[] = $row;
            } 


            $session->write('infologer',$result[0]->profesor['nombres']); 
                }
                if ($user['id_rol']==3) { //alumno
                    $query = $this->Usuario->find('all')
                     ->select(['alumno.idalumno','alumno.nombres','alumno.apellidos','alumno.edad','alumno.telefono_celular','alumno.telefono_fijo','alumno.foto_perfil','alumno.nombre_responsable','alumno.apellido_responsable','alumno.subcategoria_idsubcategoria','alumno.provincia_idprovincia'])
                     ->join([
                        'alumno' => [
                            'table' => 'alumno',
                            'conditions' => 'idusuario = alumno.usuario_idusuario'
                        ]
                     ])
                     ->where(['idusuario' => $user['id']]);

            foreach($query as $row)
            {
                $result[] = $row;
            }         
  
            $session->write('infologer',$result[0]->alumno['nombres']);
                }
                
                //auto login
 
                    $login = $this->Auth->setUser($user);
                    if($primera == 1)
                    return $this->redirect(['controller' => 'Usuario', 'action' => 'index']);
                    else
                    return $this->redirect(['controller' => $auxiliar[1], 'action' => $auxiliar[2]]);
                //$this->Auth->setUser($user);
                //return $this->redirect($this->Auth->redirectURL());
            }
            else
            {
                $this->Flash->error('Usuario o Clave incorrectas, por favor intente nuevamente');
            }
        }
    }
    public function logout()
    {
        $session = $this->request->session();
        $session->destroy();
        return $this->redirect($this->Auth->logout());
    }

    public function display() {
    if ($this->request->is('post')) {
    $nombrearchivo = "app/webroot/files/".$this->data['Pages']['file']['name'];
    /* copiamos el archivo*/
    if (move_uploaded_file($this->data['Pages']['file']['tmp_name'],$nombrearchivo)) {
    /* mensaje al usaurio */
    $this->Session->setFlash('Archivo subido satisfactoriamente');
    } else {
    /* mensaje al usaurio */
    $this->Session->setFlash('Error al subir el archivo, verificar.');
    }
    }
    $this->render('index');
    }





  

  
    
 






}
