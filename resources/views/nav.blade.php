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



        <div class="header-main d-flex align-items-center pe-5">
                {{-- <div class="col-md-7 mx-3">
                        <div class="d-flex form-inputs form-control rounded-pill"> <input class="border-0" type="text" placeholder="Search any product..."> <i class="bx bx-search my-auto"></i> </div>
                </div> --}}
                <div class="col-md-8 bg-primary rounded-pill py-2" >
                    <a href="/cart" class="d-flex d-none d-md-flex flex-row align-items-center justify-content-center" style="color: white;">
                        <i class='bx bxs-shopping-bag'></i>
                        <div class="ms-2">Cart</div>
                    </a>
                </div>
                {{-- <a href="/login" class="d-flex align-items-center bg-primary rounded-pill py-2 px-3 ms-2" style="color: white;height:40px">
                    <i class='bx bxs-user my-auto '></i>
                </a> --}}
                <a class="d-flex align-items-center bg-primary rounded-pill py-2 px-3 ms-2 dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Nama User
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
        </div>

        <i class="bi bi-list mobile-nav-toggle"></i>
      <!-- .navbar -->

    </div>
</header><!-- End Header -->
