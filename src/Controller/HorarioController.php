<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Horario Controller
 *
 * @property \App\Model\Table\HorarioTable $Horario
 */
class HorarioController extends AppController
{
	public function addhorario()
	{
		$session = $this->request->session();
		$info = $session->consume('info');
		$idprofesor = $info['idprofesorhorario'];
		unset($info['idprofesorhorario']);

	$this->Horario->deleteAll(['profesor_idprofesor =' => $idprofesor]); // borro la informacion actual del profesor para actualizar la tabla horario;

		foreach ($info as $itemhorario) {
			$item = explode('_', $itemhorario);
			$dia = $item[0];
			$hora = $item[1];
			$idalumno = $item[2];
			
			$horario = $this->Horario->newEntity();

			$horario->hora = $hora;
			$horario->dia = $dia;
			$horario->profesor_idprofesor = $idprofesor;
			$horario->alumno_idalumno = $idalumno;

			$this->Horario->save($horario);
		}
		  $this->Flash->success('Horario Actualizado');
		$this->redirect(['controller' => 'usuario', 'action' => 'index']);
	}

	public function gethorario()
	{  
		//echo "gethorario";
		//exit();
		$session = $this->request->session();

		$idprofesor = $session->consume('info');

		$query = $this->Horario->find('all')
				->where(["profesor_idprofesor =" => $idprofesor]);
         
         foreach ($query as $item) {
             $row['hora'] = $item['hora'];
             $row['dia'] = $item['dia'];
             $row['alumno_idalumno'] = $item['alumno_idalumno'];
             $result[] = $row;
             unset($row);
         }

         if (isset($result))
         {
         	$session->write('info',$result);
         }
         else
         {
         	$session->write('info',1);
         }
  
		$this->redirect(['controller' => 'usuario', 'action' => 'index']);
	}

	public function gethorarioalumno()
	{
		$session = $this->request->session();
		$contador = 0;
		$clases_inscritas = 0;
		$idalumno = $session->consume('info');
		$query = $this->Horario->find('all')
		
				->where(["alumno_idalumno =" => $idalumno]);

		 foreach ($query as $item) {
             $row['hora'] = $item['hora'];
             $row['dia'] = $item['dia'];
             $row['alumno_idalumno'] = $item['alumno_idalumno'];
             $row['fecha_clase'] = $item['fecha_clase'];
             $row['plan'] = $item['plan'];

             $result[] = $row;
             $contador++;
             $clases_inscritas++;

             unset($row);
         }
          if (isset($result))
         {
        $cantidad_clases = $result[0]['plan']-$clases_inscritas;
        $tipo_plan = $result[0]['plan'];
//-----------------------------------------------------------------------------------------------------
  if($cantidad_clases>0){
	$contador2=1;  


$cantidad_clases= $cantidad_clases +1;

//echo "cantidad_clases restantes: ".$cantidad_clases ;
//echo "<br>";

//echo "contador: ".$contador;
//echo "<br>";
for($j=0; $j <= $cantidad_clases; $j++ ){
//echo "cantidad_clases antes del for interno: ".$cantidad_clases;
//echo "<br>";

for($i=0; $i < $contador; $i++ ){
//echo "cantidad_clases en for interno: ".$cantidad_clases;
//echo "</br>";
if($cantidad_clases>0 && $clases_inscritas < $tipo_plan ){
$query = $this->Horario->find('all')
				->where(["alumno_idalumno =" => $idalumno])
				->andWhere(["fecha_clase ="=> $result[$i]['fecha_clase']])
				->andWhere(["hora ="=> $result[$i]['hora']]);



				foreach ($query as $row) {
					//print_r($row);
		     //echo "clases semana:  ".$contador2." ".date("y-m-d",strtotime($row['fecha_clase']."+".$contador2."week")); 
				//echo "</br>";
				//echo "hora: ".$row['hora'];
				//	echo "</br>";

			
			  	
			 $key['hora'] = $row['hora'];
             $key['dia'] = $row['dia'];
             $key['alumno_idalumno'] = $row['alumno_idalumno'];
             $key['fecha_clase'] = date("y-m-d",strtotime($row['fecha_clase']."+".$contador2."week")); 
             $key['plan'] = $item['plan'];
			 $result[] = $key;
			  unset($key);
			}
		}else{
//			echo "romper";
//			echo "</br>";
			break;
		}

$cantidad_clases --;
$clases_inscritas++;

	}
//echo "cantidad_clases despues del for interno: ".$cantidad_clases;	
//echo "</br>";



$contador2++;
//echo "contador de semanas: ".$contador2;
//echo "</br>";
}
//exit();

}	














//------------------------------------------------------------------------------------------------------
        
         	$session->write('info',$result);
         }
         else
         {
         	$session->write('info',1); // si no poseo horario retorno 1
         }
  
		$this->redirect(['controller' => 'usuario', 'action' => 'index']);
	}


public function gethorarionombre()
	{
		$session = $this->request->session();

		$idprofesor = $session->consume('info');

		$query = $this->Horario->find('all')
		->select(['hora','dia','alumno_idalumno','alumno.nombres','alumno.apellidos'])
		->join([
                        'alumno' => [
                            'table' => 'alumno',
                            'conditions' => 'alumno_idalumno = alumno.idalumno'
                        ]
                     ]) ->where(["profesor_idprofesor =" => $idprofesor])
						->order(['dia','hora' => 'ASC']); // Still same object, no SQL executed
         				

         foreach ($query as $item) {
             $row['hora'] = $item['hora'];
             $row['dia'] = $item['dia'];
             $row['alumno_idalumno'] = $item['alumno_idalumno'];
         	 $row['nombre_alumno']	 = $item['alumno']['nombres'];
         	 $row['apellido_alumno']	 = $item['alumno']['apellidos'];
			 $row['fecha_clase'] = $item['fecha_clase'];
             $row['plan'] = $item['plan'];
             $result[] = $row;
             unset($row);
         }
    
  if (isset($result))
         {
         	$session->write('info',$result);
         }
         else
         {
         	$session->write('info',1);
         }
  
		$this->redirect(['controller' => 'usuario', 'action' => 'index']);
	}





public function gethorarioalumnocompleto()
	{
		$session = $this->request->session();

		$idalumno = $session->consume('info');
		$query = $this->Horario->find('all')
				->where(["alumno_idalumno =" => $idalumno]);

		 foreach ($query as $item) {
             $row['profesor_idprofesor'] = $item['profesor_idprofesor'];
             $result[] = $row;
             unset($row);
         }

if(isset($result)){
	$query2 = $this->Horario->find('all')
				->where(["profesor_idprofesor =" => $result[0]['profesor_idprofesor']]);
         
         foreach ($query2 as $item2) {
             $row['hora'] = $item2['hora'];
             $row['dia'] = $item2['dia'];
             $row['alumno_idalumno'] = $item2['alumno_idalumno'];
             $row['profesor_idprofesor'] = $item2['profesor_idprofesor'];
             $row['fecha_clase'] = $item2['fecha_clase'];
             $row['plan'] = $item2['plan'];
             $result2[] = $row;
             unset($row);
         }

         if (isset($result2))
         {
         	$session->write('info',$result2);
         }
         else
         {
         	$session->write('info',1); // si no poseo horario retorno 1
         }
     }else{
     	$session->write('info',1); // si no poseo horario retorno 1
     }

  
		$this->redirect(['controller' => 'usuario', 'action' => 'index']);
	}


	public function addalumnohorario()
	{
	
		$session = $this->request->session();
		date_default_timezone_set('America/Argentina/Buenos_Aires');


		$dias = [0 => 'Sunday', 1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday'];

		$informacionhorario = $session->read('resumen_compra');
		$clases_inscritas=0;
		$idprofesor = $informacionhorario['idprofesor'];
		$idalumno = $informacionhorario['idalumno'];
		$cantidad_clases = $informacionhorario['plan'];
		$tipo_plan = $informacionhorario['plan'];
		//print_r($informacionhorario);
		//echo "</br>";
		$fecha_actual = date('Y-m-d');
		$dia_semana_compra = date("w",strtotime($fecha_actual));
		//echo "dia_semana_compra "." ".$dia_semana_compra."</br>";;
		//echo "fecha_actual"." ".$fecha_actual."</br>";
	//	echo "fecha_semana_siguiente"." ".$fecha_clase."</br>";
		//exit(); 
		//preparo array para cargar horas del profesor
		unset($informacionhorario['idprofesor']);
		unset($informacionhorario['idalumno']);
		unset($informacionhorario['curso']);
		unset($informacionhorario['total']);
		unset($informacionhorario['plan']);
		$contador = 0;
		foreach ($informacionhorario as $item) {

			$segmento = explode('_', $item);
		  if($dia_semana_compra==$segmento[0]){
			
			$fecha_clase[$contador] = date("y-m-d",strtotime($dias[$segmento[0]]."+1 week"));
			$hora_clase[$contador]= $segmento[1];
			
			 echo "fecha_clase: ".$fecha_clase[$contador]."</br>";
			 echo "hora_clase: ".$hora_clase[$contador]."</br>";
		//	echo $item."</br>";
		//	echo "Semana siguiente </br>";
			}else{

			$fecha_clase[$contador] = date("y-m-d",strtotime($dias[$segmento[0]]."+0 week"));
			$hora_clase[$contador]= $segmento[1];
			 echo "fecha_clase: ".$fecha_clase[$contador]."</br>";
			 echo "hora_clase: ".$hora_clase[$contador]."</br>";
			//echo $item."</br>";
			//echo "Esta Semana </br>";
			}




			$query = $this->Horario->find('all')
				->where(["profesor_idprofesor =" => $idprofesor])
				->andWhere(["dia ="=> $segmento[0]])
				->andWhere(["hora ="=> $segmento[1]]);

			foreach ($query as $row) {
				$horario = $this->Horario->newEntity();
				$horario->idhorario = $row['idhorario'];
				$horario->alumno_idalumno = $idalumno;
				$horario->fecha_clase = $fecha_clase[$contador];
				$horario->plan =$tipo_plan;
				$this->Horario->save($horario);
			}
			$contador++;
			$cantidad_clases--;
			$clases_inscritas++;

		}


			/**/

		$this->redirect(['controller'=>'pages','action'=>'procesarorden']);

	}

}
