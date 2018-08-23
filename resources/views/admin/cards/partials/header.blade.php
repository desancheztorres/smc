<section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
        <div class="row bg-white has-shadow">
            <!-- NAV LIST-->
            <ul class="nav nav-pills mb-3 col-md-8 col-sm-12" id="pills-tab" role="tablist">
                <li class="nav-item col-sm-12 col-md-3">
                    <a class="nav-link active" id="pills-cards-tab" data-toggle="pill" href="#pills-cards" role="tab" aria-controls="pills-cards" aria-selected="true">Cards</a>
                </li>
                <li class="nav-item col-sm-12 col-md-3">
                    <a class="nav-link" id="pills-categories-tab" data-toggle="pill" href="#pills-categories" role="tab" aria-controls="pills-categories" aria-selected="false">Categories</a>
                </li>
            </ul>
            <!-- End NAV LIST-->
            <div class="col-sm-12 col-md-4">
                @if(count($categoryCards))
                    <a class="btn btn-primary" href="{{ route('admin.cards.create') }}">
                        <i class="fa fa-plus"></i> Card
                    </a>
                @endif
                <a href="#" class="btn btn-info" data-toggle="modal" data-target="#categoryCreate">
                    <i class="fa fa-plus"></i> Category
                </a>
            </div>
        </div>
    </div>
</section>