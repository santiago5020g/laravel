<form action="{{ url('autenticar') }}" method="post">
	<div>
		<label>Usuario</label>
		<input type="text" name="usuario">
	</div>
	<div>
		<label>Clave</label>
		<input type="password" name="clave">
	</div>

	<div>
		<input type="checkbox" name="recuerdame">Recuerdame
	</div>

	<div>
		<input type="submit" name="">
	</div>


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
