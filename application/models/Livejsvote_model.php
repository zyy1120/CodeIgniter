<?php 

class Livejsvote_model extends MY_Model{
	
public function __construct()
{
	parent::__construct();
	$this->tbl = 'live_jsvote';
	$this->tbl_key = 'id';	

}

public function getChat() 
{
	return $this->L();
}

public function getselect() 
{
    $query = $this->db->get($this->tbl,2,4);
    return $query->result_array();
}
	
public function getinsert()
{
      $data=$this->input->post();
      return $this->A($data);
}

public function getreplace()
{    
      $data=$this->input->post();
      return $this->M($data,array('id'=>$this->input->post('id')));
}

public function getdelete()
{
    $data=$this->input->post();
     return $this->D($data);
}



}