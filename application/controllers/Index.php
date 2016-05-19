<?php
class Index extends CI_Controller {
public function index()
{
    $data['news'] = $this->news_model->get_kind();
    $data['title'] = 'News archive';

    $this->load->view('templates/header', $data);
    $this->load->view('news/index', $data);
    $this->load->view('templates/footer');
}
}