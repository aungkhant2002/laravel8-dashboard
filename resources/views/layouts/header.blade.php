<div class="header bg-primary mb-2 p-2 rounded mt-2">
    <div class="d-flex justify-content-between">
        <button class="btn btn-light d-block d-lg-none" id="showSidebar">
            <i class="fas fa-bars"></i>
        </button>
        <div class="d-flex d-none d-md-flex">

            <input type="text" class="form-control d-inline me-1">
            <button class="btn btn-light text-primary">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <div class="">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
