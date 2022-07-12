<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductModel;
class Shop extends BaseController
{
    public function __construct() {   
        helper(['form', 'url']);
        $this->session = \Config\Services::session();
        $this->cart =  \Config\Services::cart();
        //return $this->check_login();
    } 
    public function index($tax=false , $slug=false)
    {
        $pager = service("pager");
        $product = new ProductModel();
        $url = explode('-' , $slug);
        if($tax)
        {
        
            if($tax == 'styles')
            {
                $col = 'style';
            }
            else if($tax == 'category')
            {
                $col = 'category';
            }
            else if($tax == 'colors')
            {
                $col = 'color';
            }
            else if($tax == 'recipient')
            {
                $col = 'recipient';
            }
            else if($tax == 'occasion')
            {
                $col = 'occasion';
            }
            else if($tax == 'other')
            {
                $col = 'others';
            }
            else
            {
                return view('site/404');
            }
            $tax_id = end($url);
            $data['tax'] = $this->common_model->GetSingleData($tax , array('id' => $tax_id));
            if(!$data['tax'])
            {
                return view('site/404');
            }
            $data['data'] = $product->where('find_in_set('.$tax_id.' , '.$col.')')->paginate(8);
        }   
        else
        {
            $data['data'] = $product->paginate(8);
        }
        $data['pager'] = $product->pager;
        
        return view('site/shop' , $data);
    }
    public function detail($slug=false)
    {
        $pager = service("pager");
        $product = new ProductModel();
        $url = explode('-' , $slug);
        $product_id = end($url);
        $data['data'] = $this->common_model->GetSingleData('products' , array('id' => $product_id));
        if ($data['data']) 
        {
            $category = explode(','  ,$data['data']['category']);
            $related = [];
            
            $data['related']  = $product->where('find_in_set('.$category[0].' , category)')->findAll(4);
            
            
            return view('site/detail' , $data);
        }
        return view('site/404');
    }

    function addToCart()
    {
   //  $this->cart->destroy(); 
     $pid=$this->request->getVar('productid');
     $qty=$this->request->getVar('qty');
   
     $getproduct= $this->common_model->GetSingleData('products',array('id'=>$pid));
     $getimg= $this->common_model->GetSingleData('product_images',array('product_id'=>$pid));
      if($getproduct['quantity'] < $qty ) 
      {
        $n['count'] =  (($this->cart->contents()>0)?count($this->cart->contents()):'0'); 
        $n['message'] =  'Product added to cart successfully'; 
        echo json_encode($n);
        exit; 
      }
     $data = array(
          'id'=>$pid,
          'pid'=>$getproduct['id'],
          'qty'=>$qty,
          'price'=>($getproduct['sale_price'] != '0.00') ? $getproduct['sale_price'] : $getproduct['regular_price'],
          'name'=>$getproduct['title'],
          'description'=>strlen($getproduct['description']) > 50 ? substr(strip_tags($getproduct['description']),0,50)."..." : strip_tags($getproduct['description']),
          'image'=>$getimg['image'],
          'totalqty'=>$getproduct['quantity'],
          
          // 'variation' =>array(
          //   'var_id' => $var_id,
          //   'color_title' =>$varproduct['color_title'], 
          //   'color_sku' =>$varproduct['sku']
          // )
     );

     //print_r($data);

     $this->cart->insert($data);

     //print_r($this->cart->contents());
     $n['count'] =  (($this->cart->contents()>0)?count($this->cart->contents()):'0'); 
     echo json_encode($n);    
    }
    public function updateqty()
     {
      $rowid = $_POST["rowid"];
      $productid= $_POST["productid"];
      
      $qty =  $_POST["qty"];
      $data = array('rowid'  => $rowid, 'id' => $productid,'qty'  => $qty);
      $update=  $this->cart->update($data);
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
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                
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
              <div class="col-md-3 col-lg-2 col-xl-2 ">
                
                <h5 class="mb-0">Rs.<?= $value['price'] ?></h5>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 ">
                
                <h5 class="mb-0">Rs.<?= $value['price']*$value['qty'] ?></h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">

                <a href="#!" data-productid="<?= $value['id'] ?>" data-rowid="<?= $value['rowid'] ?>" onclick="removeItem('<?= $value['id'] ?>' , this)" class="text-danger"><i class="bi bi-trash bi-lg"></i></a>
              </div>
            </div>
          </div>
        </div>

        
        <?php
         } 
         ?>
         <div class="">
          <div class="d-flex align-items-center justify-content-between">
            <h3 class="m-0">Total : Rs.<span class="total_amt"><?= $this->cart->total() ?></span></h3>
            <a type="button" class="btn btn-primary big_btn" href="<?= base_url() ?>checkout">Proceed to Pay</a>
          </div>
        </div>
         <?php
       } else { 
          ?>
          <h4>Cart Is Empty!!<h4>
      <?php } 
     }
     public function removeCartItem()
    {
      $row_id = $_POST["rowid"];
      $this->cart->remove($row_id);
    }

     public function cart()
     {
         return view('site/cart');
     }
}
