@extends('layouts.admin')

@section('admin-content')
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Update Properties</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Users</li>
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
                            <form class="row g-3" method="POST" action="{{ route('properties.update', $property->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')


                                <div class="col-12">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $property->name }}">
                                </div>

                                <div class="col-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="4" class="form-control">{{ $property->description }}</textarea>

                                </div>

                                <div class="col-12">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="price" name="price"
                                        value="{{ $property->price }}">
                                </div>

                                <div class="col-12">
                                    <label for="for" class="form-label">For</label>

                                    <select name="for" id="" class="form-control">
                                        <option value="rent" {{ $property->for == 'rent' ? 'selected' : '' }}>Rent
                                        </option>
                                        <option value="sale" {{ $property->for == 'sale' ? 'selected' : '' }}>Sale
                                        </option>
                                    </select>
                                </div>


                                <div class="col-12">
                                    <label for="status" class="form-label">Status</label>

                                    <select name="status" id="" class="form-control">

                                        <option value="publish" {{ $property->status == 'publish' ? 'selected' : '' }}>
                                            Publish
                                        </option>
                                        <option value="draft" {{ $property->status == 'draft' ? 'selected' : '' }}>Draft
                                        </option>
                                        <option value="archive" {{ $property->status == 'archive' ? 'selected' : '' }}>
                                            Archive</option>
                                    </select>
                                </div>


                                <div class="col-12">
                                    <label for="property_type" class="form-label">Property Type</label>

                                    <select name="property_type" id="" class="form-control">

                                        <option value="house" {{ $property->property_type == 'house' ? 'selected' : '' }}>
                                            House
                                        </option>
                                        <option value="apartment"
                                            {{ $property->property_type == 'apartment' ? 'selected' : '' }}>Apartment
                                        </option>
                                        <option value="vila" {{ $property->property_type == 'vila' ? 'selected' : '' }}>
                                            Vila</option>
                                        <option value="comercial"
                                            {{ $property->property_type == 'comercial' ? 'selected' : '' }}>Comercial
                                        </option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="location" name="location"
                                        value="{{ $property->location }}">
                                </div>

                                <div class="col-12">
                                    <label for="area" class="form-label">Area</label>
                                    <input type="number" class="form-control" id="area" name="area"
                                        value="{{ $property->area }}">
                                </div>

                                <div class="col-12">
                                    <label for="bed" class="form-label">Number of Beds</label>
                                    <input type="number" class="form-control" id="bed" name="bed"
                                        value="{{ $property->bed }}">
                                </div>
                                <div class="col-12">
                                    <label for="bath" class="form-label">Number of Baths</label>
                                    <input type="number" class="form-control" id="bath" name="bath"
                                        value="{{ $property->bath }}">
                                </div>
                                <div class="col-12">
                                    <label for="garage" class="form-label">Number of Garages</label>
                                    <input type="number" class="form-control" id="garage" name="garage"
                                        value="{{ $property->garage }}">
                                </div>



                                <div class="col-12">
                                    <label for="cover_image" class="form-label">Cover Image</label>
                                    <input type="file" class="form-control" name="cover_image">
                                    <img src="{{ asset('storage/' . $property->cover_image) }}" width="150px"
                                        class="mt-2">
                                </div>
                                <div class="col-12">
                                    <label for="floor_plans_image" class="form-label">Floor Plan Image</label>
                                    <input type="file" class="form-control" name="floor_plans_image">
                                    <img src="{{ asset('storage/' . $property->floor_plans_image) }}" width="150px"
                                        class="mt-2">
                                </div>

                                <div class="col-12">
                                    <label for="video" class="form-label">Video</label>
                                    <input type="url" class="form-control" name="video"
                                        value="{{ $property->video }}">
                                </div>

                                <div class="col-12">
                                    <label for="slider_image" class="form-label">Slider Image</label>
                                    <input type="file" class="form-control" name="slider_image">
                                    <img src="{{ asset('storage/' . $property->slider_image) }}" width="150px"
                                        class="mt-2">
                                </div>

                                <div class="col-12">
                                    <label for="in_slider" class="form-label">In Slider or Not</label>
                                    <select name="in_slider" id="" class="form-control">

                                        <option value="yes" {{ $property->in_slider == 'yes' ? 'selected' : '' }}>Yes
                                        </option>
                                        <option value="no" {{ $property->in_slider == 'no' ? 'selected' : '' }}>No
                                        </option>
                                    </select>
                                </div>




                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
