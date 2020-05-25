<?php

class Main extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_m');
	}

	public function index()
	{
		$this->load->view('main');
		
	}

	public function save()
	{
		$url=$this->do_upload();
		$title = $_POST["title"];
		$this->main_m->savem($title,$url);
	}

	private function do_upload()
	{
		$type= explode('.',$_FILES["pic"]["name"]);
		$type=$type[count($type)-1];
		//$url="./images/".$_FILES["pic"]["name"].".".$type;
		$url="./images/".$_FILES["pic"]["name"];

		if(in_array($type, array("jpg","jpeg","png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"], $url))
					return $url;
				return "";
	}
	
}