@extends('admin.layouts.app')

@section('content')

    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <!-- Basic Form-->
                <div class="col">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Add new Financial Card</h3>
                        </div>
                        <div class="card-body">
                            @include('admin.financials.partials.create')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    @include('admin.blogs.partials.form_validation_rules')
@endsection