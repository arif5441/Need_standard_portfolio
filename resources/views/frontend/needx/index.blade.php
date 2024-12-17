@extends('frontend.master')

@section('content')
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <!-- <h4 class="text-primary">About Us</h4> -->
                    <h1 class="display-5 mb-4">Needx Courier</h1>
                    <p class="font-14">
                        Needx Courier is a dynamic courier and logistics company committed to providing seamless delivery services locally,
                        nationally, and internationally.
                    </p>
                    <p class="font-14">
                        Known for its reliability and efficiency, Needx Courier caters to diverse customer
                        needs, ensuring packages reach their destinations safely and on time. Whether it’s a small parcel for a nearby city
                        or a bulk shipment to another country, Needx Courier offers tailored solutions for individuals and businesses alike.
                    </p>
                    <p class="font-14">
                        The company also specializes in providing comprehensive logistics systems, streamlining supply chains and
                        transportation processes for businesses. By leveraging advanced technology and a dedicated team, Needx
                        Courier ensures that goods are tracked in real-time, providing transparency and peace of mind to its clients.
                        Its logistics services include warehousing, inventory management, and distribution, making it a one-stop
                        solution for businesses seeking to optimize their operations.
                    </p>
                    <p class="font-14">
                        Needx Courier prioritizes customer satisfaction by offering fast and cost-effective services without compromising
                        on quality. With its extensive network and expertise, the company has established itself as a trusted partner
                        for timely and reliable deliveries. Whether for personal shipments or complex business logistics, Needx
                        Courier continues to set high standards in the courier and logistics industry, ensuring excellence at
                        every step of the journey. 
                    </p>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{ asset('/') }}frontend-assets/images/courier-side-image.png" class="img-fluid rounded w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid feature pb-5">
    <div class="container pb-5">
        <div class=" mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" >
            <h4 class="text-center text-primary">Our Promise</h4>
            <h1 class="text-center display-5 mb-4">Timely, Secure, and Cost-Effective Delivery Solutions.</h1>
            <p class="font-14">
                Needx Courier offers reliable, efficient courier and logistics services locally and globally,
                with tailored solutions, real-time tracking, and comprehensive services like warehousing and
                inventory management.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/standard-parcel-delivery.png" class="img-fluid" alt="">
                    </div>
                    <h4>Standard Delivery</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/fast-delivery.png" class="img-fluid" alt="">
                    </div>
                    <h4>Express Delivery</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/same-day-delivery.png" class="img-fluid" alt="">
                    </div>
                    <h4>Same-Day Delivery</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/international-shipping.png" class="img-fluid" alt="">
                    </div>
                    <h4>Global Shipping</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/reverse-logistics.png" class="img-fluid" alt="">
                    </div>
                    <h4>Reverse Logistics</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-2 mb-4">
                        <img src="{{ asset('/') }}frontend-assets/images/return-management.png" class="img-fluid" alt="">
                    </div>
                    <h4>Return Management</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection