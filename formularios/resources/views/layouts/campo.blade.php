<div id="campo" class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
    		campo
    	</h3>
		</div>
	<div class="panel-body">
		<div class="form-group">
			<label>Nombre del campo</label>
			<input type="text" name="nombre_campo[]" placeholder="Ej: Paises" class="form-control">
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
				<input type="text" name="valores_campo" placeholder="Ej: Chile" class="form-control">
			</div>
			<a style="cursor: pointer;" onclick="agregar_valores(this)"  class="btn btn-warning">Agregar mas valores</a>
		</div>
	</div>
</div>