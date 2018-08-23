@extends('admin.layouts.app')

@section('content')

    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <!-- Basic Form-->
                <div class="col">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Edit - {{ $financialCategory->name }}</h3>
                        </div>
                        <div class="card-body">
                            {!! Form::model($financialCategory, ['route' => ['admin.financials_category.update', $financialCategory->id], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate', 'id' => 'blogCategoryForm']) !!}
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4 mx-auto">
                                    <div class="form-group">
                                        {{ Form::label('name', 'Name:') }}
                                        {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
                                    </div>
                                    {{ Form::submit('Edit Category', array('class' => 'btn btn-success')) }}
                                    {!! Form::close() !!}
                                </div>
                            </div>
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