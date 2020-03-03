@extends('index')

@section('content')
@include('personaje.modal')
 <a class="btn btn-primary btn-lg" href="{{url('personaje/create')}}"  role="button">Crear</a>

<table class="table">

			<thead>

				<th>Nombre</th>
                <th>Raza</th>
				<th>Operaciones</th>

			</thead>

			

			<tbody id="datos"></tbody>

		</table>

@endsection