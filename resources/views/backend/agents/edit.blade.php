@extends('layouts.admin')

@section('admin-content')
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Edit User</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->



        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">User</h3>
                    </div>
                    <div class="card-body pt-4">
                        <div class="grid-margin">
                            <form class="row g-3" method="POST" action="{{ route('agents.update', $user->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-12">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        value="{{ $user->first_name }}">
                                </div>
                                <div class="col-12">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        value="{{ $user->last_name }}">
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{ $user->email }}">
                                </div>
                                <div class="col-12">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="number" class="form-control" id="phone" name="phone"
                                        value="{{ $user->phone }}">
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="4" class="form-control">{{ $user->description }}</textarea>
                                </div>
                                <div class="col-12">
                                    <label for="role" class="form-label">Role</label>

                                    <select name="role" id="" class="form-control">
                                        <option value="agent" {{ $user->role == 'agent' ? 'selected' : '' }}>Agent</option>
                                        <option value="manager" {{ $user->role == 'manager' ? 'selected' : '' }}>Manager
                                        </option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    <img src="{{ asset('storage/' . $user->image) }}" width="150px" class="mt-2">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Facebook</span>
                                    </div>
                                    <input type="url" class="form-control" placeholder="Url" aria-label="facebook"
                                        aria-describedby="basic-addon1" name="facebook" value="{{ $user->facebook }}">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Instagram</span>
                                    </div>
                                    <input type="url" class="form-control" placeholder="Url" aria-label="instagram"
                                        aria-describedby="basic-addon1" name="instagram" value="{{ $user->instagram }}">
                                </div>
                                <div class="input-group
                                        mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">LinkedIn</span>
                                    </div>
                                    <input type="url" class="form-control" placeholder="Url" aria-label="linkedin"
                                        aria-describedby="basic-addon1" name="linkedin" value="{{ $user->linkedin }}">
                                </div>
                                <div class="input-group
                                        mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Twitter</span>
                                    </div>
                                    <input type="url" class="form-control" placeholder="Url" aria-label="twitter"
                                        aria-describedby="basic-addon1" name="twitter" value="{{ $user->linkedin }}">
                                </div>

                                <div class="col-12">
                                    <label for="description" class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Password"
                                        aria-label="Password" aria-describedby="basic-addon1" name="password">
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                        aria-label="Confirm Password" aria-describedby="basic-addon1"
                                        name="password_confirmation">
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
