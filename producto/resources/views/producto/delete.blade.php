@extends('layouts.template1')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
   

<form action="{{ url('/productos/'.$producto->idproducto) }}"  method="POST">

	<div>
		<h1>Esta seguro de borrar este producto?</h1>
	</div>

	<div>
		<h2>{{ $producto->nombre }}</h2>
	</div>


	<div>
		<input type="submit" name="" value="borrar">
	</div>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input name="_method" type="hidden" value="DELETE">
</form>

@endsection
