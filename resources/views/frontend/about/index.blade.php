@extends('frontend.master')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb bg-img-about">
  <div class="container text-center py-5" style="max-width: 900px;">
      <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
      <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Pages</a></li>
          <li class="breadcrumb-item active text-primary">About</li>
      </ol>
  </div>
</div>
<!-- Header End -->

<div class="container-fluid about py-5">
  <div class="container py-5">
    <div class="row g-5 align-items-center">
      <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
        <div>
          <h4 class="text-primary">About Us</h4>
          <h1 class="display-5 ">
            Need Standard Ltd. – Redefining Global Business
          </h1>
          <p class="font-14">
            Need Standard Ltd., founded in 2007 by Md. Jakaria Hossen, who
            leads in export, import, e-commerce, software, and agriculture, is
            committed to innovation and quality.
          </p>
          <p class="font-14">
            Over the years, the company has evolved into a versatile
            enterprise with a diverse portfolio spanning several industries,
            including export/import, e-commerce, software development, and
            agriculture. Guided by a vision of excellence and innovation, Need
            Standard Ltd. continues to expand its operations and market
            presence globally.
          </p>
          <h2 class="mb-2 font-18">Mission</h2>
          <p class="font-14">
            To deliver innovative, high-quality solutions and services across
            multiple industries, driving customer satisfaction, economic
            growth, and sustainability.
          </p>
          <h2 class="mb-2 font-18">Vision</h2>
          <p class="font-14">
            To be a globally trusted and recognized leader in innovation and
            excellence, creating value for stakeholders while positively
            impacting society and the environment.
          </p>

          <h2 class="mb-2 font-18">Export-Import</h2>
          <p class="font-14">              
           The company excels in export-import, sourcing high-quality products, adhering to global trade standards, 
           and ensuring efficient delivery, earning a strong industry reputation for reliability. 
          </p>

          <h2 class="mb-2 font-18">E-commerce</h2>
          <p class="font-14">
            The e-commerce division offers a seamless platform, delivering quality beauty, skincare, electronics, 
            and essentials with competitive pricing, prompt delivery, and an exceptional shopping experience.
          </p>

          <h2 class="mb-2 font-18">Software Farm</h2>
          <p class="font-14">
            Shohoz Soft Ltd. is a software company delivering innovative enterprise solutions, mobile apps, and cloud systems,
             driven by a customer-centric approach to meet modern business needs.
          </p>
          <h2 class="mb-2 font-18">Agro Farm and Courier</h2>
          <p class="font-14">
            The company’s agro farm excels in dairy and poultry, delivering fresh, high-quality products, while plans for super
             shops and courier services enhance customer convenience.
          </p>
          
          <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-6">
              <div class="d-flex">
                <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                <div class="ms-4">
                  <h2 class="font-18">Empowering Growth</h2>
                  <p class="font-14">
                    Driving innovation, opportunities, and success for the
                    next generation's future.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
              <div class="d-flex">
                <div>
                  <i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i>
                </div>
                <div class="ms-4">
                  <h2 class="font-18">Year Of Expertise</h2>
                  <p class="font-14">
                    Over 17 years of expertise in diverse industries,
                    delivering excellence and innovative solutions globally.
                  </p>
                </div>
              </div>
            </div>
            <!-- <div class="col-sm-6">
                              <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover Now</a>
                          </div> -->
            <div class="col-sm-6 mt-0">
              <div class="d-flex">
                <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                <div>
                  <h2 class="font-18">Call Us</h2>
                  <p class=" fs-5 font-14" style="letter-spacing: 1px">
                    +88 01999-525008 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
        <div class="bg-primary rounded position-relative overflow-hidden">
          <img src="{{ asset('/') }}frontend-assets/images/about-side-image-1.png" class="img-fluid rounded w-100" alt="" />
          <div class="rounded-bottom">
            <img src="{{ asset('/') }}frontend-assets/images/about-side-image-2.png" class="img-fluid rounded-bottom w-100" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection