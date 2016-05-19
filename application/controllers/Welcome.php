<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
public function __construc() {
parent::__construct();
$this->load->database();
}

public function index()
{	
$this->load->view('welcome_message'); 
$this->load->library('javascript');
}

public function select(){
$query = $this->db->query('SELECT userid, roomid FROM live_userinfo_kind');
foreach ($query->result_array() as $row)
{
    echo (json_encode($row['userid']));
    echo (json_encode($row['roomid']));
}

// 	$query = $this->db->get('live_userinfo_kind');
// 		foreach ($query->result() as $row)
// {
//     echo $row->userid;
// }
}
 public  function add(){
    $data = array(
               'userid' => '18217786',
               'roomid' => '27',
            );
  //  exit(json_encode($data));
    $this->db->insert('live_userinfo_kind', $data);
 }


public function delect(){
	
	$bool=$this->db->delete('live_userinfo_kind',array('id'=>'36'));
}

public function get_kind($slug = FALSE)
{
    if ($slug === FALSE)
    {
        $query = $this->db->get('live_userinfo_kind');
        return $query->result_array();
    }

    $query = $this->db->get_where('live_userinfo_kind', array('slug' => $slug));
    return $query->row_array();
}

}