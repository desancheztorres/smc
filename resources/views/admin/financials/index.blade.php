@extends('admin.layouts.app')

@section('content')

    @include('admin.layouts.partials._financial_header')

    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="financialCreate">
                <section class="forms">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Basic Form-->
                            <div class="col">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Add Financial</h3>
                                    </div>
                                    <div class="card-body">
                                        @include('admin.layouts.partials._financial_create')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- CONTENT-->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-financials" role="tabpanel" aria-labelledby="pills-financials-tab">
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Financial - List <span class="badge badge-primary">{{ $all_financials }}</span></h3>
                                </div>
                                <div class="card-body">
                                    @include('admin.layouts.partials._financial_list')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-categories" role="tabpanel" aria-labelledby="pills-categories-tab">
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Categories - List</h3>
                                </div>
                                <div class="card-body">
                                    @include('admin.layouts.partials._financial_category_list')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @include('admin.layouts.partials._financial_category_create')


@endsection