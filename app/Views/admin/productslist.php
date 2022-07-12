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
                        <h4 class="card-title mb-0">Products list</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div id="customerList">
                                <?= $this->session->getFlashdata('msg'); ?>
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <a class="btn btn-info" href="<?= base_url('admin/add-product') ?>">Add</a>
                                    </div>
                                 
                                </div>
                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="example23">
                                        <thead class="table-light">
                                            <tr>
                                               <th>S.No</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                
                                                <th>Created At</th>
                                                 <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                        <?php if ($data): $i = 1; ?>
                                            <?php foreach ($data as $key => $value): ?>
                                                <tr>
                                                 <td><?= $i; ?></td>
                                                <td><?= $value['title'] ?></td>
                                                <td style="white-space: inherit;"><?= substr(strip_tags($value['description']), 0, 150); ?></td>
                                                <td>$<?= $value['regular_price'] ?></td>
                                                
                                                <td><?= humanDate($value['created_at']) ?></td>
                                                
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <a href="<?= base_url('admin/edit-product/'.$value['id']) ?>" class="btn btn-success" >Edit</a>
                                                        </div>
                          
                                                      <div class="remove">
                                                          <button class="btn btn-danger" id="delete_btns" onclick="delete_products(<?= $value['id'] ?>)">Delete</button>
                                                      </div>
                                                      <div class="remove">
                                                          <a target="_blank" class="btn btn-info" href="<?= base_url('product').get_slug_url($value) ?>">View</a>
                                                      </div>
                                   
                                                    </div>
                                                </td>
                                            </tr>
                        <?php $i++; endforeach ?>
                  
                  <?php endif ?>    
                    </tbody>
                </table> 
                                
                      

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
    <script type="text/javascript">
        function add_products() {
  $('.alert-danger').remove();
    
      $.ajax({
      url: '<?= base_url() ?>/Admin/Products/addProducts',
      type: 'POST',
      cache:false,
      contentType: false,
      processData: false,
      data:new FormData($('#add_products')[0]),
      dataType: 'json',
      beforeSend: function() {        
        $('#add_btn').prop('disabled' , true);
        $('#add_btn').text('Processing..');
      },
      success : function(res){
        $('#add_btn').prop('disabled' , false);
        $('#add_btn').text('Add');
        if (res.status == 1) {
            Swal.fire({
               title: "Success", 
               text: res.message, 
               icon: "success"
             }).then(function (result) {
            location.reload();
            })         
        }
        else
        {
         
          $('#result').html(res.message);
          for (var err in res.validation) {
            
            $("[name='" + err + "']").after("<div  class='label alert-danger'>" + res.validation[err] + "</div>");
          }
        }
      }
    });
return false;    
}
function edit_products(el , id) {
    $('.alert-danger').remove();
      $.ajax({
      url: '<?= base_url() ?>/Admin/Products/editProducts',
      type: 'POST',
      cache:false,
      contentType: false,
      processData: false,
      data:new FormData($(el)[0]),
      dataType: 'json',
      beforeSend: function() {        
        $('#update'+id).prop('disabled' , true);
        $('#update'+id).text('Processing..');
      },
      success : function(res){
        $('#update'+id).prop('disabled' , false);
        $('#update'+id).text('Update');
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

function delete_products(id) {
        // event.preventDefault();
    if(confirm('Are you sure ?'))
    {
        $.ajax({
      url: '<?= base_url() ?>/Admin/Products/deleteProducts',
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
           Swal.fire({
               title: "Success", 
               text: res.message, 
               icon: "success"
             }).then(function (result) {
            location.reload();
            })
        }
        
      }
    });
    }
    
}

    </script>