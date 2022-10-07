@extends('backend.layout.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 my-3 text-gray-800">Properties</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 ">
                <a href="{{ route('add-properties') }}" class="btn btn-primary float-right ">Add</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Price</th>
                                <th>Area</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                      
                            @foreach ($properties as $property)
                                <tr>
                                    <td>
                                        {{ $property->name }}
                                    </td>
                                    <td>
                                        {{ $property->location }}
                                    </td>
                                    <td>
                                        ₹ {{ $property->price }}
                                    </td>
                                    <td>
                                        {{ $property->area }} Sq.ft.
                                    </td>
                                    <td>
                                        <span
                                            class="badge badge-{{ $property->statues->name == 'Sold Out' ? 'danger' : 'success' }}">{{ $property->statues->name }}
                                        </span>
                                    </td>
                                    <td>
                                        <img src="/image/properties/{{ $property->image }}"
                                            alt="Property for sale in {{ $property->location }}" width="100px">
                                    </td>
                                    {{-- <td>
                                        @foreach (explode(',', $property->gallery) as $img)
                                            <div>
                                                <img src="/image/properties/{{ $img }}" alt=""
                                                    width="100px">
                                            </div>
                                        @endforeach
                                    </td> --}}

                                    <td>
                                        <a href="{{ route('edit-properties', $property->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('delete-properties', $property->id) }}"
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
