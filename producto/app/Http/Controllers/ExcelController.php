<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Pago;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function index()
	{
		
		/*
        Excel::create('Laravel Excel', function($excel) {

            $excel->sheet('Cliente Pagos', function($sheet) {

                $ObjetoServicio = [];
		        $servicios = Servicio::All();
		        //$clientes2 = Cliente::with('pagos')->get();
		        foreach ($servicios as $iServicio =>  $servicio) {
		            $ObjetoServicio["servicio"][] = $servicio;
		            $pagos = Pago:: join('cliente_pagos','pagos.idcliente','=','cliente_pagos.id')
		            ->where('idservicio',$servicio->id)
		            ->where('cliente_pagos.nombre','!=','luis')
		            ->get();
		           // $ObjetoServicio[] = $pagos;
		            $ObjetoServicio["servicio"][$iServicio]["pagos"]= $pagos;
		        }
                
                $sheet->row(1, [
    			'Nombre del servicio','Pagos'
				]);

				foreach($ObjetoServicio['servicio'] as $index => $servicio) {

					$pagos = [];
					foreach ($servicio['pagos'] as $key => $pago) {
						$pagos[] = $pago->name;
					}

					$pagos = implode($pagos, ',');

	    			$sheet->row($index+2, [
	        		$servicio->name,"Nombre pago: ".$pagos
	    			]);	
				}

            });
        })->export('xls');
        */


        
         Excel::create('Laravel Excel', function($excel) {

            $excel->sheet('Cliente Pagos', function($sheet) {


		       $servicios = Servicio::join('pagos','pagos.idservicio','=','servicios.id')
		        ->select('servicios.*', 'pagos.name as pname','cliente_pagos.nombre as cpnombre')
		        ->join('cliente_pagos','cliente_pagos.id','=','pagos.idcliente')
		        ->where('cliente_pagos.nombre','!=','luis')
		        ->get();

		       
                
                $sheet->row(1, [
    			'Nombre del servicio','Nombre pago','Nombre del cliente'
				]);

				foreach($servicios as $index => $servicio) {

	    			$sheet->row($index+2, [
	        		$servicio->name,$servicio->pname, $servicio->cpnombre
	    			]);	
				}

            });
        })->export('xls');
		

        /*
        $servicios = Servicio::join('pagos','pagos.idservicio','=','servicios.id')
		        ->join('cliente_pagos','cliente_pagos.id','=','pagos.idcliente')
		        ->select('servicios.*', 'pagos.name as pname','cliente_pagos.nombre as cpnombre')
		        ->where('cliente_pagos.nombre','!=','luis')
		        ->get();
		*/

		 //return json_encode($servicios);
        
        /*
        $ObjetoServicio = [];
        $servicios = Servicio::All();
        //$clientes2 = Cliente::with('pagos')->get();
        foreach ($servicios as $iServicio =>  $servicio) {
            $ObjetoServicio["servicio"][] = $servicio;
            $pagos = Pago:: join('cliente_pagos','pagos.idcliente','=','cliente_pagos.id')
            ->where('idservicio',$servicio->id)
            ->where('cliente_pagos.nombre','!=','luis')
            ->get();
            $ObjetoServicio["servicio"][$iServicio]["pagos"]= $pagos;
          
        }
		*/

        /*
        foreach ( $ObjetoServicio["servicio"] as $i =>  $servicio) {

          foreach ( $servicio['pagos'] as $j =>  $pago){
          		$name[] = $pago->name;
          }
      		
        }
		*/

        

	}
}


