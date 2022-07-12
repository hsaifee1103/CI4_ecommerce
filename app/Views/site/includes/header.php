<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

    <!--Bootstrap Icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"  />
    <!-- vendors CSS Files -->
    <link href="<?= base_url() ?>/assets/site/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/site/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/site/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/site/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/site/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/site/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">



    <!-- Main CSS -->
    <link rel=" stylesheet" href="<?= base_url() ?>/assets/site/css/style.css">
    <title>Tiya Jewel Studio Logo</title>
</head>
<?php 
use App\Models\Common_model;
$this->session = \Config\Services::session();
        $this->common_model = new Common_model();
        $this->db = \Config\Database::connect(); 
        $this->cart =  \Config\Services::cart();
        $uri = service('uri');
        $category = $this->common_model->GetAllData('category' , '' , 'id' , 'desc');
        $colors = $this->common_model->GetAllData('colors' , '' , 'id' , 'desc');
        $styles = $this->common_model->GetAllData('styles' , '' , 'id' , 'desc');
        $recipient = $this->common_model->GetAllData('recipient' , '' , 'id' , 'desc');
        $occasion = $this->common_model->GetAllData('occasion' , '' , 'id' , 'desc');
        $other = $this->common_model->GetAllData('other' , '' , 'id' , 'desc');
?>
<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-lg-between justify-content-md-between">
                <div class="col-md-12 text-end cta d-md-block">
                    <p class="m-0 p-0 text-center text-dark fw-6 fs-5 avnir-next">
                        Get 10% Off! Code COMBO025
                    </p>

                </div>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-inner-pages">
        <div class="container d-flex align-items-center justify-content-around">
            <a href="<?= base_url() ?>" class="logo"><img src="<?= base_url() ?>/assets/site/img/top-logo.png" class="d-sm-none">
                <img src="<?= base_url() ?>/assets/site/img/name-logo.png" alt="" style="width: 70%;" class="d-none d-sm-block">
            </a>

            <nav id="navbar" class="navbar avnir-next">
                <ul>
                    <li><a class="active nav-link scrollto " href="<?= base_url() ?>">Home</a></li>
                    <!-- <li><a class=" nav-link scrollto " href="#about-banner">About Us</a></li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= base_url('shop') ?>" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Collection
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 600%;">


                            <div class="container m-0">
                                <div class="row p-2">
                                    <div class="col-sm-12 col-lg-3 col-md-12">
                                        <h6>Shop By Category</h6>
                                        <?php foreach($category as $value): ?>
                                        <li><a class="dropdown-item px-0 py-2" href="<?= base_url('shop/category'). get_slug_url($value) ?>"><?= $value['title'] ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                        
                                        <li><a class="dropdown-item px-0 py-2" href="<?= base_url('shop')?>">All</a></li>
                                    </div>
                                    <div class="col-sm-12 col-lg-3 col-md-12">
                                        <h6>Shop By Color</h6>
                                        <?php foreach($colors as $value): ?>
                                        <li><a class="dropdown-item px-0 py-2" href="<?= base_url('shop/colors'). get_slug_url($value) ?>"><?= $value['title'] ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-sm-12 col-lg-3 col-md-12">
                                        <h6>Shop By Style</h6>
                                         <?php foreach($styles as $value): ?>
                                        <li><a class="dropdown-item px-0 py-2" href="<?= base_url('shop/styles'). get_slug_url($value) ?>"><?= $value['title'] ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-sm-12 col-lg-3 col-md-12">
                                        <h6>Shop Featured</h6>
                                        <li><a class="dropdown-item px-0 py-2 text-danger" href="<?= base_url('shop').'?featured=new' ?>">New</a></li>
                                        <li><a class="dropdown-item px-0 py-2" href="<?= base_url('shop').'?featured=bestsellers' ?>">BestSellers</a></li>
                                    </div>

                                </div>
                            </div>


                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Gifts
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 700%;">


                            <div class="container m-0">
                                <div class="row p-2">
                                    <div class="col-sm-12 col-lg-3 col-md-12">
                                        <h6>By Price</h6>
                                        <li><a class="dropdown-item px-0 py-2" href="<?= base_url('shop').'?price=below-2000' ?>">Below Rs. 2,000 </a></li>
                                        <li><a class="dropdown-item px-0 py-2" href="<?= base_url('shop').'?price=above-2000' ?>">Above Rs. 2,000 </a></li>
                                    </div>
                                    <div class="col-sm-12 col-lg-3 col-md-12">
                                        <h6>By Recipient</h6>
                                        <?php foreach($recipient as $value): ?>
                                        <li><a class="dropdown-item px-0 py-2" href="<?= base_url('shop/recipient'). get_slug_url($value) ?>"><?= $value['title'] ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-sm-12 col-lg-3 col-md-12">
                                        <h6>By Occasion</h6>
                                        <?php foreach($occasion as $value): ?>
                                        <li><a class="dropdown-item px-0 py-2" href="<?= base_url('shop/occasion'). get_slug_url($value) ?>"><?= $value['title'] ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-sm-12 col-lg-3 col-md-12">
                                        <h6>Other</h6>
                                        <?php foreach($other as $value): ?>
                                        <li><a class="dropdown-item px-0 py-2" href="<?= base_url('shop/other'). get_slug_url($value) ?>"><?= $value['title'] ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                    </div>


                                </div>
                            </div>


                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#">The 99 Store</a></li>
                    <li><a class="nav-link scrollto me-2" href="#contact">Contact</a></li>
                </ul>
                <a href="#"> <i class="bi head-icon bi-search text-white me-3"></i> </a>
                <a href="#"> <i class="bi head-icon  bi-person text-white me-3 "></i></a>
                <a href="#"> <i class="bi head-icon bi-suit-heart text-white me-3"></i></a>
                <a href="<?= base_url('cart') ?>"> <i class="bi head-icon bi-cart text-white me-3"></i><span class="badge bg-danger cart_count"><?= $n=  (($this->cart->contents()>0)?count($this->cart->contents()):'0'); ?></span></a>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->