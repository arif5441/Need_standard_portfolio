<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Need</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href=" {{ asset('/') }}frontend-assets/lib/animate/animate.min.css" />
    <link rel="stylesheet" href=" {{ asset('/') }}frontend-assets/lib/lightbox/css/lightbox.min.css" />
    <link rel="stylesheet" href=" {{ asset('/') }}frontend-assets/lib/owlcarousel/assets/owl.carousel.min.css" />

    <!-- <link rel="stylesheet" href="/public/dashboard/assets/"/>
        <link href="/public/dashboard/assets/" rel="stylesheet">
        <link href="/public/dashboard/assets/" rel="stylesheet"> -->


    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href=" {{ asset('/') }}frontend-assets/css/bootstrap.min.css" />
    <!-- <link href="/public/dashboard/assets/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href=" {{ asset('/') }}frontend-assets/css/style.css" />
    <link rel="stylesheet" href=" {{ asset('/') }}frontend-assets/css/main.css" />



</head>

<body>

    

    <!-- Topbar Start -->
    <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                    <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                    <a href="mailto:example@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#"><small class="me-3 text-dark"><i class="fa fa-user text-primary me-2"></i>Register</small></a>
                    <a href="#"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fa fa-home text-primary me-2"></i> My Dashboard</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('frontend.includes.header')
    <!-- Navbar End -->


    @yield('content')


    <!-- Footer Start -->
    @include('frontend.includes.footer')
