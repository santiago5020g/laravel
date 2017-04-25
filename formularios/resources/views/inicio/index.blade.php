@extends('layouts.template1')


@section('content')

<div class="container">
	<h2>Bienvenido  {{ Auth::user()->nombres }} </h2>
</div>


@endsection