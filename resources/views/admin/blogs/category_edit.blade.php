@extends('admin.layouts.app')

@section('content')

    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <!-- Basic Form-->
                <div class="col">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Edit - {{ $category->name }}</h3>
                        </div>
                        <div class="card-body">
                            @include('admin.blogs.partials.category_edit')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    @include('admin.blogs.partials.category_form_validation_rules')
@endsection