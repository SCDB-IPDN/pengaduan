<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public $namaTabel = "pengaduan_user";

    public function userRegist()
    { 
        $pass = md5($this->input->post('password'));

        $isi = array(
                    "nama_pengadu" => $this->input->post('nama'),
                    "nohp"         => $this->input->post('nohp'),
                    "email"        => $this->input->post('email'),
                    "password"     => $pass
                );

        return $this->db->insert($this->namaTabel, $isi);
    }

    public function cek_login($table,$where)
    {		
		return $this->db->get_where($table,$where);
    }	
    
    public function cek_session()
    {
        
        if (empty($this->session->userdata('status'))) 
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function userProfile()
    {
        $emailSession = $this->session->userdata('email');
        $kriteria = array(
            'email'=> $emailSession
        );
        return $this->db->get_where('pengaduan_user',$kriteria)->result();
    }

    public function headerLogin()
    {
        $cekan = $this->cek_session();
        if ($cekan==true) 
        {
            $header = 'header';
        }
        else
        {
            $header = 'header_userlogin';
        }

        return $header;
    }

    public function keluar_sesi()
    {
        return $this->session->sess_destroy();
    }
    
}
