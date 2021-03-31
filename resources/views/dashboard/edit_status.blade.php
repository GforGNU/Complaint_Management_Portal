@extends('layouts.dash_app')

@section('content')
<table class="table table-striped">

<thead>
  <tr>

    <th scope="col">Title</th>
    <th scope="col">Description</th>
    <th scope="col">Service</th>
    <th scope="col">Status</th>
  </tr>
</thead>
<tbody>

  <tr>

    <td>{{$complaintPost->title}}</td>
    <td>{{$complaintPost->description}}</td>
    <td>{{$complaintPost->service}}</td>
    <td>{{$complaintPost->status}}</td>
  </tr>

 
</tbody>
</table>


<form method="POST" action="/complaintPosts/{{$complaintPost->id}}">
@csrf
{{method_field('PATCH')}}
<h4>Update Status </h4>

<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="pending">
  <label class="form-check-label" for="flexRadioDefault1">
    Pending
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="resolved">
  <label class="form-check-label" for="flexRadioDefault2">
    Resolved
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="dismissed">
  <label class="form-check-label" for="flexRadioDefault2">
    Dismiss
  </label>
</div>

<button type="submit" class="btn btn-primary">Update</button>
 
</form>

@endsection