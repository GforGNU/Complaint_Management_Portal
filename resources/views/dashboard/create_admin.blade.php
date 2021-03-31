@extends('layouts.dash_app')

@section('content')
<form action="/admins" method="post" enctype="multipart/form-data" style="width:50rem; margin:auto">
@csrf
<div class="form-group mt-4">
    <label for="inputAddress2">Name</label>
    <input type="text" name="name" class="form-control" id="inputAddress2" placeholder="Please write 4 parts full name" value="{{ old('name') }}">
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{ old('email') }}">
    </div>

  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Password</label>
      <input type="password" name="password" class="form-control" id="inputEmail4" placeholder="Password">
    </div>

  </div>

  <button type="submit" class="btn btn-primary">Register</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection