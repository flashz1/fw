<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if (!$this->input->post() && !$this->session->userdata('validated')) {
            $this->template->show('admin','login');
            $this->output->_display(); // <-- use this code for enable output with die()
            die();
        }
    }

    public function login($msg="")
    {
        $this->template->show('admin','login',$msg);
    }

    public function signin(){
        if ($this->input->post()){
            $this->load->model('admin/admin_model');
            $result = $this->admin_model->validate();
            if(!$result){
                $msg = '<h3>Invalid username and/or password.</h3><br />';
                $this->login($msg);
            }else{
                echo "Loading...";
                $this->pages();
            }
        }else{
            $msg = '<h3>Введите чо нить</h3><br />';
            $this->login($msg);
        }
    }

    public function logout()
    {
        $loginPath = base_url().'admin/login';
        $this->session->sess_destroy();
        redirectTo("$loginPath");
    }

    public function pages()
    {
        $this->load->model('admin/Admin_model');
        $getparams = $this->input->get();
        $action = $getparams['action'];
        $id = $getparams['id'];

        if(!empty($action) && !empty($id)) {
            $data['page_data'] = $this->Admin_model->show_page($id);
            $data['articles'] = $this->Admin_model->get_articles();
            $this->template->show('admin','edit', $data);
        }else{
            $data['pages'] = $this->Admin_model->get_pages();
            $this->template->show('admin','dashboard', $data);
        }
    }

    public function addpageform(){
        $this->load->model('admin/Admin_model');
        $data['list_of_articles'] = $this->Admin_model->get_articles();
        $this->template->show('admin','add', $data);
    }

    public function addPage(){
        $this->load->model('admin/Admin_model');
        $post = $this->input->post();
        if ($this->Admin_model->add_page($post)) {
            echo 'Добавилась страница';
            redirect('/admin/pages', 'refresh');
        }else {
            echo 'чтото пошло не так...';
        }
    }

    public function editPage(){
        $this->load->model('admin/Admin_model');
        $post = $this->input->post();
        $this->Admin_model->edit_page($post);
    }

}