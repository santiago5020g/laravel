@extends('layouts.template1')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
   

<form action="{{ url('productos') }}" method="POST">
	<div>
		<label>Nombre</label>
		<input type="text" name="nombre" value="{{ old('nombre') }}">
	</div>
	<div>
		<label>Precio</label>
		<input type="text" name="precio" value="{{ old('precio') }}">
	</div>
	<div>
		<label>Tienda</label>
		<select name="tienda">
			<option value="">Seleccione la tienda</option>
			@foreach ($tiendas as $tienda)
			<option value="{{ $tienda->idtienda }}">{{ $tienda->nombre }}</option>
			@endforeach
		</select>
	</div>
	<div>
		<label>Categorias</label>
		<select name="categoria[]" multiple>
			<option value="">Seleccione la tienda</option>
			@foreach ($categorias as $categorias)
			<option value="{{ $categorias->idcategoria }}">{{ $categorias->nombre }}</option>
			@endforeach
		</select>
	</div>

	<div>
		<input type="submit" name="">
	</div>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

@endsection
