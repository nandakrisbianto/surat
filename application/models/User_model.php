<?php

class User_model extends CI_Model 
{
    
    function register()
    {
        $post = $this->input->post();
        $data = array('nama' => $post['nama'],
                      'email' => $post['email'],
                      'password' => $post['password'],
                      'role_id' => '3'
                    );
        $this->db->insert('user', $data);
        
    }

    public function login()
    {
        $post = $this->input->post();
        $data = $this->db->get_where('user', ["email" => $post['email']])->row();
        $istrue = $data->password ==  $post['password'];
        if ($data && $istrue) {
            $newdata = array(
                'nama'  => $data->nama,
                'id'     => $data->id,
                'role'     => $data->role,
                'login' => TRUE
        );
        $this->session->set_userdata($newdata);
        redirect(base_url('aplikasi/dashboard'));

        } else {
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">BERHASIL DISIMPAN</div>');
            redirect(base_url());
        }
    }
}
