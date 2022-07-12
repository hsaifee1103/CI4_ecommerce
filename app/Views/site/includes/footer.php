



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">

                <div class="row px-2">

                    <div class="col-lg-3 col-md-6 d-none main-box">
                        <div class="footer-info">
                            <img src="<?= base_url() ?>/assets/site/img/top-logo.png" alt="" class="ms-5 img-fluid w-50">
                            <img src="<?= base_url() ?>/assets/site/img/name-logo.png" alt="" class="img-fluid">
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-3 col-md-6 footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li> <a href="./index.html">Career</a></li>
                            <li> <a href="./aboutus.html">Jewellery Care</a></li>
                            <li> <a href="./collection.html">Reviews</a></li>
                            <li> <a href="./terms.html">Privacy Policy</a></li>
                            <li> <a href="./policy.html">Shipping & Handling</a>
                            </li>
                            <li> <a href="./policy.html">Terms and Service</a>
                            </li>
                            <li> <a href="./policy.html">Frequently Asked
                                    Questions</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 d-none col-md-6 col-6 main-box footer-links">
                        <h4>Important Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="./Earings.html">Earrings</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./bracelets.html">Bracelets</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./toering.html">Toerings</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./ankles.html">Ankles</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./babycollection.html">Baby
                                    Collection</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p class="d-md-block d-none">Tamen quem nulla quae legam multos aute sint culpa legam noster
                            magna</p>
                        <form action="" method="post" class=" mb-3 w-md-75">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                        <!---->

                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Contact</h4>
                        <div class="footer-info text-white">
                            <p class="text-white">
                                A108 Adam Street <br>
                                NY 535022, USA<br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                        </div>

                    </div>

                </div>
                <hr class="mt-0">
                <div class="row">
                    <div class="col-12">
                        <div class="social-links text-center text-md-start  order-first order-lg-last mb-lg-0">
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div class="container d-flex justify-content-center justify-content-lg-around align-items-center">

                <div class="d-flex flex-lg-row align-items-center align-items-lg-start">
                    <div class="copyright me-3 text-dark">
                        &copy; Copyright <strong><span>Tiya Jewels</span></strong>
                    </div>
                    <div class="credits">

                        Designed by <a href="https://freelanceritservices.com/">Freelenceritservices</a>
                    </div>
                </div>



            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>


    <!-- Jquery -->
    <script src="<?= base_url() ?>/assets/site/js/jquery-3.6.0.min.js"></script>
    <!--Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Swiper js -->
    <script src="<?= base_url() ?>/assets/site/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!-- Aos script -->
    <script src="<?= base_url() ?>/assets/site/vendor/aos/aos.js"></script>

    <!-- Main Js file -->
    <script src="<?= base_url() ?>/assets/site/js/main.js"></script>

    <!-- Swiper  -->
    <script src="<?= base_url() ?>/assets/site/vendor/swiper/swiper-bundle.min.js"></script>
    
    <!-- Mixitup  -->
    <script src="<?= base_url() ?>/assets/site/vendor/mixitup plugin/dist/mixitup.min.js"></script>t

   <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" />

    <script>
        $(document).ready(function () {
            $('.main-box').slice(0, 24).slideDown('slow');

            $('.loadmore').on("click", function () {
                $(".main-box:hidden").slice(0, 4).slideDown('slow');

                if ($('.main-box:hidden').length == 0) {
                    $(".loadmore").fadeOut("slow");
                }
            });

        });


    </script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            loop: true

        });
    </script>
    <!-- Aos Init -->
    <script>
        AOS.init({
            offset: 50,
            duration: 1000
        });
    </script>
    <!-- Initialize picks-slider Swiper -->
    <script>

    </script>
    <script>
        new Swiper('.testimonials-slider', {
            speed: 600,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                },
                1440: {
                    slidesPerView: 4
                },
            },

        });

        $('.top-picks-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 2000,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });

        $('.owl-baby').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 4000,
            dots: false,
            responsive: {
                0: {
                    items: 4
                },
                600: {
                    items: 5
                },
                1000: {
                    items: 6
                }
            }
        })
    </script>
    <script type="text/javascript" id="add_to_cart_js">
        $(document).on("click",".add_cart",function(e){
        e.preventDefault();
        var productid = $(this).data('productid');
        var qty = $('#quantity').val();
        if (!qty) {
          qty = 1;
        };
        addtocart = $(this);
       // console.log(var_id);
        $.ajax({
                url: '<?php  echo base_url('Shop/addToCart');?>',
                type: 'post',
                dataType: 'JSON',   
                data: {productid: productid,qty:qty},
                beforeSend: function() { 
                
                  addtocart.html('Adding <i class="bi bi-spinner bi-spin"></i>');
                },
                success: function(response)
                { 
                  if(response!='')
                  {
                   // $('.add_cart').hide();
                   // $('.goto_cart').show();

                   $('.cart_count').html(response.count);

                  } 
                  if (response.message) {
                    alert(response.message)
                    addtocart.html('Add to cart');
                  }else 
                  {
                    alertify.set('notifier','position', 'top-right');
                    alertify.success('The product has been added to the cart successfully');
                    addtocart.html('Added <i class="bi bi-check"></i>');
                  }
                  
                }
            });
        
    });
    </script>
</body>

</html>