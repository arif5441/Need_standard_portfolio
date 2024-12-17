<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5 border-start-0 border-end-0"
        style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item">
                    <a href="#" class="p-0">
                        <img src="{{ asset('/') }}frontend-assets/images/Nsl-Logo-white.png" class="logo-img-width-20" alt="" />
                        <!-- <h4 class="text-white"><i class="fas fa-search-dollar me-3"></i>Stocker</h4> -->
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <p class="mb-4">Need Standard Ltd. is transforming industries through innovative digital
                        solutions in
                        export-import, e-commerce, software development, and agriculture..</p>
                </div>
                <div class="footer-item">
                    <a href="#" class="p-0">
                        <h4 class="text-white"><i class="fas fa-map-marker-alt text-primary me-3"></i>Address</h4>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <p class="mb-4">Rahmania International Complex 28/1/C Toyenbee Circular Road, Level#12, Room#12,
                        Motijheel C/A Dhaka-1000</p>
                </div>

            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="rounded h-100">
                    <!-- Map Embed -->
                    <!-- <CommonMapEmbed :lat="23.731077700292044" :lng="90.41638526309474" height="500px" /> -->

                    <iframe class="rounded h-100 w-100" :style="{ height: height }" :src="mapUrl" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Contact Info</h4>

                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope text-primary me-3"></i>
                        <p class="text-white mb-0">needstandardltd24@gmail.com</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-phone-alt text-primary me-3"></i>
                        <div>
                            <p class="text-white mb-0">09657247204</p>                 
                           <p class="text-white mb-0">+88 01999-525008 </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fab fa-firefox-browser text-primary me-3"></i>
                        <p class="text-white mb-0">www.needstandardltd.com</p>
                    </div>
                    <div class="d-flex">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i
                                class="fab fa-facebook-f text-white"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i
                                class="fab fa-twitter text-white"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i
                                class="fab fa-instagram text-white"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i
                                class="fab fa-linkedin-in text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-md-12 text-center text-md-start text-footer-center mb-md-0">
          <span class="text-body">
            <a href="#" class="text-white">
              <i class="fas fa-copyright text-light me-2"></i> 
              <img src="{{ asset('/') }}frontend-assets/images/Nsl-Logo-white.png" class="logo-img-width" alt="" style="width: 60px;" />
            </a>
             , All rights reserved.
          </span>
        </div>

      </div>
    </div>
  </div>
  <!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}frontend-assets/lib/wow/wow.min.js"></script>
<script src="{{ asset('/') }}frontend-assets/lib/easing/easing.min.js"></script>
<script src="{{ asset('/') }}frontend-assets/lib/waypoints/waypoints.min.js"></script>
<script src="{{ asset('/') }}frontend-assets/lib/counterup/counterup.min.js"></script>
<script src="{{ asset('/') }}frontend-assets/lib/lightbox/js/lightbox.min.js"></script>
<script src="{{ asset('/') }}frontend-assets/lib/owlcarousel/owl.carousel.min.js"></script>




<!-- Template Javascript -->
<!-- <script src="js/main.js"></script> -->

<script src="{{ asset('/') }}frontend-assets/js/main.js" defer></script>

</body>

</html>