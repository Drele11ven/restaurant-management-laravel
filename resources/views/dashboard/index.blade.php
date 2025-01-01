@extends('dashboard.dashboard')
@section('body')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">داشبورد</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">صفحه اصلی</a></li>
                            <li aria-current="page" class="breadcrumb-item active">داشبورد</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                @php
                    use Illuminate\Support\Facades\Auth;
                    // Check the authenticated user's role
                    $roleName = Auth::user()->role;
                @endphp

                @if($roleName === 'Admin')
                    <!-- ROW-1 -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">تعداد کاربران</h6>
                                                    <h2 class="mb-0 number-font">44,278</h2>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <canvas class="h-8 w-9 chart-dropshadow"
                                                                id="saleschart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-muted fs-12"><span class="text-secondary"><i
                                                        class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                                                    هفته گذشته</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">سود کل</h6>
                                                    <h2 class="mb-0 number-font">67,987</h2>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <canvas class="h-8 w-9 chart-dropshadow"
                                                                id="leadschart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-muted fs-12"><span class="text-pink"><i
                                                        class="fe fe-arrow-down-circle text-pink"></i> 0.75%</span>
                                                    شش روز اخیر</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">تمامی هزینه ها</h6>
                                                    <h2 class="mb-0 number-font fs-5">700 هزارتومان</h2>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <canvas class="h-8 w-9 chart-dropshadow"
                                                                id="profitchart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-muted fs-12"><span class="text-green"><i
                                                        class="fe fe-arrow-up-circle text-green"></i> 0.9%</span>
                                                    نه روز گذشته</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">تمامی خرج ها</h6>
                                                    <h2 class="mb-0 number-font fs-5">500 هزارتومان</h2>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <canvas class="h-8 w-9 chart-dropshadow"
                                                                id="costchart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-muted fs-12"><span class="text-warning"><i
                                                        class="fe fe-arrow-up-circle text-warning"></i> 0.6%</span>
                                                    سال گذشته</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-1 END -->
                    <!-- ROW-2 -->
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title mb-0">فروش محصولات</h3>
                                </div>
                                <div class="card-body pt-4">
                                    <div class="grid-margin">
                                        <div class="">
                                            <div class="panel panel-primary">
                                                <div class="panel-body tabs-menu-body border-0 pt-0">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered text-nowrap mb-0"
                                                                       id="data-table">
                                                                    <thead class="border-top">
                                                                    <tr>
                                                                        <th class="bg-transparent border-bottom-0"
                                                                            style="width: 5%;">شناسه رهگیری
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            محصول
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            مشتری
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            تاریخ
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            مقدار
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            نحوه پرداخت
                                                                        </th>
                                                                        <th class="bg-transparent border-bottom-0"
                                                                            style="width: 10%;">وضعیت
                                                                        </th>
                                                                        <th class="bg-transparent border-bottom-0"
                                                                            style="width: 5%;">عملیات
                                                                        </th>
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
                                                                                              style="background-image: url(../assets/images/orders/10.jpg)"></span>
                                                                                <div
                                                                                    class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                    <h6
                                                                                        class="mb-0 fs-14 fw-semibold">
                                                                                        هدست</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <div
                                                                                    class="mt-0 mt-sm-3 d-block">
                                                                                    <h6
                                                                                        class="mb-0 fs-14 fw-semibold">
                                                                                        آبنبات</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td><span class="mt-sm-2 d-block">30 آذر
                                                                                        1401</span></td>
                                                                        <td><span
                                                                                class="fw-semibold mt-sm-2 d-block">360 هزارتومان</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <div
                                                                                    class="mt-0 mt-sm-3 d-block">
                                                                                    <h6
                                                                                        class="mb-0 fs-14 fw-semibold">
                                                                                        پرداخت آنلاین</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">ارسال شده</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="g-2">
                                                                                <a class="btn text-primary btn-sm"
                                                                                   data-bs-original-title="ویرایش"
                                                                                   data-bs-toggle="tooltip"><span
                                                                                        class="fe fe-edit fs-14"></span></a>
                                                                                <a class="btn text-danger btn-sm"
                                                                                   data-bs-original-title="حذف"
                                                                                   data-bs-toggle="tooltip"><span
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
                    <!-- ROW-2 END -->
                @elseif($roleName === 'Restaurant Manager')
                    <!-- ROW-1 -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">تعداد کاربران</h6>
                                                    <h2 class="mb-0 number-font">44,278</h2>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <canvas class="h-8 w-9 chart-dropshadow"
                                                                id="saleschart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-muted fs-12"><span class="text-secondary"><i
                                                        class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                                                    هفته گذشته</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">سود کل</h6>
                                                    <h2 class="mb-0 number-font">67,987</h2>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <canvas class="h-8 w-9 chart-dropshadow"
                                                                id="leadschart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-muted fs-12"><span class="text-pink"><i
                                                        class="fe fe-arrow-down-circle text-pink"></i> 0.75%</span>
                                                    شش روز اخیر</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">تمامی هزینه ها</h6>
                                                    <h2 class="mb-0 number-font fs-5">700 هزارتومان</h2>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <canvas class="h-8 w-9 chart-dropshadow"
                                                                id="profitchart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-muted fs-12"><span class="text-green"><i
                                                        class="fe fe-arrow-up-circle text-green"></i> 0.9%</span>
                                                    نه روز گذشته</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">تمامی خرج ها</h6>
                                                    <h2 class="mb-0 number-font fs-5">500 هزارتومان</h2>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <canvas class="h-8 w-9 chart-dropshadow"
                                                                id="costchart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-muted fs-12"><span class="text-warning"><i
                                                        class="fe fe-arrow-up-circle text-warning"></i> 0.6%</span>
                                                    سال گذشته</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-1 END -->
                    <!-- ROW-2 -->
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title mb-0">فروش محصولات</h3>
                                </div>
                                <div class="card-body pt-4">
                                    <div class="grid-margin">
                                        <div class="">
                                            <div class="panel panel-primary">
                                                <div class="panel-body tabs-menu-body border-0 pt-0">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered text-nowrap mb-0"
                                                                       id="data-table">
                                                                    <thead class="border-top">
                                                                    <tr>
                                                                        <th class="bg-transparent border-bottom-0"
                                                                            style="width: 5%;">شناسه رهگیری
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            محصول
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            مشتری
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            تاریخ
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            مقدار
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            نحوه پرداخت
                                                                        </th>
                                                                        <th class="bg-transparent border-bottom-0"
                                                                            style="width: 10%;">وضعیت
                                                                        </th>
                                                                        <th class="bg-transparent border-bottom-0"
                                                                            style="width: 5%;">عملیات
                                                                        </th>
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
                                                                                              style="background-image: url(../assets/images/orders/10.jpg)"></span>
                                                                                <div
                                                                                    class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                    <h6
                                                                                        class="mb-0 fs-14 fw-semibold">
                                                                                        هدست</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <div
                                                                                    class="mt-0 mt-sm-3 d-block">
                                                                                    <h6
                                                                                        class="mb-0 fs-14 fw-semibold">
                                                                                        آبنبات</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td><span class="mt-sm-2 d-block">30 آذر
                                                                                        1401</span></td>
                                                                        <td><span
                                                                                class="fw-semibold mt-sm-2 d-block">360 هزارتومان</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <div
                                                                                    class="mt-0 mt-sm-3 d-block">
                                                                                    <h6
                                                                                        class="mb-0 fs-14 fw-semibold">
                                                                                        پرداخت آنلاین</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">ارسال شده</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="g-2">
                                                                                <a class="btn text-primary btn-sm"
                                                                                   data-bs-original-title="ویرایش"
                                                                                   data-bs-toggle="tooltip"><span
                                                                                        class="fe fe-edit fs-14"></span></a>
                                                                                <a class="btn text-danger btn-sm"
                                                                                   data-bs-original-title="حذف"
                                                                                   data-bs-toggle="tooltip"><span
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
                    <!-- ROW-2 END -->
                @elseif($roleName === 'Customer')
                    <!-- ROW-1 -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">تعداد کاربران</h6>
                                                    <h2 class="mb-0 number-font">44,278</h2>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <canvas class="h-8 w-9 chart-dropshadow"
                                                                id="saleschart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-muted fs-12"><span class="text-secondary"><i
                                                        class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                                                    هفته گذشته</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">سود کل</h6>
                                                    <h2 class="mb-0 number-font">67,987</h2>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <canvas class="h-8 w-9 chart-dropshadow"
                                                                id="leadschart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-muted fs-12"><span class="text-pink"><i
                                                        class="fe fe-arrow-down-circle text-pink"></i> 0.75%</span>
                                                    شش روز اخیر</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">تمامی هزینه ها</h6>
                                                    <h2 class="mb-0 number-font fs-5">700 هزارتومان</h2>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <canvas class="h-8 w-9 chart-dropshadow"
                                                                id="profitchart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-muted fs-12"><span class="text-green"><i
                                                        class="fe fe-arrow-up-circle text-green"></i> 0.9%</span>
                                                    نه روز گذشته</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">تمامی خرج ها</h6>
                                                    <h2 class="mb-0 number-font fs-5">500 هزارتومان</h2>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <canvas class="h-8 w-9 chart-dropshadow"
                                                                id="costchart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-muted fs-12"><span class="text-warning"><i
                                                        class="fe fe-arrow-up-circle text-warning"></i> 0.6%</span>
                                                    سال گذشته</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-1 END -->
                    <!-- ROW-2 -->
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title mb-0">فروش محصولات</h3>
                                </div>
                                <div class="card-body pt-4">
                                    <div class="grid-margin">
                                        <div class="">
                                            <div class="panel panel-primary">
                                                <div class="panel-body tabs-menu-body border-0 pt-0">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered text-nowrap mb-0"
                                                                       id="data-table">
                                                                    <thead class="border-top">
                                                                    <tr>
                                                                        <th class="bg-transparent border-bottom-0"
                                                                            style="width: 5%;">شناسه رهگیری
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            محصول
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            مشتری
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            تاریخ
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            مقدار
                                                                        </th>
                                                                        <th
                                                                            class="bg-transparent border-bottom-0">
                                                                            نحوه پرداخت
                                                                        </th>
                                                                        <th class="bg-transparent border-bottom-0"
                                                                            style="width: 10%;">وضعیت
                                                                        </th>
                                                                        <th class="bg-transparent border-bottom-0"
                                                                            style="width: 5%;">عملیات
                                                                        </th>
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
                                                                                              style="background-image: url(../assets/images/orders/10.jpg)"></span>
                                                                                <div
                                                                                    class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                    <h6
                                                                                        class="mb-0 fs-14 fw-semibold">
                                                                                        هدست</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <div
                                                                                    class="mt-0 mt-sm-3 d-block">
                                                                                    <h6
                                                                                        class="mb-0 fs-14 fw-semibold">
                                                                                        آبنبات</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td><span class="mt-sm-2 d-block">30 آذر
                                                                                        1401</span></td>
                                                                        <td><span
                                                                                class="fw-semibold mt-sm-2 d-block">360 هزارتومان</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <div
                                                                                    class="mt-0 mt-sm-3 d-block">
                                                                                    <h6
                                                                                        class="mb-0 fs-14 fw-semibold">
                                                                                        پرداخت آنلاین</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">ارسال شده</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="g-2">
                                                                                <a class="btn text-primary btn-sm"
                                                                                   data-bs-original-title="ویرایش"
                                                                                   data-bs-toggle="tooltip"><span
                                                                                        class="fe fe-edit fs-14"></span></a>
                                                                                <a class="btn text-danger btn-sm"
                                                                                   data-bs-original-title="حذف"
                                                                                   data-bs-toggle="tooltip"><span
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
                    <!-- ROW-2 END -->
                @else
                    <!-- Default section -->
                    <div class="alert alert-warning">شما دسترسی لازم را برای مشاهده این بخش ندارید.</div>
                @endif
            </div>
            <!-- CONTAINER END -->
        </div>
    </div>


@endsection
