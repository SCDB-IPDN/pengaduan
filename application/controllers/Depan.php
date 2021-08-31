<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depan extends CI_Controller {

         

        public function __construct()
        {
                parent :: __construct();
                $this->load->model('User_model');
                $this->load->model('Pengaduan_model');
        }


	public function index()
	{
                $data['titel'] = 'Home';
                $this->load->view('layout/head', $data);
                
                $header = $this->User_model->headerLogin();

                $this->load->view("layout/$header");
                
                $this->load->view('home');
                $this->load->view('layout/footer');
                $this->load->view('layout/script');
                $this->load->view('layout/foot');
        }
        
        public function registrasi()
	{
                $ceksesi = $this->User_model->cek_session();
                if ($ceksesi==false) 
                {
                        redirect('home');
                }
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
                
                $header = $this->User_model->headerLogin();

                $this->load->view("layout/$header");
                $this->load->view('lapor');
                $this->load->view('layout/footer');
                $this->load->view('layout/script');
                $this->load->view('layout/foot');
        }

        public function laporan()
	{
                $data['titel'] = 'Laporan';
                $this->load->view('layout/head', $data);
                
                $header = $this->User_model->headerLogin();

                $this->load->view("layout/$header");
                $profil = $this->User_model->userProfile();
                foreach($profil as $p)
                {
                        $idPengadu = $p->id_pengduser;
                }
                $kriteria = ['id_pengduser' => $idPengadu];
                $aduan = $this->Pengaduan_model->data_aduan('pengaduan_laporan', $kriteria)->result();

                if (empty($aduan)) 
                {
                        $this->load->view('laporan-kosong');
                }
                else
                {       
                        $data['isi'] = $aduan;
                        $this->load->view('laporan-terisi', $data);
                }

                
                //$this->load->view($section, $isi);
                $this->load->view('layout/footer');
                $this->load->view('layout/script');
                $this->load->view('layout/foot');
        }
}
