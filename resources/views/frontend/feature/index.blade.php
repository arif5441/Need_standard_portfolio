@extends('frontend.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb bg-img-features">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Features</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Feature</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Features Start -->
<div class="container-fluid service pb-5 py-5">
    <div class="container-fluid service pb-5">
        <div class="container pb-5">
            <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
                <h4 class="text-center text-primary">Our Core Features</h4>
                <h1 class="text-center mb-4">Innovating to Meet Your Needs</h1>
                <p class="mb-0 text-left font-14">
                    Explore our diverse services, designed to meet your unique needs with innovative, personalized
                    solutions.
                    From seamless e-commerce experiences and advanced software development to reliable export-import
                    services and fresh agricultural products, Need Standard Ltd. is committed to quality, efficiency,
                    and customer satisfaction, redefining industry standards and driving sustainable growth globally.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('/') }}frontend-assets/images/ma.png" class="img-fluid rounded-top w-100"
                                alt="Image" style="height: 200px;">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="/trade" class="h4 d-inline-block mb-4">M.A Trade Corporation</a>
                            <p class="mb-4">M.A Trade Corporation is a leading export and...
                            </p>
                            <a href="/trade" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('/') }}frontend-assets/images/ecom-nsl.jpg"
                                class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="/ecom-nsl" class="h4 d-inline-block mb-4">Ecom NSL</a>
                            <p class="mb-4 font-14">Ecom NSL is a leading e-commerce platform specializing...
                            </p>
                            <a href="/ecom-nsl" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('/') }}frontend-assets/images/ai-1.png"
                                class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="/soft" class="h4 d-inline-block mb-4">Shohoz Soft</a>
                            <p class="mb-4 font-14">Shohoz Soft is a promising new IT firm dedicated to providing..
                            </p>
                            <a href="/soft" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('/') }}frontend-assets/images/sodai-1.png"
                                class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="/sodai" class="h4 d-inline-block mb-4">Shohoz Sodai</a>
                            <p class="mb-4 font-14">ShohozSodai is an innovative online-based grocery store..
                            </p>
                            <a href="/sodai" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('/') }}frontend-assets/images/needx.png"
                                class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="/needx" class="h4 d-inline-block mb-4">Needx Courier</a>
                            <p class="mb-4 font-14">Needx Courier is a dynamic courier and logistics company ...
                            </p>
                            <a href="/needx" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('/') }}frontend-assets/images/dairy-firm-thumbnail.png"
                                class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="/farm" class="h4 d-inline-block mb-4">Need Agro Complex</a>
                            <p class="mb-4 font-14">Need Agro Complex is a distinctive farm dedicated to...
                            </p>
                            <a href="/farm" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('/') }}frontend-assets/images/developers_thumbnail.jpg"
                                class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="/realistic" class="h4 d-inline-block mb-4">Realistic Business</a>
                            <p class="mb-4 font-14">Realistic Business is a distinctive farm dedicated to...
                            </p>
                            <a href="/realistic" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->
@endsection