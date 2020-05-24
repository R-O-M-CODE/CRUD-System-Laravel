@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-light text-center"><h2>Add New Customer</h2></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <form class="col-12">
                        <div class="form-group">
                            <label for="name">Customer Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Customer Name">
                        </div>
                        <div class="form-group">
                            <label for="mail">Customer Email</label>
                            <input type="text" id="mail" class="form-control" placeholder="Customer Email">
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary my-2"><i class="fa fa-plus"></i> Add Customer</button>
                        </div>
                    </form>
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
