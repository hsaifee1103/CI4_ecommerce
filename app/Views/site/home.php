<?php include 'includes/header.php'; ?>
    <!-- Exclusive Bar -->
    <section id="exclusive-bar" class="exclusive-bar py-3">
        <!-- Club join banner -->
        <a href="the99store.html"><img src="<?= base_url() ?>/assets/site/img/cosmo-learn-more-banner.webp" alt=""
                class="img-fluid d-none d-md-block"></a>
        <a href="the99store.html"> <img src="<?= base_url() ?>/assets/site/img/cosmo-learn-more-banner-mobile.webp" alt=""
                class="img-fluid d-block d-md-none"></a>
        <!-- Club join banner -->
    </section>

    <!-- ======= Hero Section ======= -->
    <section id="carousel" class="pt-0">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <!-- slide-1 -->
                <div class="swiper-slide">
                    <section id="hero-one" class="d-flex align-items-center hero-one">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div
                                    class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center animated">
                                    <div class="hero-box  w-md-75 p-md-5" data-aos="slide-down">
                                        <h1 class="animate__animated animate__backInDown"> Jesebelle
                                            Collection
                                        </h1>
                                        <h2 class="animate__animated animate__zoomIn">DISCOVER HANDMADE LUXURY
                                        </h2>
                                        <div><a href="<?= base_url('shop') ?>"
                                                class="btn-get-started scrollto animate__animated animate__zoomIn">SHOP
                                                NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in"
                                    data-aos-delay="150">
                                    <!-- <img src="assets/img/hero-img.png" class="img-fluid animated" alt=""> -->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- slide-2 -->
                <div class="swiper-slide">
                    <section id="hero-two" class="d-flex align-items-center">
                        <div class="container-fluid" data-aos="fade-up">
                            <div class="row justify-content-center">
                                <div
                                    class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-start animated">
                                    <div class="hero-box  w-md-75 p-md-5" data-aos="fade-up" data-aos-delay="70">
                                        <h1 class="text-md-white text-black"> Amedeus Jewerly Collection</h1>
                                        <h2>New In our shop </h2>
                                        <div><a href="<?= base_url('shop') ?>" class="btn-get-started scrollto">Get Started</a></div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in"
                                    data-aos-delay="150">
                                </div>

                            </div>
                        </div>
                    </section>
                </div>

                <!-- slide-3 -->
                <div class="swiper-slide">
                    <section id="hero-three" class="d-flex align-items-center">
                        <div class="container-fluid" data-aos="fade-up">
                            <div class="row justify-content-center">
                                <div
                                    class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-1 order-lg-2 d-flex flex-column justify-content-center">
                                    <div class="hero-box w-75 p-5">
                                        <h1>Golder Sphere</h1>
                                        <h2>
                                            A NECKLACE WITH HISTORY
                                        </h2>
                                        <div><a href="<?= base_url('shop') ?>" class="btn-get-started scrollto">Get Started</a></div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 order-2 order-lg-1 hero-img" data-aos="zoom-in"
                                    data-aos-delay="150">

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="swiper-pagination d-none"></div>
        </div>
    </section>

    <!-- Main Section -->
    <main id="main">

        <!-- ======= Categories boxes For You ======= -->
        <div class="container mt-4">
            <div class="section-title pt-md-5">
                <h2>Start Exploring</h2>
            </div>
        </div>

        <section id="collection" class="mt-0 p-0">
            <div class="container">
                <div class="row gy-3 gx-2 ">

                    <!-- Earings -->
                    <?php foreach($category as $value): ?>
                    <div class="col-md-4 col-6 d-flex justify-content-center align-items-center">
                        <div class="box d-flex justify-content-center align-items-center w-100" id="<?= slugify($value['title']) ?>" style="background-image: url(<?= base_url($value['image']) ?>);">

                            <h1 class="text-center"> <a href="<?= base_url('shop/category'). get_slug_url($value) ?>" class="text-dark">
                                    <?=  $value['title'] ?>
                                </a></h1>

                        </div>

                    </div>
                    <?php endforeach; ?>

                    

                </div>
            </div>
        </section>
        <!-- End Categories boxes -->

        <!-- ======= Tiyas recommends For You ======= -->
        <section id="top-picks" class="top-picks">
            <div class="container">
                <div class="section-title pt-5">
                    <h2>Tiya's Recommends</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="top-picks-carousel owl-carousel owl-theme">

                        <div class="item">
                            <a href="./productpage.html">
                                <div class="pick-box">
                                    <div class="image">
                                        <img src="asset/img/new-images/recomends/1.jpeg" alt="" class="w-100 img-fluid">
                                    </div>
                                    <div class="content fn-enter fn-enter">
                                        <p class="catagory mb-0">Earrings</p>
                                        <p class="name mb-0">Name of Product</p>
                                        <p class="description mb-0">Lorem ipsum dolor, </p>
                                        <p class="price">Rs. 1,30,000</p>

                                    </div>
                                    <!-- <img src="<?= base_url() ?>/assets/site/img/ankles/kaju1.jpg" alt="" class="img-fluid w-100 trial"> -->
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="./productpage.html">
                                <div class="pick-box">
                                    <div class="image">
                                        <img src="asset/img/new-images/recomends/2.jpg" alt="" class="w-100 img-fluid">
                                    </div>
                                    <div class="content fn-enter">
                                        <p class="catagory mb-0">Earrings</p>
                                        <p class="name mb-0">Name of Product</p>
                                        <p class="description mb-0">Lorem ipsum dolor, </p>
                                        <p class="price">Rs. 1,30,000</p>

                                    </div>
                                    <!-- <img src="<?= base_url() ?>/assets/site/img/ankles/anklet2.4.jpg" alt="" class="img-fluid w-100 trial"> -->
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="./productpage.html">
                                <div class="pick-box">
                                    <div class="image">
                                        <img src="asset/img/new-images/recomends/3.jpg" alt="" class="w-100 img-fluid">
                                    </div>
                                    <div class="content fn-enter">
                                        <p class="catagory mb-0">Earrings</p>
                                        <p class="name mb-0">Name of Product</p>
                                        <p class="description mb-0">Lorem ipsum dolor, </p>
                                        <p class="price mb-0">Rs. 1,30,000</p>

                                    </div>
                                    <!-- <img src="<?= base_url() ?>/assets/site/imG/bali/gerua2 (2).jpg" alt="" class="img-fluid w-100 trial"> -->
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="./productpage.html">
                                <div class="pick-box">
                                    <div class="image">
                                        <img src="asset/img/new-images/recomends/4.jpg" alt="" class="w-100 img-fluid">
                                    </div>
                                    <div class="content fn-enter">
                                        <p class="catagory mb-0">Necklaces</p>
                                        <p class="name mb-0">Name of Product</p>
                                        <p class="description mb-0">Lorem ipsum dolor, </p>
                                        <p class="price">Rs. 1,30,000</p>

                                    </div>
                                    <!-- <img src="<?= base_url() ?>/assets/site/img/bali/gerua3 (2).jpg" alt="" class="img-fluid w-100 trial"> -->
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="./productpage.html">
                                <div class="pick-box">
                                    <div class="image">
                                        <img src="asset/img/new-images/recomends/5.jpg" alt="" class="w-100 img-fluid">
                                    </div>
                                    <div class="content fn-enter">
                                        <p class="catagory mb-0">Bracelets</p>
                                        <p class="name mb-0">Name of Product</p>
                                        <p class="description mb-0">Lorem ipsum dolor, </p>
                                        <p class="price">Rs. 1,30,000</p>

                                    </div>
                                    <!-- <img src="<?= base_url() ?>/assets/site/img/bali/IMG_20220126_154443_505.jpg" alt="" class="img-fluid w-100 trial"> -->
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="./productpage.html">
                                <div class="pick-box">
                                    <div class="image">
                                        <img src="asset/img/new-images/recomends/6.jpg" alt="" class="w-100 img-fluid">
                                    </div>
                                    <div class="content fn-enter ">
                                        <p class="catagory mb-0">Bracelets</p>
                                        <p class="name mb-0">Name of Product</p>
                                        <p class="description mb-0">Lorem ipsum dolor, </p>
                                        <p class="price">Rs. 1,30,000</p>

                                    </div>
                                    <!-- <img src="<?= base_url() ?>/assets/site/img/bali/IMG_20220126_162130_868.jpg" alt="" class="img-fluid w-100 trial"> -->
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="./productpage.html">
                                <div class="pick-box w-100">
                                    <div class="image">
                                        <img src="asset/img/new-images/recomends/6.jpg" alt="" class="w-100 img-fluid">
                                    </div>
                                    <div class="content fn-enter">
                                        <p class="catagory mb-0">Bracelets</p>
                                        <p class="name mb-0">Name of Product</p>
                                        <p class="description mb-0">Lorem ipsum dolor,</p>
                                        <p class="price">Rs. 1,30,000</p>

                                    </div>
                                    <!-- <img src="<?= base_url() ?>/assets/site/img/pick-image-1-0.webp" alt="" class="img-fluid w-100 trial"> -->
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="./productpage.html">
                                <div class="pick-box">
                                    <div class="image">
                                        <img src="asset/img/new-images/recomends/7.jpeg" alt="" class="w-100 img-fluid">
                                    </div>
                                    <div class="content fn-enter">
                                        <p class="catagory mb-0">Earrings</p>
                                        <p class="name mb-0">Name of Product</p>
                                        <p class="description mb-0">Lorem ipsum dolor, </p>
                                        <p class="price">Rs. 1,30,000</p>

                                    </div>
                                    <!-- <img src="<?= base_url() ?>/assets/site/img/pick-image-2.0.jpg" alt="" class="img-fluid w-100 trial"> -->
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="./productpage.html">
                                <div class="pick-box">
                                    <div class="image">
                                        <img src="asset/img/new-images/recomends/8.jpeg" alt="" class="w-100 img-fluid">
                                    </div>
                                    <div class="content fn-enter">
                                        <p class="catagory mb-0">Earrings</p>
                                        <p class="name mb-0">Name of Product</p>
                                        <p class="description mb-0">Lorem ipsum dolor, </p>
                                        <p class="price">Rs. 1,30,000</p>

                                    </div>
                                    <!-- <img src="<?= base_url() ?>/assets/site/img/pick-image-3-0.webp" alt="" class="img-fluid w-100 trial"> -->
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="./productpage.html">
                                <div class="pick-box">
                                    <div class="image">
                                        <img src="asset/img/new-images/recomends/9.jpeg" alt="" class="w-100 img-fluid">
                                    </div>
                                    <div class="content fn-enter">
                                        <p class="catagory mb-0">Earrings</p>
                                        <p class="name mb-0">Name of Product</p>
                                        <p class="description mb-0">Lorem ipsum dolor, </p>
                                        <p class="price">Rs. 1,30,000</p>

                                    </div>
                                    <!-- <img src="<?= base_url() ?>/assets/site/img/pick-image-3-0.webp" alt="" class="img-fluid w-100 trial"> -->
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="./productpage.html">
                                <div class="pick-box">
                                    <div class="image">
                                        <img src="asset/img/new-images/recomends/10.jpeg" alt="" class="w-100 img-fluid">
                                    </div>
                                    <div class="content fn-enter">
                                        <p class="catagory mb-0">Earrings</p>
                                        <p class="name mb-0">Name of Product</p>
                                        <p class="description mb-0">Lorem ipsum dolor, </p>
                                        <p class="price">Rs. 1,30,000</p>

                                    </div>
                                    <!-- <img src="<?= base_url() ?>/assets/site/img/pick-image-3-0.webp" alt="" class="img-fluid w-100 trial"> -->
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="./productpage.html">
                                <div class="pick-box">
                                    <div class="image">
                                        <img src="asset/img/new-images/recomends/11.jpg" alt="" class="w-100 img-fluid">
                                    </div>
                                    <div class="content fn-enter">
                                        <p class="catagory mb-0">Earrings</p>
                                        <p class="name mb-0">Name of Product</p>
                                        <p class="description mb-0">Lorem ipsum dolor, </p>
                                        <p class="price">Rs. 1,30,000</p>

                                    </div>
                                    <!-- <img src="<?= base_url() ?>/assets/site/img/pick-image-3-0.webp" alt="" class="img-fluid w-100 trial"> -->
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- =======Tiyas recommends For You ======= -->

        <!-- Shop the Collection -->
        <section id="shop-collection" class="shop-collection mb-2 pb-0">
            <div class="container-fluid">
                <div class="section-title pt-5">
                    <h2>Shop the collection</h2>
                </div>
                <div class="row g-0">
                    <?php foreach($colors as $value): ?>
                    <div class="col-md-4 col-4">

                        <div class="box-main text-center px-md-5 px-2 py-3">

                            <!-- Oxidized -->
                            <a href="<?= base_url('shop/colors'). get_slug_url($value) ?>" class="text-dark">
                                <div class="image mx-md-4">
                                    <img src="<?= base_url($value['image']) ?>" alt=""
                                        class="rounded-pill img-fluid h-100">
                                </div>
                                <div class="head mt-3 ">
                                    <h5 class="fs-4 text-uppercase fw-bolder"><?= $value['title'] ?></h5>
                                </div>
                            </a>

                            

                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>

        </section>
        <!--End the Shop collection-->

        <!-- Exclusive Bar two -->
        <section id="exclusive-bar" class="exclusive-bar m-0 exclusive-bar-two pt-3">
            <!-- solitiar collect join banner -->
            <img src="<?= base_url() ?>/assets/site/img/DIVA_Divine.webp" alt="" class="img-fluid d-none d-md-block">
            <img src="<?= base_url() ?>/assets/site/img/DIVA_Divine_phone.webp" alt="" class="img-fluid d-block d-md-none">
            <!-- Club join banner -->
        </section>

        <!-- Exclusive Bar three -->
        <section id="exclusive-bar" class="exclusive-bar m-0 exclusive-bar-three py-3">
            <!-- Animal Love banner -->
            <img src="<?= base_url() ?>/assets/site/img/Animal_Themed.webp" alt="" class="img-fluid d-none d-md-block">
            <img src="<?= base_url() ?>/assets/site/img/Animal_Themed_phone.webp" alt="" class="img-fluid d-block d-md-none">
            <!-- Animal Love banner -->
        </section>


        <!-- Baby collection Section -->
        <section id="baby-collection" class="baby-collection pt-0 mb-2">
            <div class="container">
                <div class="section-title pt-md-3">
                    <h2>Baby Collection</h2>
                </div>
                <div class="owl-baby owl-carousel owl-theme">

                    <div class="item">
                        <a href="./rings.html">
                            <div class="img border border-dark">
                                <img src="<?= base_url() ?>/assets/site/img/babycollection/earing-baby.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="catagory mt-md-3 text-dark text-center">
                                Earings
                            </div>
                        </a>

                    </div>

                    <div class="item">
                        <a href="./rings.html">
                            <div class="img border border-dark">
                                <img src="<?= base_url() ?>/assets/site/img/babycollection/bangle-1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="catagory mt-md-3 text-dark text-center">
                                Bangles
                            </div>
                        </a>

                    </div>

                    <div class="item">
                        <a href="./rings.html">
                            <div class="img border border-dark">
                                <img src="<?= base_url() ?>/assets/site/img/babycollection/anklets-baby-1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="catagory mt-md-3 text-dark text-center">
                                Anklets
                            </div>
                        </a>

                    </div>

                    <div class="item">
                        <a href="./rings.html">
                            <div class="img border border-dark">
                                <img src="<?= base_url() ?>/assets/site/img/babycollection/bracelets-baby.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="catagory mt-md-3 text-dark text-center">
                                Bracelets
                            </div>
                        </a>

                    </div>

                    <div class="item">
                        <a href="./rings.html">
                            <div class="img border border-dark">
                                <img src="<?= base_url() ?>/assets/site/img/babycollection/gift-set.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="catagory mt-md-3 text-dark text-center">
                                Gift-set
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </section>
        <!-- Baby collection section -->




        <!-- Testimonial slider -->
        <section id="testimonials" class="pt-2 testimonials">
            <div class="container">
                <div class="section-title mt-1">
                    <h2 style="color: black;">Testimonial</h2>
                </div>
            </div>
            <div class="container">

                <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url() ?>/assets/site/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url() ?>/assets/site/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url() ?>/assets/site/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url() ?>/assets/site/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?= base_url() ?>/assets/site/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->
    </main>
<?php include 'includes/footer.php'; ?>