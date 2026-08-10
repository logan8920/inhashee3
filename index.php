<?php
ini_set("display_error", -1);
error_reporting(0); include 'inc/header.php'; ?>
<style type="text/css">
    #foreground-video-container {
        position: relative;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: flex;
        justify-content: right;
        align-items: center;
        right: 10%;
    }

    .__web-inspector-hide-shortcut__,
    .__web-inspector-hide-shortcut__ *,
    .__web-inspector-hidebefore-shortcut__::before,
    .__web-inspector-hideafter-shortcut__::after {
        visibility: hidden !important;
    }

    #background-video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1;
        transform: translate(-50%, -50%);
        filter: blur(10px);
    }


    .videoSliderSection.newVideoSd .video video {
        width: 100%;
        min-height: 100vh;
    }

    #foreground-video {
        max-width: 100%;
        max-height: 100%;
    }

    div.other-detail-slider .slick-list {
        padding: 0 0;
    }

    h5.card-title {
        font-size: 14px;
        font-weight: bolder;
    }

    p.card-text {
        font-size: 14px;
    }

    .other-detail-slider img.img-fluid {
        border-radius: 48px;
    }
</style>
<!-- Bannner  -->
<section class="banner" data-aos="fade-up">
    <div class="row fullwidth">
        <div class="col-md-12 p-0">
            <ul class="bannerSlider">
                <!--  1. slide  -->
                <li class="slide">
                    <a href="#">
                        <div class="slide__text" data-aos="fade-right" data-aos-duration="2000">
                            <h1 data-aos="fade-up" data-aos-duration="2000">Inhashee</h1>
                            <h4 data-aos="fade-up" data-aos-duration="4000">Committed to Excellence</h>
                                <!-- <button class="btn btn-main" href="javascript:;">
                                        <span>CALL NOW</span>
                                    </button> -->
                        </div>
                        <div class="slide__image" data-aos="fade-left" data-aos-duration="2000">
                            <video loop="" muted="" preload="metadata" autoplay="" id="background-video">
                                <source src="assets/images/about_gif.mp4" type="video/mp4">
                            </video>
                            <div id="foreground-video-container">
                                <video autoplay="" muted="" loop="" id="foreground-video">
                                    <source src="assets/images/about_gif.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="fixed-content mt-0 h-50">
    <div class="inner-content w-75" style="max-width: 75%;">
        <h2 class="mt-5" data-aos="fade-up" data-aos-duration="4000">OUR RESULT</h2>
        <div class="other-detail-slider mb-5">
            <div class="other-detail-item" data-aos="fade-up" data-aos-duration="2000">
                <img loading="lazy" class="img-fluid" src="assets/images/after_before_1.png?v=2323" alt="">
            </div>
            <div class="other-detail-item" data-aos="fade-up" data-aos-duration="4000">
                <img loading="lazy" class="img-fluid" src="assets/images/after_before_2.png?v=2323" alt="">
            </div>
            <div class="other-detail-item" data-aos="fade-up" data-aos-duration="6000">
                <img loading="lazy" class="img-fluid" src="assets/images/after_before_3.png?v=2323" alt="">
            </div>
            <div class="other-detail-item" data-aos="fade-up" data-aos-duration="6000">
                <img loading="lazy" class="img-fluid" src="assets/images/after_before_4.jpg" alt="">
            </div>
            <div class="other-detail-item" data-aos="fade-up" data-aos-duration="6000">
                <img loading="lazy" class="img-fluid" src="assets/images/after_before_5.jpg" alt="">
            </div>
            <div class="other-detail-item" data-aos="fade-up" data-aos-duration="6000">
                <img loading="lazy" class="img-fluid" src="assets/images/after_before_6.jpg" alt="">
            </div>
            <div class="other-detail-item" data-aos="fade-up" data-aos-duration="6000">
                <img loading="lazy" class="img-fluid" src="assets/images/after_before_7.jpg" alt="">
            </div>
            <div class="other-detail-item" data-aos="fade-up" data-aos-duration="6000">
                <img loading="lazy" class="img-fluid" src="assets/images/after_before_8.jpg" alt="">
            </div>
            <div class="other-detail-item" data-aos="fade-up" data-aos-duration="6000">
                <img loading="lazy" class="img-fluid" src="assets/images/after_before_9.jpg" alt="">
            </div>
            <div class="other-detail-item" data-aos="fade-up" data-aos-duration="6000">
                <img loading="lazy" class="img-fluid" src="assets/images/after_before_10.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="h-100" data-aos="fade-up">
    <div class="container">
        <div class="row mt-5 mb-5 justify-content-center gx-2">
            <div class="cmpy-info-detail-slider w-75">
                <div class="col-md-3 cmpy-info-detail-item">
                    <div class="border-0 card" style="width: 18rem;">
                        <img loading="lazy" src="/assets/images/Customer-Centric Approach.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Customer-Centric Approach</h5>
                            <p class="card-text">We value our customers and strive to exceed their expectations with
                                every product and interaction. Our goal is to build lasting relationships based on
                                trust, satisfaction, and shared values.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 cmpy-info-detail-item">
                    <div class="border-0 card" style="width: 18rem;">
                        <img loading="lazy" src="/assets/images/smart-agri.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sustainability</h5>
                            <p class="card-text">We are committed to sustainable farming practices that respect the
                                environment and ensure the well-being of our goats. Our methods are designed to promote
                                ecological balance and reduce our carbon footprint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 cmpy-info-detail-item">
                    <div class="border-0 card" style="width: 18rem;">
                        <img loading="lazy" src="/assets/images/Innovation and Artistry.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Innovation and Artistry</h5>
                            <p class="card-text">We embrace innovation in our production processes and product
                                offerings. Our artisanal approach to dairy production reflects our dedication to
                                craftsmanship and the creation of unique, flavorful products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 cmpy-info-detail-item">
                    <div class="border-0 card" style="width: 18rem;">
                        <img loading="lazy" src="/assets/images/Transparency and Integrity.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Transparency and Integrity</h5>
                            <p class="card-text">We operate with transparency and integrityin all aspects of our
                                business. From ingredient sourcing to production methods, we ensure our customers know
                                exactly what goes into their dairy products.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-body-secondary custom-review">
    <div class="container">
        <h2>Happy Customers</h2>
        <div class="custom-slider mt-5">
            <div class="custom-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="custom-img">
                            <img class="img-fluid" src="assets/images/customer1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <div class="custom-detail">
                            <p>"I absolutely love this hair product! My hair is straight and tends to get dry, but this keeps it soft and moisturized without weighing it down. The shine it gives is incredible, and the light fragrance is so refreshing. After using it for a few weeks, my hair feels stronger and healthier. Definitely a must-have for straight hair care!"</p>
                            <div class="names">
                                <h6>- Priya</h6>
                                <div class="review">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="custom-img">
                            <img class="img-fluid" src="/assets/images/customer2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <div class="custom-detail">
                            <p>"As someone with curly hair, finding the right product is tough, but this one works like a charm. It defines my curls beautifully while keeping the frizz under control. My hair feels hydrated and bouncy all day. I also love how it doesn't leave any residue. Highly recommend it for anyone with curls!"</p>
                            <div class="names">
                                <h6>- Anjali</h6>
                                <div class="review">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="custom-img">
                            <img class="img-fluid" src="assets/images/customer1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <div class="custom-detail">
                            <p>"I absolutely love this hair product! My hair is straight and tends to get dry, but this keeps it soft and moisturized without weighing it down. The shine it gives is incredible, and the light fragrance is so refreshing. After using it for a few weeks, my hair feels stronger and healthier. Definitely a must-have for straight hair care!"</p>
                            <div class="names">
                                <h6>- Priya</h6>
                                <div class="review">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="custom-img">
                            <img class="img-fluid" src="/assets/images/customer2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <div class="custom-detail">
                            <p>"As someone with curly hair, finding the right product is tough, but this one works like a charm. It defines my curls beautifully while keeping the frizz under control. My hair feels hydrated and bouncy all day. I also love how it doesn't leave any residue. Highly recommend it for anyone with curls!"</p>
                            <div class="names">
                                <h6>- Anjali</h6>
                                <div class="review">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section>
            <div class="container py-5">
                <h2 class="text-center mb-5">Before & After Comparison</h2>
                <div class="comparison-container">
                    
                    <video loop="" muted="" preload="metadata" autoplay="" id="">
                        <source src="assets/videos/2.mp4" type="video/mp4">
                    </video>
                    <span class="label label-after">After</span>

                   
                    <div class="slider">
                        <video loop="" muted="" preload="metadata" autoplay="" id="">
                            <source src="assets/videos/1.mp4" type="video/mp4">
                        </video>
                        <span class="label">Before</span>
                    </div>

                    
                    <div class="slider-handle"></div>
                </div>
            </div>
        </section> -->

<?php include 'inc/footer.php'; ?>