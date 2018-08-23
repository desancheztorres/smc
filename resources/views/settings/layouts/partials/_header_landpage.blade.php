<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a href="{{route('settings.dashboard')}}" title="logom" class="navbar-brand"><img src="{{asset('assets/settings/images/logobackend.png')}}"></img></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item {{ Request::is('settings/dashboard') ? "active" : "" }}">
                    <a class="nav-link" href="{{route('settings.dashboard')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Deals
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item {{ Request::is('settings/loans') ? "active" : "" }}" href="{{route('settings.loans')}}">Loans</a>
                        <a class="dropdown-item {{ Request::is('settings/cards') ? "active" : "" }}" href="{{route('settings.cards')}}">Credit Cards</a>
                        <a class="dropdown-item {{ Request::is('settings/financial') ? "active" : "" }}" href="{{route('settings.financial')}}">Car finance</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="https://searchmycredit.co.uk/contactus" target="_blank">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>