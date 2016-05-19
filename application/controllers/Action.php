<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Action extends CI_Controller {
public function __construct() {
        parent::__construct();    
		$this->load->library('live_action_log');
		$this->load->model('Actionlog_model','a');
    }
public function index()
    {
 
    }

	}