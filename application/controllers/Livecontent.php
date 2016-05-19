<?php 

class Livecontent extends CI_Controller{

public function __construct() {
	parent::__construct();
	$this->load->model('Livechat_model','m');

}
	public function index()
{ 
   $this->load->helper('form');
   $this->load->view('livecontent');
}

public function get(){
	$data = $this->m->getChat();
    var_dump($data);exit; 
}
public function  insert()
{  
	/**匹配条件**/
 //    $this->load->library('form_validation');

	// $b = $this->form_validation->run();
 //     exit(json_encode($b));
/**执行添加**/
	// $data = $this->input->post();
	// echo json_encode($data);
   $data=$this->m->getinsert();   	
   var_dump(json_encode($data));exit; 
}

public function replace()
{
	/**匹配条件**/
	//  $this->load->library('form_validation');
	// $b = $this->form_validation->run();
	// echo json_encode($b);
	$data = $this->m->getreplace();
    var_dump(json_encode($data));exit; 
}

public function delete()
{
	$data= $this->m->getdelete();
	var_dump(json_encode($data));exit; 
}

public function select(){
	$data = $this->m->getselect();
    var_dump($data);exit; 
}

}