<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan_Model extends CI_Model
{

    public $namaTabel = "pengaduan_laporan";
    public $user = "pengaduan_user";
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
        $pengadu = $idPengadu;
        $tgl = date('Y-m-d');
        $laporanMasuk = array(
            "judul_lap"         => $this->input->post('judul'),
            "isi_lap"           => $this->input->post('isi'),
            "jenis_lap"         => $this->input->post('jenislap'),
            "tgl_lap"           => $tgl,
            "id_pengduser"      => $pengadu
        );
        return $this->db->insert($this->namaTabel, $laporanMasuk);
    }
        

    public function postNoLogin()
    {
        $nama = $this->input->post('nama');
        $nohp = $this->input->post('nohp');
        $isi = array(
            "nama_pengadu" => $nama,
            "nohp"         => $nohp,
            "email"        => NULL,
            "password"     => NULL
        );

        $this->db->insert($this->user, $isi);  

        $kriteria = array(
            "nama_pengadu" => $nama,
            "nohp"         => $nohp
        );

        $datanya = $this->db->get_where('pengaduan_user',$kriteria);
        $hasil = $datanya->result();

        foreach ($hasil as $kunci) 
        {
            $kunci = get_object_vars($kunci);
            $idPengadu = $kunci['id_pengduser'];
        }

        $tgl = date('Y-m-d');

        $laporanMasuk = array(
            "judul_lap"         => $this->input->post('judul'),
            "isi_lap"           => $this->input->post('isi'),
            "jenis_lap"         => $this->input->post('jenislap'),
            "tgl_lap"           => $tgl,
            "id_pengduser"      => $idPengadu
        );

        return $this->db->insert($this->namaTabel, $laporanMasuk);
    }

    public function ambilIdPenglap($id)
    {
        $peraidian = ["id_penglap" => $id];
        $hasil = $this->db->get_where($this->namaTabel, $peraidian);
        return $hasil;
    }

    public function data_aduan($table,$where)
    {		
		return $this->db->get_where($table,$where);
    }	

    
}
