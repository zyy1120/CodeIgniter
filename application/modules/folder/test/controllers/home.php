<?php  

class Folder_Test_Home_module extends CI_Module {

    /**
     * 构造函数
     *
     * @return void
     * @author
     **/
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
    	
    	$this->test = 'test';

        // 这是装载本模块的模型，如果在本模块下找不到，则自动装载全局模型
         $this->load->model('user_model');
        $this->user_model->start();

        // 装载全局模型
        // $this->load->model('Use_model');
        // $this->Use_model->abc();

        // $this->load->library('form_validation');
        // $this->form_validation->run();

         $this->load->view('user_view');
    }
}
