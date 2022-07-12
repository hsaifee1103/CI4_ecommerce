<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class Styles extends BaseController {

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
        $data['data'] = $this->common_model->GetAllData('styles','','id','desc');
        return view('admin/styleslist', $data);
    }

  	public function addstyles()
    {
        helper(['form']);
	    if ($this->request->getMethod() == "post") {
	        $validation =  \Config\Services::validation();

	        $rules = [
	            "title" => [
	                "label" => "Title", 
	                "rules" => "required|trim|is_unique[styles.title]"
	            ],
	            
	        ];

	        if ($this->validate($rules)) {
				$insert['title'] = $_POST['title'];
				$insert['user_id'] = 0;
				$insert['created_at'] = date('Y-m-d');
				if(!empty($_FILES['image']['name']))
	               {
	                    $newName = explode('.',$_FILES['image']['name']);
	                    $ext = end($newName);
	                    $fileName = 'assets/upload/'.rand().time().'.'.$ext;
	                    move_uploaded_file($_FILES['image']['tmp_name'], $fileName);
	                    $insert['image']= $fileName ; 
	               }
					if(!empty($_FILES['banner']['name']))
	               {
	                    $newName = explode('.',$_FILES['banner']['name']);
	                    $ext = end($newName);
	                    $fileName = 'assets/upload/'.rand().time().'.'.$ext;
	                    move_uploaded_file($_FILES['banner']['tmp_name'], $fileName);
	                    $insert['banner']= $fileName ; 
	               }
				$run = $this->common_model->InsertData('styles', $insert);
				
		       if($run)
				{
					
						$this->session->setFlashdata('msg', '<div class="alert alert-success">Styles has been Added successfully.</div>');
						$output['status']=1;
						$output['message']="Styles has been Added successfully.";
				}
			} else {
	        	$output['status']= 0 ; 
	            $output["validation"] = $validation->getErrors();
	        }
	    }
		echo json_encode($output);
    }

  	public function editstyles()
    {
        helper(['form']);
	    if ($this->request->getMethod() == "post") {
	        $validation =  \Config\Services::validation();

	        $rules = [
	            "title" => [
	                "label" => "Title", 
	                "rules" => "required|trim"
	            ],
	            
	        ];

	        if ($this->validate($rules)) {

	        	$id = $_POST['id'];
                 $check = $this->common_model->GetSingleData('styles', array('title'=> $_POST['title'], 'id!='=>$id));

		       if($check)
		        {
		             $output['message']='<div class="label alert-danger">styles already exist</div>' ;
		            $output['status']= 0 ; 
		        }else
		        {
		        	$id = $_POST['id'];
				    $update['title'] = $_POST['title'];
				    $update['updated_at'] = date('Y-m-d');
					if(!empty($_FILES['image']['name']))
	               {
	                    $newName = explode('.',$_FILES['image']['name']);
	                    $ext = end($newName);
	                    $fileName = 'assets/upload/'.rand().time().'.'.$ext;
	                    move_uploaded_file($_FILES['image']['tmp_name'], $fileName);
	                    $update['image']= $fileName ; 
	               }
					if(!empty($_FILES['banner']['name']))
	               {
	                    $newName = explode('.',$_FILES['banner']['name']);
	                    $ext = end($newName);
	                    $fileName = 'assets/upload/'.rand().time().'.'.$ext;
	                    move_uploaded_file($_FILES['banner']['tmp_name'], $fileName);
	                    $update['banner']= $fileName ; 
	               }	
				    $run = $this->common_model->UpdateData('styles',array('id'=>$id), $update);
				
		
				if($run)
				{
					
						$this->session->setFlashdata('msg', '<div class="alert alert-success">Styles has been Updated successfully.</div>');
						$output['status']=1;
						$output['message']="Styles has been Updated successfully.";
				}

		        }
				
				
			} else {
	        	$output['status']= 0 ; 
	            $output["validation"] = $validation->getErrors();
	        }
	    }
		echo json_encode($output);
    }

    
    public function deletestyles() {        
        
        $id = $_POST['id'];
        $run = $this->common_model->DeleteData('styles', array('id'=> $id));
        if ($run) {
            $json['message'] = 'Success! Styles has been Deleted successfully';
            $json['status'] = 1;
        } else {
            $json['message'] = 'Error! Something went wrong';
            $json['status'] = 0;
        }
        echo json_encode($json);
    }

   
}