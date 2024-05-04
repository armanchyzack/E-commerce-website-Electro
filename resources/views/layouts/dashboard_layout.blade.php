<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <style>
        @notifyCss;
    </style>

</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('home') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Brand</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('brand.view') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-brand-medium"></i>
                                </span>
                                <span class="hide-menu">Add Brand</span>
                            </a>
                            <a class="sidebar-link" href="{{ route('brand.trash') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-brand-medium"></i>
                                </span>
                                <span class="hide-menu">Recycle Deleted Brand</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Category</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('category.view') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-brand-medium"></i>
                                </span>
                                <span class="hide-menu">Add Category</span>
                            </a>
                            <a class="sidebar-link" href="{{ route('category.fetch') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-brand-medium"></i>
                                </span>
                                <span class="hide-menu">All Category</span>
                            </a>
                            <a class="sidebar-link" href="{{ route('category.sub.fetch') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-brand-medium"></i>
                                </span>
                                <span class="hide-menu">All Sub Category</span>
                            </a>
                            <a class="sidebar-link" href="" aria-expanded="false">
                                <span>
                                    <i class="ti ti-brand-medium"></i>
                                </span>
                                <span class="hide-menu">Recycle Deleted Category</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Product</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('product.view') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-brand-medium"></i>
                                </span>
                                <span class="hide-menu">Add Product</span>
                            </a>
                            <a class="sidebar-link" href="" aria-expanded="false">
                                <span>
                                    <i class="ti ti-brand-medium"></i>
                                </span>
                                <span class="hide-menu">All Product</span>
                            </a>
                            <a class="sidebar-link" href="{{ route('brand.trash') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-brand-medium"></i>
                                </span>
                                <span class="hide-menu">Recycle Deleted Product</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>


        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35"
                                        height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="{{ route('logout') }}"
                                        class="btn btn-outline-primary mx-3 mt-2 d-block"
                                        onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}


                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>


                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                @yield('content_here')


                <div class="py-6 px-6 text-center pt-5">
                    <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
                            class="pe-1 text-primary text-decoration-underline">AdminMart.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script>
        @notifyJs
    </script>
    @stack('CustomJs')
</body>

</html>
