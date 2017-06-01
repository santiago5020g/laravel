<form action="{{ url('servicios') }}" method="POST">
	<div>
		<label>Nombre del servicio</label>
		<input type="text" name="serviceName">
	</div>
	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentName[]">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentName[]">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentValue[]">
	</div>


	<input type="submit" value="Guardar">
</form>