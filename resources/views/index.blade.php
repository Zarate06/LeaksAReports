@extends('layouts.app')
@section('title', 'trainers')
@section('content')
   

<div align="center" >
	<img src="images/logo2.png" width="200" height="150" alt="">
</div>
@csrf
<!--<p>Lista de trainers</p>-->
@foreach ($trainers as $trainer)
<div class="col-sm">
	<div class="card text-center" style="width: 18rem; margin-top: 70px;">
		<img style="height: 100px; width: 100px;
		background-color: #EFEFEF; margin: 20px;
		"class="card-img-top rounded-circle mx-auto d-block"
		src="images/{{$trainer->avatar}}" alt="">
<div class="card-body">
	<h5 class="card-title">{{$trainer->name}}</h5>
	<p class="card-text"> {{$trainer->Ubicacion}}</p>
	<a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver más...</a>
	<a href="/delete/{{$trainer->id}}" class="btn btn-primary">
		Delete...
	</a>
	<a href="/trainers/{{$trainer->id}}" class="btn btn-secundary">Mostrar...</a>
</div>
	</div>
</div>
<!---<p>{{$trainer->name}}</p>-->
@endforeach
<a href="{{ route('listado.pdf') }}" class="btn btn-sm btn-primary"> Descargar PDF</a>

</div>
@endsection