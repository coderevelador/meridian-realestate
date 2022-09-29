@extends('backend.layout.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 my-3 text-gray-800">Add New Status</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 ">
                <a href="{{ route('property-status') }}" class="btn btn-secondary float-right ">Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('property-status-store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Status Name">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
