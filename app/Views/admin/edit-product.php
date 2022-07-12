
<?php include ('include/header.php') ?>

<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Products</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Products Edit</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div id="customerList">
                                <?= $this->session->getFlashdata('msg'); ?>
                               
                                <div class="table-responsive table-card  mb-1 p-5">
                                  <form id="add_products" method="post"  onsubmit="return edit_products(this , <?= $product['id'] ?>)" enctype="multipart/form-data">
            <div class="row py-3">
              <div class="mt-2 bg-light p-3  col-md-12">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="<?= $product['title'] ?>">
                </div>
                <div class="mt-2 bg-light p-3 col-md-12">
                    <label>Description</label>
                   <!--  <input type="text" class="form-control" name="title" placeholder="Title"> -->
                   <textarea class="form-control textarea" name="description" placeholder="Description"><?= $product['description'] ?></textarea>
                </div>
                <div class="mt-2 bg-light p-3 col-md-6" >
                    <label name='style'>Styles</label><br>
                    
                    <?php
                    $styles = $this->common_model->GetAllData('styles','','id','desc');
                      foreach ($styles as $key => $cval) {
                        $s_pg = explode(',', $product['style']);
                       ?>
                        <div class="form-check form-check-inline">
                          <input <?= (in_array($cval['id'], $s_pg)) ? 'checked' : '' ?> class="form-check-input" type="checkbox" id="styles<?= $cval['id'] ?>" name="style[]" value="<?= $cval['id'] ?>">
                          <label class="form-check-label" for="styles<?= $cval['id'] ?>"><?= $cval['title'] ?></label>
                      </div>
                       <?php
                      }
                    ?>

                   
                </div>
                
              
                <div class="mt-2 bg-light p-3 col-md-6">
                    <label name="color">Colors</label><br>
                    
                    <?php $color = $this->common_model->GetAllData('colors','','id','desc');
                      foreach ($color as $key => $cval) {
                        $s_pg = explode(',', $product['color']);
                       ?>
                        <div class="form-check form-check-inline">
                          <input <?= (in_array($cval['id'], $s_pg)) ? 'checked' : '' ?> class="form-check-input" type="checkbox" id="colors<?= $cval['id'] ?>" name="color[]" value="<?= $cval['id'] ?>">
                          <label class="form-check-label" for="colors<?= $cval['id'] ?>"><?= $cval['title'] ?></label>
                      </div>
                       <?php
                      }
                    ?>

                </div>
                <div class="mt-2 bg-light p-3 col-md-6">
                    <label name="category">Categories</label><br>
                    
                    <?php $category = $this->common_model->GetAllData('category','','id','desc');
                      foreach ($category as $key => $cval) {
                        $s_pg = explode(',', $product['category']);
                       ?>
                        <div class="form-check form-check-inline">
                          <input <?= (in_array($cval['id'], $s_pg)) ? 'checked' : '' ?> class="form-check-input" type="checkbox" id="category<?= $cval['id'] ?>" name="category[]" value="<?= $cval['id'] ?>">
                          <label class="form-check-label" for="category<?= $cval['id'] ?>"><?= $cval['title'] ?></label>
                      </div>
                       <?php
                      }
                    ?>

                </div>
                <div class="mt-2 bg-light p-3 col-md-6">
                    <label>Reciepient</label><br>
                    
                    <?php $recipient = $this->common_model->GetAllData('recipient','','id','desc');
                      foreach ($recipient as $key => $cval) {
                        $s_pg = explode(',', $product['recipient']);
                       ?>
                        <div class="form-check form-check-inline">
                          <input <?= (in_array($cval['id'], $s_pg)) ? 'checked' : '' ?> class="form-check-input" type="checkbox" id="recipient<?= $cval['id'] ?>" name="recipient[]" value="<?= $cval['id'] ?>">
                          <label class="form-check-label" for="recipient<?= $cval['id'] ?>"><?= $cval['title'] ?></label>
                      </div>
                       <?php
                      }
                    ?>

                </div>
                <div class="mt-2 bg-light p-3 col-md-6">
                    <label>Occasion</label><br>
                    
                    <?php $occasion = $this->common_model->GetAllData('occasion','','id','desc');
                      foreach ($occasion as $key => $cval) {
                        $s_pg = explode(',', $product['occasion']);
                       ?>
                        <div class="form-check form-check-inline">
                          <input <?= (in_array($cval['id'], $s_pg)) ? 'checked' : '' ?> class="form-check-input" type="checkbox" id="occasion<?= $cval['id'] ?>" name="occasion[]" value="<?= $cval['id'] ?>">
                          <label class="form-check-label" for="occasion<?= $cval['id'] ?>"><?= $cval['title'] ?></label>
                      </div>
                       <?php
                      }
                    ?>

                </div>
                <div class="mt-2 bg-light p-3 col-md-6">
                    <label>Others</label><br>
                    
                    <?php $other = $this->common_model->GetAllData('other','','id','desc');
                      foreach ($other as $key => $cval) {
                        $s_pg = explode(',', $product['others']);
                       ?>
                        <div class="form-check form-check-inline">
                          <input <?= (in_array($cval['id'], $s_pg)) ? 'checked' : '' ?> class="form-check-input" type="checkbox" id="other<?= $cval['id'] ?>" name="others[]" value="<?= $cval['id'] ?>">
                          <label class="form-check-label" for="other<?= $cval['id'] ?>"><?= $cval['title'] ?></label>
                      </div>
                       <?php
                      }
                    ?>

                </div>
                <div class="mt-2 bg-light p-3 col-md-6">
                    <label>Featured</label><br>
                    <?php $s_pg = explode(',', $product['featured']); ?>
                      <div class="form-check form-check-inline">
                          <input <?= (in_array('new', $s_pg)) ? 'checked' : '' ?> class="form-check-input" type="checkbox" id="new" name="featured[]" value="new">
                          <label class="form-check-label" for="new">New</label>
                      </div>
                       <div class="form-check form-check-inline">
                          <input <?= (in_array('bestsellers', $s_pg)) ? 'checked' : '' ?> class="form-check-input" type="checkbox" id="bestsellers" name="featured[]" value="bestsellers">
                          <label class="form-check-label" for="bestsellers">Bestsellers</label>
                      </div>
                       

                </div>
                <div class="mt-2 bg-light p-3 col-md-6">
                    <label>Is Recommended</label><br>
                    
                      <!-- Switches Color -->
                      <div class="form-check form-switch">
                          <input <?= ($product['is_recommend'] == 1) ? 'checked' : '' ?> class="form-check-input" type="checkbox" name="is_recommend" value="1" role="switch" id="SwitchCheck1" >
                          <label class="form-check-label" for="SwitchCheck1">Yes</label>
                      </div>


                </div>
                
                 <div class="mt-2 bg-light p-3 col-md-6">
                    <label>Regular Price</label>
                    <input type="number" step="0.1" class="form-control" name="regular_price" value="<?= $product['regular_price'] ?>" placeholder="Regular Price">
                </div>
                <div class="mt-2 bg-light p-3 col-md-6">
                    <label>Sale Price</label>
                    <input type="number" step="0.1" class="form-control" name="sale_price" value="<?= $product['sale_price'] ?>" placeholder="Sale Price">
                </div>

                <div class="mt-2 bg-light p-3 col-md-12">
                    <label>Images</label>
                    <p class="text-muted">
                        Use the <code>Ctrl</code> to select multiple images.
                    </p>
                    <input type="file" class="form-control" name="images[]" multiple="" placeholder="Image">
                 
                <?php 
                 $product_image = $this->common_model->GetAllData('product_images',array('product_id'=>$product['id']));
                 if ($product_image) 
                 {
                   
                  foreach ($product_image as $key => $pimage) {
                    ?>
                      <p><?php if(!empty($pimage["image"])) { ?>
                          <img style="height: 100px;width: 100px;" src="<?php echo base_url($pimage["image"]);?>">
                            <a class="btn btn-info btn-sm" id="delete_btns" onclick="delete_product_image(<?= $pimage['id'] ?>)">Remone</a>
                          <?php } ?>
                        </p>

                    <?php
                  }

                 }
              ?>

            </span>
                    
                </div>
               <div class="col-lg-12"></div>
               </div>
                <div class="mt-3 text-center">
                    <button type="submit" id="add_btn"  class="btn btn-success">Update</button>
                </div>
                
            </div>
        </form>
                                </div>
                                
                        </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            
            <!-- Modal -->
            
            <!--end modal -->
        </div>
        <!-- container-fluid -->
    </div>
    <?php include 'include/footer.php'; ?>
     <link rel="stylesheet" href="<?= base_url() ?>/assets/libs/dropzone/dropzone.css" type="text/css" />
    <script src="<?= base_url() ?>/assets/libs/dropzone/dropzone-min.js"></script>
    <script src="<?= base_url() ?>/assets/js/pages/form-file-upload.init.js"></script>

<script>

function edit_products(el , id) {
    $('.alert-danger').remove();
      $.ajax({
      url: '<?= base_url() ?>/Admin/Products/editProducts/'+id,
      type: 'POST',
      cache:false,
      contentType: false,
      processData: false,
      data:new FormData($(el)[0]),
      dataType: 'json',
      beforeSend: function() {        
        $('#add_btn').prop('disabled' , true);
        $('#add_btn').text('Processing..');
      },
      success : function(res){
        $('#add_btn').prop('disabled' , false);
        $('#add_btn').text('Update');
        if (res.status == 1) {
            Swal.fire({
               title: "Success", 
               text: res.message, 
               icon: "success"
             }).then(function (result) {
            window.location.reload();
            })         
        }
        else
        {
         
          $('#result1').html(res.message);
          for (var err in res.validation) {
            
            $("[name='" + err + "']").after("<div  class='label alert-danger'>" + res.validation[err] + "</div>");
          }
        }
      }
    });
return false;    
}



function delete_product_image(id) {
        // event.preventDefault();
    if(confirm('Are you sure ?'))
    {
     $.ajax({
      url: '<?= base_url() ?>/Admin/Products/remove_pimage',
      type: 'POST',
      cache:false,
      data:{'id':id},
      dataType: 'json',
      beforeSend: function() {
        $('#delete_btns'+id).prop('disabled' , true);
        $('#delete_btns'+id).text('Processing..');
      },
      success : function(res){
        console.log(res);
        $('#delete_btns'+id).prop('disabled' , false);
        if (res.status == 1) {
         
         location.reload();

        }
        
      }
    });
    }
    
}

</script>



