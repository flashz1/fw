<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Calc extends CI_Controller
{
    public function index()
    {
        $permalink = $this->uri->uri_string();
        $this->load->model('Welcome_model');
        $data['page_title'] = $this->Welcome_model->get_page_title($permalink);
        $this->template->show('', 'calc', $data);
    }
}