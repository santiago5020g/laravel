@extends('layouts.template1')


@section('content')
   

@if(auth()->user()->inRole('rol-crear;admin'))
	<a href="{{ url('usuarios/create') }}">Crear Usuario</a>
@endif

   <table>
   		<th>Nombre</th>
   		<th>Email</th>
   		<th>Telefono</th>
   		<th>Roles</th>
   		<th>Acciones</th>
	   @foreach ($usuarios as $usuario) 

	    	<tr>
	    		<td>{{ $usuario->nombre }}</td>
	    		<td>{{ $usuario->email }}</td>
	    		<td>{{ $usuario->telefono }}</td>
	    		<td>
	    			@foreach ($usuario->roles as $rol)
	    				{{ $rol->nombre }},
	    			@endforeach
	    		</td>
	    		<td>
	    			<a href="{{ url('usuarios/'.$usuario->idusuario.'/edit') }}">Editar</a>
	    			<a href="{{ url('usuarios/'.$usuario->idusuario) }}">Eliminar</a>
	    		</td>
	    	</tr>
	   @endforeach
   </table>

	

@endsection
