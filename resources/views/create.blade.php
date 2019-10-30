@extends('layouts.app')
@section('title', 'Trainers Create')
@section('content')
    
{!!Form::open(['route'=>'trainers.store','method'=>'POST','files'=>'true'])  !!}
@include('form')
  <!--{{Form::label('name','Nombre')}}
  {{Form::text('name',null,['class'=>'form-control'])}}
  {{Form::label('ubicacion', 'Ubicacion')}}
  {{Form::text('ubicacion',null,['class'=>'form-control'])}}
  {{Form::label('foto/video','Foto/Video')}}
  {{Form::text('foto/video',null,['class'=>'form-control'])}}
  {{Form::label('comentario','Comentario')}}
  {{Form::text('comentario',null,['class'=>'form-control'])}}
  
</div>
<br><br>
<div class="from-group">
  {{Form::label('avatar', 'Avatar')}}
  {{Form::file('avatar')}}
</div>-->
{{Form::submit('Guardar',['class'=>'btn btn_primary'])}}
{!!Form::close()!!}
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><div class="text-center"><h2>{{ __('LeaksAReport') }}</h2></div></div><br>
<form class="from-group" method="POST" action="/trainers" enctype="multipart/form-data">
  @csrf
           <div class="from-group">
            <div class="text-center"><h3> Bienvenidos a LeaksAReport. </h3></div>
            <div class="text-center"><h5> Pare relizar un reporte llena los campos de abajo y dale click al boton de Guardar. </h5></div><br>
                <label for="">Nombre:</label>
                <input type="text" name="name" class="from-control">
                <label for="">Ubicacion: </label>
                <input type="text" name="apellido" class="from-control"><br>
                <label for="">foto/video: </label>
                <input type="text" name="Ubicacion" class="from-control">
                <label for="">Comentario: </label>
                <input type="text" name="Comentario" class="from-control">
              </div><br>

              <div class="from-group">
                <label for="">Avatar:</label>
                <input type="file" name="avatar">
              </div><br>
              <button type="submit" class="btn btn-primary">Guardar</button>
</form>-->

@endsection