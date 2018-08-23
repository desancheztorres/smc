@extends('admin.layouts.app')

@section('content')

    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <!-- Basic Form-->
                <div class="col">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Edit - {{ $blog->title }}</h3>
                        </div>
                        <div class="card-body">
                            @include('admin.blogs.partials.edit')
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