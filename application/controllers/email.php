<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function send()
    {
        $this->load->library('email');
        $her = $this->input->post('username');
        $her2 = $this->input->post('msgtext');
        $this->email->from('fantastic-web@example.com', 'fw');
        $this->email->to('flash.sk@gmail.com');
        $this->email->subject($her);
        $this->email->message($her2);

        $this->email->send();

        echo $this->email->print_debugger();
    }
}