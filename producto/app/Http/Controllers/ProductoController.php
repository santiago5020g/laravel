<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto as Producto;
use App\Tienda as Tienda;
use App\Categoria as Categoria;

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
        $productos = Producto::paginate(1);
        return view('producto.index',['productos'=>$productos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tiendas = Tienda::all();
        $categorias = Categoria::all();
        return view('producto.create',['tiendas'=>$tiendas,'categorias'=>$categorias]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->idtienda = $request->tienda;
        $producto->save();
        $categorias = $request->categoria;
        //guardar en la tabla intermedia
        $producto->categorias()->attach($categorias);
        //despues de guardar retorne a index
        $productos = Producto::all();
        return redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::where('idproducto','=',$id)->first();
        return view('producto.delete',['producto'=>$producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $producto = Producto::where('idproducto','=',$id)->first();
       $tiendas = Tienda::all();
       $categorias = Categoria::all();
       return view('producto.edit',['producto'=>$producto,'tiendas'=>$tiendas,'categorias'=>$categorias]);
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
        $producto = Producto::where('idproducto','=',$id)->first();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->idtienda = $request->tienda;
        $producto->save();
        $categorias = $request->categoria;
        $producto->categorias()->detach($producto->categorias);
        $producto->categorias()->attach($categorias);
         //despues de guardar retorne a index
         return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::where('idproducto','=',$id)->first();
        $producto->categorias()->detach();
        $producto->delete();
        //despues de guardar retorne a index
        $productos = Producto::all();
        return redirect('productos');
    }
}
