<?php 

class Livechat_model extends MY_Model{
	
public function __construct()
{
	parent::__construct();
	$this->tbl = 'live_chatcontent';
	$this->tbl_key = 'chatid';	

}

public function getChat() 
{
	return $this->L();
}

public function getselect() 
{
    $query = $this->db->get($this->tbl,2,4);
    return $query->result_array();
  
   // $query = $this->db->select_min('chatid')->get($this->tbl);
   // return $query->result_array();

    // $query = $this->db->select_avg('masterid')->get($this->tbl);
    // return $query->result_array();

    // $this->db->select('masterid, chatcontent, chatname')->limit(2,5)->from($this->tbl);
    // $query = $this->db->get();
    // return $query->result_array();
    
    // $this->db->select('*');
    // $this->db->from($this->tbl);
    // $this->db->join($this->tb2, $this->tb1.chatid = $this->tb2.chatid);
    // $query = $this->db->get();


}
	
public function getinsert()
{
// 	$data = array(
//     'masterid' => $this->input->post('masterid'),
//     'chatcontent' => $this->input->post('chatcontent'),
//     'chatname' => $this->input->post('chatname'),  
//     'chatuserid' => $this->input->post('chatuserid'),
// );

//  return $this->db->insert($this->tbl, $data);

      $data=$this->input->post();
      return $this->A($data);

}

public function getreplace()
{    
// 	$data = array(
//     'chatid' => $this->input->post('chatid'),
//     'masterid' => $this->input->post('masterid'),
//     'chatcontent' => $this->input->post('chatcontent'),
//     'chatname' => $this->input->post('chatname'),
//     'chatuserid' => $this->input->post('chatuserid'),
// );
//  return $this->db->replace($this->tbl, $data);

      $data=$this->input->post();
      return $this->M($data,array('chatid'=>$this->input->post('chatid')));
}

public function getdelete()
{
   // $this->db->where('chatid',$this->input->post('chatid'));
   // return $this->db->delete($this->tbl);

    $data=$this->input->post();
      return $this->D($data);
}



}