@extends('layouts.template1')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
   

<a href="{{ url('productos/create') }}">Crear producto</a>

   <table>
   		<th>Nombre</th>
   		<th>Precio</th>
   		<th>Categoria</th>
   		<th>Acciones</th>
	   @foreach ($productos as $producto) 

	    	<tr>
	    		<td>{{ $producto->nombre }}</td>
	    		<td>{{ $producto->precio }}</td>
	    		<td>{{ $producto->cnombre }}</td>
	    		<td>
	    			<a href="{{ url('productos/'.$producto->id.'/edit') }}">Editar</a>
	    			<a style="cursor:pointer;" data-t="{{ url('productos/'.$producto->id) }}" data-token="{{ csrf_token() }}" onclick="eliminar(this)">Eliminar</a>
	    		</td>
	    	</tr>
	   @endforeach
   </table>

	

@endsection