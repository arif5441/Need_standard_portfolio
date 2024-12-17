@extends('frontend.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb bg-img-about">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Realistics</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Realistic</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <!-- <h4 class="text-primary">About Us</h4> -->
                    <h1 class="display-5 mb-4">Realistic Business</h1>
                    <p class="font-14">
                        Welcome to NSL Real Estate, your trusted partner in discovering exceptional properties. Whether
                        you’re
                        searching for your dream home, a high-return investment, or an ideal commercial space, we
                        provide tailored solutions to meet your unique needs.
                    </p>
                    <p class="font-14">
                        With a passion for excellence and a keen understanding of the real estate market, our
                        experienced team delivers
                        personalized services, exclusive listings, and valuable insights to help you make informed
                        decisions. We go beyond
                        finding properties—we focus on building futures and securing lasting value.
                    </p>
                    <p class="font-14">
                        At NSL Real Estate, every client benefits from our commitment to professionalism, integrity, and
                        innovation.
                        Our track record of success is driven by a deep dedication to helping clients achieve their real
                        estate goals.
                        Whether you’re a first-time buyer, seasoned investor, or business owner, we prioritize your
                        vision and deliver
                        results that exceed expectations.
                    </p>
                    <p class="font-14">
                        Join the many satisfied clients who trust NSL Real Estate to bring their property dreams to
                        life. Together, we
                        can build your legacy, one perfect property at a time. Let us guide you on this exciting journey
                        toward success
                        and prosperity in real estate.
                    </p>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{ asset('/') }}frontend-assets/images/developers-side-image-1.jpg"
                        class="img-fluid rounded w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Features Start -->
<div class="container-fluid feature pb-5">
    <div class="container pb-5">
        <div class=" mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
            <h4 class="text-center text-primary">Our Commitment</h4>
            <h1 class="text-center display-5 mb-4">Sustainable Farming with a Touch of Tradition and Innovation.</h1>
            <p class="font-14">
                M.A Dairy and Poultry Farm blends sustainable farming with cultural heritage, offering high-quality
                eggs,
                scenic tours, and hands-on experiences, connecting visitors to tradition and nature in a serene setting.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon  mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/blueprint-builders.jpg" class="img-fluid "
                            alt="">
                    </div>
                    <h4>Constructors</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/elite-construction-solution.jpg"
                            class="img-fluid" alt="">
                    </div>
                    <h4>Erects</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon  mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/interior.jpg" class="img-fluid" alt="">
                    </div>
                    <h4>Engineers</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/solidbuild-solution.jpg" class="img-fluid"
                            alt="">
                    </div>
                    <h4>Structtural Design</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/Untitled-3.jpg" class="img-fluid" alt="">
                    </div>
                    <h4>Contractors</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon  mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/visionery-builders-group.jpg" class="img-fluid"
                            alt="">
                    </div>
                    <h4>Civil</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->
@endsection