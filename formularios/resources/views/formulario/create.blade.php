@extends('layouts.template1')


@section('content')


<div style="display: none;">
	@include('layouts/campo')
</div>



<div class="col-md-2"></div>
<div class="col-md-8"> 

	<form id="formulario1" action="{{ url('formularios') }}" class="form-horizontal" method="POST">
		<div class="form-group">
			<label>Nombre formulario</label>
			<input class="form-control" type="text" name="nombre_formulario" placeholder="Ej: Encuesta de satisfaccion" >
		</div>
		<div classs="form-group">
			<select name="cargos[]" multiple class="form-control" >
				@foreach ($cargos as $cargo)
					<option value="{{ $cargo->idttrcargo }}" >{{ $cargo->name }}</option>
				@endforeach
			</select>
		</div>
		
		<div class="form-group">
			<label>El formulario esta</label>
			<select name="formulario_activo" class="form-control">
				<option value="1" >Activo</option>
				<option value="0" >Inactivo</option>
			</select>
		</div>



		<h2>Campos del formulario</h2>
		<div id="campos">
			<div id="campo1" class="panel panel-primary">
				<div class="panel-heading">
    				<h3 class="panel-title">
    					<i style="cursor: pointer;" onclick="eliminar_campo(this)" class="fa fa-times" aria-hidden="true"></i> campo1
    				</h3>
  				</div>
				<div class="panel-body">
					<div class="form-group">
						<label>Nombre del campo</label>
						<input type="text" name="nombre_campo[]" placeholder="Ej: Paises"  class="form-control">
					</div>
					<div class="form-group">
						<label>Tipo de campo</label>
						<select name="tipo_campo[]" class="form-control">
							<option value="">Seleccione.....</option>
							<option value="select" >Seleccion unica de lista desplegable</option>
							<option value="radio" >Seleccion unica por circulo</option>
							<option value="text" >Campo texto</option>
							<option value="checkbox" >Seleccion multiple por chulo</option>
						</select>
					</div>
					<div  class="form-group">
						<label>El campo esta...</label>
						<select name="campo_activo[]" class="form-control">
							<option value="1" >Activo</option>
							<option value="0" >Inactivo</option>
						</select>
					</div>
					<h3>Configuracion del campo</h3>
					<div class="form-group">
						<label>El campo Es...</label>
						<select name="campo_requerido[]" class="form-control">
							<option value="1" >Requerido</option>
							<option value="0" >No requerido</option>
						</select>
					</div>
					<h3>Valores del campo</h3>
					<div class="form-group">
						<label>Valores del campo</label>
						<div class="valores">
							<li class="fa fa-trash" style="cursor: pointer;" onclick="eliminar_valor(this)"></li>
							<input type="text" name="valores_campo[][1]" placeholder="Ej: Chile" class="form-control">
						</div>
						<a style="cursor: pointer;" onclick="agregar_valores(this)"  class="btn btn-warning">Agregar mas valores</a>
					</div>
				</div>
			</div>
		</div>
		


		<div class="form-group">
			<input id="btnEnviar" type="submit" value="Guardar" class="btn btn-primary">
			<a style="cursor: pointer;" onclick="agregar_campos()" class="btn btn-success">Agregar mas campos</a>
		</div>
		<div class="form-group">
			<div id="mensaje"></div>
		</div>


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
</div>
<div class="col-md-2"></div>
@endsection


@section('footer_scripts')
<script src="{{ asset('js/form.js?v=3') }}"></script>
@stop
