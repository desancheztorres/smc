<!-- NAVIGATION -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="" href="{{route('front')}}"><img src="images/logo.png" alt="logo" width="270" height="46"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class=" {{ Request::is('/') ? "active" : ""  }} "><a href="{{route('front')}}">Dashboard</a></li>
                    <li class=" {{ Request::is('/report') ? "active" : ""  }} "><a href="{{route('frontReport')}}">Report</a></li>
                    <li><a href="https://creditportal.co.uk" target="_blank">Full Report</a></li>
                    <li class=" {{ Request::is('/offers') ? "active" : ""  }} "><a href="{{route('frontOffers')}}">Offers</a></li>
                    <li><a href="https://searchmycredit.co.uk/contactus" target="_blank">Contact Us</a></li>

                </ul>
            </div>

        </div>
    </div>
</div>
<!-- end of navigation -->