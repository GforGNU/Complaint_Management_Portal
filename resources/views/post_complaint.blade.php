@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Submit a Complaint</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/complaintPosts">
                    @csrf

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="inputEmail4">Title</label>
                          <input type="text" class="form-control" name="title" id="inputEmail4" placeholder="Title">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Complaint Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                      <div class="form-row">

                        <div class="form-group col-md-12">
                          <label for="inputState">Service</label>
                          <select name="service" id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option value="service_1">Service 1</option>
                            <option value="service_2">Service 2</option>
                            <option value="service_3">Service 3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-check">
                          <input  name="is_urgent" class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            This is urgent
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection
