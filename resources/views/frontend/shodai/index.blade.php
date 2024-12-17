@extends('frontend.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb bg-img-shodai">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Shop</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Shodai</li>
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
                    <h1 class="display-5 mb-4">Shohoz Shodai</h1>
                    <p class="font-14">
                        Shohoz Shodai is an innovative online grocery store providing customers with a seamless and
                        hassle-free shopping
                        experience, focusing on convenience and quality products.
                    </p>
                    <p class="font-14">
                        With a focus on convenience and quality, it provides a wide range of products, including fresh
                        organic items
                        and high-quality goods, ensuring that every purchase meets customer expectations. Its
                        user-friendly platform allows
                        customers to easily browse and buy their desired products from the comfort of their homes,
                        saving time and effort.
                    </p>
                    <p class="font-14">
                        One of the key features of Shohoz Shodai is its commitment to providing organic products and
                        promoting healthier lifestyles
                        for its customers. In addition to organic items, the store also ensures that all goods meet high
                        standards of quality, making
                        them a reliable choice for everyday essentials. It prioritizes customer satisfaction by
                        delivering products swiftly and
                        maintaining the freshness and integrity of every item.
                    </p>
                    <p class="font-14">
                        Shohoz Shodai's mission is to make grocery shopping simpler, faster, and more accessible for
                        everyone. By combining convenience with
                        the assurance of superior quality, the store has become a trusted name for customers looking for
                        reliable online shopping options.
                        Whether it's fresh produce, pantry staples, or premium organic goods, Shohoz Shodai ensures a
                        seamless experience, empowering
                        customers to shop smarter and live healthily.
                    </p>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{ asset('/') }}frontend-assets/images/shohoz-sodai-side-image.png"
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
            <h4 class="text-center text-primary">Our Products</h4>
            <h1 class="text-center display-5 mb-4">Bringing Fresh, Organic, and Premium Goods to Your Doorstep</h1>
            <p class="font-14">
                Shohoz Shodai offers fresh, organic, and premium groceries delivered to your doorstep.
                Our commitment to quality ensures healthier choices, making grocery shopping convenient,
                simple, and accessible.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/food-and-bevarage.png" class="img-fluid"
                            alt="">
                    </div>
                    <h4>Food and Beverages Services</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/household-ess.png" class="img-fluid" alt="">
                    </div>
                    <h4>Household Essentials</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/meat-fish.png" class="img-fluid" alt="">
                    </div>
                    <h4>Meat, Fish, and Poultry</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/personal-care.png" class="img-fluid" alt="">
                    </div>
                    <h4>Personal Care Products</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/bakery.png" class="img-fluid" alt="">
                    </div>
                    <h4>Bakeries and Confectioneries</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/packaged-grains.png" class="img-fluid" alt="">
                    </div>
                    <h4>Packaged Grains Items</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->
@endsection