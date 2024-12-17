@extends('frontend.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb bg-img-trade">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Traders</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Trade</li>
        </ol>
    </div>
  </div>
  <!-- Header End -->
    <!--M.A About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <!-- <h4 class="text-primary">About Us</h4> -->
                        <h1 class="display-5 mb-4">M.A Trade Corporation</h1>
                        <p class="font-14">
                            M. A Trade Corporation is a leading export and import business dedicated to facilitating
                            seamless international trade.
                        </p>
                        <p class="font-14">
                            Established in 2010, the company specializes in sourcing
                            a wide range of government-approved products (excluding food and medicine) from across
                            the globe and ensuring they are delivered to domestic markets efficiently. The company excels in
                            managing logistics, customs procedures, and transportation,
                            ensuring all transactions stick to international laws and standards.
                        </p>
                        <p class="font-14">
                            The company excels in navigating complex global trade regulations,
                            ensuring that all transactions comply with international laws and standards.
                            Their experienced team works diligently to manage logistics, customs procedures,
                            and transportation, making the entire import-export process smooth
                            and hassle-free for clients.
                        </p>
                        <p class="font-14">
                            M. A Trade Corporation builds and nurtures long-term partnerships with suppliers,
                            buyers, and logistics providers, fostering trust and mutual growth. By maintaining a
                            flexible approach and staying updated on global market trends, the company adapts quickly
                            to changes, providing clients with the best prices and most efficient solutions.
                        </p>
                        <p class="font-14">
                            As a recognized player in the export-import industry, M.A Trade Corporation
                            is committed to expanding its reach, strengthening global networks, and contributing
                            to economic growth through its reliable, high-quality service in international trade.
                        </p>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img src="{{ asset('/') }}frontend-assets/images/ma-trade-side-image.png" class="img-fluid rounded w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--M.A About End -->

    <!-- Features Start -->
    <div class="container-fluid feature pb-5">
        <div class="container pb-5">
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" >
                <h4 class="text-center  text-primary">Our Products</h4>
                <h1 class="text-center  display-5 mb-4">Connecting Quality, Innovation & Convenience in Our Products</h1>
                <p class="text-left mb-0 font-14">
                    M.A Trade Corporation connects global businesses with innovative, approved products, delivering
                    seamless export-import solutions and ensuring maximum impact in international markets.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-2 mb-4">
                            <img src="{{ asset('/') }}frontend-assets/images/ecom-small.png" class="img-fluid br-5" alt="Image">
                        </div>
                        <h4>Cosmetic</h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-2 mb-4">
                            <img src="{{ asset('/') }}frontend-assets/images/skin-care.png" class="img-fluid" alt="Image">
                        </div>
                        <h4>Skin Career</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-2 mb-4">
                            <img src="{{ asset('/') }}frontend-assets/images/stationery.png" class="img-fluid" alt="Image">
                        </div>
                        <h4>Stationary</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-2 mb-4">
                            <img src="{{ asset('/') }}frontend-assets/images/machine.png" class="img-fluid" alt="Image">
                        </div>
                        <h4>Machine</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-2 mb-4">
                            <img src="{{ asset('/') }}frontend-assets/images/cloths.png" class="img-fluid" alt="Image">
                        </div>
                        <h4>Clothe</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-2 mb-4">
                            <img src="{{ asset('/') }}frontend-assets/images/food.png" class="img-fluid" alt="Image">
                        </div>
                        <h4>Food</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
@endsection