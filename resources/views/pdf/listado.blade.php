@extends('layouts.pdfinicio')
@section('content')
<table class="table table-hover table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Ubicacion</th>
			<th>Avatar</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($trainers as $trainer)
		<tr>
			<td>{{ $trainer->id }}</td>
			<td>{{ $trainer->name }}</td>
			<td>{{ $trainer->Ubicacion }}</td>
			<td class="text-right"><img style="height: 100px; width: 100px;
		background-color: #EFEFEF; margin: 20px;
		"class="card-img-top rounded-circle mx-auto d-block"
		src="images/{{$trainer->avatar}}" alt=""></td>
			<!-- $htm .=' <tr><td rowspan="5"><img src"'.pub-->
		</tr>
		@endforeach
	</tbody>
</table>
@endsection