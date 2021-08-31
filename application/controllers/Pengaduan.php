<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {



        public function __construct()
        {
          parent :: __construct();
          $this->load->model('Pengaduan_model');
        }


	
        
        public function registrasi()
	    {
                $data['titel'] = 'Registrasi';
                $this->load->view('layout/head', $data);
                $this->load->view('layout/header_toform');
                $this->load->view('registrasi');
                $this->load->view('layout/footer');
                $this->load->view('layout/script');
                $this->load->view('layout/foot');
        }
        
        public function postingan()
        {
            $this->Pengaduan_model->tambahkan();

           // $data['komentar'] = $this->Komentar_Model->tampilSemua();
            //$this->load->view('komentar/komentar-simpan');
           // $this->load->view('komentar/komentar-data', $data);
           redirect(base_url('home'));
        }
        
        public function registProses()
        {
                $data['titel'] = 'Sedang diproses';

                $this->load->view("layout/head", $data);
                $this->load->view('layout/script');
                

                if ($this->User_model->userRegist()) 
                {
                        $data['kondisi']='sukses';
                }
                else 
                {
                        $data['kondisi']='gagal';
                }

                
               // $this->load->view("$pesanKeluar");
                //redirect(base_url("$hal"));
                
                $this->load->view('registPopup', $data);
        }

        public function lapor()
	{
                $data['titel'] = 'Lapor';
                $this->load->view('layout/head', $data);
                $this->load->view('layout/header_toform');
                $this->load->view('lapor');
                $this->load->view('layout/footer');
                $this->load->view('layout/script');
                $this->load->view('layout/foot');
        }

       
}
