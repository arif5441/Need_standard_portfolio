{{-- topbar start --}}
<div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center  px-4" style="height: 45px;">
        <div class="col-lg-12 text-right text-lg-start text-top-right mb-2 mb-lg-0 text-left">
            <div class=" flex-wrap">
                <a href="javascript:void(0)" class="text-muted small me-4" id="find-location">
                    <i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location
                </a>                
                <a href="tel:+88 01999-525008" class="text-muted small me-4"><i
                        class="fas fa-phone-alt text-primary me-2"></i>+88 01999-525008
                </a>
                <a href="mailto:needstandardltd24@gmail.com" class="text-muted small me-0"><i
                        class="fas fa-envelope text-primary me-2"></i>needstandardltd24@gmail.com</a>
            </div>
        </div>

        <!-- <div class="col-lg-4 text-center text-lg-end">
        <div class="d-inline-flex align-items-center" style="height: 45px;">
          <a href="#"><small class="me-3 text-dark"><i class="fa fa-user text-primary me-2"></i>Register</small></a>
          <a href="#"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
          <div class="dropdown">
            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i
                  class="fa fa-home text-primary me-2"></i> My Dashboard</small></a>
            <div class="dropdown-menu rounded">
              <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
              <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
              <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
              <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
              <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
            </div>
          </div>
        </div>
      </div> -->
    </div>
</div>
<!-- Top bar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <img src="{{ asset('/') }}frontend-assets/images/Nsl Logo-01.png" class="" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
                <a href="{{ route('blog') }}" class="nav-item nav-link">Blog</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown">
                        <span class="dropdown-toggle">Pages</span>
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('features') }}" class="dropdown-item">Our Features</a>
                        <a href="{{ route('needx') }}" class="dropdown-item">NeedX</a>
                        <a href="{{ route('shodai') }}" class="dropdown-item">Shodai</a>
                        <a href="{{ route('ecom-nsl') }}" class="dropdown-item">Ecom NSL</a>
                        <a href="{{ route('shohoz-soft') }}" class="dropdown-item">Shohoz Soft</a>
                        <a href="{{ route('trade') }}" class="dropdown-item">Trade</a>
                        <a href="{{ route('farm') }}" class="dropdown-item">Farm</a>
                        <a href="{{ route('team') }}" class="dropdown-item">Our Team</a>
                        <a href="{{ route('faqs') }}" class="dropdown-item">FAQs</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Header Start -->

    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->