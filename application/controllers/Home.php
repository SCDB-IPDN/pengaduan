<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
        $this->load->view('layout/head');
        $this->load->view('layout/header');
        $this->load->view('home');
        $this->load->view('layout/footer');
        $this->load->view('layout/script');
        $this->load->view('layout/foot');
        
	}
}
