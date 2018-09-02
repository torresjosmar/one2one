<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Formacionacademica Controller
 *
 * @property \App\Model\Table\FormacionacademicaTable $Formacionacademica
 */
class FormacionacademicaController extends AppController
{
    public function getformacionacademica() {
        $session = $this->request->session();
        $query = $this->Formacionacademica->find('all')
                     ->select(['idformacionacademica','descripcion','profesor_idprofesor','soporte_formacion'])
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

    public function setnewformacionacademica() 
    {

        $session = $this->request->session();
        $request = $session->consume('info');
        $formacionacademica = $this->Formacionacademica->newEntity();
       
        $formacionacademica->descripcion = $request['profesor_formacion'];
        $formacionacademica->profesor_idprofesor = $request['idprofesor'];
      


                $archivo = $request['profesor_formacion_soporte'];
               // debug($request);
                //exit()
             //$formacionacademica->soporte_formacion = $archivo['name'];

               // print_r($request['profesor_formacion']);
             //   print_r($archivo);
                //exit();
 
      
    

                  
                if($archivo['type'] == 'image/png' || $archivo['type'] == 'image/jpeg' || $archivo['type'] == 'image/jpg' ||  $archivo['type']=='application/pdf'   )
                {
                    $nombre_archivo = explode('.', $archivo['name']);
                    $nombre_archivo[0] = $request['idprofesor']. $request['profesor_formacion'].'.'.$nombre_archivo[1];

                         if (move_uploaded_file($archivo['tmp_name'],WWW_ROOT . 'img/formaciones' . DS . $nombre_archivo[0]))
                            {
 
                                $formacionacademica->soporte_formacion =  $nombre_archivo[0];
                              //  echo  $formacionacademica->soporte_formacion;
                               //print_r($formacionacademica);
                                //
                                  if($this->Formacionacademica->save($formacionacademica))
                                    {
                                     $this->Flash->success('Información Actualizada');
                                    //echo "Guardo todo"; 
                                    //exit();                                   
                                    //$this->redirect(['controller'=>'usuario','action'=>'registro']);
                            }
                            else{
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
            


            }//metodo


      
    


    public function delformacionacademica()
    {   
        $session = $this->request->session();
        $request = $session->consume('info');
        //$formacionacademica = $this->Formacionacademica->newEntity();
        $formacionacademica = $this->Formacionacademica->get($request['idformacionacademica']);
        //$result = $this->Articles->delete($entity);
        //$formacionacademica->idformacionacademica = $request['idformacionacademica'];
        if($this->Formacionacademica->delete($formacionacademica))
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
