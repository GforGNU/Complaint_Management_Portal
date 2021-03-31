@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Complaints</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
                    @foreach ($post as $p)
                        <tr>

                        <td>{{$p->title}}</td>
                        <td>{{$p->description}}</td>
                        <td>{{$p->service}}</td>
                        <td>{{$p->status}}</td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                    </table>

                </div>

            </div>
            
                    <div>
                <a href="/complaintPosts/create"><button type="button" style="margin:1rem"  class="btn btn-primary">Submit a complaint</button></a>
            </div>
        </div>
        
    </div>
  
</div>
@endsection