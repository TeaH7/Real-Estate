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
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Users</h6>
                                    <h2 class="mb-0 number-font">44,278</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="saleschart"
                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                            <span class="text-muted fs-12"><span class="text-secondary"><i
                                        class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                                Last week</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Profit</h6>
                                    <h2 class="mb-0 number-font">67,987</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="leadschart"
                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                            <span class="text-muted fs-12"><span class="text-pink"><i
                                        class="fe fe-arrow-down-circle text-pink"></i> 0.75%</span>
                                Last 6 days</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- ROW-1 END -->


    <!-- ROW-4 -->
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Product Sales</h3>
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
                                                                style="width: 5%;">Tracking Id</th>
                                                            <th
                                                                class="bg-transparent border-bottom-0">
                                                                Product</th>
                                                            <th
                                                                class="bg-transparent border-bottom-0">
                                                                Customer</th>
                                                            <th
                                                                class="bg-transparent border-bottom-0">
                                                                Date</th>
                                                            <th
                                                                class="bg-transparent border-bottom-0">
                                                                Amount</th>
                                                            <th
                                                                class="bg-transparent border-bottom-0">
                                                                Payment Mode</th>
                                                            <th class="bg-transparent border-bottom-0"
                                                                style="width: 10%;">Status</th>
                                                            <th class="bg-transparent border-bottom-0"
                                                                style="width: 5%;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6
                                                                        class="mb-0 fs-14 fw-semibold">
                                                                        #98765490</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(assets/images/orders/10.jpg)"></span>
                                                                    <div
                                                                        class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6
                                                                            class="mb-0 fs-14 fw-semibold">
                                                                            Headsets</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="mt-0 mt-sm-3 d-block">
                                                                        <h6
                                                                            class="mb-0 fs-14 fw-semibold">
                                                                            Cherry Blossom</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">30 Aug
                                                                    2021</span></td>
                                                            <td><span
                                                                    class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="mt-0 mt-sm-3 d-block">
                                                                        <h6
                                                                            class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
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
                                                        </tr>

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
