@extends('admin.layouts.app')

@section('page_title', 'Financials')

@section('content')
    @include('admin.financials.partials.header')
    <!-- CONTENT-->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-financials" role="tabpanel" aria-labelledby="pills-financials-tab">
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">
                                        Financials - List <span class="badge badge-primary">{{ $all_financials }}</span>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    @include('admin.financials.partials.list')
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
                                    <h3 class="h4">Categories - List <span class="badge badge-primary">{{ $all_categoryFinancials }}</span></h3>
                                </div>
                                <div class="card-body">
                                    @include('admin.financials.partials.category_list')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    @include('admin.financials.partials.category_create')

@endsection