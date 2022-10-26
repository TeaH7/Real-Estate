@extends('layouts.admin')

@section('admin-content')
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Create Properties</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Users</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->



        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Property</h3>
                    </div>
                    <div class="card-body pt-4">
                        <div class="grid-margin">
                            <form class="row g-3" method="POST" action="{{ route('properties.store') }}"
                                enctype="multipart/form-data">
                                @csrf


                                <div class="col-12">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}">
                                </div>

                                <div class="col-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="4" class="form-control">{{ old('description') }}</textarea>

                                </div>

                                <div class="col-12">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="price" name="price"
                                        value="{{ old('price') }}">
                                </div>

                                <div class="col-12">
                                    <label for="for" class="form-label">For</label>

                                    <select name="for" id="" class="form-control" value="{{ old('for') }}">
                                        <option selected disabled>For</option>
                                        <option value="sale">Sale
                                        </option>
                                        <option value="rent">Rent</option>
                                    </select>
                                </div>


                                <div class="col-12">
                                    <label for="status" class="form-label">Status</label>

                                    <select name="status" id="" class="form-control" value="{{ old('status') }}">
                                        <option selected disabled>Select Status</option>
                                        <option value="publish">Publish
                                        </option>
                                        <option value="draft">Draft</option>
                                        <option value="archive">Archive</option>
                                    </select>
                                </div>


                                <div class="col-12">
                                    <label for="property_type" class="form-label">Property Type</label>

                                    <select name="property_type" id="" class="form-control"
                                        value="{{ old('property_type') }}">
                                        <option selected disabled>Select Property Type</option>
                                        <option value="house">House
                                        </option>
                                        <option value="apartment">Apartment</option>
                                        <option value="vila">Vila</option>
                                        <option value="comercial">Comercial</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="location" name="location"
                                        value="{{ old('location') }}">
                                </div>

                                <div class="col-12">
                                    <label for="area" class="form-label">Area</label>
                                    <input type="number" class="form-control" id="area" name="area"
                                        value="{{ old('area') }}">
                                </div>

                                <div class="col-12">
                                    <label for="bed" class="form-label">Number of Beds</label>
                                    <input type="number" class="form-control" id="bed" name="bed"
                                        value="{{ old('bed') }}">
                                </div>
                                <div class="col-12">
                                    <label for="bath" class="form-label">Number of Baths</label>
                                    <input type="number" class="form-control" id="bath" name="bath"
                                        value="{{ old('bath') }}">
                                </div>
                                <div class="col-12">
                                    <label for="garage" class="form-label">Number of Garages</label>
                                    <input type="number" class="form-control" id="garage" name="garage"
                                        value="{{ old('garage') }}">
                                </div>



                                <div class="col-12">
                                    <label for="cover_image" class="form-label">Cover Image</label>
                                    <input type="file" class="form-control" name="cover_image">
                                </div>
                                <div class="col-12">
                                    <label for="floor_plans_image" class="form-label">Floor Plan Image</label>
                                    <input type="file" class="form-control" name="floor_plans_image">
                                </div>

                                <div class="col-12">
                                    <label for="video" class="form-label">Video</label>
                                    <input type="url" class="form-control" name="video">
                                </div>

                                <div class="col-12">
                                    <label for="slider_image" class="form-label">Slider Image</label>
                                    <input type="file" class="form-control" name="slider_image">
                                </div>

                                <div class="col-12">
                                    <label for="in_slider" class="form-label">In Slider or Not</label>

                                    <select name="in_slider" id="" class="form-control"
                                        value="{{ old('in_slider') }}">
                                        <option selected disabled>Select</option>
                                        <option value="yes">Yes
                                        </option>
                                        <option value="no">No</option>
                                    </select>
                                </div>




                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Create</button>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
