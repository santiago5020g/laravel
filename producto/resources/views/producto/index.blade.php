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
   		<th>Tienda</th>
   		<th>Categorias</th>
   		<th>Acciones</th>
	   @foreach ($productos as $producto) 

	    	<tr>
	    		<td>{{ $producto->nombre }}</td>
	    		<td>{{ $producto->precio }}</td>
	    		<td>{{ $producto->tienda->nombre }}</td>
	    		<td>
	    			@foreach ($producto->categorias as $categoria)
	    				{{ $categoria->nombre }},
	    			@endforeach
	    		</td>
	    		<td>
	    			<a href="{{ url('productos/'.$producto->idproducto.'/edit') }}">Editar</a>
	    			<a href="{{ url('productos/'.$producto->idproducto) }}">Eliminar</a>
	    		</td>
	    	</tr>
	   @endforeach
   </table>


{{ $productos->links() }}

@endsection
