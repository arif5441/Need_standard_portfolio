<template>
 <!-- Service Start -->
    <div class="container-fluid feature pb-5 mt-5">
        <div class="container-fluid feature pb-5">
            <div class="container pb-5">
                <div class=" mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" >

                    <h3 class="text-primary text-center">Explore Our Services</h3>
                    <h1 class="text-center mb-4">Transforming Business Through Innovation and Digital Solutions.</h1>
                    <p class="mb-0 text-left">
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
                            <p class="mb-4">
                                M. A Trade Corporation excels in global export-import, logistics, and compliant trade solutions.
                            </p>
                             <NuxtLink to="/trade" class="btn btn-primary rounded-pill py-2 px-4">Learn More</NuxtLink>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4">
                            <div class="feature-icon icon-background p-4 mb-4">
                                <i class="fas fa-shopping-cart fa-4x text-primary"></i>
                            </div>
                            <h4>E-commerce</h4>
                            <p class="mb-4">Ecom NSL offers high-quality skincare with exceptional customer service & global sourcing.
                            </p>
                           <NuxtLink to="/ecom-nsl" class="btn btn-primary rounded-pill py-2 px-4">Learn More</NuxtLink>
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
                            <p class="mb-4">
                                Shohoz Soft provides affordable IT solutions for e-commerce and startups.
                            </p>
                             <NuxtLink to="/soft" class="btn btn-primary rounded-pill py-2 px-4">Learn More</NuxtLink>
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
                            <p class="mb-4">
                                Shohoz Sodai offers convenient online grocery shopping with quality organic products.
                            </p>
                            <NuxtLink to="/sodai" class="btn btn-primary rounded-pill py-2 px-4">Learn More</NuxtLink>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4">
                            <div class="feature-icon icon-background p-4 mb-4">
                                <i class="fas fa-shipping-fast fa-4x text-primary"></i>
                            </div>
                            <h4>Courier</h4>
                            <p class="mb-4">
                                Needx Courier offers reliable, efficient courier and logistics services locally and internationally.
                            </p>
                            <NuxtLink to="/needx" class="btn btn-primary rounded-pill py-2 px-4">Learn More</NuxtLink>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4">
                            <div class="feature-icon icon-background p-4 mb-4">
                                <i class="fas fa-laptop-house fa-4x text-primary"></i>
                                <!-- <i class="fas fa-wheat-awn fa-4x text-primary"></i> -->
                            </div>
                            <h4>Dairy and Poultry Farm</h4>
                            <p class="mb-4">
                                M.A Dairy and Poultry Farm blends sustainable farming with cultural heritage experiences.
                            </p>
                            <NuxtLink to="/farm" class="btn btn-primary rounded-pill py-2 px-4">Learn More</NuxtLink>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service End -->
</template>

<script setup>
useHead({
    title: 'Services',
    meta: [
        {
            name: 'description',
            content: 'Need Standard Ltd. is transforming industries through innovative digital solutions in export-import, e-commerce, software development, and agriculture. The company drives growth and sustainability, empowering businesses to thrive in a fast-paced digital world and global markets.'
        },
        {
            name: 'keywords',
            content: 'Need Standard Ltd., export-import, e-commerce, software development, agriculture, digital solutions, growth, sustainability, global markets'
        }
    ]
})
</script>
