<!-- .header_placeholder 4sticky  -->
<div class="header_placeholder">
</div>
<!-- #Header -->
<header id="Header">
    <div class="container">
        <div class="column one">
            <!-- .social -->

            <div class="addons">


                <div class="contact_details">
                    <p class="text">
                        Have any questions?
                    </p>
                    <div class="phone expand">
                        <span class="ico"></span>
                        <p class="label">
                            <a href="#">02035985198</a>
                        </p>
                    </div>
                    <div class="mail expand">
                        <span class="ico"></span>
                        <p class="label">
                            <a href="#">customerservice@searchmycredit.co.uk</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- .logo -->
            <div class="logo">
                <h1><a id="logo" href="" title="Search My Credit">
                        <img class="scale-with-grid" src="{{ asset('images/logo.png') }}" alt="SearchMyCredit"/>
                    </a>
                </h1>
            </div>
            <!-- #menu -->
            <nav id="menu" class="menu-main-menu-container">
                <ul id="menu-main-menu" class="menu">
                    <li class="menu-item menu-item-has-children"><a href="{{ route('frontend.homepage') }}">Home</a> </li>
                    <li class="menu-item menu-item-has-children"><a href="{{ route('frontend.aboutus')  }}">About Search My Credit</a> </li>
                    <li class="menu-item menu-item-has-children"><a href="{{ route('frontend.applynow')  }}">Apply Now</a> </li>
                    <li class="menu-item menu-item-has-children"><a href="{{ route('frontend.members')  }}">Members</a></li>
                    <li class="menu-item menu-item-has-children"><a href="{{ route('frontend.contactus')  }}">Contact Us</a></li>
                    <li class="menu-item menu-item-has-children"><a href="{{ route('frontend.blogs')  }}">Blogs</a></li>
                    @auth
                        <li class="nav-item menu-item-has-children dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                {{ Auth::user()->name }}
                                <span class="caret"></span>
                            </button>
                            <ul class="" aria-labelledby="dropdownMenu1">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('logout') }}">Separated link</a></li>
                            </ul>
                        </li>
                    @endauth
                </ul>
            </nav>
            <a class="responsive-menu-toggle" href="#"><i class='fa fa-bars'></i></a>
        </div>
    </div>
</header>