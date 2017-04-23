@extends('layouts.template1')


@section('content')


<div class="col-md-2"></div>
<div class="col-md-8"> 
	<form action="{{ url('formularios') }}" class="form-horizontal">
		<div class="form-group">
			<label>Nombre formulario</label>
			<input class="form-control" type="text" name="nombre_formulario" value="{{ old('nombre_formulario') }}">
		</div>
		
		<div class="form-group">
			<label>El formulario esta</label>
			<select name="activo" class="form-control">
				<option value="1" @if (old('activo') == '1') selected="selected" @endif>Activo</option>
				<option value="0" @if (old('activo') == '0') selected="selected" @endif>Inactivo</option>
			</select>
		</div>


<div style="display: none;">
	@include('layouts/campo')
</div>



		<h2>Campos del formulario</h2>
		<div id="campos">
			<div id="campo1" class="panel panel-primary">
				<div class="panel-heading">
    				<h3 class="panel-title">campo1</h3>
  				</div>
				<div class="panel-body">
					<div class="form-group">
						<label>Nombre del campo</label>
						<input type="text" name="nombre_campo[]" placeholder="Ej: Paises" value="{{ old('nombre_campo') }}" class="form-control">
					</div>
					<div class="form-group">
						<label>Tipo de campo</label>
						<select name="activo[]" class="form-control">
							<option value="">Seleccione.....</option>
							<option value="select" @if (old('select') == 'select') selected="selected" @endif>Seleccion unica de lista desplegable</option>
							<option value="radio" @if (old('radio') == 'radio') selected="selected" @endif>Seleccion unica por circulo</option>
							<option value="text" @if (old('text') == 'text') selected="selected" @endif>Campo texto</option>
							<option value="checkbox" @if (old('checkbox') == 'checkbox') selected="selected" @endif>Seleccion multiple por chulo</option>
						</select>
					</div>
					<div  class="form-group">
						<label>El campo esta...</label>
						<select name="campo_activo[]" class="form-control">
							<option value="1" @if (old('activo') == '1') selected="selected" @endif>Activo</option>
							<option value="0" @if (old('activo') == '0') selected="selected" @endif>Inactivo</option>
						</select>
					</div>
					<h3>Configuracion del campo</h3>
					<div class="form-group">
						<label>El campo Es...</label>
						<select name="campo_requerido[]" class="form-control">
							<option value="1" @if (old('campo_requerido') == '1') selected="selected" @endif>Requerido</option>
							<option value="0" @if (old('campo_requerido') == '0') selected="selected" @endif>No requerido</option>
						</select>
					</div>
					<h3>Valores del campo</h3>
					<div class="form-group">
						<label>Valores del campo</label>
						<input type="text" name="valores_campo[]" placeholder="Ej: Chile" class="form-control">
						<a style="cursor: pointer;"  class="btn btn-warning">Agregar mas valores</a>
					</div>
				</div>
			</div>
		</div>
		


		<div class="form-group">
			<input type="submit" value="Crear formulario" class="btn btn-primary">
			<a style="cursor: pointer;" onclick="agregar_campos()" class="btn btn-success">Agregar mas campos</a>
		</div>


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
</div>
<div class="col-md-2"></div>
@endsection


<script src="{{ asset('js/form.js') }}"></script>
