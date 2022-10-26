@extends('layouts.admin')

@section('admin-content')
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Properties</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Properties</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-4 -->
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">All Properties</h3>
                    </div>
                    <div class="card-body pt-4">
                        <div class="grid-margin">
                            <div class="">
                                <div class="panel panel-primary">
                                    <div class="panel-body tabs-menu-body border-0 pt-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab5">
                                                <div class="table-responsive">
                                                    <table id="data-table" class="table table-bordered text-nowrap mb-0">
                                                        <thead class="border-top">
                                                            <tr>
                                                                <th class="bg-transparent border-bottom-0"
                                                                    style="width: 5%;">Image</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Name</th>

                                                                <th class="bg-transparent border-bottom-0">
                                                                    For</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Status</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Property Type</th>

                                                                <th class="bg-transparent border-bottom-0"
                                                                    style="width: 10%;">Price</th>
                                                                <th class="bg-transparent border-bottom-0"
                                                                    style="width: 5%;">Agent</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if ($properties->count())
                                                                @foreach ($properties as $property)
                                                                    <tr class="border-bottom">
                                                                        <td class="text-center">
                                                                            <div class="mt-0 mt-sm-2 d-block">
                                                                                <img src=" {{ asset('storage/' . $property->cover_image) }}"
                                                                                    alt="" class="img-fluid"
                                                                                    width="100px">
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="mt-0 mt-sm-2 d-block">
                                                                                <h6 class="mb-0 fs-14 fw-semibold">
                                                                                    {{ $property->name }}</h6>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="mt-0 mt-sm-2 d-block">
                                                                                <h6 class="mb-0 fs-14 fw-semibold">
                                                                                    {{ ucwords($property->for) }}</h6>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-center">
                                                                            <div class="mt-0 mt-sm-2 d-block">
                                                                                <h6 class="mb-0 fs-14 fw-semibold">
                                                                                    {{ ucwords($property->status) }}</h6>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="mt-0 mt-sm-2 d-block">
                                                                                <h6 class="mb-0 fs-14 fw-semibold">
                                                                                    {{ ucwords($property->property_type) }}
                                                                                </h6>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="mt-0 mt-sm-2 d-block">
                                                                                <h6 class="mb-0 fs-14 fw-semibold">
                                                                                    {{ $property->price }}$</h6>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="mt-0 mt-sm-2 d-block">
                                                                                <h6 class="mb-0 fs-14 fw-semibold">
                                                                                    {{ $property->user->first_name }}
                                                                                    {{ $property->user->last_name }}</h6>
                                                                            </div>
                                                                        </td>




                                                                        {{-- <td>
                                                                            <div class="g-2">
                                                                                <a class="btn text-primary btn-sm"
                                                                                    data-bs-toggle="tooltip"
                                                                                    href="{{ route('agents.edit', $agent->id) }}"
                                                                                    data-bs-original-title="Edit"><span
                                                                                        class="fe fe-edit fs-14"></span></a>

                                                                                <form
                                                                                    action="{{ route('agents.destroy', $agent->id) }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button class="btn text-danger btn-sm"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-original-title="Delete"><span
                                                                                            class="fe fe-trash-2 fs-14"></span></button>
                                                                                </form>
                                                                            </div>
                                                                        </td> --}}
                                                                    </tr>
                                                                @endforeach
                                                            @else
                                                                <tr>
                                                                    <td colspan="8">
                                                                        <p class="text-center">Nuk Ka Prona</p>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW-4 END -->


    </div>
@endsection
