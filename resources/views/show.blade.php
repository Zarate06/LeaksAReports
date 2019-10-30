@extends('layouts.app')
@section('title', 'trainers')
@section('content')
   <img style="height: 100px; width: 100px;
   background-color: #EFEFEF; margin: 20px;
   " class="card-img-top rounded-circle mx-auto d-block"
   src="../images/{{$trainer->avatar}}" alt="">

   <h5 class="text-center">{{$trainer->name}}</h5>
   <div class="text-center">
   <p>some quick example text to build on the card title and make up the bulk of the card's content.</p>
   <a href="/delete/{{$trainer->id}}" class="btn btn-primary">Delete</a>
   <a href="/trainers/{{$trainer->id}}/edit" class="btn btn-secondary">Editar...</a>
   <a href="/pdfview/{{$trainer->id}}" class="btn btn-secondary">PDF</a>
   </div>
@endsection