<?php  

class Folder_Test2_Goods_module extends CI_Module {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
    	
    	$this->test = 'test2';

        $this->load->model('Goods_model');
        $this->Goods_model->index();
        $this->load->view('Goods_views');
    }
}
