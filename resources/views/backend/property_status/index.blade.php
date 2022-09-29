@extends('backend.layout.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 my-3 text-gray-800">Property Status</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 ">
                <a href="{{ route('property-status-add') }}" class="btn btn-primary float-right ">Add</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            @foreach ($status as $type)
                                <tr>
                                    <td>
                                        {{ $type->name }}
                                    </td>
                                    <td>
                                        <a href="{{ route('property-status-edit', $type->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('property-status-delete', $type->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
