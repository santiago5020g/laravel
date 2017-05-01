@extends('layouts.template1')


@section('content')


<div style="margin-top: 7%"></div>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<a class="btn btn-primary" href="{{ url('formularios/create') }}">Crear nuevo formulario</a>
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped ">
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
							<a class="btn btn-info" href="{{ url('formularios/'.$formulario->idttrform.'/edit') }}">Editar</a>
							<a class="btn btn-warning" href="{{ url('formularios/'.$formulario->idttrform) }}">Desactivar</a>
							<a class="btn btn-danger" href="{{ url('formularios/'.$formulario->idttrform) }}">Eliminar</a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection