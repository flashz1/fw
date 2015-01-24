<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {

    private $data;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function show($folder, $page, $data = null)
    {
        if (!file_exists('application/views/' . $folder . '/' . $page . '.php')) {
            show_404();
        } else {
            if ($this->CI->uri->segment(1) === 'admin') {
                $this->data['assigned_data'] = $data;
                $this->data['content'] = '';
                $this->data['content'] .= $this->CI->load->view($folder . '/' . $page . '.php', $this->data, true);
                $this->CI->load->view('admin/template', $this->data);
            } else {
                $this->data['assigned_data'] = $data;
                $this->data['menu'] =  $this->init_menu();
                $this->data['content'] = '';
                $this->data['content'] .= $this->CI->load->view($folder . '/' . $page . '.php', $this->data, true);
                $this->CI->load->view('template', $this->data);
            }
        }
    }

    private function init_menu()
    {
        $this->CI->load->model('Welcome_model');
        return $this->CI->Welcome_model->get_menu();
    }

}

//This solution you can find: http://stackoverflow.com/questions/22531049/how-to-load-page-views-like-header-sidebar-footer-in-codeigniter