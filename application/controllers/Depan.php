<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depan extends CI_Controller {



        public function __construct()
        {
          parent :: __construct();
          $this->load->model('User_model');
        }


	public function index()
	{
                $data['titel'] = 'Home';
                $this->load->view('layout/head', $data);
                $this->load->view('layout/header');
                $this->load->view('home');
                $this->load->view('layout/footer');
                $this->load->view('layout/script');
                $this->load->view('layout/foot');
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
        
        public function pengaduan()
	{
                $data['titel'] = 'Pengaduan';
                $this->load->view('layout/head', $data);
                $this->load->view('layout/header');
                $this->load->view('isi-aduan');
                $this->load->view('layout/footer');
                $this->load->view('layout/script');
                $this->load->view('layout/foot');
        }
        
        public function registProses()
        {
                $data['titel'] = 'Sedang diproses';

                $pesanSukses = "
                 <script>
                   swal('Berhasil!', 'Registrasi anda sukses!', 'success');
                   window.location='/home';
                 </script>
                ";

                $pesanError = "
                 <script>
                   swal('Gagal!', 'Registrasi anda gagal!', 'success');
                   window.location='/registrasi';
                 </script>
                ";

                $post = $this->User_model->userRegist();

                if ($post) 
                {
                        $pesanKeluar = $pesanSukses;
                }
                else
                {
                        $pesanKeluar = $pesanError;
                }


                //$this->load->view('layout/head', $data);
                $this->load->view('layout/script');
                $this->load->view($pesanKeluar);
                
        }
}
