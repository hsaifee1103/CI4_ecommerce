<?php include 'includes/header.php'; ?>
 <main id="main">

        <!-- 18K Gold Hero -->
        <?php if(isset($tax)): ?>
        <section class="product-landing-banner d-flex justify-content-center align-items-center" id="18k-gold">
            <?php if(isset($tax['banner'])): ?>
            <img src="<?= base_url($tax['banner']) ?>" alt="" class="img-fluid d-none d-md-block w-100">
            <img src="<?= base_url($tax['banner']) ?>" alt=""
                class="img-fluid d-block d-md-none w-100">
            <?php else: ?>
            <h2 class="text-center"><?= ucfirst($uri->getSegment(2)).' : '.$tax['title'] ?></h2>
            <?php endif; ?>
        </section>
        <?php else: ?>
         <section class="product-landing-banner d-flex justify-content-center align-items-center" id="18k-gold">
            <h2 class="text-center"><?= ucfirst($uri->getSegment(1)).' : ' ?> All Products</h2>
        </section>
        <?php endif; ?>

        <!-- 18k Gold product Section -->
        <section class="landing-products">
            <div class="container-fluid">
                <!-- <div class="filter-item d-flex justify-content-end">
                    <ul class="d-flex">
                        <li data-filter="all">All</li>
                        <li data-filter=".graphics">Graphics</li>
                        <li data-filter=".seo">SEO</li>
                        <li data-filter=".webdesign">Webdesign</li>
                        <li data-filter=".webdevelopment">webdevelopment</li>
                    </ul>
                </div> -->

               <?= view('site/includes/product_loop' , ['product' => $data]) ?>
               <div class="mt-3">
			<?php if ($pager) :?>
			 
			<?= $pager->links() ?>
			<?php endif ?>
		</div>
            </div>
        </section>


        <!-- load more button -->
        <!--<section class="button d-flex justify-content-center align-items-center">-->

        <!--    <button class="btn btn-primary loadmore"> Load More <i class="bi bi-chevron-down"></i></button>-->
        <!--</section>-->
    </main>

<?php include 'includes/footer.php'; ?>