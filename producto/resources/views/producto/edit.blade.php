@extends('layouts.template1')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
   

<form action="{{ url('/productos/'.$producto->idproducto) }}"  method="POST">
	<div>
		<label>Nombre</label>
		<input type="text" name="nombre" value="{{ $producto->nombre }}">
	</div>
	<div>
		<label>Precio</label>
		<input type="text" name="precio" value="{{ $producto->precio }}">
	</div>
	<div>
		<label>Tienda</label>
		<select name="tienda">
			<option value="">Seleccione la tienda</option>
			@foreach ($tiendas as $tienda)
   			<option @if($tienda->idtienda == $producto->idtienda) selected @endif value = "{{ $tienda->idtienda }}">{{ $tienda->nombre }}</option>
   			@endforeach
		</select>
	</div>
	<div>
		<label>Categorias</label>
		<select name="categoria[]" multiple>
			<option value="">Seleccione la tienda</option>
			@foreach ($categorias as $categoria)
					<option value="{{ $categoria->idcategoria }}"
   					@foreach ($producto->categorias as $categoria_producto)
   						@if($categoria_producto->idcategoria == $categoria->idcategoria) selected @endif
	    			@endforeach
	    			>{{ $categoria->nombre }}</option>
   			@endforeach
		</select>
	</div>

	<div>
		<input type="submit" name="">
	</div>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input name="_method" type="hidden" value="PATCH">
</form>

@endsection
