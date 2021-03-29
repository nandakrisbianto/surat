<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk_model extends CI_Model {

    public function input()
    {
        $post = $this->input->post();
        $file =$this->_uploadImage($post['jenis']);
        $data = array('tanggal' => $post['tanggal'] ,
                      'jenis' => $post['jenis'] ,
                      'file' => $file
                       );
        $this->db->insert('masuk', $data);
           
    }

        private function _uploadImage($nama)
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'pdf|jpg|docs|png';
        $config['file_name']            =  $nama;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

        public function allsurat()
        {
           return $this->db->get('masuk')->result();
        }
}

/* End of file Masuk_model.php */
