@extends('backend.layout.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 my-3 text-gray-800">Add Property</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 ">
                <a href="{{ route('properties') }}" class="btn btn-secondary float-right ">Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('store-properties') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Property Name"
                            required>
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Enter Property Location"
                            required>
                    </div>
                    @error('location')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="3"required></textarea>
                    </div>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Enter Property Price"
                                required>
                        </div>
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 ">
                            <label>Area</label>
                            <input type="text" class="form-control" name="area" placeholder="Enter Property Area"
                                required>
                        </div>
                        @error('area')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Bedroom</label>
                            <input type="text" class="form-control" name="bedroom" placeholder="Enter Number of bedroom"
                                required>
                        </div>
                        @error('bedroom')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6">
                            <label>Bathroom</label>
                            <input type="text" class="form-control" name="bathroom"
                                placeholder="Enter Number of bathroom" required>
                        </div>
                        @error('bathroom')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Type</label>
                            <select name="type" class="form-control">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('type')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                @foreach ($statues as $status)
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Aminities(select multiple items)</label>
                        <select multiple name="aminities[]" class="form-control" required>
                            @foreach ($aminites as $aminity)
                                <option value="{{ $aminity->id }}">{{ $aminity->name }}</option>
                            @endforeach
                        </select>
                        @error('aminities')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Featured Image</label>
                            <input type="file" class="form-control-file" name="image" required>
                        </div>
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6">
                            <label>Gallery Image</label>
                            <input type="file" class="form-control-file" multiple name="gallery[]">
                        </div>
                        @error('gallery')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
