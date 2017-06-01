pagos del cliente


<table>
	<tr>
		<th>nombre</th>
		<th>Telefono</th>
		<th>Pagos</th>
	</tr>
	@foreach ($clientes as $cliente)
		<tr>
			<th>{{ $cliente->nombre }}</th>
			<th>{{ $cliente->telefono }}</th>
			<th>Pagos</th>
		</tr>
	@endforeach
</table>