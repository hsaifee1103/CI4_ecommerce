<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class Colors extends BaseController {

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
        $data['data'] = $this->common_model->GetAllData('colors','','id','desc');
        return view('admin/colorslist', $data);
    }

  	public function addColors()
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
				$run = $this->common_model->InsertData('colors', $insert);
				//$id = $run[0]->id;
		
				if($run)
				{
					
						$this->session->setFlashdata('msg', '<div class="alert alert-success">Colors has been Added successfully.</div>');
						$output['status']=1;
						$output['message']="Colors has been Added successfully.";
				}
			} else {
	        	$output['status']= 0 ; 
	            $output["validation"] = $validation->getErrors();
	        }
	    }
		echo json_encode($output);
    }

  	public function editColors()
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
				$update['title'] = $_POST['title'];
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
				$run = $this->common_model->UpdateData('colors',array('id'=>$id), $update);
				//$id = $run[0]->id;
		
				if($run)
				{
					
						$this->session->setFlashdata('msg', '<div class="alert alert-success">Colors has been Updated successfully.</div>');
						$output['status']=1;
						$output['message']="Colors has been Updated successfully.";
				}
			} else {
	        	$output['status']= 0 ; 
	            $output["validation"] = $validation->getErrors();
	        }
	    }
		echo json_encode($output);
    }

    
    public function deleteColors() {        
        
        $id = $_POST['id'];
        $run = $this->common_model->DeleteData('colors', array('id'=> $id));
        if ($run) {
            $json['message'] = 'Success! Colors has been Deleted successfully';
            $json['status'] = 1;
        } else {
            $json['message'] = 'Error! Something went wrong';
            $json['status'] = 0;
        }
        echo json_encode($json);
    }

   
}