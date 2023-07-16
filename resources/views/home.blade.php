@extends('layout')

@section('layoutPage')
<div class="container">
<div class="card">
  <div class="card-header" style="text-align: center;">
    Featured
  </div>
  <div class="card-body">
    
    @foreach($data as $value)
        <h5 class="card-title">{{$value->name}}</h5>
        <p class="card-text">{{$value->content}}</p>
        <a href="#" class="btn btn-primary">View</a> <hr>
    @endforeach
  </div>
</div>
</div>
@endsection