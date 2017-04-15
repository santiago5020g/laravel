<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $productos = DB::table('productos')
         ->join('categorias', 'productos.idcategoria', '=', 'categorias.id')
         ->select('productos.*', 'categorias.nombre as cnombre')
         ->get();
         return view('producto.index', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $categorias = DB::table('categorias')->get();
         return view('producto.create', ['categorias' => $categorias]);
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
        $nombre = $request->nombre;
        $precio = $request->precio;
        $idcategoria = $request->categoria;

         $this->validate($request, [
        'nombre' => 'required',
        'precio' => 'required',
        'categoria' => 'required',
         ]);

        // si no hay errores en validate se inserta el registro
        DB::table('productos')->insert(
        ['nombre' => $nombre, 'precio' => $precio , 'idcategoria'=> $idcategoria]
        );

        $productos = DB::table('productos')
         ->join('categorias', 'productos.idcategoria', '=', 'categorias.id')
         ->select('productos.*', 'categorias.nombre as cnombre')
         ->get();
        return view('producto.index', ['productos' => $productos]);
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
        $categorias = DB::table('categorias')->get();
        $producto = DB::table('productos')->where('id', $id)->first();
        return view('producto.edit', ['producto' => $producto, 'categorias' => $categorias]);
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
        $nombre = $request->nombre;
        $precio = $request->precio;
        $idcategoria = $request->categoria;

         $this->validate($request, [
        'nombre' => 'required',
        'precio' => 'required',
        'categoria' => 'required',
         ]);

        DB::table('productos')
            ->where('id', $id)
            ->update(['nombre' => $nombre,'precio' =>$precio,'idcategoria'=>$idcategoria]);

        return view('producto.edit', ['producto' => $producto, 'categorias' => $categorias]);
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
        DB::table('productos')->where('id', '=', $id)->delete();

    }
}
