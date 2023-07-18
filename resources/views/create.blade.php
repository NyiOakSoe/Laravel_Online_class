@extends('layout')

@section('layoutPage')
<div class="container">
<div class="card">
  
  <div class="card-header" style="text-align: center;">
    Blog App
  </div>
  <div class="card-body">
  <form action="/post" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter name">
    
  </div>
  <!-- @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror -->
  <div class="form-group">
    <label for="exampleInputEmail1">Content</label>
    <input type="text" class="form-control" name="content" value="{{old('content')}}" placeholder="Enter content">
  </div>
    <!-- @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror -->
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/post" class="btn btn-success">Back</a>
</form>
  </div>
</div>
</div>
@endsection