@extends('layouts.admin')

@section('admin-content')
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Create Users</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Users</li>
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
                            <form class="row g-3" method="POST" action="{{ route('agents.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        value="{{ old('first_name') }}">
                                </div>
                                <div class="col-12">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        value="{{ old('last_name') }}>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}>
                                </div>
                                <div class="col-12">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="number" class="form-control" id="phone" name="phone"
                                        value="{{ old('phone') }}>
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="4" class="form-control">{{ old('description') }}</textarea>
                                </div>
                                <div class="col-12">
                                    <label for="role" class="form-label">Role</label>

                                    <select name="role" id="" class="form-control" value="{{ old('role') }}">
                                        <option selected disabled>Select Role</option>
                                        <option value="agent">Agent
                                        </option>
                                        <option value="manager">Manager</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Facebook</span>
                                    </div>
                                    <input type="url" class="form-control" placeholder="Url" aria-label="facebook"
                                        aria-describedby="basic-addon1" name="facebook"
                                        value="{{ old('facebook') }}>
                                </div>
                                <div class="input-group
                                        mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Instagram</span>
                                    </div>
                                    <input type="url" class="form-control" placeholder="Url" aria-label="instagram"
                                        aria-describedby="basic-addon1" name="instagram"
                                        value="{{ old('instagram') }}>
                                </div>
                                <div class="input-group
                                        mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">LinkedIn</span>
                                    </div>
                                    <input type="url" class="form-control" placeholder="Url" aria-label="linkedin"
                                        aria-describedby="basic-addon1" name="linkedin"
                                        value="{{ old('linkedin') }}>
                                </div>
                                <div class="input-group
                                        mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Twitter</span>
                                    </div>
                                    <input type="url" class="form-control" placeholder="Url" aria-label="twitter"
                                        aria-describedby="basic-addon1" name="twitter"
                                        value="{{ old('twitter') }}>
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
