<?php

    class User extends CI_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('user_model');
            
        }
        
        public function register()
        {
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('passwordconfirm', 'Password Confirmation', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');

            if ($this->form_validation->run()) {
                $this->user_model->register();
                redirect(base_url('user/login'));
            }
            
            $this->load->view('user/register');
        }

        public function login()
        {
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            
            if ($this->form_validation->run()) {
                $this->user_model->login();
            }

            $this->load->view('user/login'); 
        }
        
            public function logout()
        {
            // hancurkan semua sesi
            $this->session->sess_destroy();
            redirect(site_url('user/login'));
        }
    }
    

?>