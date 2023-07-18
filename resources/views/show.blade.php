@extends('layout')

@section('layoutPage')
<div class="container">

<div class="card">
  
  <div class="card-header" style="text-align: center;">
    Blog App
  </div>
  <div class="card-body">
    
   
        <h5 class="card-title">{{$post->name}}</h5>
        <p class="card-text">{{$post->content}}</p>
        <a href="/post" class="btn btn-primary">Back</a>
    
  </div>
</div>
</div>
@endsection