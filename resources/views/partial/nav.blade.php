<!-- ======= Header ======= -->
<header id="header" class="header fixed-top p-0">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">


        <nav id="navbar" class="navbar ">
            <div class="d-flex align-items-center">
                <a href="/" class="logo d-flex align-items-center text-center">
                    <h3>Nice <br>
                        Store ID</h3>
                </a>
                <a class="nav-link scrollto active" href="/"> Home</a>
                {{-- <a class="nav-link scrollto" href="/#portfolio">Product</a> --}}
                <a class="nav-link scrollto" href="/shop">Shops</a>
                </ul>
        </nav>


        <i class="bi bi-list mobile-nav-toggle"></i>

        <div class="header-main d-flex align-items-center pe-5 justify-content-end">
            @auth
            <div class="bg-primary rounded-pill py-2 px-3">
                <a href="/cart" class="d-flex d-none d-md-flex flex-row align-items-center justify-content-center"
                    style="color: white;">
                    <i class='bx bxs-shopping-bag'></i>
                    <div class="ms-2">Cart</div>
                </a>
            </div>
            <a class="d-flex align-items-center bg-primary rounded-pill py-2 px-3 ms-2 dropdown-toggle text-white"
                href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bxs-user pe-2'></i> {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
            @else
            <a href="/login" class="d-flex align-items-center bg-primary rounded-pill py-2 px-3 ms-2"
                style="color: white;height:40px">
                <i class='bx bxs-user my-auto me-2'></i> Login
            </a>
            @endauth
        </div>

        <!-- .navbar -->

    </div>
</header><!-- End Header -->
