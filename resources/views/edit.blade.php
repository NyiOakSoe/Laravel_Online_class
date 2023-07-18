@extends('layout')

@section('layoutPage')
<div class="container">
<div class="card">
  
  <div class="card-header" style="text-align: center;">
    Blog App
  </div>
  <div class="card-body">
  <form action="/post/{{$post->id}}" method="post">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" value="{{$post->name}}" name="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Content</label>
    <input type="text" class="form-control" name="content" value="{{$post->content}}" placeholder="Enter content">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/post" class="btn btn-success">Back</a>
</form>
  </div>
</div>
</div>
@endsection