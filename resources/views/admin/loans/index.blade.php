@extends('admin.layouts.app')

@section('page_title', 'Loans')

@section('content')
    @include('admin.loans.partials.header')
    <!-- CONTENT-->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-loans" role="tabpanel" aria-labelledby="pills-loans-tab">
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">
                                        Loans - List <span class="badge badge-primary">{{ $all_loans }}</span>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    @include('admin.loans.partials.list')
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
                                    <h3 class="h4">Categories - List <span class="badge badge-primary">{{ $all_categoryLoans }}</span></h3>
                                </div>
                                <div class="card-body">
                                    @include('admin.loans.partials.category_list')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    @include('admin.loans.partials.category_create')

@endsection