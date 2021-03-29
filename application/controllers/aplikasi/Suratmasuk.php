<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Suratmasuk extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('masuk_model');
        
    }
    

    public function Input()
    {
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        
        if ($this->form_validation->run()) {
            $this->masuk_model->input();
            $this->session->set_flashdata('masuk', '<div class="alert alert-success">Berhasil Input Data</div>');
            redirect(base_url('aplikasi/suratmasuk/input'));
        }
        
        $this->load->view('aplikasi/suratmasuk/input'); 
    }

    public function Data()
    {
        $data['surat'] = $this->masuk_model->allsurat();
        $this->load->view('aplikasi/suratmasuk/read',$data);
    }

}

/* End of file Suratmasuk.php */
