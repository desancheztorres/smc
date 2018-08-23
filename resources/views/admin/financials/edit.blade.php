@extends('admin.layouts.app')

@section('breadcrumb')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Update <small>{{ $financial->title }}</small></h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Financials</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a href="{{ route('admin.financials.index') }}" class="btn pull-right hidden-sm-down btn-info">Back</a>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
@endsection

@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-block">
                    @include('admin.layouts.partials._financial_edit')
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')

@endsection