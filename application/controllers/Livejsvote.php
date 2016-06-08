<?php 

class Livejsvote extends CI_Controller{

public function __construct() {
	parent::__construct();
	$this->load->model('Livejsvote_model','j');

}
	public function index()
{ 
   $this->load->helper('form');
   $this->load->view('livejsvote');
}

public function get(){
	$data = $this->j->getChat();
    var_dump($data);exit; 
}
public function gets(){
	$data = $this->j->getChats();
    var_dump($data);exit; 
}

public function  insert()
{  
   $data=$this->j->getinsert();   	
   var_dump(json_encode($data));exit; 
}

public function replace()
{
	$data = $this->j->getreplace();
    var_dump(json_encode($data));exit; 
}

public function delete()
{
	$data= $this->j->getdelete();
	var_dump(json_encode($data));exit; 
}

public function select(){
	$data = $this->j->getselect();
    var_dump($data);exit; 
}

public function search(){
	$data = $this->j->getsearch();
    var_dump($data);exit; 
}

}
