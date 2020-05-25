<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Allmodel extends CI_Model
{
	function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }  
	
	public function save($first_name,$last_name,$email,$password,$url,$url1)
	{
		$this->db->set('first_name',$first_name);
		$this->db->set('last_name',$last_name);
		$this->db->set('email',$email);
		$this->db->set('password',$password);		
		$this->db->set('image',$url);
		$this->db->set('video',$url1);
		$this->db->insert('student');
		
	}
	
	 function displaystud()  
        {  
            $query = $this->db->get('student');  
            return $query->result_array();  
        } 
	
	function row_delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('student');
	} 
	
	/*function update_record($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('student', $data);
    }*/
	
	public function getuserbyid($id)
	{
		$this->db->where('id',$id);
		$data=$this->db->get('student');
		return $data->result();
	}
	
	public function edit()
	{
		$id=$this->input->get('id');
		$this->load->model('allmodel');
		$data['data']=$this->allmodel->getuserbyid($id);
		$this->load->view('edit',$data);
	}
	
	public function updateuserbyid($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('student',$data);
		return true;
	}
}

?>