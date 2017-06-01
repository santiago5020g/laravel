<form action="{{ url('servicios/guardar_pago') }}" method="POST">
	<div>
		<label>Nombre del servicio</label>
		<select name="serviceName">
			@foreach ($servicios as $servicio)
				<option value="{{ $servicio->id }}">{{ $servicio->name }}</option>
			@endforeach
		</select>
	</div>



------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value="pago1">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value="2017-05-25">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value="1000">
	</div>

--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago2">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-26">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "2000">
	</div>

	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago3">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-27">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "3000">
	</div>


	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago4">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-28">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "4000">
	</div>


------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value="pago1">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value="2017-05-25">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value="1000">
	</div>

--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago2">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-26">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "2000">
	</div>

	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago3">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-27">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "3000">
	</div>


	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago4">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-28">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "4000">
	</div>

	------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value="pago1">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value="2017-05-25">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value="1000">
	</div>

--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago2">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-26">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "2000">
	</div>

	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago3">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-27">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "3000">
	</div>


	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago4">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-28">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "4000">
	</div>

	------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value="pago1">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value="2017-05-25">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value="1000">
	</div>

--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago2">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-26">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "2000">
	</div>

	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago3">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-27">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "3000">
	</div>


	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago4">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-28">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "4000">
	</div>

	------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value="pago1">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value="2017-05-25">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value="1000">
	</div>

--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago2">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-26">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "2000">
	</div>

	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago3">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-27">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "3000">
	</div>


	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago4">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-28">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "4000">
	</div>

	------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value="pago1">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value="2017-05-25">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value="1000">
	</div>

--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago2">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-26">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "2000">
	</div>

	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago3">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-27">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "3000">
	</div>


	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago4">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-28">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "4000">
	</div>

	------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value="pago1">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value="2017-05-25">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value="1000">
	</div>

--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago2">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-26">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "2000">
	</div>

	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago3">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-27">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "3000">
	</div>


	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago4">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-28">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "4000">
	</div>

	------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value="pago1">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value="2017-05-25">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value="1000">
	</div>

--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago2">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-26">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "2000">
	</div>

	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago3">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-27">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "3000">
	</div>


	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago4">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-28">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "4000">
	</div>

	------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value="pago1">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value="2017-05-25">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value="1000">
	</div>

--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago2">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-26">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "2000">
	</div>

	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago3">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-27">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "3000">
	</div>


	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago4">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-28">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "4000">
	</div>

	------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value="pago1">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value="2017-05-25">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value="1000">
	</div>

--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago2">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-26">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "2000">
	</div>

	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago3">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-27">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "3000">
	</div>


	--------------------------------------------------

	<div>
		<label>Nombre del pago</label>
		<input type="text" name="paymentName[]" value = "pago4">
	</div>
	<div>
		<label>fecha del pago</label>
		<input type="text" name="paymentDate[]" value = "2017-05-28">
	</div>
	<div>
		<label>valor del pago</label>
		<input type="text" name="paymentValue[]" value = "4000">
	</div>




	<input type="submit" value="Guardar">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>