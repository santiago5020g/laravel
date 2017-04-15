@extends('layouts.template1')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
   	<form action="{{ url('/productos/'.$producto->id) }}" method="POST">
   		<div>
   			<label>Nombre del producto</label>
   			<input type="text" name="nombre" value="{{ $producto->nombre }}" required>
   		</div>
   		<div>
   			<label>precio</label>
   			<input type="text" name="precio"  value="{{ $producto->precio }}"  required>
   		</div>
   		<div>
   			<label>Categoria</label>
   			<select name="categoria" required>
   				<option value="">Seleccione.....</option>
   				@foreach ($categorias as $categoria)
   				<option @if($categoria->id == $producto->idcategoria) selected @endif value = "{{ $categoria->id }}">{{ $categoria->nombre }}</option>
   				@endforeach
   			</select>
   		</div>

   		<div>
   			<input type="submit" value="Actualizar">
   		</div>


   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
   		<input name="_method" type="hidden" value="PATCH">
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