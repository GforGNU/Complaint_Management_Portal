@extends('layouts.dash_app')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>

      @if(Auth()->user()->email == 'lojain@gmail.com')

      <th scope="col">Delete</th>
    @endif

    </tr>
  </thead>
  
  <tbody>
  @foreach($admins as $admin)

 
        <tr>

      <th scope="row">{{$admin->id}}</th>
      <td>{{$admin->name}}</td>
      <td>{{$admin->email}}</td>

      @if(Auth()->user()->email == 'lojain@gmail.com')
      <td><a href="/admins/{{$admin->id}}"><button  type="button" class="btn btn-danger"> Delete</button></a></td>
      @endif


    </tr>
    @endforeach
    
  </tbody>
</table>
<a href="/admins/create" class="btn btn-primary">Add Admin</a>

@endsection