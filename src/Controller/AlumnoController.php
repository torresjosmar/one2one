<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Alumno Controller
 *
 *
 * @method \App\Model\Entity\Alumno[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlumnoController extends AppController
{
  
  
    public function add()
    {
        $session = $this->request->session();
        $info_alumno = $session->consume('addinfo');
        $alumno = $this->Alumno->newEntity();

        $alumno->usuario_idusuario = $info_alumno['idusuario'];
        $alumno->nombres = $info_alumno['nombres'];
        $alumno->apellidos = $info_alumno['apellidos'];
        $alumno->edad = $info_alumno['edad'];
        $alumno->telefono_celular = $info_alumno['telefonomovil'];
 
        $alumno->nombre_responsable = $info_alumno['nombresresponsable'];
        $alumno->apellido_responsable = $info_alumno['apellidosresponsable'];
        $alumno->genero = $info_alumno['genero'];
        $alumno->pais = $info_alumno['pais'];
        $alumno->difucion = $info_alumno['difucion'];

        $this->Alumno->save($alumno);

        $this->redirect(['controller'=>'usuario','action'=>'registro']);
    }

    public function setimagenperfil()
    {
        $session = $this->request->session();
        $alumno = $this->Alumno->newEntity();

        $info_alumno = $session->consume('info');

        $alumno->idalumno = $info_alumno['id_alumno'];
        $alumno->foto_perfil = $info_alumno['foto_perfil'];

        if($this->Alumno->save($alumno))
        {
            $this->Flash->success('Información Actualizada');
        }

        else
        {
            $this->Flash->error('Error al Actualizar Información');
        }

        $this->redirect(['controller' => 'usuario', 'action' => 'index']);
    
    }

    public function getalumnodata()
    {
        $session = $this->request->session();

        $idusuario = $session->consume('info');
        
        $query = $this->Alumno->find('all')
                     ->select(['idalumno','nombres','apellidos','edad','telefono_celular','foto_perfil','nombre_responsable','apellido_responsable','usuario_idusuario','usuario.email'])
                     ->join([
                        'usuario' => [
                            'table' => 'usuario',
                            'conditions' => 'usuario_idusuario = usuario.idusuario'
                        ]
                     ])
                     ->where(['idusuario' => $idusuario]);
        
        
       foreach ($query as $row) {
           $item['idalumno'] = $row->idalumno;
           $item['nombres'] = $row->nombres;
           $item['apellidos'] = $row->apellidos;
           $item['email'] = $row->usuario['email'];
           $item['edad'] = $row->edad;
           $item['telefono_celular'] = $row->telefono_celular;
           $item['foto_perfil'] = $row->foto_perfil;
           $item['nombre_responsable'] = $row->nombre_responsable;
           $item['apellido_responsable'] = $row->apellido_responsable;
           $item['usuario_idusuario'] = $row->usuario_idusuario;
           
           $resultado = $item;
       }

       $session->write('info',$resultado);
       $this->redirect(['controller' => 'pages', 'action' => 'selectclase']);
    }
 
 public function actualizarinformaciongeneral()
    {
        $session = $this->request->session();

        $request = $session->consume('info');

         $alumno = $this->Alumno->newEntity();

         $alumno->idalumno = $request['alum_id'];
         $alumno->nombres = $request['alum_nombres'];
         $alumno->apellidos = $request['alum_apellidos'];
        // $alumno->email = $request['email'];
         $alumno->edad = $request['alum_edad'];
         $alumno->telefono_celular = $request['alum_telefonomovil'];
         $alumno->nombre_responsable = $request['alum_nombresresponsable'];
         $alumno->apellido_responsable = $request['alum_apellidosresponsable'];

        // print_r($alumno);
        // exit();


         if ($this->Alumno->save($alumno)) 
         {
             $this->Flash->success('Información Actualizada');
         }
         else
         {
            $this->Flash->error('Error al actualizar informacion');
         }


        $this->redirect(['controller' => 'usuario', 'action' => 'index']);
    }

    
}
