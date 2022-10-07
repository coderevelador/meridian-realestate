@extends('backend.layout.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 my-3 text-gray-800">Contact Requests</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Comment</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                                   @foreach ($contactrequest as $contact)
                                <tr>
                                    <td>
                                        {{ $contact->name }}
                                    </td>
                                    <td>
                                        {{ $contact->phone }}
                                    </td>
                                    <td>
                                        {{ $contact->email }}
                                    </td>
                                    <td>
                                        {{ $contact->comment }}
                                    </td>
                                    <td>
                                        <a href="{{ route('property-contact-request-delete', $contact->id) }}"
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
