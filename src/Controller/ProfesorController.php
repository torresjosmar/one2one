<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Profesor Controller
 *
 * @property \App\Model\Table\ProfesorTable $Profesor
 */
class ProfesorController extends AppController
{
    public function add()
    {
        $session = $this->request->session();
        $info_profesor = $session->consume('addinfo');


        $profesor = $this->Profesor->newEntity();

        $profesor->usuario_idusuario = $info_profesor['idusuario'];
        $profesor->nombres = $info_profesor['nombres'];
        $profesor->apellidos = $info_profesor['apellidos'];
        $profesor->edad = $info_profesor['edad'];
        $profesor->telefono_celular = $info_profesor['telefonomovil'];

        $profesor->genero = $info_profesor['genero'];
        $profesor->pais = $info_profesor['pais'];
        $profesor->difucion = $info_profesor['difucion'];
        if (isset($info_profesor['idreferido']) && $info_profesor['idreferido'] != '') {

            $idref = explode('-', $info_profesor['idreferido']);
            $profesor->idreferido = $idref[1]; 
        }
        
        $this->Profesor->save($profesor);

        $this->redirect(['controller'=>'usuario','action'=>'registro']);
    }

    public function setdescripcion()
    {
        $session = $this->request->session();
        $request = $session->consume('info');
        $profesor = $this->Profesor->newEntity();
        $profesor->idprofesor = $request['id_profesor'];
        $profesor->descripcion = $request['profesor_descripcion'];
        $profesor->video_presentacion = $request['video_url'];
        
        if($this->Profesor->save($profesor))
        {
            $this->Flash->success('Información Actualizada');
        }

        else
        {
            $this->Flash->error('Error al Actualizar Información');
        }

        $this->redirect(['controller'=>'usuario','action'=>'registro']);
    }

    public function obtenerprofesores()
    {
    	$session = $this->request->session();

    	$query = $this->Profesor->find('all')
                                ->where([['descripcion is not' => null]]);

    	foreach ($query as $row) {
    		$item['idprofesor'] = $row['idprofesor'];
    		$item['nombres'] = $row['nombres'];
    		$item['apellidos'] = $row['apellidos'];
    		$item['especialidad'] = $row['especialidad'];
    		$item['descripcion'] = $row['descripcion'];
            $item['foto_perfil'] = $row['foto_perfil'];
            $item['pais'] = $row['pais'];
    		$result[] = $item;
    	//	unset($item);
    	}
    	$session->write('info',$result);
    	$this->redirect(['controller' => 'pages', 'action' => 'home']);
    }

    public function setimagenperfil()
    {
        $session = $this->request->session();
        $profesor = $this->Profesor->newEntity();

        $info_profesor = $session->consume('info');

        $profesor->idprofesor = $info_profesor['id_profesor'];
        $profesor->foto_perfil = $info_profesor['foto_perfil'];

        if($this->Profesor->save($profesor))
        {
            $this->Flash->success('Información Actualizada');
        }

        else
        {
            $this->Flash->error('Error al Actualizar Información');
        }

        $this->redirect(['controller' => 'usuario', 'action' => 'index']);
    
    }

    public function buscarprofesor()
    {
        $session = $this->request->session();

        $termino = $session->consume('info');

        $query = $this->Profesor->find('all')
                                ->where (['UPPER(especialidad) like' => '%'.strtoupper($termino).'%'])
                                ->orWhere(['edad =' => $termino])
                                ->orWhere(['pais =' => $termino])
                                ->orWhere(['genero =' => $termino]);

        foreach ($query as $row) {
            $item['idprofesor'] = $row['idprofesor'];
            $item['nombres'] = $row['nombres'];
            $item['apellidos'] = $row['apellidos'];
            $item['especialidad'] = $row['especialidad'];
            $item['descripcion'] = $row['descripcion'];
            $item['foto_perfil'] = $row['foto_perfil'];
            $item['pais'] = $row['pais'];
            $result[] = $item;
           // unset($item);
        }

        if (isset($result)) {
            $session->write('info',$result);
        }
        
        $this->redirect(['controller' => 'pages', 'action' => 'busqueda']);
    }

    public function obtenerprofesor()
    {
        $session = $this->request->session();

        $idprofesor = $session->consume('info');

        $query = $this->Profesor->find('all')->where (['idprofesor =' => $idprofesor]);


        foreach($query as $row)
        {
            $result[] = $row;
        }

        $session->write('info',$result); 
        $this->redirect(['contoller' => 'pages', 'action' => 'perfilprofesor']);  
    }


    public function obtenerprofesor2()
    {
        $session = $this->request->session();

        $idprofesor = $session->consume('info');

        $query = $this->Profesor->find('all')->where (['idprofesor =' => $idprofesor]);


        foreach($query as $row)
        {
            $result[] = $row;
        }
        if (isset($result)) {
             $session->write('info',$result); 
        }
       
        $this->redirect(['contoller' => 'pages', 'action' => 'perfilprofesor']);  
    }

    public function obtenerprofesor3()
    {
        $session = $this->request->session();

        $idprofesor = $session->consume('info');

        $query = $this->Profesor->find('all')->where (['idprofesor =' => $idprofesor]);


        foreach($query as $row)
        {
            $result[] = $row;
        }

        if (isset($result)) {
            $session->write('info',$result); 
        }
        
        $this->redirect(['contoller' => 'pages', 'action' => 'perfilprofesor']);  
    }

    public function actualizarinformaciongeneral()
    {
        $session = $this->request->session();

        $request = $session->consume('info');

         $profesor = $this->Profesor->newEntity();

         $especialidades = '';

         for ($i=0; $i < count($request['especialidad']); $i++) { 
             if ($i != 0) 
             {
                $especialidades = $especialidades.', '.$request['especialidad'][$i];
             }
             else
            {
                $especialidades = $especialidades.$request['especialidad'][$i];
            }
         }

         $profesor->idprofesor = $request['idprofesor'];
         $profesor->nombres = $request['nombres'];
         $profesor->apellidos = $request['apellidos'];
         $profesor->especialidad = $especialidades;

         if ($this->Profesor->save($profesor)) 
         {
             $this->Flash->success('Información Actualizada');
         }
         else
         {
            $this->Flash->error('Error al actualizar informacion');
         }


        $this->redirect(['contoller' => 'pages', 'action' => 'perfilprofesor']);
    }

    public function obtenerprofesoressugeridos()
    {
        $session = $this->request->session();

        $query = $this->Profesor->find('all')->limit(3);

        foreach ($query as $row) {
            $item['idprofesor'] = $row['idprofesor'];
            $item['nombres'] = $row['nombres'];
            $item['apellidos'] = $row['apellidos'];
            $item['especialidad'] = $row['especialidad'];
            $item['descripcion'] = $row['descripcion'];
            $item['foto_perfil'] = $row['foto_perfil'];
            $result[] = $item;
          //  unset($item);
        }
        $session->write('info',$result);
        $this->redirect(['controller' => 'pages', 'action' => 'home']);
    }
    	 
}
