<nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h4">Cristian Sanchez</h1>
            <p>Web Designer</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="{{ Request::is('admin') ? "active" : "" }}">
            <a href="{{ route('admin.index') }}">
                <i class="icon-home"></i>
                Home
            </a>
        </li>
        <li class="{{ Request::segment(2)=="blogs" ? "active" : "" }}">
            <a href="{{ route('admin.blogs.index') }}">
                <i class="icon-padnote"></i>
                Blogs
            </a>
        </li>
        <li class="{{ Request::segment(2)=="cards"  ? "active" : "" }}">
            <a href="{{ route('admin.cards.index') }}">
                <i class="icon-padnote"></i>
                Cards
            </a>
        </li>
        <li class="{{ Request::segment(2)=="loans" ? "active" : "" }}">
            <a href="{{ route('admin.loans.index') }}">
                <i class="icon-padnote"></i>
                Loans
            </a>
        </li>
        <li class="{{ Request::segment(2)=="financials" ? "active" : "" }}">
            <a href="{{ route('admin.financials.index') }}">
                <i class="icon-padnote"></i>
                Financials
            </a>
        </li>
    </ul>
</nav>