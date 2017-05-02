<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ttrform;
use App\Cargo;
use App\Smbd_etl_extract_ttrcargo;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if((!Auth::viaRemember() && !Auth::check()) || !count(Auth::User()->formularios()->get()) ) 
        {
            return redirect('ingreso');
        }

        
        $formularios = Ttrform::join('ttrform_ttrcargo','ttrform_ttrcargo.idttrform','=','ttrform.idttrform')
        ->join('ttrfieldsf','ttrfieldsf.ttrform_id','=','ttrform.idttrform')
        ->join('ttrvalues','ttrvalues.idttrfieldsf','=','ttrfieldsf.idttrfieldsf')
        ->join('smbd_etl_extract_ttrcargo','smbd_etl_extract_ttrcargo.idttrcargo','=','ttrform_ttrcargo.idttrcargo')
        ->where('smbd_etl_extract_ttrcargo.cedula','=',Auth::User()->cedula)
        ->where('ttrform.active','=',1)
        ->where('ttrfieldsf.active','=',1)
        ->where('ttrvalues.active','=',1)
        ->groupBy('ttrform.idttrform')
        ->get();
        

        /*
         $formularios = Auth::User()->formularios()->with(['fields' => function ($query) {
         $query->where('active', '=', '1');
          }])
         ->where('active','=',1)
         ->orderBy('idttrform', 'DESC')
         ->get();  
         */

        return view('empleado.index',array('formularios'=>$formularios));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
