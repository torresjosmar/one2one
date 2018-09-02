<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Trayectoria Controller
 *
 * @property \App\Model\Table\TrayectoriaTable $Trayectoria
 */
class TrayectoriaController extends AppController
{
    public function gettrayectoria() 
    {
        $session = $this->request->session();
        $query = $this->Trayectoria->find('all')
                     ->select(['idtrayectoria','descripcion','profesor_idprofesor','soporte_trayectoria'])
                     ->join([
                        'profesor' => [
                            'table' => 'profesor',
                            'conditions' => 'profesor_idprofesor = profesor.idprofesor'
                        ]
                     ])->where([
                         'profesor_idprofesor' => $session->consume('info')
                     ]);

            foreach($query as $row)
            {
                $result[] = $row;
            }
        //$query = $this->Formacionacademica->find('all')->where(['profesor_idprofesor'=>$session->consume('info')]);
        if(isset($result))
        {
            $session->write('info',$result);
        }
        else
        {
            $session->write('info',null);
        }
        $this->redirect(['controller'=>'usuario','action'=>'index']);
    }

    public function setnewtrayectoria() 
    {
        $session = $this->request->session();
        $request = $session->consume('info');
        $trayectoria = $this->Trayectoria->newEntity();
       
        $trayectoria->descripcion = $request['profesor_trayectoria'];
        $trayectoria->profesor_idprofesor = $request['idprofesor'];

            $archivo = $request['soporte_trayectoria'];

               
                if($archivo['type'] == 'image/png' || $archivo['type'] == 'image/jpeg' || $archivo['type'] == 'image/jpg' || $archivo['type']=='application/pdf'   )
                {
                    $nombre_archivo = explode('.', $archivo['name']);
                    $nombre_archivo[0] = $request['idprofesor']. $request['profesor_trayectoria'].'.'.$nombre_archivo[1];

                         if (move_uploaded_file($archivo['tmp_name'],WWW_ROOT . 'img/formaciones' . DS . $nombre_archivo[0]))
                            {
 
                                $trayectoria->soporte_trayectoria =  $nombre_archivo[0];
                          if($this->Trayectoria->save($trayectoria))
                                {
                                 $this->Flash->success('Información Actualizada');
                                 }
                            else
                             {
                                    $this->Flash->error('Error al Actualizar Información');
                                 }
                        }
                        else 
                            {
                                $this->Flash->error('Error al cargar la imagen');
                            } 
                 

            }
            else
                {
                    $this->Flash->error('Formato de archivo incorrecto');
                }

       
        $this->redirect(['controller'=>'usuario','action'=>'registro']);
    }

    public function deltrayectoria()
    {   
        $session = $this->request->session();
        $request = $session->consume('info');
        //$formacionacademica = $this->Formacionacademica->newEntity();
        $trayectoria = $this->Trayectoria->get($request['idtrayectoria']);
        //$result = $this->Articles->delete($entity);
        //$formacionacademica->idformacionacademica = $request['idformacionacademica'];
        if($this->Trayectoria->delete($trayectoria))
        {
            $this->Flash->success('Información Actualizada');
        }
        else
        {
            $this->Flash->error('Error al Actualizar Información');
        }
        $this->redirect(['controller'=>'usuario','action'=>'registro']);
    }
}
