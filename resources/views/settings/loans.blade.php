@extends('settings.layouts.landpage')

@section('title', 'Loan')

@section('css')
    <style>
        .navbar {
            border-radius: 0;
            transition: all 0.3s ease-out;
        }

        .affix {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
        }

        /* fixed to top styles */
        .affix.navbar {
            background-color: #333;
        }
        .affix.navbar .nav-item>a,
        .affix.navbar .navbar-brand {
            color: #fff;
        }
        .container-fluid {
            padding-right: 0px;
            padding-left: 0px;
        }

    </style>
@endsection

@section('content')
    @include('settings.layouts.partials._header_landpage')
    @include('settings.layouts.partials._menu_loan')
    <div class="container">
        <?php $i=0; ?>
        @if($totalLoans>=1)
            @foreach($loans as $loan)
                <div class="row boxSorting">
                    <div class="col colSorting">
                        <img class="cardImage" src="{{ asset('images/admin/'.$loan->logo) }}" class="rounded" alt="...">
                        <h6 class="name">{{$loan->name}}</h6>
                        <p>{{$loan->lender}}</p>
                    </div>
                    <div class="col colSorting">
                        <a href="#" class="text link"><span>Will I get accepted for this loan?</span></a>
                    </div>
                    <div class="col colSorting">
                        <p class="number">{{$loan->apr}}%</p>
                        <p class="text link">APR <br>
                    </div>
                    <div class="col colSorting">

                    </div>
                    <div class="col colSorting">

                    </div>
                    <div class="col colSorting">
                            <div>
                                <a class="btn btn-primary btn-sm btnApply">Apply</a>
                            </div>
                    </div>
                </div>
                <div class="row infoCard effect6">
                    <div class="moreDetails row" id="{{$i}}">
                    </div>

                    <b>Representative Example:</b> {{$loan->example}}
                </div>
                <div class="separator"></div>
                <?php $i++; ?>
            @endforeach
        @else
            <div class="container">
                <div class="alert alert-danger text-center" role="alert">
                    <strong>Oh no Loans!</strong> Please select another option in the menu
                </div>
            </div>
        @endif

    </div>



@endsection

@section('js')
    <script>
        $(document).ready(function() {

            var toggleAffix = function(affixElement, scrollElement, wrapper) {

                var height = affixElement.outerHeight(),
                    top = wrapper.offset().top;

                if (scrollElement.scrollTop() >= top){
                    wrapper.height(height);
                    affixElement.addClass("affix");
                }
                else {
                    affixElement.removeClass("affix");
                    wrapper.height('auto');
                }

            };


            $('[data-toggle="affix"]').each(function() {
                var ele = $(this),
                    wrapper = $('<div></div>');

                ele.before(wrapper);
                $(window).on('scroll resize', function() {
                    toggleAffix(ele, $(this), wrapper);
                });

                // init
                toggleAffix(ele, $(window), wrapper);
            });

        });
    </script>

@endsection