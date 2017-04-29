@extends('layouts.template1')


@section('content')


<div style="display: none;">
	@include('layouts/campo')
</div>


<div class="row">
	<div class="col-md-12">
		<a class="btn btn-info" href="{{ url('formularios') }}">Regresar</a>
	</div>
</div>
<div class="col-md-2"></div>
<div class="col-md-8"> 
	<form id="formulario1" action="{{ url('formularios') }}" class="form-horizontal" method="POST">
		<div class="form-group">
			<label>Nombre formulario</label>
			<input class="form-control" type="text" name="nombre_formulario" value="{{ $formulario->name }}" placeholder="Ej: Encuesta de satisfaccion" >
		</div>
		<div classs="form-group">
			<select name="cargos[]" multiple class="form-control" >
				@foreach ($cargos as $cargo)
					<option value="{{ $cargo->idttrcargo }}" 
						@foreach ($formulario->cargos as $formulario_cargo)
	   						@if($formulario_cargo->idttrcargo == $cargo->idttrcargo) selected @endif
		    			@endforeach
					  >{{ $cargo->name }}</option>
				@endforeach
			</select>
		</div>
		
		<div class="form-group">
			<label>El formulario esta</label>
			<select name="formulario_activo" class="form-control">
				<option  value="1" @if($formulario->active == 1)  selected @endif >Activo</option>
				<option value="0" @if($formulario->active ==0) selected @endif>Inactivo</option>
			</select>
		</div>



		<h2>Campos del formulario</h2>
		<div id="campos">
		  	<?php $i=0; ?>
			@foreach ($ttrfields as $ttrfield)
			    <?php $i++; ?>
				<div id="campo{{ $i }}" class="panel panel-primary">
					<div class="panel-heading">
	    				<h3 class="panel-title">
	    					<i style="cursor: pointer;" onclick="eliminar_campo(this)" class="fa fa-times" aria-hidden="true"></i> campo{{ $i }}
	    				</h3>
	  				</div>
					<div class="panel-body">
						<div class="form-group">
							<label>Nombre del campo</label>
							<input type="text" name="nombre_campo[]" value="{{ $ttrfield->label_name }}" placeholder="Ej: Paises"  class="form-control">
						</div>
						<div class="form-group">
							<label>Tipo de campo</label>
							<select name="tipo_campo[]" class="form-control">
								<option value="">Seleccione.....</option>
								<option value="select" @if($ttrfield->typefield == 'select') selected @endif >Seleccion unica de lista desplegable</option>
								<option value="radio" @if($ttrfield->typefield == 'radio') selected @endif >Seleccion unica por circulo</option>
								<option value="text" @if($ttrfield->typefield == 'text') selected @endif >Campo texto</option>
								<option value="checkbox" @if($ttrfield->typefield == 'checkbox') selected @endif >Seleccion multiple por chulo</option>
							</select>
						</div>
						<div  class="form-group">
							<label>El campo esta...</label>
							<select name="campo_activo[]" class="form-control">
								<option value="1" @if($ttrfield->active == 1) selected @endif >Activo</option>
								<option value="0" @if($ttrfield->active == 0) selected @endif>Inactivo</option>
							</select>
						</div>
						<h3>Configuracion del campo</h3>
						<div class="form-group">
							<label>El campo Es...</label>
							<select name="campo_requerido[]" class="form-control">
								<option value="1" @if($ttrfield->config->required == 1) selected @endif  >Requerido</option>
								<option value="0" @if($ttrfield->config->required == 0) selected @endif>No requerido</option>
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
			@endforeach
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
