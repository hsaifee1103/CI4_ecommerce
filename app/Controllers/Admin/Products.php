<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class Products extends BaseController {

	public function __construct() {   
        helper(['form', 'url']);
        $this->session = \Config\Services::session();
        return $this->check_login();
    } 
    public function check_login()
    {
      if (!$this->session->has('admin_id')) {
          header('Location: '.base_url('admin'));
      }
       
    }

  	public function index()
    {
        $data['data'] = $this->common_model->GetAllData('products','','id','desc');
        return view('admin/productslist', $data);
    }
    public function add_product()
    {
        //echo "hello";
       $data['category'] = $this->common_model->GetAllData('category','','id','desc');
       return view('admin/add-product',$data);
    }
  	public function addProducts()
    {
        helper(['form']);
	    if ($this->request->getMethod() == "post") {
	        $validation =  \Config\Services::validation();

	        $rules = [
	            "title" => [
	                "label" => "title", 
	                "rules" => "required|trim"
	            ],
	            "description" => [
	                "label" => "description", 
	                "rules" => "required|trim"
	            ],
	            "style" => [
	                "label" => "style", 
	                "rules" => "required"
	            ],
	            "category" => [
	                "label" => "category", 
	                "rules" => "required"
	            ],
	            "color" => [
	                "label" => "color", 
	                "rules" => "required"
	            ],
	            "regular_price" => [
	                "label" => "regular_price", 
	                "rules" => "required|trim"
	            ],
	           
	           
	        ];

	        if ($this->validate($rules)) {
				$insert['title'] = $_POST['title'];
				$insert['description'] = $_POST['description'];
				$insert['style'] = implode(',', $_POST['style']);
				$insert['category'] = implode(',', $_POST['category']);
				$insert['color'] = implode(',', $_POST['color']);
				$insert['regular_price'] = $_POST['regular_price'];
				$insert['sale_price'] = $_POST['sale_price'];
				$insert['featured'] = isset($_POST['featured']) ? implode(',', $_POST['featured']) : '';
				$insert['recipient'] = isset($_POST['recipient']) ? implode(',', $_POST['recipient']) : '';
				$insert['occasion'] = isset($_POST['occasion']) ? implode(',', $_POST['occasion']) : '';
				$insert['others'] = isset($_POST['others']) ? implode(',', $_POST['others']) : '';
				$insert['is_recommend'] = isset($_POST['is_recommend']) ? 1 : 0;
				$insert['created_at'] = date('Y-m-d h:i');
				$insert['updated_at'] = date('Y-m-d h:i');

				
				$run = $this->common_model->InsertData('products', $insert);
				//$id = $run[0]->id;
		
				if($run)
				{
              
			            if(isset($_FILES['images']['name'])  && is_array($_FILES['images']['name']) && count($_FILES['images']['name']) > 0){
			          
			                $image_arr = $_FILES['images']['name'];
			          
			                foreach($image_arr as $key => $row){
			                    $insert2 = array();
			                    $name_array = explode('.',$_FILES['images']['name'][$key]);
			                    $ext = end($name_array);
			                    $new_name = rand().time().'.'.$ext;
			            
			                    $tmp_name = $_FILES["images"]["tmp_name"][$key];
			                    $path = 'assets/product_images/'.$new_name;
			            
			                    if(move_uploaded_file($tmp_name,$path)){
			                        $insert2['image']=$path;
			                        $insert2['product_id']=$run;
			                        $run1 = $this->common_model->InsertData('product_images', $insert2);
			                    }
			                }
			            } 
					
						$this->session->setFlashdata('msg', '<div class="alert alert-success">Products has been Added successfully.</div>');
						$output['status']=1;
						$output['message']="Products has been Added successfully.";
				}
			} else {
	        	$output['status']= 0 ; 
	            $output["validation"] = $validation->getErrors();
	        }
	    }
		echo json_encode($output);
    }

  	public function editProducts($id)
    {
        helper(['form']);
	    if ($this->request->getMethod() == "post") {
	        $validation =  \Config\Services::validation();

	        $rules = [
	            "title" => [
	                "label" => "title", 
	                "rules" => "required|trim"
	            ],
	            "description" => [
	                "label" => "description", 
	                "rules" => "required|trim"
	            ],
	            "style" => [
	                "label" => "style", 
	                "rules" => "required"
	            ],
	            "category" => [
	                "label" => "category", 
	                "rules" => "required"
	            ],
	            "color" => [
	                "label" => "color", 
	                "rules" => "required"
	            ],
	            "regular_price" => [
	                "label" => "regular_price", 
	                "rules" => "required|trim"
	            ],
	           
	           
	        ];

	        if ($this->validate($rules)) {
				
				$insert['title'] = $_POST['title'];
				$insert['description'] = $_POST['description'];
				$insert['style'] = implode(',', $_POST['style']);
				$insert['category'] = implode(',', $_POST['category']);
				$insert['color'] = implode(',', $_POST['color']);
				$insert['regular_price'] = $_POST['regular_price'];
				$insert['sale_price'] = $_POST['sale_price'];
				$insert['featured'] = isset($_POST['featured']) ? implode(',', $_POST['featured']) : '';
				$insert['recipient'] = isset($_POST['recipient']) ? implode(',', $_POST['recipient']) : '';
				$insert['occasion'] = isset($_POST['occasion']) ? implode(',', $_POST['occasion']) : '';
				$insert['others'] = isset($_POST['others']) ? implode(',', $_POST['others']) : '';
				$insert['is_recommend'] = isset($_POST['is_recommend']) ? 1 : 0;
				$insert['created_at'] = date('Y-m-d h:i');
				$insert['updated_at'] = date('Y-m-d h:i');
				$run = $this->common_model->UpdateData('products',array('id'=>$id), $insert);
				//$id = $run[0]->id;
				if($run)
				{
              
		            if(isset($_FILES['images']['name'])  && is_array($_FILES['images']['name']) && count($_FILES['images']['name']) > 0){
		          
		                $image_arr = $_FILES['images']['name'];
		          
		                foreach($image_arr as $key => $row){
		                    $insert2 = array();
		                    $name_array = explode('.',$_FILES['images']['name'][$key]);
		                    $ext = end($name_array);
		                    $new_name = rand().time().'.'.$ext;
		            
		                    $tmp_name = $_FILES["images"]["tmp_name"][$key];
		                    $path = 'assets/product_images/'.$new_name;
		            
		                    if(move_uploaded_file($tmp_name,$path)){
		                        $insert2['image']=$path;
		                        $insert2['product_id']=$id;
		                        $run1 = $this->common_model->InsertData('product_images', $insert2);
		                    }
		                }
		            } 
					
						$this->session->setFlashdata('msg', '<div class="alert alert-success">Products has been Added successfully.</div>');
						$output['status']=1;
						$output['message']="Products has been Added successfully.";
				}
				if($run)
				{
					
						$this->session->setFlashdata('msg', '<div class="alert alert-success">Products has been Updated successfully.</div>');
						$output['status']=1;
						$output['message']="Products has been Updated successfully.";
				}
			} else {
	        	$output['status']= 0 ; 
	            $output["validation"] = $validation->getErrors();
	        }
	    }
		echo json_encode($output);
    }
    public function edit_product($id)
    {
        
        $data['product'] = $this->common_model->GetSingleData('products',array('id'=>$id));
        return view('admin/edit-product',$data);
    }
    public function remove_pimage()
    {
        //echo "hello";
        $id = $this->request->getVar('id');  
            
        $run = $this->common_model->DeleteData('product_images',array('id'=>$id));
        if($run)
        {  
            $output['message']='Product Image has been Removed successfully' ;
            $output['status']= 1 ;  
            $this->session->setFlashdata('msg', '<div class="alert alert-success">Product Image has been Removed successfully</div>');
        }
        else             
        {
            
            $output['message']='<div class="alert alert-danger">Something went wrong</div>' ;
            $output['status']= 0 ; 
            
        }
         
        echo json_encode($output);
    }
    public function deleteProducts() {        
        
        $id = $_POST['id'];
        $run = $this->common_model->DeleteData('products', array('id'=> $id));
        if ($run) {
            $json['message'] = 'Success! Products has been Deleted successfully';
            $json['status'] = 1;
        } else {
            $json['message'] = 'Error! Something went wrong';
            $json['status'] = 0;
        }
        echo json_encode($json);
    }

   
}