@extends('admin.layouts.app')

@section('page_title', 'Blogs')

@section('content')
    @include('admin.blogs.partials.header')
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
                                        Blogs - List <span class="badge badge-primary">{{ $all_blogs }}</span>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    @include('admin.blogs.partials.list')
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
                                    <h3 class="h4">Categories - List <span class="badge badge-primary">{{ $all_categoryBlogs }}</span></h3>
                                </div>
                                <div class="card-body">
                                    @include('admin.blogs.partials.category_list')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-tags" role="tabpanel" aria-labelledby="pills-tags-tab">
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Tags - List <span class="badge badge-primary">{{ $all_tags }}</span></h3>
                                </div>
                                <div class="card-body">
                                    @include('admin.blogs.partials.tag_list')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-keywords" role="tabpanel" aria-labelledby="pills-keywords-tab">
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Keywords - List</h3>
                                </div>
                                <div class="card-body">
                                    @include('admin.blogs.partials.keyword_list')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    @include('admin.blogs.partials.category_create')

    @include('admin.blogs.partials.tag_create')

    @include('admin.blogs.partials.keyword_create')

@endsection
@section('js')
    <script type="text/javascript">
        $('.selectpicker').selectpicker({
            width: '100%'
        });

    </script>

@endsection