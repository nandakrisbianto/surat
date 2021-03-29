<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Suratkeluar extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('keluar_model');
    }
    

    public function Input()
    {
        $this->form_validation->set_rules('jenis', 'Jenis Surat', 'required');
        
        if ($this->form_validation->run()) {
            $this->keluar_model->inputsurat();
        } 
        $this->load->view('aplikasi/suratkeluar/input');
    }

    public function data()
    {
        $data['surat'] = $this->keluar_model->allsurat();
        $this->load->view('aplikasi/suratkeluar/data',$data);
    }

    public function lihat($id)
    {
        $data['surat'] = $this->keluar_model->suratby($id);
        
        $this->load->view('aplikasi/suratkeluar/view', $data);
        
    }

    public function edit($id)
    {
        $data['surat'] = $this->keluar_model->suratby($id);
        
        $this->form_validation->set_rules('jenis', 'Jenis Surat', 'required');
        
        if ($this->form_validation->run()) {
            $this->keluar_model->edit($id);
            $this->session->set_flashdata('success', '<div class="alert alert-success">Berhasil Edit Data</div>');
            redirect(base_url('aplikasi/suratkeluar/data'));
        }

        $this->load->view('aplikasi/suratkeluar/edit', $data);
        
    }

}




?>