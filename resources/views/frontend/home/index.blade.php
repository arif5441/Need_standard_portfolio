@extends('frontend.master')

@section('content')
<main>

  <div class="container-fluid position-relative p-0">
    <div class="header-carousel owl-carousel">
      <div class="header-carousel-item">
        <img src="{{ asset('/') }}frontend-assets/images/home-banner.png" class="img-fluid w-100" alt="Image" />
        <div class="carousel-caption">
          <div class="container">
            <div class="row g-5">
              <div class="col-12 animated fadeInUp">
                <div class="text-center">
                  <h4 class="text-primary text-uppercase fw-bold mb-4">
                    Welcome To Need Standard Ltd.
                  </h4>
                  <h1 class="display-4 text-uppercase text-white mb-4">
                    Invest in Excellence: Innovation-Driven Opportunities with
                    Need Standard Ltd.
                  </h1>
                  <p class="mb-5 fs-5">
                    To deliver innovative, high-quality solutions and services
                    across multiple industries, driving customer satisfaction,
                    economic growth, and sustainability....
                  </p>
                  <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                        class="fas fa-play-circle me-2"></i> Watch Video</a>
                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <h2 class="text-white me-2">Follow Us:</h2>
                    <div class="d-flex justify-content-end ms-2">
                      <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i
                          class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                          class="fab fa-twitter"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                          class="fab fa-instagram"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i
                          class="fab fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-carousel-item">
        <img src="{{ asset('/') }}frontend-assets/images/home-banner-2.png" class="img-fluid w-100" alt="Image" />
        <div class="carousel-caption">
          <div class="container">
            <div class="row g-5">
              <div class="col-12 animated fadeInUp">
                <div class="text-center">
                  <h4 class="text-primary text-uppercase fw-bold mb-4">
                    Welcome To Need Standard Ltd.
                  </h4>
                  <h1 class="display-4 text-uppercase text-white mb-4">
                    Empower Your Investments with a Globally Diversified
                    Enterprise
                  </h1>
                  <p class="mb-5 fs-5">
                    To be a globally trusted and recognized leader in innovation
                    and excellence, creating value for stakeholders while
                    positively impacting society and the environment....
                  </p>
                  <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                        class="fas fa-play-circle me-2"></i> Watch Video</a>
                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <h2 class="text-white me-2">Follow Us:</h2>
                    <div class="d-flex justify-content-end ms-2">
                      <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i
                          class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                          class="fab fa-twitter"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                          class="fab fa-instagram"></i></a>
                      <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i
                          class="fab fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- About Start -->
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
  <!--  About part end  -->

  <!-- Service Start -->
  <div class="container-fluid feature pb-5 mt-5">
    <div class="container-fluid feature pb-5">
      <div class="container pb-5">
        <div class=" mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">

          <h3 class="text-primary text-center">Explore Our Services</h3>
          <h1 class="text-center mb-4">Transforming Business Through Innovation and Digital Solutions.</h1>
          <p class="mb-0 text-left font-14">
            Need Standard Ltd. is transforming industries through innovative digital solutions in export-import,
            e-commerce, software development, and agriculture. The company drives growth and sustainability,
            empowering businesses to thrive in a fast-paced digital world and global markets.
          </p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="feature-item p-4">
              <div class="feature-icon icon-background p-4 mb-4">
                <!-- <i class="fa-light fa-handshake"></i> -->
                <i class="fas fa-truck-loading fa-4x text-primary"></i>
                <!-- <i class="fa-solid fa-box-open fa-4x text-primary"></i> -->
                <!-- <i class="fa-solid fa-truck-plane fa-4x text-primary"></i> -->
                <!-- <i class="fa-solid fa-map-location-dot fa-4x text-primary"></i> -->
              </div>
              <h4>Export-Import</h4>
              <p class="mb-4 font-14">
                M. A Trade Corporation excels in global export-import, logistics, and compliant trade
                solutions.
              </p>
              <a href="{{ route('trade') }}" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
            <div class="feature-item p-4">
              <div class="feature-icon icon-background p-4 mb-4">
                <i class="fas fa-shopping-cart fa-4x text-primary"></i>
              </div>
              <h4>E-commerce</h4>
              <p class="mb-4 font-14">Ecom NSL offers high-quality skincare with exceptional customer service
                & global sourcing.
              </p>
              <a href="{{ route('ecom-nsl') }}" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
            <div class="feature-item p-4">
              <div class="feature-icon icon-background p-4 mb-4">
                <!-- <i class="fa-light fa-gear fa-4x text-primary"></i> -->
                <!-- <i class="fa-light fa-gear fa-4x text-primary"></i> -->
                <!-- <i class="fa-light fa-tachograph-digital"></i> -->
                <i class="fas fa-digital-tachograph fa-4x text-primary"></i>
                <!-- <i class="fas fa-database fa-4x text-primary"></i> -->
                <!-- <i class="fas fa-file-alt fa-4x text-primary"></i> -->
              </div>
              <h4>Software</h4>
              <p class="mb-4 font-14">
                Shohoz Soft provides affordable IT solutions for e-commerce and startups.
              </p>
              <a href="{{ route('shohoz-soft') }}" class="btn btn-primary rounded-pill py-2 px-4">Learn
                More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
            <div class="feature-item p-4">
              <div class="feature-icon icon-background p-4 mb-4">
                <!-- <i class="fa-light fa-shop fa-4x text-primary"></i> -->
                <i class="fas fa-store fa-4x text-primary"></i>
                <!-- <i class="fa-light fa-money-bill-trend-up fa-4x text-primary"></i> -->
                <!-- <i class="fas fa-hand-holding-usd fa-4x text-primary"></i> -->
              </div>
              <h4>Super Shop</h4>
              <p class="mb-4 font-14">
                Shohoz Shodai offers convenient online grocery shopping with quality organic products.
              </p>
              <a href="{{ route('shodai') }}" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
            <div class="feature-item p-4">
              <div class="feature-icon icon-background p-4 mb-4">
                <i class="fas fa-shipping-fast fa-4x text-primary"></i>
              </div>
              <h4>Courier</h4>
              <p class="mb-4 font-14">
                Needx Courier offers reliable, efficient courier and logistics services locally and
                internationally.
              </p>
              <a href="{{ route('needx') }}" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
            <div class="feature-item p-4">
              <div class="feature-icon icon-background p-4 mb-4">
                <i class="fas fa-laptop-house fa-4x text-primary"></i>
                <!-- <i class="fas fa-wheat-awn fa-4x text-primary"></i> -->
              </div>
              <h4>Dairy and Poultry Farm</h4>
              <p class="mb-4 font-14">
                Need Agro Complex blends sustainable farming with cultural heritage experiences.
              </p>
              <a href="{{ route('farm') }}" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- Features Start -->
  <div class="container-fluid service pb-5 py-5">
    <div class="container-fluid service pb-5">
      <div class="container pb-5">
        <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
          <h4 class="text-center text-primary">Our Core Features</h4>
          <h1 class="text-center mb-4">Innovating to Meet Your Needs</h1>
          <p class="mb-0 text-left font-14">
            Explore our diverse services, designed to meet your unique needs with innovative, personalized solutions.
            From seamless e-commerce experiences and advanced software development to reliable export-import
            services and fresh agricultural products, Need Standard Ltd. is committed to quality, efficiency,
            and customer satisfaction, redefining industry standards and driving sustainable growth globally.
          </p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-item">
              <div class="service-img">
                <img src="{{ asset('/') }}frontend-assets/images/ma.png" class="img-fluid rounded-top w-100" alt="Image"
                  style="height: 200px;">
              </div>
              <div class="rounded-bottom p-4">
                <a href="{{ route('trade') }}" class="h4 d-inline-block mb-4">M.A Trade Corporation</a>
                <p class="mb-4">M.A Trade Corporation is a leading export and...
                </p>
                <a href="{{ route('trade') }}" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
            <div class="service-item">
              <div class="service-img">
                <img src="{{ asset('/') }}frontend-assets/images/ecom-nsl.jpg" class="img-fluid rounded-top w-100"
                  alt="Image">
              </div>
              <div class="rounded-bottom p-4">
                <a href="{{ route('ecom-nsl') }}" class="h4 d-inline-block mb-4">Ecom NSL</a>
                <p class="mb-4 font-14">Ecom NSL is a leading e-commerce platform specializing...
                </p>
                <a href="{{ route('ecom-nsl') }}" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
            <div class="service-item">
              <div class="service-img">
                <img src="{{ asset('/') }}frontend-assets/images/ai-1.png" class="img-fluid rounded-top w-100"
                  alt="Image">
              </div>
              <div class="rounded-bottom p-4">
                <a href="{{ route('shohoz-soft') }}" class="h4 d-inline-block mb-4">Shohoz Soft</a>
                <p class="mb-4 font-14">Shohoz Soft is a promising new IT firm dedicated to providing..
                </p>
                <a href="{{ route('shohoz-soft') }}" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-item">
              <div class="service-img">
                <img src="{{ asset('/') }}frontend-assets/images/sodai-1.png" class="img-fluid rounded-top w-100"
                  alt="Image">
              </div>
              <div class="rounded-bottom p-4">
                <a href="{{ route('shodai') }}" class="h4 d-inline-block mb-4">Shohoz Shodai</a>
                <p class="mb-4 font-14">ShohozShodai is an innovative online-based grocery store..
                </p>
                <a href="{{ route('shodai') }}" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
            <div class="service-item">
              <div class="service-img">
                <img src="{{ asset('/') }}frontend-assets/images/needx.png" class="img-fluid rounded-top w-100"
                  alt="Image">
              </div>
              <div class="rounded-bottom p-4">
                <a href="{{ route('needx') }}" class="h4 d-inline-block mb-4">Needx Courier</a>
                <p class="mb-4 font-14">Needx Courier is a dynamic courier and logistics company ...
                </p>
                <a href="{{ route('needx') }}" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
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
                <a href="{{ route('farm') }}" class="h4 d-inline-block mb-4">Need Agro Complex</a>
                <p class="mb-4 font-14">Need Agro Complex is a distinctive farm dedicated to...
                </p>
                <a href="{{ route('farm') }}" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
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
                <a href="{{ route('realistic') }}" class="h4 d-inline-block mb-4">Realistic Business</a>
                <p class="mb-4 font-14">Realistic Business is a distinctive farm dedicated to...
                </p>
                <a href="{{ route('realistic') }}" class="btn btn-primary rounded-pill py-2 px-4">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Features End -->

  <!-- FAQs Start -->
  <div class="container-fluid faq-section py-5">
    <div class="container-fluid faq-section pb-5">
      <div class="container pb-5 overflow-hidden">
        <div class=" mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
          <h4 class="text-center text-primary">FAQs</h4>
          <h1 class="text-center display-5 mb-4">Frequently Asked Questions</h1>
          <p class="mb-0 text-left font-14">
            These are the most frequently asked questions that companies commonly inquire about. We have provided
            answers
            to address these general queries. Should you require any further assistance, please do not hesitate to
            contact us at your convenience.
          </p>
        </div>
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
              <div class="accordion-item rounded-top">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed bg-red rounded-top" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    What industries does Need Standard Ltd. operate in?
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushSection">
                  <div class="accordion-body font-14">
                    Need Standard Ltd. operates in the several industries, including export-import,
                    e-commerce,agriculture
                    software development, & agriculture,
                    with plans to expand into courier services and super shops.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    What products can customers find on Need Standard Ltd.'s e-commerce platform?
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushSection">
                  <div class="accordion-body font-14">
                    Need Standard Ltd. facilitates international trade by sourcing high-quality products and delivering
                    them efficiently to global markets, ensuring adherence to global trade standards.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    What products can customers find on Need Standard Ltd.'s e-commerce platform?
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                  data-bs-parent="#accordionFlushSection">
                  <div class="accordion-body font-14">
                    Customers can find a wide range of products, including beauty & skincare items, electronics,
                    household
                    essentials,
                    & more, all at competitive prices with fast delivery.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    What types of software does Need Standard Ltd. develop?
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                  data-bs-parent="#accordionFlushSection">
                  <div class="accordion-body font-14">
                    Need Standard Ltd. expertly specializes in developing enterprise software, mobile applications and
                    cloud systems tailored to the
                    needs of modern businesses, focusing on innovation and the customer needs.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    How does Need Standard Ltd. ensure customer satisfaction in all its sectors?
                  </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                  data-bs-parent="#accordionFlushSection">
                  <div class="accordion-body font-14">
                    Need Standard Ltd. prioritizes customer satisfaction by offering high-quality products, reliable
                    services, and constant
                    innovation to meet customer needs across various sectors.
                  </div>
                </div>
              </div>
              <div class="accordion-item rounded-bottom">
                <h2 class="accordion-header" id="flush-headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    What steps does Need Standard Ltd. take to stay ahead of industry trends?
                  </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                  data-bs-parent="#accordionFlushSection">
                  <div class="accordion-body font-14">
                    Need Standard Ltd. reliably stays ahead by constantly investing in innovation, exploring new market
                    opportunities, and aligning its
                    services with the latest industry standards and customer demands.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
            <div class="bg-primary rounded">
              <img src="{{ asset('/') }}frontend-assets/images/question.png" class="img-fluid w-100 rounded" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FAQs End -->

  <!-- Team Start -->
  <div class="container-fluid team pb-5 py-5">
    <div class="container-fluid team pb-5">
      <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
          <h4 class="text-primary">Meet the Visionaries</h4>
          <h1 class="display-5 mb-4">Our Expert Advisers and Key Contributors</h1>
          <p class="mb-0">Our trusted advisers play a pivotal role in our success, offering valuable insights,
            strategic guidance, and expertise. Their leadership drives our growth and fuels innovation, ensuring
            sustainable development and market leadership.
          </p>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
            <div class="team-item">
              <div class="team-img">
                <img src="{{ asset('/') }}frontend-assets/images/md_sir.png" class="img-fluid" alt="">
              </div>
              <div class="team-title">
                <h4 class="mb-0">Md. Jakaria Hossen</h4>
                <p class="mb-0">Chief Executive Officer (CEO)</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
            <div class="team-item">
              <div class="team-img">
                <img src="{{ asset('/') }}frontend-assets/images/bappy.jpg" class="img-fluid" alt="">
              </div>
              <div class="team-title">
                <h4 class="mb-0">Md. Nuruddin</h4>
                <p class="mb-0">Chief Operating Officer (COO)</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
            <div class="team-item">
              <div class="team-img">
                <img src="{{ asset('/') }}frontend-assets/images/uncle-pp.png" class="img-fluid" alt="">
              </div>
              <div class="team-title">
                <h4 class="mb-0">Md. Mohammad Ferdous</h4>
                <p class="mb-0">General Manager</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Team End -->

  

</main>
@endsection