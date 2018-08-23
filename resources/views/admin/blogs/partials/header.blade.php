<section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
        <div class="row bg-white has-shadow">
            <!-- NAV LIST-->
            <ul class="nav nav-pills mb-3 col-md-8 col-sm-12" id="pills-tab" role="tablist">
                <li class="nav-item col-sm-12 col-md-3">
                    <a class="nav-link active" id="pills-blogs-tab" data-toggle="pill" href="#pills-blogs" role="tab" aria-controls="pills-blogs" aria-selected="true">Blogs</a>
                </li>
                <li class="nav-item col-sm-12 col-md-3">
                    <a class="nav-link" id="pills-categories-tab" data-toggle="pill" href="#pills-categories" role="tab" aria-controls="pills-categories" aria-selected="false">Categories</a>
                </li>
                <li class="nav-item col-sm-12 col-md-3">
                    <a class="nav-link" id="pills-tags-tab" data-toggle="pill" href="#pills-tags" role="tab" aria-controls="pills-profile" aria-selected="false">Tags</a>
                </li>
                <li class="nav-item col-sm-12 col-md-3">
                    <a class="nav-link" id="pills-categories-tab" data-toggle="pill" href="#pills-keywords" role="tab" aria-controls="pills-keywords" aria-selected="false">Keywords</a>
                </li>
            </ul>
            <!-- End NAV LIST-->
            <div class="col-sm-12 col-md-4">
               @if(count($categoryBlogs))
                    <a class="btn btn-primary" href="{{ route('admin.blogs.create') }}">
                        <i class="fa fa-plus"></i> Blog
                    </a>
                @endif
                </a>
                <a href="#" class="btn btn-info" data-toggle="modal" data-target="#categoryCreate">
                    <i class="fa fa-plus"></i> Category
                </a>
                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#tagCreate">
                    <i class="fa fa-plus"></i> Tag
                </a>
                <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#keywordCreate">
                    <i class="fa fa-plus"></i> Keyword
                </a>
            </div>
        </div>
    </div>
</section>