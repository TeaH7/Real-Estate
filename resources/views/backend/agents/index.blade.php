@extends('layouts.admin')

@section('admin-content')




  <!-- CONTAINER -->
  <div class="main-container container-fluid">

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Prove</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Users</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-4 -->
<div class="row">
<div class="col-12 col-sm-12">
<div class="card">
    <div class="card-header">
        <h3 class="card-title mb-0">All Users</h3>
    </div>
    <div class="card-body pt-4">
        <div class="grid-margin">
            <div class="">
                <div class="panel panel-primary">
                    <div class="panel-body tabs-menu-body border-0 pt-0">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab5">
                                <div class="table-responsive">
                                    <table id="data-table"
                                        class="table table-bordered text-nowrap mb-0">
                                        <thead class="border-top">
                                            <tr>
                                                <th class="bg-transparent border-bottom-0"
                                                    style="width: 5%;">Id</th>
                                                    <th
                                                    class="bg-transparent border-bottom-0">
                                                    Image</th>
                                                <th
                                                    class="bg-transparent border-bottom-0">
                                                    First_Name</th>
                                                <th
                                                    class="bg-transparent border-bottom-0">
                                                    Last Name</th>
                                                <th
                                                    class="bg-transparent border-bottom-0">
                                                    Email</th>
                                                <th
                                                    class="bg-transparent border-bottom-0">
                                                    Phone</th>

                                                <th class="bg-transparent border-bottom-0"
                                                    style="width: 10%;">Role</th>
                                                <th class="bg-transparent border-bottom-0"
                                                    style="width: 5%;">Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                 @if ($agents->count())
                                 <tr class="border-bottom">

                                    @foreach ($agents as $agent)


                                    <td class="text-center">
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6
                                                class="mb-0 fs-14 fw-semibold">
                                                {{$agent->id}}</h6>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6
                                                class="mb-0 fs-14 fw-semibold">
                                                {{$agent->image}}</h6>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6
                                                class="mb-0 fs-14 fw-semibold">
                                                {{$agent->first_name}}</h6>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6
                                                class="mb-0 fs-14 fw-semibold">
                                                {{$agent->last_name}}</h6>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6
                                                class="mb-0 fs-14 fw-semibold">
                                                {{$agent->email}}</h6>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6
                                                class="mb-0 fs-14 fw-semibold">
                                                {{$agent->phone}}</h6>
                                        </div>
                                    </td>


                                    <td>
                                        <div class="mt-sm-1 d-block">
                                            <span
                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">{{$agent->role}}</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mt-0 mt-sm-2 d-block">
                                            <h6
                                                class="mb-0 fs-14 fw-semibold">
                                                {{$agent->username}}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="g-2">
                                            <a class="btn text-primary btn-sm"
                                                data-bs-toggle="tooltip"
                                                data-bs-original-title="Edit"><span
                                                    class="fe fe-edit fs-14"></span></a>
                                            <a class="btn text-danger btn-sm"
                                                data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><span
                                                    class="fe fe-trash-2 fs-14"></span></a>
                                        </div>
                                    </td>
                                    @endforeach
                                </tr>
                                @else

                                <tr>
                                    <td colspan="8">
                                        <p class="text-center">Nuk ka Agjente</p>
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
