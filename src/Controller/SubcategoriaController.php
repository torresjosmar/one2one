<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Subcategoria Controller
 *
 * @property \App\Model\Table\SubcategoriaTable $Subcategoria
 */
class SubcategoriaController extends AppController
{



 public function obtenersubcategorias(){
        $session = $this->request->session();
        $query = $this->Subcategoria->find('all');
         foreach ($query as $item) {
             $item['nombre'] = $item['nombre'];
             $result[] = $item;
             unset($item);
         }

         $session->write('info',$result);

        $this->redirect(['controller' => 'pages', 'action' => 'lista']);

    }
}
