@extends('frontend.master')

@section('content')
    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <!-- <h4 class="text-primary">About Us</h4> -->
                        <h1 class="display-5 mb-4">Shohoz Soft</h1>
                        <p class="font-14">
                        Shohoz Soft is a promising IT firm dedicated to providing efficient and affordable solutions for businesses
                        looking to establish a strong digital presence. 
                        </p>
                        <p class="font-14">
                        The company specializes in website development, software design, and database management, catering primarily 
                            to the needs of startups and emerging businesses.Shohoz Soft's main focus is on the e-commerce sector, aiming 
                            to offer seamless and straightforward solutions that make it easier for new businesses to launch and operate effectively.
                        </p>
                        <p class="font-14">
                        Understanding the unique challenges faced by entrepreneurs, Shohoz Soft is committed to delivering high-quality
                             services at a minimum cost, ensuring accessibility for businesses with limited budgets. The firm takes pride 
                             in its ability to simplify complex processes, offering user-friendly tools and tailored services that address 
                             the specific needs of each client. Whether it's creating an engaging website, developing custom software, or 
                             managing databases for smooth operations, Shohoz Soft ensures that businesses have everything they need to succeed.
                        </p>
                        <p class="font-14">
                        Shohoz Soft's mission is to empower startups by providing reliable and easy-to-use IT solutions, helping them focus 
                            on growth and innovation without worrying about technical hurdles. With Shohoz Soft as a partner, businesses can 
                            confidently navigate the competitive e-commerce landscape, laying the foundation for long-term success.
                        </p>

                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img src="{{ asset('/') }}frontend-assets/images/shohoz-soft-side-image.png" class="img-fluid rounded w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid feature pb-5">
        <div class="container pb-5">
            <div class=" mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" >
                <h4 class="text-center text-primary">Our Services</h4>
                <h1 class="text-center display-5 mb-4">Affordable IT Solutions for Startups and E-Commerce.</h1>
                <p class="font-14">
                   Shohoz Soft offers affordable IT solutions in website development, software design, and database management,
                    empowering startups and e-commerce businesses with user-friendly tools for growth and success.
                </p>
            </div>
            <div class="row g-4">

            <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-2 mb-4">
                            <img src="{{ asset('/') }}frontend-assets/images/ecommerce-solutiuon.png" class="img-fluid" alt="Image">
                        </div>
                        <h4>Ecommerce System</h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-2 mb-4">
                            <img src="{{ asset('/') }}frontend-assets/images/custom-software.png" class="img-fluid" alt="Image">
                        </div>
                        <h4>Custom Software</h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-2 mb-4">
                            <img src="{{ asset('/') }}frontend-assets/images/web-application.png" class="img-fluid" alt="Image">
                        </div>
                        <h4>Web Application</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-2 mb-4">
                            <img src="{{ asset('/') }}frontend-assets/images/mobile-application.png" class="img-fluid" alt="Image">
                        </div>
                        <h4>Mobile Application</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-2 mb-4">
                            <img src="{{ asset('/') }}frontend-assets/images/quality-assurance.png" class="img-fluid" alt="Image">
                        </div>
                        <h4>Quality Assurance</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-2 mb-4">
                            <img src="{{ asset('/') }}frontend-assets/images/system-integration.png" class="img-fluid" alt="Image">
                        </div>
                        <h4>Systems Integration</h4>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Features End -->
@endsection