@extends('layouts.template1')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')


<a href="{{ url('formularios/create') }}">Crear nuevo formulario</a>

<table>
	<tr>
		<th>Nombre</th>
		<th>Fecha creacion</th>
		<th>Fecha de modificacion</th>
		<th>Estado</th>
		<th>Cedula del creador</th>
		<th>Acciones</th>
	</tr>
	@foreach($formularios as $formulario)
	<tr>
		<td>{{ $formulario->name }}</td>
		<td>{{ date('d/m/Y',strtotime($formulario->created_at)) }}</td>
		<td>{{ date('d/m/Y',strtotime($formulario->modified_at)) }}</td>
		<td>@if ( $formulario->active == 1) Activo @else Inactivo @endif</td>
		<td>{{ $formulario->smbdEtlExtract_cedula }}</td>
		<td>
			<a href="{{ url('formularios/'.$formulario->idttrform.'/edit') }}">Editar</a>
			<a href="{{ url('formularios/'.$formulario->idttrform) }}">Desactivar</a>
		</td>
	</tr>
	@endforeach
</table>


@endsection