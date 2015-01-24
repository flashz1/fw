<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        $this->load->model('Welcome_model');
        $url = $this->uri->uri_string();
        $permalink = !empty($url) ? $url : 'welcome/index/home';
        $data['page_title'] = $this->Welcome_model->get_page_title($permalink);
        $data['page_content'] = $this->Welcome_model->get_content($permalink);
        $this->template->show('', $data['page_title']->body_class, $data);
    }
}