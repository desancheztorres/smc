@extends('admin.layouts.app')

@section('page_title', 'Cards')

@section('content')
    @include('admin.cards.partials.header')
    <!-- CONTENT-->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-cards" role="tabpanel" aria-labelledby="pills-cards-tab">
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">
                                        Cards - List <span class="badge badge-primary">{{ $all_cards }}</span>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    @include('admin.cards.partials.list')
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
                                    <h3 class="h4">Categories - List <span class="badge badge-primary">{{ $all_categoryCards }}</span></h3>
                                </div>
                                <div class="card-body">
                                    @include('admin.cards.partials.category_list')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    @include('admin.cards.partials.category_create')

@endsection