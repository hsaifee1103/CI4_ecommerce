<?php include_once ('includes/header.php') ?>

<section class="card_checkout_page">
  
   
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10 col-lg-10 col-sm-12 col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Cart</h3>
          <div>
            <!-- <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i class="fa fa-angle-down mt-1"></i></a></p> -->
          </div>
        </div>
        <div id="cart_info">
 					<?php 
 					if(!empty($this->cart->contents()))
 					{ 
 						foreach ($this->cart->contents() as $value) 
 						{
              
              ?>
        

        <div class="card rounded-3 mb-4 card_checkout">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="<?php echo base_url($value['image']) ?>"
                  class="img-fluid rounded-3" alt="<?= $value['name'] ?>">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2"><?= $value['name'] ?></p>
                <p><span class="text-muted"><?= $value['description'] ?></span></p>
                
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 d-flex">
                <button data-price="<?= $value['price'] ?>" data-max="<?= $value['totalqty'] ?>" data-productid="<?= $value['id'] ?>" data-rowid="<?= $value['rowid'] ?>" class="btn btn-link px-2"
                  onclick="decrement('<?= $value['id'] ?>' , this)">
                  <i class="bi bi-dash"></i>
                </button>

                <input  id="input-quantity-<?= $value['id'] ?>" min="1" max="<?= $value['totalqty'] ?>"  name="quantity" value="<?= $value['qty'] ?>" readonly type="number"
                  class="form-control form-control-sm" />

                <button data-price="<?= $value['price'] ?>" data-max="<?= $value['totalqty'] ?>" data-productid="<?= $value['id'] ?>" data-rowid="<?= $value['rowid'] ?>" class="btn btn-link px-2"
                  onclick="increment('<?= $value['id'] ?>' , this)">
                  <i class="bi bi-plus"></i>
                </button>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 ">
                <h5 class="mb-0">Rs.<?= $value['price'] ?></h5>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 ">
                <h5 class="mb-0">Rs.<?= $value['price']*$value['qty'] ?></h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="#!" data-productid="<?= $value['id'] ?>" data-rowid="<?= $value['rowid'] ?>" onclick="removeItem('<?= $value['id'] ?>' , this)" class="text-danger"  data-bs-toggle="tooltip" title="Delete"><i class="bi bi-trash fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>

        
        <?php
         } 
         ?>
       
         <div class="">
          <div class="d-flex align-items-center justify-content-between">
            <h3 class="m-0">Cart Total : Rs.<span class="total_amt"><?= $this->cart->total() ?></span></h3>
            <a type="button" class="btn btn-primary big_btn btn-lg" href="<?= base_url() ?>checkout">Proceed to Checkout</a>
          </div>
        </div>
         <?php
       } else { 
         	?>
        	<div class="alert alert-danger">Your Cart is empty</div>
			<?php } ?>
    </div>
      </div>
    </div>
  </div>
</section>


<?php include_once ('includes/footer.php') ?>
<script type="text/javascript">
jQuery(document).ready(function($) {
		$('.header').removeClass('header')
	});	
function increment(cart_id,e) {
    var add= $(e).data('max');
    var price= $(e).data('price');
    console.log($(e).prev().val())
    console.log(add)
	if ($(e).prev().val() < add) 
	{
	   $(e).prev().val(+$(e).prev().val() + 1);
	   var qty = $("#input-quantity-"+cart_id).val() ;
     var row_id = $(e).data("rowid");
     var product_id = $(e).data("productid");
     var total = parseInt($('.total_amt').text()) + price;

	    $.ajax({
    	    url:"<?php echo base_url('Shop/updateqty'); ?>",
    	    method:"POST",
    	    data:{rowid:row_id,qty:qty,productid:product_id},
    	    success:function(data)
    	    {
    	    // alert("Product quantity updated");
    	     $('#cart_info').html(data);
    	    }
	   });	
   }
   return false ;
}


function decrement(cart_id,ev) {
		if ($(ev).next().val() > 1) {
    	if ($(ev).next().val() > 1)
    	{	
    	$(ev).next().val(+$(ev).next().val() - 1);
 	    var qty = parseInt($("#input-quantity-"+cart_id).val()) ;
	    var row_id = $(ev).data("rowid");
	    var product_id = $(ev).data("productid");
      var price = $(ev).data('price');
      var total = parseInt($('.total_amt').text()) - price;
	    $.ajax({
		    url:"<?php echo base_url('Shop/updateqty'); ?>",
		    method:"POST",
		    data:{rowid:row_id,qty:qty,productid:product_id},
		    success:function(data)
		    {
		    $('#cart_info').html(data);
		    }
	   });	
   }
}

}

function removeItem(cart_id,ev) {
   
      var qty = 0 ;
      var row_id = $(ev).data("rowid");
      var product_id = $(ev).data("productid");
      $.ajax({
        url:"<?php echo base_url('Shop/removeCartItem'); ?>",
        method:"POST",
        data:{rowid:row_id,qty:qty,productid:product_id},
        success:function(data)
        {
        location.reload();
        }
     });  
   

}
</script>

 

 <script>
  function myFunction() {
    alert('Coming Soon!');
  }
</script>
