@extends('layouts.template1')


@section('content')
   

<form action="{{ url('usuarios') }}" method="POST">
	<div>
		<label>Nombre</label>
		<input type="text" name="nombre" value="{{ old('nombre') }}">
	</div>
	<div>
		<label>Email</label>
		<input type="text" name="email" value="{{ old('email') }}">
	</div>
	<div>
		<label>Telefono</label>
		<input type="text" name="telefono" value="{{ old('telefono') }}">
	</div>
	<div>
		<label>Clave</label>
		<input type="password" name="clave" value="{{ old('clave') }}">
	</div>
	<div>
		<label>Roles</label>
		@foreach ($roles as $rol)
			<input type="checkbox" name="rol[]" value="{{ $rol->idrol }}">{{ $rol->nombre }}
		@endforeach
	</div>

	<div>
		<input type="submit" name="">
	</div>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

@endsection
