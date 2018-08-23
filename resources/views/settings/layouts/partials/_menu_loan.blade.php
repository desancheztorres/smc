<div class="container-fluid" data-toggle="affix">
    <div class="menu">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 offset-md-1">
                <div class="result">
                    <p class="check"><i class="fa fa-check"></i></p>
                    <p class="titleTotal">{{$totalLoans}}</p>
                    <p class="title">results found</p>
                    <p class="caption">100% Complete</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-5">
                <div class="col-lg-3">
                    <label for="category">Loan type <i class="fa fa-info-circle fa-lg"></i></label>
                    <hr>
                </div>
                <div class="form-group mx-sm-3 mb-2 col-lg-2">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select an option
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('settings.loans')}}">All Loans</a>
                                <a class="dropdown-item" href="{{url('loanCategory')}}">category</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                {{--<a href="{{route('loanCreate')}}" class="btn btn-outline-primary btn-sm pull-right" id="btnAddLoan">Add Loan</a>--}}
            </div>
        </div>
    </div>
</div>