@extends('layouts.template1')


@section('content')

<h1>Formularios que vera el usuario.</h1>


<div class="container">


	@foreach ($formularios as $formulario)
		<div class="panel panel-default" style="cursor: pointer;" data-toggle="modal" data-target=".{{ $formulario->idttrform }}">
		  <div class="panel-body">
		    {{ $formulario->name }}
		  </div>
		</div>
		<div class="modal fade {{ $formulario->idttrform }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
			       <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">{{ $formulario->name }}</h4>
			      </div>
			      <div class="modal-body">
			      	<form class="form-horizontal">
				        @foreach ($formulario->fields as $field)
				        	<div class="form-group">
				        		<label>{{ $field->label_name }}</label>
				        		<div></div>
					        	@if($field->typefield == 'select')
					        		<select name="select[]" class="form-control" @if($field->config->required == 1) required @endif  >
					        			<option value="">Seleccione</option>
					        			@foreach ($field->values as $value)
					        				<option value="{{ $value->idttrvalues }}">{{ $value->value }}</option>
					        			@endforeach
					        		</select>
					        	@endif
					        	@if($field->typefield == 'radio')
				        			@foreach ($field->values as $value)
				        				<input type="radio" name="radio[]" value="{{ $value->idttrvalues }}" @if($field->config->required == 1) required @endif >{{ $value->value }}
				        			@endforeach
					        	@endif
					        	@if($field->typefield == 'text')
				        			@foreach ($field->values as $value)
				        				<input class="form-control" type="text[][{{ $value->idttrvalues }}]" name="text[]" value="" @if($field->config->required == 1) required @endif >{{ $value->value }}
				        			@endforeach
					        	@endif
					        	@if($field->typefield == 'checkbox')
				        			@foreach ($field->values as $value)
				        				<input type="checkbox" name="checkbox[]" value="{{ $value->idttrvalues }}" @if($field->config->required == 1) required @endif >{{ $value->value }}
				        			@endforeach
					        	@endif
				        	</div>
				        @endforeach
				        <div class="form-group" style="margin-top: 50px">
				        	<input type="submit" class="btn btn-success" value="Guardar">
				        </div>
			        </form>
			      </div>
		    </div>
		  </div>
		</div>
	@endforeach


</div>


@endsection