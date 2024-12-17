@extends('frontend.master')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb bg-img-blog">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Blog</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Blog</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Blog Start -->
<div class="container-fluid blog pb-5 py-5">
    <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Blog & News</h4>
                <h1 class="display-5 mb-4">Your Guide to Success in Trade and Innovation</h1>
                <p class="mb-0 font-14">Our Blog & News offers expert insights and updates to guide you toward success
                    in trade,
                    innovation, and market leadership.
                </p>
            </div>
            <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item p-4">
                    <div class="blog-img mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/service-1.jpg" class="img-fluid w-100 rounded"
                            alt="">
                        <div class="blog-title">
                            <a href="#" class="btn">Dividend Stocks</a>
                        </div>
                    </div>
                    <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                    <p class="mb-4 font-14">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                        suscipit error corporis accusamus labore....
                    </p>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('/') }}frontend-assets/images/testimonial-1.jpg"
                            class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                        <div class="ms-3">
                            <h5>Admin</h5>
                            <p class="mb-0 font-14">October 9, 2025</p>
                        </div>
                    </div>
                </div>
                <div class="blog-item p-4">
                    <div class="blog-img mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/service-2.jpg" class="img-fluid w-100 rounded"
                            alt="">
                        <div class="blog-title">
                            <a href="#" class="btn">Non-Dividend Stocks</a>
                        </div>
                    </div>
                    <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                    <p class="mb-4 font-14">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                        suscipit error corporis accusamus labore....
                    </p>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('/') }}frontend-assets/images/testimonial-2.jpg"
                            class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                        <div class="ms-3">
                            <h5>Admin</h5>
                            <p class="mb-0 font-14">October 9, 2025</p>
                        </div>
                    </div>
                </div>
                <div class="blog-item p-4">
                    <div class="blog-img mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/service-3.jpg" class="img-fluid w-100 rounded"
                            alt="">
                        <div class="blog-title">
                            <a href="#" class="btn">Dividend Stocks</a>
                        </div>
                    </div>
                    <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                    <p class="mb-4 font-14">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                        suscipit error corporis accusamus labore....
                    </p>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('/') }}frontend-assets/images/testimonial-3.jpg"
                            class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                        <div class="ms-3">
                            <h5>Admin</h5>
                            <p class="mb-0 font-14">October 9, 2025</p>
                        </div>
                    </div>
                </div>
                <div class="blog-item p-4">
                    <div class="blog-img mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/service-4.jpg" class="img-fluid w-100 rounded"
                            alt="">
                        <div class="blog-title">
                            <a href="#" class="btn">Non-Dividend Stocks</a>
                        </div>
                    </div>
                    <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                    <p class="mb-4 font-14">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                        suscipit error corporis accusamus labore....
                    </p>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('/') }}frontend-assets/images/testimonial-1.jpg"
                            class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                        <div class="ms-3">
                            <h5>Admin</h5>
                            <p class="mb-0 font-14">October 9, 2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection