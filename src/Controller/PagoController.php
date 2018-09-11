<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Pago Controller
 *
 * @property \App\Model\Table\PagoTable $Pago
 */
class PagoController extends AppController
{
	public function addpago()
	{
		$session= $this->request->session();

		$informacionpago = $session->read('resumen_compra');
		$idreferencia = $session->read('idreferencia');
		$total = $informacionpago['total'];
		$comision = $total * 0.10;
		$total_referido_nivel1 = $comision * 0.15;
		$total_referido_nivel2 = $comision * 0.05;
		$total_referido_nivel3 = $comision * 0.03;

		$pago = $this->Pago->newEntity();

		$pago->idalumno = $informacionpago['idalumno'];
		$pago->idprofesor = $informacionpago['idprofesor'];
		$pago->fecha_pago = date('Y-m-d');
		$pago->plataforma = "MERCADOPAGO";
		$pago->total_neto = $informacionpago['total'];
		$pago->total_saldo = $total - $comision;
		$pago->idreferencia = $idreferencia;

		
		if(!$this->Pago->save($pago))
		{
			$this->redirect(['controller'=>'pages','action'=>'procesarorden']);
		}	


		//asignacion pago de referido primer nivel

		$session->write('info',$informacionpago['idprofesor']);
        $this->requestAction('profesor/obtenerprofesor');
        $informacionreferido = $session->consume('info'); // informacion de referido nivel 1

        // confirmacion primer nivel de referido
        
        if (isset($informacionreferido[0]->idreferido) && $informacionreferido[0]->idreferido != 99999999) 
        {
        	 $pagoreferidonivel1 = $this->Pago->newEntity();
        	 $pagoreferidonivel1->idalumno = $informacionpago['idalumno'];
			 $pagoreferidonivel1->idprofesor = $informacionreferido[0]->idreferido;
			 $pagoreferidonivel1->fecha_pago = date('Y-m-d');
		     $pagoreferidonivel1->plataforma = "COMISION REFERIDO";
		     $pagoreferidonivel1->total_saldo = $total_referido_nivel1;
		     $this->Pago->save($pagoreferidonivel1);

		     $comision = $comision - $total_referido_nivel1;

		     $session->write('info',$informacionreferido[0]->idreferido);
        	 $this->requestAction('profesor/obtenerprofesor2');
             $informacionreferido2 = $session->consume('info'); // informacion de referido nivel 2
        			
        	if (isset($informacionreferido2[0]->idreferido) && $informacionreferido2[0]->idreferido != 99999999) {
        		$monto = $informacionpago['total']*0.02;
        	 	$pagoreferidonivel2 = $this->Pago->newEntity();
        	 	$pagoreferidonivel2->idalumno = $informacionpago['idalumno'];
			 	$pagoreferidonivel2->idprofesor = $informacionreferido2[0]->idreferido;
			 	$pagoreferidonivel2->fecha_pago = date('Y-m-d');
		     	$pagoreferidonivel2->plataforma = "COMISION REFERIDO";
		     	$pagoreferidonivel2->total_saldo = $total_referido_nivel2;
		     	$this->Pago->save($pagoreferidonivel2);

		     	$comision = $comision - $total_referido_nivel2;
        	}
        	if(!empty($informacionreferido2[0]->idreferido))
        	 $session->write('info',$informacionreferido2[0]->idreferido);
        	 
        	 $this->requestAction('profesor/obtenerprofesor2');
             $informacionreferido3 = $session->consume('info'); // informacion de referido nivel 3

        	if (isset($informacionreferido3[0]->idreferido) && $informacionreferido3[0]->idreferido != 99999999) {
        	 $pagoreferidonivel3 = $this->Pago->newEntity();
        	 $pagoreferidonivel3->idalumno = $informacionpago['idalumno'];
			 $pagoreferidonivel3->idprofesor = $informacionreferido3[0]->idreferido;
			 $pagoreferidonivel3->fecha_pago = date('Y-m-d');
		     $pagoreferidonivel3->plataforma = "COMISION REFERIDO";
		     $pagoreferidonivel3->total_saldo = $total_referido_nivel3;
		     $this->Pago->save($pagoreferidonivel3);
		     $comision = $comision - $total_referido_nivel3;
        	}
		     

		     $pago->total_comision = $comision;

		     $this->Pago->save($pago);// guardo total de comision
		   
        	 
        }
   
     
		$this->redirect(['controller'=>'pages','action'=>'procesarorden']);

	}

	public function obtenerpagoprofesor()
	{
		$session= $this->request->session();
		$idprofesor = $session->consume('info');
		$query = $this->Pago->find('all')
                     ->where([
                         'idprofesor' => $idprofesor
                     ]);

            foreach($query as $row)
            {
                $result[] = $row;
            }
        
        if(isset($result))
        {
            $session->write('info',$result);
        }
        else
        {
            $session->write('info',false);
        }
        $this->redirect(['controller'=>'usuario','action'=>'index']);
	}
}
