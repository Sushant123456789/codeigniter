<?php

class Main_m extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
	public function savem($title,$url)
	{
		$this->db->set('title',$title);
		$this->db->set('image',$url);
		$this->db->insert('tbl');
	}
}
