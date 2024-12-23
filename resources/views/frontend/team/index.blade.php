@extends('frontend.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb bg-img-team">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Team</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Team</li>
        </ol>
    </div>
</div>
<!-- Header End -->
<!-- Team Start -->
<div class="container-fluid team pb-5 py-5">
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Meet the Visionaries</h4>
                <h1 class="display-5 mb-4">Our Expert Advisers and Key Contributors</h1>
                <p class="mb-0 font-14">Our trusted advisers play a pivotal role in our success, offering valuable
                    insights,
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
                            <p class="mb-0 font-14">Chief Executive Officer (CEO)</p>
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
                            <p class="mb-0 font-14">Chief Operating Officer (COO)</p>
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
                            <p class="mb-0 font-14">General Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team End -->
@endsection