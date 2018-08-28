@extends('admin.layouts.app')

@section('page_title', 'Users')

@section('content')
    @include('admin.users.partials.header')
    <!-- CONTENT-->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-blogs" role="tabpanel" aria-labelledby="pills-blogs-tab">
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">
                                        Blogs - List <span class="badge badge-primary">{{ $all_users }}</span>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    @include('admin.users.partials.list')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection