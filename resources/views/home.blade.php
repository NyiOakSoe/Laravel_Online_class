@extends('layout')

@section('layoutPage')
<div class="container">
<div>
    <a href="/post/create" class="btn btn-success">New Post</a>
    
  </div><br>
<div class="card">
  
  <div class="card-header" style="text-align: center;">
    Blog App
  </div>
  <div class="card-body">
    
    @foreach($data as $value)
        <h5 class="card-title">{{$value->name}}</h5>
        <p class="card-text">{{$value->content}}</p>
        <div class="form-row">
        <a style="height:40px;margin:5px" href="/post/{{$value->id}}" class="btn btn-primary">View</a>
        <a style="height:40px;margin: 5px;" href="/post/{{$value->id}}/edit" class="btn btn-success">Edit</a> 
        <form action="/post/{{$value->id}}" method="post">
          @csrf
          @method('DELETE')
          <input style="height:40px;margin: 5px;" type="submit" value="Delete" class="btn btn-danger">
        </form><hr>
        </div>
    @endforeach
  </div>
</div>
</div>
@endsection