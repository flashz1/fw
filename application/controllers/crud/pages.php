<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');class Pages extends CI_Controller {    function __construct()    {        parent::__construct();        $this->load->library(array('ion_auth','form_validation'));        if (!$this->ion_auth->logged_in()){            redirect('auth', 'refresh');        }        $this->load->model('admin/Admin_model');    }    public function dashboard() {        $this->template->show('admin','dashboard');    }    public function all(){        $data['pages'] = $this->Admin_model->get_pages();        $this->template->show('admin','pages',$data);    }    public function edit($id){        $data['page_data'] = $this->Admin_model->show_page($id);        $data['articles'] = $this->Admin_model->get_articles();        $this->template->show('admin','edit', $data);    }    public function add(){        $data['list_of_articles'] = $this->Admin_model->get_articles();        $this->template->show('admin','add', $data);    }    public function addPage(){        $post = $this->input->post();        if ($this->Admin_model->add_page($post)) {            $this->session->set_flashdata('msg', 'Страница добавлена');            redirect('/admin/pages', 'refresh');        }else {            echo 'чтото пошло не так...';        }    }    public function savePage(){        $post = $this->input->post();        if ($this->Admin_model->edit_page($post)){            $this->session->set_flashdata('msg', 'Страница успешно изменена');            redirect('/admin/pages', 'refresh');        }else {            echo 'чтото пошло не так...';        }    }    public function delete($id){        if($this->Admin_model->delete_page($id)){            $this->session->set_flashdata('msg', 'Страница успешно удалена');            redirect('admin/pages','refresh');        }else{            echo 'чтото пошло не так...';        }    }}