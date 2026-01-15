<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>
            @yield('title', 'Dashboard')
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.PNG') }}">

        <!-- Theme Config Js -->
        <script src="{{ asset('backend/assets/js/config.js') }}"></script>

        <!-- Vendor css -->
        <link href="{{ asset('backend/assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">


            <!-- Sidenav Menu Start -->
            <div class="sidenav-menu">

                <div data-simplebar>

                    <!--- Sidenav Menu -->
                    <ul class="side-nav">
                        <li class="side-nav-title"></li>

                        {{-- <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarDashboard" aria-expanded="false" aria-controls="sidebarDashboard" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                                <span class="menu-text"> Dashboards </span>
                                <span class="badge bg-success rounded-pill">03</span>
                            </a>

                        </li> --}}


                        <li class="side-nav-item">
                            <a href="{{route('slideshow.index')}}" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-buildings"></i></span>
                                <span class="menu-text">Slideshow</span>

                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{route('services.index')}}" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-file-invoice"></i></span>
                                <span class="menu-text">Services</span>

                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{route('categories.index')}}" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-files"></i></span>
                                <span class="menu-text"> Menu Categories</span>

                            </a>

                        </li>
                          <li class="side-nav-item">
                            <a href="{{route('menus.index')}}" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-files"></i></span>
                                <span class="menu-text"> Menus</span>

                            </a>

                        </li>

                        <li class="side-nav-item">
                            <a href="{{route('ourfacility.index')}}" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-files"></i></span>
                                <span class="menu-text">Facilities</span>

                            </a>

                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('galleries.index')}}" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-files"></i></span>
                                <span class="menu-text">Gallery</span>

                            </a>

                        </li>
                         <li class="side-nav-item">
                            <a href="{{route('messages.index')}}" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-files"></i></span>
                                <span class="menu-text">Messages</span>

                            </a>

                        </li>

                        {{-- <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-lock"></i></span>
                                <span class="menu-text"> Auth Pages </span>

                            </a>

                        </li> --}}

                        {{-- <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-server-2"></i></span>
                                <span class="menu-text"> Error Pages </span>

                            </a>

                        </li> --}}

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Sidenav Menu End -->


            <!-- Topbar Start -->
            <header class="app-topbar">
                <div class="page-container topbar-menu">
                    <div class="d-flex align-items-center gap-2">

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="sidenav-toggle-button btn-icon rounded-circle btn btn-light">
                            <i class="ti ti-menu-2 fs-22"></i>
                        </button>

                        <!-- Button Trigger Search Modal -->
                        <div class="topbar-search text-muted d-none d-xl-flex gap-2 align-items-center" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                            <span class="me-2 fs-12 fw-medium">Search something..</span>
                            <i class="ti ti-search fs-18 ms-auto"></i>
                        </div>

                    </div>

                    <div class="d-flex align-items-center gap-2">

                        <!-- Search for small devices -->
                        <div class="topbar-item d-flex d-xl-none">
                            <button class="topbar-link" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                                <i class="ti ti-search fs-22"></i>
                            </button>
                        </div>

                        <!-- Notification Dropdown -->
                        <div class="topbar-item">
                            <div class="dropdown">
                                <button class="topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" data-bs-offset="0,23" type="button" data-bs-auto-close="outside" aria-haspopup="false" aria-expanded="false">
                                    <i class="ti ti-bell-z fs-24"></i>
                                    <span class="noti-icon-badge badge text-bg-danger">05</span>
                                </button>

                                <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg fs-13">
                                    <div class="py-2 px-3 border-bottom border-dashed">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle drop-arrow-none link-dark" data-bs-toggle="dropdown" data-bs-offset="0,15" aria-expanded="false">
                                                        <i class="ti ti-settings fs-22 align-middle"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as Read</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Delete All</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Do not Disturb</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Other Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="position-relative z-2 shadow-none rounded-0" style="max-height: 300px;" data-simplebar>
                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap active" id="notification-1">
                                            <span class="d-flex align-items-center">
                                                <div class="avatar flex-shrink-0 me-2">
                                                    <span class="avatar-title text-bg-success rounded-circle fs-22">
                                                        <i class="ti ti-message-plus"></i>
                                                    </span>
                                                </div>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Glady Haid</span> commented on <span class="fw-medium text-body">paces admin status</span>
                                                    <br />
                                                    <span class="fs-12">25m ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-1">
                                                        <i class="ti ti-x fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>

                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="notification-3">
                                            <span class="d-flex align-items-center">
                                                <div class="avatar flex-shrink-0 me-2">
                                                    <span class="avatar-title text-bg-info rounded-circle fs-22">
                                                        <i class="ti ti-moneybag"></i>
                                                    </span>
                                                </div>
                                                <span class="flex-grow-1 text-muted">
                                                    You withdraw a <span class="fw-medium text-body">$500</span> by <span class="fw-medium text-body">New York ATM</span>
                                                    <br />
                                                    <span class="fs-12">2h ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-3">
                                                        <i class="ti ti-x fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>

                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="notification-2">
                                            <span class="d-flex align-items-center">
                                                <span class="me-2 position-relative flex-shrink-0">
                                                    <img src="assets/images/users/avatar-4.jpg" class="avatar rounded-circle" alt="" />
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Tommy Berry</span> donated <span class="text-success">$100.00</span> for <span class="fw-medium text-body">Carbon removal program</span>
                                                    <br />
                                                    <span class="fs-12">58m ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-2">
                                                        <i class="ti ti-x fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>

                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="notification-4">
                                            <span class="d-flex align-items-center">
                                                <span class="me-2 position-relative flex-shrink-0">
                                                    <img src="assets/images/users/avatar-7.jpg" class="avatar rounded-circle" alt="" />
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Richard Allen</span> followed you in <span class="fw-medium text-body">Facebook</span>
                                                    <br />
                                                    <span class="fs-12">3h ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-4">
                                                        <i class="ti ti-x fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>

                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="notification-5">
                                            <span class="d-flex align-items-center">
                                                <span class="me-2 position-relative flex-shrink-0">
                                                    <img src="assets/images/users/avatar-10.jpg" class="avatar rounded-circle" alt="" />
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Victor Collier</span> liked you recent photo in <span class="fw-medium text-body">Instagram</span>
                                                    <br />
                                                    <span class="fs-12">10h ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-5">
                                                        <i class="ti ti-x fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notification-item text-center text-reset text-decoration-underline link-offset-2 fw-bold notify-item border-top border-light py-2">
                                        View All
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Light/Dark Mode Button -->
                        <div class="topbar-item d-none d-sm-flex">
                            <button class="topbar-link" id="light-dark-mode" type="button">
                                <i class="ti ti-moon fs-22"></i>
                            </button>
                        </div>

                        <!-- User Dropdown -->
                        <div class="topbar-item nav-user">
                            <div class="dropdown">
                                <a class="topbar-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown" data-bs-offset="0,19" type="button" aria-haspopup="false" aria-expanded="false">

                                    <span class="d-lg-flex flex-column gap-1 d-none">
                                        <h5 class="my-0 fs-13 fw-semibold">{{ Auth::user()->name }}</h5>
                                    </span>
                                    <i class="ti ti-chevron-down d-none d-lg-block align-middle ms-2"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="ti ti-user-hexagon me-1 fs-17 align-middle"></i>
                                        <span class="align-middle">My Account</span>
                                    </a>

                                    <!-- item-->
                                                                        <!-- Sign Out Link -->
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                                        class="dropdown-item active fw-semibold text-danger">
                                            <i class="ti ti-logout me-1 fs-17 align-middle"></i>
                                            <span class="align-middle">Sign Out</span>
                                        </a>

                                        <!-- Logout Form -->
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Topbar End -->

            <!-- Search Modal -->
            <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content bg-transparent">
                        <form>
                            <div class="card mb-1">
                                <div class="px-3 py-2 d-flex flex-row align-items-center" id="top-search">
                                    <i class="ti ti-search fs-22"></i>
                                    <input type="search" class="form-control border-0" id="search-modal-input" placeholder="Search for actions, people,">
                                    <button type="submit" class="btn p-0" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="page-content">

                <main>
                    @yield('content')
                </main>


                <!-- Footer Start -->
                <footer class="footer">
                    <div class="page-container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start">
                                <script>document.write(new Date().getFullYear())</script> © Blackbase <a href="" target="_blank" class="fw-bold text-decoration-underline text-uppercase text-reset fs-12"></a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center gap-2 px-3 py-3 offcanvas-header border-bottom border-dashed">
                <h5 class="flex-grow-1 mb-0">Theme Settings</h5>

                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body p-0 h-100" data-simplebar>
                <div class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Color Scheme</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light" value="light">
                                <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center" for="layout-color-light">
                                    <i class="ti ti-sun fs-32 text-muted"></i>
                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark" value="dark">
                                <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center" for="layout-color-dark">
                                    <i class="ti ti-moon fs-32 text-muted"></i>
                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>
                </div>

                <div class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Layout Mode</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                                <label class="form-check-label p-0 avatar-xl w-100" for="layout-mode-fluid">
                                    <div>
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                                    <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column rounded-2">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>

                                    <div>
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                <span class="d-block p-1 bg-dark-subtle rounded me-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2">Fluid</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-mode" id="data-layout-detached" value="detached">
                                <label class="form-check-label p-0 avatar-xl w-100" for="data-layout-detached">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-flex p-1 align-items-center border-bottom ">
                                            <span class="d-block p-1 bg-dark-subtle rounded me-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                        </span>
                                        <span class="d-flex h-100 p-1 px-2">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                                    <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                    </span>

                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2">Detached</h5>
                        </div>
                    </div>
                </div>

                <div class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Topbar Color</h5>

                    <div class="row">
                        <div class="col-3">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                                <label class="form-check-label border-0 p-0 avatar-lg w-100 bg-light bg-opacity-50" for="topbar-color-light">
                                    <span class="d-flex align-items-center justify-content-center h-100">
                                        <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-3" style="--ct-dark-rgb: 64,73,84;">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                <label class="form-check-label border-0 p-0 avatar-lg w-100 bg-light bg-opacity-50" for="topbar-color-dark">
                                    <span class="d-flex align-items-center justify-content-center h-100">
                                        <span class="p-2 d-inline-flex shadow rounded-circle bg-dark"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>
                </div>

                <div class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Menu Color</h5>

                    <div class="row">
                        <div class="col-3">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-light" value="light">
                                <label class="form-check-label border-0 p-0 avatar-lg w-100 bg-light bg-opacity-50" for="sidenav-color-light">
                                    <span class="d-flex align-items-center justify-content-center h-100">
                                        <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-3" style="--ct-dark-rgb: 64,73,84;">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-dark" value="dark">
                                <label class="form-check-label border-0 p-0 avatar-lg w-100 bg-light bg-opacity-50" for="sidenav-color-dark">
                                    <span class="d-flex align-items-center justify-content-center h-100">
                                        <span class="p-2 d-inline-flex shadow rounded-circle bg-dark"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>
                </div>

                <div class="p-3 .border-bottom .border-dashed">
                    <h5 class="mb-3 fw-bold">Sidebar Size</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-default" value="default">
                                <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-default">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2 mb-3">Default</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-compact" value="compact">
                                <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-compact">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                                <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2 mb-3">Compact</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-small" value="condensed">
                                <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end flex-column" style="padding: 2px;">
                                                <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2 mb-3">Condensed</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-small-hover" value="sm-hover">
                                <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small-hover">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end flex-column" style="padding: 2px;">
                                                <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2">Hover View</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-full" value="full">
                                <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-full">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="d-block p-1 bg-dark-subtle mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2">Full Layout</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-fullscreen" value="fullscreen">
                                <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-fullscreen">
                                    <span class="d-flex h-100">
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 fw-semibold text-center text-muted mt-2">Hidden</h5>
                        </div>
                    </div>
                </div>

                <div class="p-3 border-bottom border-dashed d-none">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fs-16 fw-bold mb-0">Container Width</h5>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-container-position" id="container-width-fixed" value="fixed">
                            <label class="btn btn-sm btn-soft-primary w-sm" for="container-width-fixed">Full</label>

                            <input type="radio" class="btn-check" name="data-container-position" id="container-width-scrollable" value="scrollable">
                            <label class="btn btn-sm btn-soft-primary w-sm ms-0" for="container-width-scrollable">Boxed</label>
                        </div>
                    </div>
                </div>

                <div class="p-3 border-bottom border-dashed d-none">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fs-16 fw-bold mb-0">Layout Position</h5>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn btn-sm btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-sm btn-soft-primary w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center gap-2 px-3 py-2 offcanvas-header border-top border-dashed">
                <button type="button" class="btn w-50 btn-soft-danger" id="reset-layout">Reset</button>
                <button type="button" class="btn w-50 btn-soft-info">Buy Now</button>
            </div>

        </div>

        <!-- Vendor js -->
        <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>


    </body>

</html>
