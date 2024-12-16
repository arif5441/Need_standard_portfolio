<template>
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
            <p class="mb-1">
              Need Standard Ltd., founded in 2007 by Md. Jakaria Hossen, who
              leads in export, import, e-commerce, software, and agriculture, is
              committed to innovation and quality.
            </p>
            <p class="">
              Over the years, the company has evolved into a versatile
              enterprise with a diverse portfolio spanning several industries,
              including export/import, e-commerce, software development, and
              agriculture. Guided by a vision of excellence and innovation, Need
              Standard Ltd. continues to expand its operations and market
              presence globally.
            </p>
            <h4 class="">Mission</h4>
            <p class="">
              To deliver innovative, high-quality solutions and services across
              multiple industries, driving customer satisfaction, economic
              growth, and sustainability.
            </p>
            <h4 class="">Vision</h4>
            <p class="mb-2">
              To be a globally trusted and recognized leader in innovation and
              excellence, creating value for stakeholders while positively
              impacting society and the environment.
            </p>

            <h4 class="">Export-Import</h4>
            <p class="">
              In the export-import sector, the company plays a vital role in
              facilitating international trade by sourcing high-quality products
              and delivering them efficiently to consumers. Its adherence to
              global trade standards and commitment to timely service have
              earned it a strong reputation in the industry
            </p>

            <h4 class="">E-commerce</h4>
            <p class="">
              The e-commerce division operates an advanced online platform,
              providing customers with a seamless shopping experience. From
              beauty and skincare products to electronics and household
              essentials, the platform ensures quality, competitive pricing, and
              prompt delivery.
            </p>

            <h4 class="">Software Farm</h4>
            <p class="">
              As a software company, Need Standard Ltd. focuses on developing
              cutting-edge solutions tailored to the needs of modern businesses,
              including enterprise software, mobile apps, and cloud systems. Its
              innovative and customer-centric approach drives its success in the
              tech industry.
            </p>
            <h4 class="">Agro Farm and Courier</h4>
            <p class="">
              Additionally, the company has ventured into agriculture with a
              successful dairy and poultry farm, delivering fresh and
              high-quality products to consumers. With plans to launch a courier
              service and establish a chain of super shops, Need Standard Ltd.
              aims to enhance convenience and reliability for its customers
              while broadening its reach.
            </p>
            
            <div class="row g-4">
              <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="d-flex">
                  <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                  <div class="ms-4">
                    <h4>Empowering Growth</h4>
                    <p>
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
                    <h4>Year Of Expertise</h4>
                    <p>
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
                    <h4>Call Us</h4>
                    <p class=" fs-5" style="letter-spacing: 1px">
                      +01234567890
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
          <div class="bg-primary rounded position-relative overflow-hidden">
            <img src="/images/about-side-image-1.png" class="img-fluid rounded w-100" alt="" />

            <div class="" style="position: absolute; top: -15px; right: -15px">
              <img src="/images/about-side-image-1.png" class="img-fluid"
                style="width: 150px; height: 150px; opacity: 0.7" alt="" />
            </div>
            <div class="" style="
                position: absolute;
                top: -20px;
                left: 10px;
                transform: rotate(90deg);
              ">
              <img src="/images/about-side-image-1.png" class="img-fluid"
                style="width: 100px; height: 150px; opacity: 0.9" alt="" />
            </div>
            <div class="rounded-bottom">
              <img src="/images/about-side-image-2.png" class="img-fluid rounded-bottom w-100" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
// Set SEO-related head tags
useHead({
  title:'About Us',
  meta: [
    { name: 'description', content: 'Need Standard Ltd., founded in 2007 by Md. Jakaria Hossen, who leads in export, import, e-commerce, software, and agriculture, is committed to innovation and quality.' },
    { property: 'og:image', content: '/images/about-side-image-1.png' },
    { property: 'og:image', content: '/images/about-side-image-2.png' },
  ],
});
</script>
