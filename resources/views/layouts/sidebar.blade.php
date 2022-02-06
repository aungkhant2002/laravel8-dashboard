<div class="sidebar min-vh-100">
    <ul>
        <li class="my-3">
            <div class="d-flex justify-content-between">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logos/logo.PNG') }}" class="brand-logo" height="50" alt="">
                </a>
                <button class="btn btn-light d-block d-lg-none" id="hideSidebar">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <a href="{{ route('home') }}" class="sidebar-link active">
                <i class="fas fa-home fa-fw sidebar-link-icon"></i>
                Home
            </a>
        </li>
        <li>
            <a href="contact-message.html" class="sidebar-link">
                <i class="fas fa-envelope fa-fw sidebar-link-icon"></i>
                Contact Messages
            </a>
        </li>
        <li>
            <a href="calc.html" class="sidebar-link">
                <i class="fas fa-calculator fa-fw sidebar-link-icon"></i>
                Calculator
            </a>
        </li>
        <li>
            <a href="map.html" class="sidebar-link ">
                <i class="fas fa-map-marked fa-fw sidebar-link-icon"></i>
                Map
            </a>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <p class="sidebar-group-title">Manage Article</p>
        </li>
        <li>
            <a href="article-create.html" class="sidebar-link">
                <i class="fas fa-plus-circle fa-fw sidebar-link-icon"></i>
                Create Article
            </a>
        </li>
        <li>
            <a href="article-list.html" class="sidebar-link">
                <i class="fas fa-list fa-fw sidebar-link-icon"></i>
                Article Lists
            </a>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <p class="sidebar-group-title">Manage Article</p>
        </li>
        <li>
            <a href="" class="sidebar-link">
                <i class="fas fa-plus-circle fa-fw sidebar-link-icon"></i>
                Create Article
            </a>
        </li>
        <li>
            <a href="" class="sidebar-link">
                <i class="fas fa-list fa-fw sidebar-link-icon"></i>
                Article Lists
            </a>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <p class="sidebar-group-title">Manage Article</p>
        </li>
        <li>
            <a href="" class="sidebar-link">
                <i class="fas fa-plus-circle fa-fw sidebar-link-icon"></i>
                Create Article
            </a>
        </li>
        <li>
            <a href="" class="sidebar-link">
                <i class="fas fa-list fa-fw sidebar-link-icon"></i>
                Article Lists
            </a>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <a href="{{ route('logout') }}" class="btn btn-outline-primary w-100" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                <i class="fas fa-unlock"></i> Log Out
            </a>
        </li>

    </ul>
</div>
