@extends('frontend.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb bg-img-ecomnsl">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Ecom NSL</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Ecom NSL</li>
        </ol>
    </div>
  </div>
  <!-- Header End -->

    <!-- Ecom NSL Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <!-- <h4 class="text-primary">About Us</h4> -->
                        <h1 class="display-5 mb-4">Ecom NSL</h1>
                        <p class="mb-1">
                            Ecom NSL is a premier e-commerce platform offering a curated selection of high-quality skincare
                            products designed for healthy, glowing skin.
                        </p>
                        <p class="mb-1">
                            Our mission is to provide a diverse range of skincare solutions to meet every
                            customer’s needs. From everyday skincare essentials to dermatologist-recommended
                            products, we ensure that every item we offer is 100% authentic and original.
                            To bring the best to our customers, we source products from trusted
                            suppliers around the world, ensuring quality and effectiveness.
                        </p>
                        <p class="mb-1">
                            What sets Ecom NSL apart is our commitment to customer satisfaction.
                            We provide 24/7 customer care, allowing customers to connect with us
                            anytime via phone or social media platforms. Whether it’s assistance in
                            choosing the right product or addressing any concerns, our team is always
                            ready to help.
                        </p>
                        <p class="mb-1">
                            Looking ahead, we are excited about expanding our services by launching a mobile
                            app and opening a physical showroom. These developments will allow customers to explore
                            our products more conveniently, whether they prefer shopping online or visiting us in person.
                        </p>
                        <p class="mb-1">
                            At Ecom NSL, we are dedicated to making skincare shopping a seamless and trustworthy experience.
                            With our wide product range, excellent customer service, and upcoming innovations, we aim
                            to remain a trusted name for all skincare enthusiasts.
                        </p>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img src="{{ asset('/') }}frontend-assets/images/ecom-nsl-side-image.png" class="img-fluid rounded w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ecom NSL End -->
@endsection