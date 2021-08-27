<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public $namaTabel = "pengaduan_user";

    public function userRegist()
    { 
        $isi = array(
                    "nama_pengadu" => $this->input->post('nama'),
                    "nohp"         => $this->input->post('nohp'),
                    "email"        => $this->input->post('email'),
                    "password"     => $this->input->post('password')
                );

        return $this->db->insert($this->namaTabel, $isi);
    }
    
}
