<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Need Standard Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="shortcut icon" href="{{ asset('/') }}frontend-assets/images/favicon_nsl.png">
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

    <!-- Spinner Start -->
    <div id="spinner" v-if="isLoading"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    
    <!-- Navbar Start -->
    @include('frontend.includes.header')
    <!-- Navbar End -->


    @yield('content')


    <!-- Footer Start -->
    @include('frontend.includes.footer')
