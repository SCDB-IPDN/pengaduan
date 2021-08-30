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
        $tgl = date('Y-m-d');
        $isi = array(
            "judul_lap"         => $this->input->post('judul'),
            "isi_lap"           => $this->input->post('isi'),
            "jenis_lap"         => $this->input->post('jenislap'),
            "tgl_lap"           => $tgl
        );

        return $this->db->insert($this->namaTabel, $isi);
    }

    public function ambilId($id)
    {
        $peraidian = ["id_komentar" => $id];
        $hasil = $this->db->get_where($this->namaTabel, $peraidian);
        return $hasil;
    }

    public function hapusKomen($id)
    {
        $peraidian = ["id_komentar" => $id];
        $hasil = $this->db->delete($this->namaTabel);
        return $hasil;
    }

    public function ubahin()
    {
        $isi = array(
            "id_komentar"   => $this->input->post('id_komen'),
            "nama_pengguna" => $this->input->post('nama'),
            "email"         => $this->input->post('email'),
            "komentar"      => $this->input->post('komentar')
        );
        $peraidian = array("id_komentar"   => $this->input->post('id_komen'));
        $hasil = $this->db->update($this->namaTabel, $isi, $peraidian);
        return $hasil;
    }
}
