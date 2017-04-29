<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Ttrform;
use App\Cargo;
use App\Ttrfield;
use App\Ttrvalue;
use App\TtrconfigField;
use Illuminate\Support\Facades\Auth;


class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if((!Auth::viaRemember() && !Auth::check()) || (!Auth::User()->where('cargo' , 'ENTRENADOR COMERCIAL')->exists() && 
        !Auth::User()->where('cargo' , 'ADMINISTRADDOR')->exists()))
        {
            return redirect('ingreso');
        }


        $formularios = Ttrform::all();
        return view("formulario.index",array('formularios'=>$formularios));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if((!Auth::viaRemember() && !Auth::check()) || (!Auth::User()->where('cargo' , 'ENTRENADOR COMERCIAL')->exists() && 
        !Auth::User()->where('cargo' , 'ADMINISTRADDOR')->exists()))
        {
            return redirect('ingreso');
        }

        $cargos = Cargo::all();
        return view("formulario.create",array('cargos'=>$cargos));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //mensaje personalizado
        $messages = [
        'required' => ':attribute es requerido.',
        ];

        //validador
         $validator = Validator::make($request->all(), [
            'nombre_formulario' => 'required',
            'formulario_activo' => 'required',
            'cargos' => 'required|array|min:1',
            'nombre_campo.*' => 'required',
            'tipo_campo.*' => 'required',
            'campo_activo.*' => 'required',
            'campo_requerido.*' => 'required',
        ],$messages);


         //mostrar mensajes de error
        if ($validator->fails()) 
        {
            $errors = $validator->errors();
            foreach ($errors->all() as $message) {
               echo "<li>".$message."</li>";
            }
            echo "<br>";
            
            return;
        }
       
      

        $formulario = new Ttrform();
        $formulario->name = $request->nombre_formulario;
        $formulario->created_at = date('Y-m-d');
        $formulario->modified_at = date('Y-m-d');
        $formulario->active = $request->formulario_activo;
        $formulario->smbdEtlExtract_cedula = Auth::User()->cedula;
        $formulario->save();
        $cargos = $request->cargos;
        $formulario->cargos()->attach($cargos);
        
        //necesario para los valores asociados al campo
        $acumulador = 1;
        //pueden ser varios fields entonces se va guardando uno por uno
        for ($i=0; $i <count($request->nombre_campo) ; $i++) 
        { 
            //guardar en ttrfield
            $ttrfield = new Ttrfield();
            $ttrfield->ttrform_id = $formulario->idttrform;
            $ttrfield->label_name = $request->nombre_campo[$i];
            $ttrfield->typefield = $request->tipo_campo[$i];
            $ttrfield->active = $request->campo_activo[$i];
            //guardar en field
            $ttrfield->save();
            //guardar en config field
            $ttrconfigField = new TtrconfigField();
            $ttrconfigField->ttrfield_id = $ttrfield->idttrfieldsf;
            $ttrconfigField->required = $request->campo_requerido[$i];
            $ttrconfigField->save();
            //proceso para guardar en values del campo
            //los valores asociados al campo
            //array que guarda los valores del campo asociados a un campo
            $valores_formulario_campo = array();
            $cantidad_valores_del_campo = count($valores_formulario_campo);

            while( $cantidad_valores_del_campo == 0 )
            {
                //un ejemplo es que se puede tener campo1 y campo 3. Se valida para que no coja el campo2 porque no existe. No obtiene la columna del campo 2
                $valores_formulario_campo = array_column($request->valores_campo, ($acumulador));
                $cantidad_valores_del_campo = count($valores_formulario_campo);
                $acumulador +=1;
            }
            //validar que el valor pertenezca al campo
            
            for ($i2=0; $i2 <count($valores_formulario_campo) ; $i2++) 
            {
                $ttrvalue = new Ttrvalue();
                $ttrvalue->idttrfieldsf = $ttrfield->idttrfieldsf;
                $ttrvalue->value = $valores_formulario_campo[$i2];
                $ttrvalue->active = 1;
                $ttrvalue->save();
            }

        }

        
          
         echo "Guardado";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $formulario = Ttrform::where('idttrform','=',$id)->first();
         $cargos = Cargo::all();
         $ttrfields = Ttrfield::where('ttrform_id','=',$formulario->idttrform)->get();
         //$ttrconfigField =  TtrconfigField::where('ttrfield_id','=',$ttrfield->idttrfieldsf)->get();
         //$ttrvalue =  Ttrvalue::where('idttrfieldsf','=',$ttrfield->idttrfieldsf)->get();

        return view('formulario.edit',array('formulario'=>$formulario,'cargos'=>$cargos,'ttrfields'=>$ttrfields));

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
