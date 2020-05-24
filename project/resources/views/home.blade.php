@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-light text-center"><h2>CRUD Dashboard</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as {{Auth::user()->name}}!
                </div>
                <a href="{{route('crud.create')}}"  style="text-decoration: none" class="text-dark">
                    <div class="col-11 bg-success d-flex justify-content-between align-items-center p-4 my-2 mx-2 font-weight-bold" style="border-radius: 5px">
                        <h4>Add Customers</h4>
                        <span><i class="fa fa-plus fa-2x"></i></span>
                    </div>
                </a>
                <a href=""  style="text-decoration: none" class="text-dark">
                    <div class="col-11 bg-warning d-flex justify-content-between align-items-center p-4 my-2 mx-2 font-weight-bold" style="border-radius: 5px">
                        <h4>View Customers</h4>
                        <span><i class="fa fa-eye fa-2x"></i></span>
                    </div>
                </a>
                <a href=""  style="text-decoration: none" class="text-dark">
                    <div class="col-11 bg-primary d-flex justify-content-between align-items-center p-4 my-2 mx-2 font-weight-bold" style="border-radius: 5px">
                        <h4>Update Customers</h4>
                        <span><i class="fa fa-upload fa-2x"></i></span>
                    </div>
                </a>
                <a href=""  style="text-decoration: none" class="text-dark mb-3">
                    <div class="col-11 bg-danger d-flex justify-content-between align-items-center p-4 my-2 mx-2 font-weight-bold" style="border-radius: 5px">
                        <h4>Delete Customers</h4>
                        <span><i class="fa fa-trash fa-2x"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto text-center small text-muted mt-4">
            <p>&copy;{{date('Y')}} CRUD Technologies</p>
        </div>
    </div>
</div>
@endsection
