<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar_model extends CI_Model {

        public function inputsurat()
        {
           $post = $this->input->post();
           $this->db->insert('keluar', $post);
           
        }

        public function allsurat()
        {
           return $this->db->get('keluar')->result();
        }

        public function suratby($id)
        {
          return $this->db->get_where('keluar', ["id" => $id])->row();
        }
        
        public function edit($id)
        {
           
         $post = $this->input->post();
         $this->db->where('id', $id);
         $this->db->update('keluar', $post);
         }

}

/* End of file Keluar_model.php */
