@extends('layouts.template1')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
   	<form action="{{ url('productos') }}" method="POST">
   		<div>
   			<label>Nombre del producto</label>
   			<input type="text" name="nombre" required>
   		</div>
   		<div>
   			<label>precio</label>
   			<input type="text" name="precio" required>
   		</div>
   		<div>
   			<label>Categoria</label>
   			<select name="categoria" required>
   				<option value="">Seleccione.....</option>
   				@foreach ($categorias as $categoria)
   				<option value = "{{ $categoria->id }}">{{ $categoria->nombre }}</option>
   				@endforeach
   			</select>
   		</div>

   		<div>
   			<input type="submit" name="Crear">
   		</div>


   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
   	</form>
@endsection


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif