@extends('layouts.template1')


@section('content')


<div style="margin-top: 7%"></div>

<div class="row">
	<div class="col-md-12">
		<a class="btn btn-info" href="{{ url('formularios') }}">Regresar</a>
	</div>
</div>

<div class="container">
	<h1>Esta seguro de eliminar el formulario <strong>{{ $formulario->name }}</strong> ? </h1>

	<form action="{{ url('/formularios/'.$formulario->idttrform) }}"  method="POST">
		<div class="form-group" style="margin-top: 50px;">
			<input type="submit" value="Eliminar" class="btn btn-danger btn-lg">
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input name="_method" type="hidden" value="DELETE">
	</form>
</div>
@endsection