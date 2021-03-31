@extends('layouts.dash_app')

@section('content')





<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User ID</th>
      <th scope="col">title</th>
      <th scope="col">Description</th>
      <th scope="col">Service</th>
      <th scope="col">Is Urgent</th>
      <th scope="col">Status</th>
      <th scope="col">Update Status</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach($complaints as $complaint)
  @if($complaint->status == 'resolved')
  <tr class="table-success" >
      @elseif($complaint->status == 'dismissed')
    <tr class="table-dark">
        @else
        <tr>
        @endif

      <th scope="row">{{$complaint->id}}</th>
      <td>{{$complaint->user_id}}</td>
      <td>{{$complaint->title}}</td>
      <td>{{$complaint->description}}</td>
      <td>{{$complaint->service}}</td>
      @if($complaint->is_urgent == 'on')
      <td class="table-danger">{{$complaint->is_urgent}}</td>
      @else
      <td>{{$complaint->is_urgent}}</td>
      @endif
      <td>{{$complaint->status}}</td>
      <td><a href="/complaintPosts/{{$complaint->id}}/edit" class="btn btn-primary">Edit</a></td>

    </tr>
    @endforeach
    
  </tbody>
</table>


@endsection
