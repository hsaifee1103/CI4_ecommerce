
<div class="row g-2 ">
<?php if($product) : ?>
<?php foreach($product as $key => $value): 
    $product_images = $this->common_model->GetSingleData('product_images' , array('product_id' => $value['id']));
?>
        <div class="col-lg-3 col-md-6 main-box col-6 mix seo">
            <a href="<?= base_url('product').get_slug_url($value) ?>">
                <div class="box">
                    <i class="bi bi-heart-fill wish-list text-secondary fs-4"></i>
                    <div class="product-image">
                        <img src="<?= base_url($product_images['image']) ?>" alt=""
                            class="img-fluid">
                    </div>
                    <div class="product-description text-black p-2" style="font-size: 0.8rem;">
                        
                        <p class="product-price-sale  mb-0">&#8377; <?= number_format($value['regular_price']) ?> 
                        <?php if($value['sale_price']) : ?>
                        <span class="product-price-actual text-decoration-line-through text-secondary">&#8377;
                                <?= number_format($value['sale_price']) ?>
                                </span> 
                                <?php endif ; ?> 
                                </p>
                        <p class="product-name mb-0"><?= substr(strip_tags($value['description']) ,0 , 50); ?></p>
                    </div>
                </div>
            </a>
        </div>
        <!--Product end -->
       <?php endforeach ; ?> 
       <?php else: ?> 
       <div class="col-lg-12 col-md-12 main-box col-12 mix seo">
           <div class="alert alert-danger">No product found!!</div>
       </div>
       <?php endif ; ?> 
</div>