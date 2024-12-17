@extends('frontend.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb bg-img-farm">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Farms</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Farms</li>
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
                    <h1 class="display-5 mb-4">Need Agro Farm</h1>
                    <p class="font-14">
                        Need Agro Farm is a distinctive farm dedicated to producing high-quality eggs while embracing
                        the
                        charm of a heritage site.
                    </p>
                    <p class="font-14">
                        Designed as a perfect blend of agricultural innovation and cultural preservation,
                        the farm offers visitors an immersive experience that connects them to the region's rich
                        traditions.
                        Its serene and picturesque environment, combined with its commitment to sustainable farming,
                        makes
                        it a unique destination for day tours.
                    </p>
                    <p class="font-14">
                        The farm’s design draws inspiration from traditional architecture, with heritage-style
                        buildings,
                        lush green landscapes, and open courtyards, creating a tranquil retreat for visitors. Guests
                        can explore the egg production process, learning about modern yet ethical farming techniques
                        while enjoying the rustic beauty of the surroundings. Guided tours provide a hands-on
                        experience,
                        offering insights into sustainable poultry farming and the importance of fresh, high-quality
                        produce.
                    </p>
                    <p class="font-14">
                        Need Agro Farm is also an ideal place to relax and reconnect with nature. Visitors
                        can stroll through scenic pathways, enjoy local refreshments, and soak in the peaceful
                        atmosphere.
                        It’s more than just a farm—it’s a cultural and educational destination where people can
                        appreciate the fusion of tradition, innovation, and sustainability, all in a single day’s visit.
                    </p>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{ asset('/') }}frontend-assets/images/firm-side-image.png"
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
                        <img src="{{ asset('/') }}frontend-assets/images/dairy-product.png" class="img-fluid " alt="">
                    </div>
                    <h4>Fresh Dairy Product</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/meat.png" class="img-fluid" alt="">
                    </div>
                    <h4>Meat Delivery</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon  mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/egg-icon.png" class="img-fluid" alt="">
                    </div>
                    <h4>Egg Supply</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/nutrition.png" class="img-fluid" alt="">
                    </div>
                    <h4>Nutrition Solutions</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/farm.png" class="img-fluid" alt="">
                    </div>
                    <h4>Farm/Study Tours</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon  mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/vaterinery.png" class="img-fluid" alt="">
                    </div>
                    <h4>Veterinary Services</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->
@endsection