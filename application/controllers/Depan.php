<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depan extends CI_Controller {

        public function __construct()
        {
          parent :: __construct();
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
                $this->load->view('layout/head');
                $this->load->view('layout/header');
                $this->load->view('registrasi');
                $this->load->view('layout/footer');
                $this->load->view('layout/script');
                $this->load->view('layout/foot');
	}
}
