@extends('frontend.layouts.app')

@section('content')

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="column one column_fancy_heading">
                <div class="fancy_heading">
                    <div class="fancy_heading_wrapper has_icon">
                        <h2>{{ $blog->title }}</h2>
                        <i class="fa fa-gear"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="index-content">
        <div class="container">
            <div class="row">
                <div class="col">
                    {!! $blog->content !!}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-info">
                        <i class="fa fa-caret-left"></i>
                        Back
                    </a>
                </div>
            </div>

        </div>
    </div>
@stop

@section('js')
@endsection