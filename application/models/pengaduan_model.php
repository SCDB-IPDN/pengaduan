<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan_Model extends CI_Model
{

    public $namaTabel = "pengaduan_laporan";
    /*
        public function aturan(){
            return $isi = 
            [
                [
                    'field'=>'nama_pengguna',
                    'label'=>'Nama Anda',
                    'trim' =>'trim | required'
                ],
                [
                    'field'=>'email',
                    'label'=>'E-mail Anda',
                    'trim' =>'trim | required'
                ],
                [
                    'field'=>'komentar',
                    'label'=>'Komentar Anda',
                    'trim' =>'trim | required'
                ],
            ];

        }
        */

    public function tampilSemua()
    {
        $this->db->select('*');
        $this->db->from($this->namaTabel);
        $this->db->order_by('id_penglap', 'DESC');
        $ambil = $this->db->get();
        $tampilkan = $ambil->result();
        return $tampilkan;
    }

    public function tambahkan()
    {
        $this->load->model('User_model');
        $profil = $this->User_model->userProfile();
        foreach($profil as $p)
        {
            $idPengadu = $p->id_pengduser;
        }

        if ($idPengadu==NULL) 
        {
            $pengadu = NULL;
        }
        else
        {
            $pengadu = $idPengadu;
        }
        $tgl = date('Y-m-d');
        $isi = array(
            "judul_lap"         => $this->input->post('judul'),
            "isi_lap"           => $this->input->post('isi'),
            "jenis_lap"         => $this->input->post('jenislap'),
            "tgl_lap"           => $tgl,
            "id_pengduser"      => $pengadu
        );

        return $this->db->insert($this->namaTabel, $isi);
    }

    public function ambilId($id)
    {
        $peraidian = ["id_komentar" => $id];
        $hasil = $this->db->get_where($this->namaTabel, $peraidian);
        return $hasil;
    }

    public function data_aduan($table,$where)
    {		
		return $this->db->get_where($table,$where);
    }	
}
