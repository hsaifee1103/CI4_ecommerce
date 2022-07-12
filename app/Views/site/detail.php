<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
 <!-- Product Page Section -->
 <!-- Exclusive Bar -->
    <section id="exclusive-bar" class="exclusive-bar py-3">
        <!-- Club join banner -->
        <a href="the99store.html"><img src="./asset/img/cosmo-learn-more-banner.webp" alt=""
                class="img-fluid d-none d-md-block"></a>
        <a href="the99store.html"> <img src="./asset/img/cosmo-learn-more-banner-mobile.webp" alt=""
                class="img-fluid d-block d-md-none"></a>
        <!-- Club join banner -->
    </section>
    <section id="product-page" class="product-page ">
        <div class="container">
            <div class="row">
                <?php $product_images =  $this->common_model->GetAllData('product_images' , array('product_id' => $data['id'] )); ?>
                <div class="col-md-4">
                    <div class="product-carousel">
                        <div class="owl-carousel owl-theme">
                            <?php foreach ($product_images as $key => $value): ?>
                                <div class="item <?= ($key == 0) ? 'active' : '' ?>">
                                <img src="<?= base_url($value['image']) ?>" alt="" class="img-fluid">
                            </div>
                            <?php endforeach ?>
                            
                           
                        </div>
                    </div>
                    <!-- Related product start here -->
                    <div class="row">
                        <div class="col-12 d-md-block d-none">
                            <div class="head">
                                <h5 class="text-center mt-5 mb-2">Related Products</h5>
                                <hr class="">
                            </div>
                        </div>
                        <?php foreach ($related as $key => $value): ?>
                            <?php $img =  $this->common_model->GetSingleData('product_images' , array('product_id' => $value['id'] )); ?>
                            <div class="col-6 d-md-block d-none">
                            <div class="similar-product text-center shadow">
                                <img src="<?= base_url($img['image']) ?>" alt="" class=" img-fluid">
                                <p class="text-capitalize mb-0"><?= $value['title'] ?></p>
                                <p>Rs. <?= number_format($value['regular_price']) ?> </p>
                            </div>
                        </div>
                        <?php endforeach ?>
                        
                        

                    </div>
                    <!-- Related product end here -->


                </div>

                <div class="col-md-8 ps-5">
                    <div class="product-detail">
                        <h1><?= $data['title'] ?></h1>
                        <!-- <p>Made with Pure 925 silver</p> -->
                        <!-- <span class="stars mt-0">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            (80)
                        </span> -->
                        <p class="price  fs-5 ">
                            <?php if ($data['sale_price']): ?>
                                <del class="text-secondary"> Rs. <?= number_format($data['regular_price']) ?></del> Rs. <?= number_format($data['sale_price']) ?> Sale</p>
                            <?php else: ?>
                                Rs. <?= number_format($data['regular_price']) ?>
                            <?php endif ?>
                            
                        <p class="text-secondary">Tax included.</p>
                        <!-- <form action="#">
                            <input type="checkbox" name="wrapper" id="wrapper" class="me-2">
                            <label for="wrapper">Add Gift Wrap to your Order (Rs. 50)</label>
                        </form> -->
                        <button
                            class="btn btn-light border border-dark border-2 bg-light text-uppercase mt-2 fs-5 w-md-50 px-5 add_cart" data-productid="<?php echo $data['id']?>" >Add
                            to cart</button>
                        <!-- <button class="btn btn-secondary text-uppercase mt-2 fs-5 w-md-50 px-5">Buy It Now</button> -->
                        <p class="text-secondary mt-2">Estimated Delivery Time</p>
                        <!-- <input type="number" name="pincode" placeholder="6 digit pincode"
                            class="px-3 py-2 text-center   border-top-0 border-start-0 border-end-0">
                        <button class="btn btn-light border border-dark  bg-light text-uppercase   px-2">Check</button> -->
                        <div class="mt-1 ">
                            <a href="#" onclick="alert('comming soon')"><i class="bi d-inline bi-heart-fill text-secondary ms-2 me-5"></i></a>
                            <p class="text-secondary d-inline ms-5 px-3 text-uppercase">Added to witshlist</p>
                        </div>
                        <div class="policy mt-3 row">
                            <span
                                class="col-md-4 border border-1 border-top-0 border-start-0 border-bottom-0 border-secondary"><i
                                    class=" bi bi-arrow-counterclockwise fs-3"></i>30 days easy return</span>
                            <span
                                class="col-md-4 border border-1 border-top-0 border-bottom-0 border-start-0 border-secondary"><i
                                    class="bi bi-award-fill fs-3"></i>Authenticity Certificate</span>
                            <span class="col-md-4"><i class="bi bi-bookmark-star-fill fs-3"></i>30 days easy
                                return</span>
                        </div>
                        <div class="description text-secondary mt-4">
                            <?= $data['description'] ?>
                        </div>
                        
                    </div>
                </div>
                <!-- Related product start here -->
                <div class="row">
                    <div class="col-12 d-md-block d-none">
                        <div class="head">
                            <h5 class="text-center mt-5 mb-2">Related Products</h5>
                            <hr class="">
                        </div>
                    </div>
                    <?php foreach ($related as $key => $value): ?>
                            <?php $img =  $this->common_model->GetSingleData('product_images' , array('product_id' => $value['id'] )); ?>
                            <div class="col-6 d-md-block d-block">
                            <div class="similar-product text-center shadow">
                                <img src="<?= base_url($img['image']) ?>" alt="" class=" img-fluid">
                                <p class="text-capitalize mb-0"><?= $value['title'] ?></p>
                                <p>Rs. <?= number_format($value['regular_price']) ?> </p>
                            </div>
                        </div>
                        <?php endforeach ?>
                    
                    

                </div>
                <!-- Related product end here -->

                <div class="review-product-section"></div>
            </div>
        </div>

    </section>

<?php include 'includes/footer.php'; ?>
<!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
</script>