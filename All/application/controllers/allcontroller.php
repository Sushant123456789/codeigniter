<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Allcontroller extends CI_Controller {  
      
	 public function __construct()  
    {  
        parent::__construct();  
  
        //calling model  
        $this->load->model("allmodel", "a"); 
			$this->load->model('allmodel');
    }    
	  
    public function index()  
    {  
		$this->load->view("home");
		
       // $this->load->view("insert");
	   
    }  
	public function studdisplay()  
    {  
		$this->load->view("displaydata");
		
       // $this->load->view("insert");
				
		
    }  
	
	public function insertlink()
	{
		$this->load->view("insert");
	}
	public function displaylink()
	{
		$this->load->view("displaydata");
	}
	
	function display()
	{
		$this->load->model("allmodel");
		$data['students']=$this->allmodel->displaystud();
		$this->load->view('display',$data);
	}
	public function insert()
	{
		$url=$this->do_upload_image();
		$url1=$this->do_upload_video();
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		$this->allmodel->save($first_name,$last_name,$email,$password,$url,$url1);
		redirect(base_url('allcontroller/studdisplay'));
		
	}

	private function do_upload_image()
	{
		$type= explode('.',$_FILES["pic"]["name"]);
		$type=$type[count($type)-1];
		//$url="./images/".$_FILES["pic"]["name"].".".$type;
		$url=$_FILES["pic"]["name"];

		if(in_array($type, array("jpg","jpeg","png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))		
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],"images/".$url))
					return $url;
				return "";
				
	}
	
	private function do_upload_video()
	{
		$type= explode('.',$_FILES["video"]["name"]);
		$type=$type[count($type)-1];
		//$url1="./images/".$_FILES["video"]["name"].".".$type;
		$url1=$_FILES["video"]["name"];

		if(in_array($type, array("mp4","3gp","mov","mpeg")))
			if(is_uploaded_file($_FILES["video"]["tmp_name"]))		
				if(move_uploaded_file($_FILES["video"]["tmp_name"],"videos/".$url1))
					return $url1;
				return "";
				
	}
	
	function delete()
	{
		$id = $this->input->get('id');
		$this->load->model('allmodel');
		$this->allmodel->row_delete($id);
		redirect(base_url('allcontroller/studdisplay'));
	}
	
	 function edit()
    {
			
		$id = $this->input->get('id');
		$this->load->model('allmodel');
         $data = array (
             'first_name' => $this->input->post('first_name'),  
                        'last_name'  => $this->input->post('last_name'),  
                        'email'   => $this->input->post('email'),  
                        'password' => $this->input->post('password')  
            );
         $this->allmodel->edit($id);    
   }
   
   public function updateuser()
   {
	   $id = $this->input->post('sid');
	   $first_name = $this->input->post('first_name');
	   $last_name = $this->input->post('last_name');
	   $email = $this->input->post('email');
	   $password = $this->input->post('password');
	   
	   $data = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'password'=>$password);
	   
	   $this->load->model('allmodel');
	   if($this->allmodel->updateuserbyid($data,$id))
	   {
		  /*$data['students']=$this->allmodel->displaystud();
		$this->load->view('display',$data); */
		redirect(base_url('allcontroller/studdisplay'));
	   }
   }
		
}  
?>  