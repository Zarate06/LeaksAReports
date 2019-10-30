@extends('layouts.app')
@section('title', 'trainers')
@section('content')


{!!Form::model($trainer,['route'=>['trainers.update',$trainer],
'method'=>'PUT','files'=>true])!!}
@include('form')
<!--<div class="form-group">
{{Form::label('name','Nombre')}}
  {{Form::text('name',null,['class'=>'form-control'])}}
  {{Form::label('Ubicacion', 'Ubicacion')}}
  {{Form::text('Ubicacion',null,['class'=>'form-control'])}}
  {{Form::label('foto/video','foto/video')}}
  {{Form::text('foto/video',null,['class'=>'form-control'])}}
  {{Form::label('Comentario','Comentario')}}
  {{Form::text('Comentario',null,['class'=>'form-control'])}}
  
</div>
<br><br>
<div class="from-group">
  {{Form::label('avatar', 'Avatar')}}
  {{Form::file('avatar')}}
</div>-->
{{Form::submit('Actualizar',['class'=>'btn btn_primary'])}}
{!!Form::close()!!}<br>


@endsection
	
